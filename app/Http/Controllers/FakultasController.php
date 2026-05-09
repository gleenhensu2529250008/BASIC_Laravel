<?php

namespace App\Http\Controllers;

use App\Models\Fakultas;
use Illuminate\Http\Request;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fakultas = Fakultas::orderBy('created_at', 'desc')->get();
        return view('fakultas.llist-fakultas', compact('fakultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fakultas.add-fakultas');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_fakultas' => ['required', 'min:3'],
            'name_dekan' => ['required', 'min:3']
        ]);

        Fakultas::create([
            'name' => $request->name_fakultas,
            'dekan' => $request->name_dekan
        ]);

        return redirect('/fakultas')->with('save', "data berhasil di simpan");
    }

    /**
     * Display the specified resource.
     */
    public function show(Fakultas $fakulta)
    {
        return view('fakultas.detail-fakultas', compact('fakulta'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fakultas $fakulta)
    {
        return view('fakultas.edit-fakultas', [
            'fakultas' => $fakulta
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Fakultas $fakulta)
    {
                $request->validate([
            'name_fakultas' => ['required', 'min:3'],
            'name_dekan' => ['required', 'min:3']
        ]);
        $fakulta->update([
            'name' => $request->name_fakultas,
            'dekan' => $request->name_dekan
        ]);

        return redirect('/fakultas')->with('edit', "data berhasil di edit");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Fakultas $fakulta)
    {
        $fakulta->delete();

        return redirect()->back()->with('success', "data berhasil di hapus");

        return redirect()->back();
    }
}
