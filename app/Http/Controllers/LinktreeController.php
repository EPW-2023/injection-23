<?php

namespace App\Http\Controllers;

use App\Models\Linktree;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LinktreeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('linktree.index', [
            'linktrees' => Linktree::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('linktree.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => ['required'],
            'link' => ['required'],
        ]);

        Linktree::create($validatedData);
        return redirect('/linktree');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Linktree  $linktree
     * @return \Illuminate\Http\Response
     */
    public function show(Linktree $linktree)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linktree  $linktree
     * @return \Illuminate\Http\Response
     */
    public function edit(Linktree $linktree)
    {
        return view('linktree.update', [
            'linktree' => $linktree,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linktree  $linktree
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Linktree $linktree)
    {
        $rules = [
            'nama' => ['required'],
            'link' => ['required'],
        ];
        $validatedData = $request->validate($rules);
        Linktree::where('id', $linktree->id)->update($validatedData);
        return redirect('/linktree');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linktree  $linktree
     * @return \Illuminate\Http\Response
     */
    public function destroy(Linktree $linktree)
    {
        Linktree::destroy($linktree->id);
        return redirect('/linktree');
    }
}
