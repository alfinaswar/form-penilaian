<?php

namespace App\Http\Controllers;

use App\Models\Kuisoner;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class KuisonerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($data = Kuisoner::orderBy('id', 'desc')->get());
        if ($request->ajax()) {
            $data = Kuisoner::orderBy('id', 'desc');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = ' <a href="' . route('kuisoner.edit', $row->id) . '" class="btn btn-warning btn-sm">Edit</a>';
                    $btn .= ' <button type="button" class="btn btn-danger btn-sm btn-delete" data-id="' . $row->id . '">Delete</button>';
                    $btn .= ' <a href="' . asset('storage/file_kuisoner/' . $row->file_kuisoner) . '" class="btn btn-primary btn-sm">Download</a>';
                    return $btn;
                })
                ->addColumn('file_kuisoner', function ($row) {
                    if ($row->file_kuisoner) {
                        return '<a href="' . asset('storage/' . $row->file_kuisoner) . '" target="_blank">View File</a>';
                    }
                    return 'No File';
                })
                ->addColumn('status', function ($row) {
                    if ($row->status == 1) {
                        return '<span class="badge bg-success">Active</span>';
                    }
                    return '<span class="badge bg-danger">Inactive</span>';
                })

                ->rawColumns(['action', 'file_kuisoner', 'status'])
                ->make(true);
        }

        return view('kuisoner.index'); // Return your view for non-AJAX requests
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kuisoner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        if ($request->hasFile('file_kuisoner')) {
            $file = $request->file('file_kuisoner');
            $file->storeAs('public/file_kuisoner', $file->getClientOriginalName());
            $data['file_kuisoner'] = $file->getClientOriginalName();
        }
        Kuisoner::create($data);
        return redirect()->route('kuisoner.index')->with('success', 'Kuisoner berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Kuisoner $kuisoner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kuisoner = Kuisoner::find($id);
        return view('kuisoner.edit', compact('kuisoner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        if ($request->hasFile('file_kuisoner')) {
            $file = $request->file('file_kuisoner');
            $file->storeAs('public/file_kuisoner', $file->getClientOriginalName());
            $data['file_kuisoner'] = $file->getClientOriginalName();
        }
        $kuisoner = Kuisoner::find($id);
        $kuisoner->update($data);
        return redirect()->route('kuisoner.index')->with('success', 'Kuisoner berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $kuisoner = Kuisoner::find($id);
        if ($kuisoner) {
            $kuisoner->delete();
            return response()->json(['message' => 'Kuisoner berhasil dihapus'], 200);
        } else {
            return response()->json(['message' => 'Kuisoner tidak ditemukan'], 404);
        }
    }
}
