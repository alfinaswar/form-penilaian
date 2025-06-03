<?php

namespace App\Http\Controllers;

use App\Models\BalasanKuisoner;
use App\Models\Kuisoner;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class BalasanKuisonerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        // dd($data);
        if ($request->ajax()) {
            $data = Kuisoner::with('BalasanKuisoner')->orderBy('id', 'desc')->get();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = ' <a href="' . asset('storage/file_kuisoner/' . $row->file_kuisoner) . '" class="btn btn-primary btn-sm">Download</a>';
                    $isiKuisoner = ' <a href="' . route('isi.create', $row->id) . '" class="btn btn-success btn-sm">Isi Kuisoner</a>';
                    return $btn . $isiKuisoner;
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
                ->addColumn('balasan', function ($row) {
                    if ($row->BalasanKuisoner()->exists()) {
                        return '<a href="' . route('isi.show', $row->BalasanKuisoner->id) . '" class="btn btn-info btn-sm">Lihat Balasan</a>';
                    }
                    return '<span class="badge bg-warning">Belum Diisi</span>';
                })

                ->rawColumns(['action', 'file_kuisoner', 'status', 'balasan'])
                ->make(true);
        }

        return view('reply-kuisoner.index'); // Return your view for non-AJAX requests
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $kuisoner = Kuisoner::find($id);
        return view('reply-kuisoner.create', compact('kuisoner'));
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
        BalasanKuisoner::create($data);
        return redirect()->route('isi.index')->with('success', 'Kuisoner berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = BalasanKuisoner::find($id);
        return view('reply-kuisoner.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BalasanKuisoner $balasanKuisoner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BalasanKuisoner $balasanKuisoner)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BalasanKuisoner $balasanKuisoner)
    {
        //
    }
}
