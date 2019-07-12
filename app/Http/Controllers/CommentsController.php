<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\News;
use App\Graph;
use Validator;
use Session;




class CommentsController extends Controller
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
    public function store(Request $request, $news_id)
    {
        //
        $this->validate($request, array(
            'name'=> 'required | max:255',
            'email'=> 'required| email | max:255',
            'comment'=> 'required | min:5'
        ));

        $news = News::find($news_id);

        $comment = new Comment();

        $comment->name = $request->name;
        $comment->email = $request->email;
        $comment->comment = $request->comment;
        $comment->approved = true;
        $comment->news()->associate($news);

        $comment->save();


        // return $comment->toJson();

        return redirect()->route('article', [$news->id]);



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
        //
        $comment = Comment::find($id);
        return view('comments.edit')->withComment($comment);
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
        $comment = Comment::find($id);

        $this->validate($request, array('comment'=> 'required'));

        $comment->comment  = $request->comment;

        $comment->save();

        Session::flash('sucess', 'Comment Updated');
        return redirect()->route('news.show', $comment->news->id);

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

    //     Comment::find($id)->delete($id);
    //     return response()->json([
    //     'success' => 'Record deleted successfully!'
    // ]);
    // echo 'Deleted';

    Comment::find($id)->delete();
    // return redirect()->route('news.index')->with('success','News deleted successfully');
    return back()->with('success', 'Deletes Successfully');
    }
}
