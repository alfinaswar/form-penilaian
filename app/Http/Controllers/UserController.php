<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request): View
    {
        $data = User::orderBy('id', 'DESC')->paginate(5);
        return view('users.index', compact('data'))
            ->with('i', ($request->input('page', 1) - 1) * 5);
    }
    public function profil()
    {
        $sekolah = User::where('id', auth()->user()->id)->first();
        return view('profil.index', compact('sekolah'));
    }
    public function editProfil($id)
    {
        $sekolah = User::where('id', $id)->first();
        return view('profil.edit', compact('sekolah'));
    }
    public function updateProfil(Request $request, $id)
    {
        $data = $request->all();
        $sekolah = User::where('id', $id)->first();
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $file->storeAs('public/logo', $file->getClientOriginalName());
            $data['logo'] = $file->getClientOriginalName();
        }
        $sekolah->update($data);
        return redirect()->route('profil.index')->with('success', 'Profil berhasil diubah');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(): View
    {
        $roles = Role::pluck('name', 'name')->all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request): RedirectResponse
    {

        $input = $request->all();
        // dd($input);
        $input['password'] = Hash::make($input['password']);

        $user = User::create($input);
        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User created successfully');
    }
    public function Register(Request $request)
    {

        $user = User::create([
            'name' => $request->input('nama_sekolah'),
            'npsn' => $request->input('npsn'),
            'reg_number' => $this->generateRegNumber(),
            'nama_sekolah' => $request->input('nama_sekolah'),
            'jenjang' => $request->input('jenjang'),
            'status_sekolah' => $request->input('status_sekolah'),
            'alamat_sekolah' => $request->input('alamat_sekolah'),
            'cp' => $request->input('cp'),
            'telepon_sekolah' => $request->input('telepon_sekolah'),
            'email_sekolah' => $request->input('email_sekolah'),
            'email' => $request->input('email_sekolah'),
            'password' => Hash::make($request->input('password')),
        ]);

        $user->assignRole('Admin');

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login menggunakan email yang didaftarkan.');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id): View
    {
        $user = User::find($id);
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id): View
    {
        $user = User::find($id);
        $roles = Role::pluck('name', 'name')->all();
        $userRole = $user->roles->pluck('name', 'name')->all();

        return view('users.edit', compact('user', 'roles', 'userRole'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'same:confirm-password',
            'roles' => 'required'
        ]);

        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id', $id)->delete();

        $user->assignRole($request->input('roles'));

        return redirect()->route('users.index')
            ->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id): RedirectResponse
    {
        User::find($id)->delete();
        return redirect()->route('users.index')
            ->with('success', 'User deleted successfully');
    }
    protected function generateRegNumber()
    {
        $now = now();
        $tahun = $now->format('Y');
        $bulan = $now->format('m');

        // Ambil nomor urut terakhir untuk bulan dan tahun ini
        $lastUser = User::whereYear('created_at', $tahun)
            ->whereMonth('created_at', $bulan)
            ->whereNotNull('reg_number')
            ->orderBy('reg_number', 'desc')
            ->first();

        if ($lastUser && preg_match('/^R' . $tahun . $bulan . '(\d{4})$/', $lastUser->reg_number, $matches)) {
            $lastNumber = (int) $matches[1];
            $nextNumber = $lastNumber + 1;
        } else {
            $nextNumber = 1;
        }

        $regNumber = 'R' . $tahun . $bulan . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);

        return $regNumber;
    }
}
