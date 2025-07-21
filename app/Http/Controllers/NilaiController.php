<?php

namespace App\Http\Controllers;

use App\Models\Nilai;
use App\Models\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class NilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'IdUser' => 'required',
            'StatusKuisoner' => 'required|in:VALID,TIDAK VALID',
            'StatusBukti' => 'required|in:VALID,TIDAK VALID',
            'NilaiKuisoner' => 'nullable|string|max:100',
            'NilaiBukti' => 'nullable|string|max:100',
        ]);

        // Gunakan hanya data yang valid, tanpa _token
        Nilai::updateOrCreate(
            ['IdUser' => $validated['IdUser']],
            [
                'StatusKuisoner' => $validated['StatusKuisoner'],
                'StatusBukti' => $validated['StatusBukti'],
                'NilaiKuisoner' => $validated['NilaiKuisoner'],
                'NilaiBukti' => $validated['NilaiBukti'],
            ]
        );

        return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }


    /**
     * Display the specified resource.
     */
    // Iya, ini memang menggunakan loadView untuk membuat PDF dari view.
    public function CetakPdf($id)
    {
        // Ambil data user beserta relasi Nilai dan NilaiKuisoner
        $data = User::with('Nilai', 'NilaiKuisoner')->findOrFail($id);
        // return view('nilai.cetak_pdf', compact('data'));
        // Load view 'nilai.cetak_pdf' dan generate PDF dalam mode landscape
        $pdf = Pdf::loadView('nilai.cetak_pdf', compact('data'))->setPaper('a4', 'portrait');

        // Download file PDF dengan nama sesuai reg_number user
        return $pdf->stream('nilai_' . $data->reg_number . '.pdf');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Nilai $nilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Nilai $nilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Nilai $nilai)
    {
        //
    }
}
