<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\News;
use Validator;
use Image;
use View;
use Storage;
use Illuminate\Support\Facades\Input;
// use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $news = DB::table('news')->get();

        return view('news.index', ['news' => $news]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('news.create');
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
        $this->validate($request, array(
            'title'=>'required|max:255',
            'body'=>'required',
            'subtitle'=>'required',
            // 'image'=>'required'
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,PNG|max:2048',
        ));

        // if($request->hasFile('image')){
        //     $request->image->store('public/img');
        //     // $news->save();
        //     $imageName = $request->image->store('public/img');
        // }



        $news = new News;
        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->body = $request->body;
        // $news->image = $request->image;
        if ($request->hasFile('image')){
            //Add new photo
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/' . $filename);
                Image::make($image)->resize(300,300)->save($location);

                $oldFilename = $news->image;
            //Update DB
                $news->image = $filename;

             //Delete the old photo
                // Storage::delete($oldFilename);
            }

        $news->save();

        return redirect()->route('news.index')->with('success','News created successfully');
        //  return view('news.index', $news);


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
        $news = News::find($id);
        return view('news.show', compact('news'));
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
        $news = News::find($id);
        return view('news.edit', compact('news'));
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
        // request()->validate([
        //     'title' => 'required',
        //     'body' => 'required',
        //     'image' => 'required',
        //   ]);

        //   News::find($id)->update($request->all());
        $this->validate($request, array(
            'title'=>'required|max:255',
            'body'=>'required',
            'subtitle'=>'required',
            // 'image'=>'required'
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,PNG|max:2048',
        ));
        $news = News::find($id);

        // if($request->hasFile('image')){
        //     $request->image->store('public/img');
        //     // $news->save();
        //     $imageName = $request->image->store('public/img');
        // }

        $news->title = $request->title;
        $news->subtitle = $request->subtitle;
        $news->body = $request->body;
        // $news->image = $request->image;
        if ($request->hasFile('image')){
            //Add new photo
                $image = $request->file('image');
                $filename = time() . '.' . $image->getClientOriginalExtension();
                $location = public_path('img/' . $filename);
                Image::make($image)->resize(300,300)->save($location);

                $oldFilename = $news->image;
            //Update DB
                $news->image = $filename;

             //Delete the old photo
                // Storage::delete($oldFilename);
            }

        $news->save();
          return redirect()->route('news.index')->with('success','News updated successfully');
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
        News::find($id)->delete();
        return redirect()->route('news.index')->with('success','News deleted successfully');
    }


    public function showNews($id)
    {
        $news = News::find($id);
       // return view('coin.shownews', compact('news'));
        return View::make('coin.shownews', compact('news'));
    }
}
