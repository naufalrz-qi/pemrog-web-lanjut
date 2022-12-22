<?php

namespace App\Http\Controllers;

use App\Models\Midsemester;
use Illuminate\Http\Request;

class UtsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mid = Midsemester::latest()->get();
        $no = 0;
        return view('mid.index', compact('mid','no'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mid.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required|string|max:20',
            'isi' => 'required|string',
            'penulis' => 'required|string|max:20',
            'keterangan' => 'required|string',
            'tahun_terbit' => 'required|integer',
        ]);

        $mid = Midsemester::create([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'penulis' => $request->penulis,
            'keterangan' => $request->keterangan,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        if ($mid) {
            return redirect()
                ->route('mid.index')
                ->with([
                    'success' => 'New data has been created successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mid = Midsemester::findOrFail($id);
        return view('mid.edit', compact('mid'));//
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'judul' => 'required|string|max:20',
            'isi' => 'required|string',
            'penulis' => 'required|string|max:20',
            'keterangan' => 'required|string',
            'tahun_terbit' => 'required|integer',
        ]);

        $mid = Midsemester::findOrFail();
        $mid->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'penulis' => $request->penulis,
            'keterangan' => $request->keterangan,
            'tahun_terbit' => $request->tahun_terbit
        ]);

        if ($mid) {
            return redirect()
                ->route('mid.index')
                ->with([
                    'success' => 'New data has been updated successfully'
                ]);
        } else {
            return redirect()
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem occurred, please try again'
                ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mid = Midsemester::findOrFail($id);
        $mid->delete();

        if ($mid) {
            return redirect()
                ->route('mid.index')
                ->with([
                    'success' => 'Data has been deleted successfully'
                ]);
        } else {
            return redirect()
                ->route('mid.index')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
