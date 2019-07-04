<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Roadmap;
use Validator;
use Illuminate\Foundation\Validation\ValidatesRequests;

class RoadmapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $roadmap = DB::table('roadmaps')->get();

        return view('roadmap.index', ['roadmap' => $roadmap]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('roadmap.create');
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
        request()->validate([
            'year' =>['required', 'string', 'max:255', 'unique:roadmaps'],
            'body' => ['required', 'string', 'max:255'],
          ]);

          Roadmap::create($request->all());
          return redirect()->route('roadmap.index')->with('success','Created successfully');
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
        $roadmap = Roadmap::find($id);
        return view('roadmap.show', compact('roadmap'));
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
        $roadmap = Roadmap::find($id);
        return view('roadmap.edit', compact('roadmap'));
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
        //
        request()->validate([
            'year' => 'required',
            'body' => 'required',
          ]);
          Roadmap::find($id)->update($request->all());
          return redirect()->route('roadmap.index')->with('success',' Updated successfully');
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
        Roadmap::find($id)->delete();
        return redirect()->route('roadmap.index')->with('success','News deleted successfully');
    }

}
