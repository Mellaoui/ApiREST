<?php

namespace App\Http\Controllers;

use App\Models\Query;
use Illuminate\Http\Request;

class QueryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $query = new Query;

        $query->company = $request->company;
        $query->fullname = $request->fullname;
        $query->email = $request->email;
        $query->phone = $request->phone;
        $query->createapp = $request->createapp;
        $query->seo = $request->seo;
        $query->mvp = $request->mvp;

        $query->save();

        return redirect(route('main-page'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Query $Query
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Query $Query
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fr  $fr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Query $Query)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Query $Query
     * @return \Illuminate\Http\Response
     */
    public function destroy(Query $Query)
    {
        //
    }
}
