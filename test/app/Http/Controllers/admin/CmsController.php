<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cms;
use App\Http\Requests\CmsRequest;
use App\Http\Requests\CmsUpdateRequest;
class CmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $content=Cms::all();

        

        return view('admin.cms.index',compact('content'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.cms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CmsRequest $request)
    {
        $content=new  Cms;

        $content->create($request->all()); 
        return redirect('admin/cms')->with('flash_message', 'Content Management System added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $content = Cms::findOrFail($id);

        return view('admin.cms.show', compact('content'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $content = Cms::findOrFail($id);

        return view('admin.cms.edit', compact('content'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CmsUpdateRequest $request, $id)
    {
        //
        $requestData = $request->all();
        
        $content =  Cms::findOrFail($id);
        $content->update($requestData);

        return redirect('admin/cms')->with('flash_message', 'Content Management System updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cms::destroy($id);

        return redirect('admin/cms')->with('flash_message', 'Content Management System deleted!');
    }
    public function pageCreate($slug)
    {
        $page=Cms::where('slug',$slug)->get()->first();
        if($page)
    return view('content',compact('page'));
        else
        return view('error.404');
    }
}
