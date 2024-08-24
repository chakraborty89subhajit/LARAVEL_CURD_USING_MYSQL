<?php

namespace App\Http\Controllers;

use App\Models\CRUDModel;
use Illuminate\Http\Request;

class CRUDModelController extends Controller
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
        return view('curd_create');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $res=new CRUDModel;
        $res->name=$request->input('name');
        $res->save();
        $request->session()->flash('msg','data submmited successfully');
        return redirect('curd_show');

    }

    /**
     * Display the specified resource.
     */
    public function show(CRUDModel $cRUDModel)
    {
        //
        return view('curd_show')->with("curdArr",CRUDModel::all());
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CRUDModel $cRUDModel,$id)
    {
        //
        return view('curd_edit')->with('curdArr',CRUDModel::find($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CRUDModel $cRUDModel)
    {
        //
        $res=CRUDModel::find($request->id);
        $res->name=$request->input('name');
        $res->save();
        $request->session()->flash('msg','data updated successfully');
        return redirect('curd_show');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CRUDModel $cRUDModel,$id)
    {
        //
        CRUDModel::destroy(array('id',$id));
        return redirect('curd_show');
    }
}
