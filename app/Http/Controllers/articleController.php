<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id=auth()->user()->id;
        $articles=Article::where("userId",$id)->orderBy("id","desc")->paginate(4);
        return view("show",["articles"=>$articles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }
    public function search(Request $request)
    {
        $search=$request->get("search");
        $articles=Article::where("name","like","%".$search."%")->paginate(5);
        return view("show",["articles"=>$articles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $id=auth()->user()->id;
        
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "title"=>"required",
            "article_post"=>"required",


        ]);

        $article= Article::create([
            "name"=>$request->name,
            "email"=>$request->email,
            "title"=>$request->title,
            "article_post"=>$request->article_post,
            "userId"=>$id,
        ]);

        
    if($article){
        return redirect("articles")->with("articleAdded","Your article added successfully");
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
        $article = Article::find($id);
        return view("edit",["article"=>$article]);
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
        $article=Article::find($id);
        $article->name =$request->name;
        $article->email =$request->email;
        $article->title =$request->title;
        $article->article_post =$request->article_post;
        if($article->save()){
            return redirect("articles")->with("articleAdded","Your article updated successfully");
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
        //echo $id;exit;
        $article=Article::find($id);
        if($article->delete()){
            return redirect("articles")->with("articleAdded","Your article deleted successfully");
        }
    }

    
}
