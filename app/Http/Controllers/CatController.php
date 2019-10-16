<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cat;
class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $elements = Cat::all();
        return view('pages.catIndex', compact('elements'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cat = Cat::findOrFail($id);
        return view('pages.catShow', compact('cat'));

    }
}
