<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorie;
use App\User;

use App\Article;


class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $articles = Article::orderBy('id','DESC')->paginate(5);

      return view( 'home', compact( 'articles') );
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        if (!Article::find( $id +1)) {
            $nextArticle = false;

        }
        if (!Article::find( $id-1)) {
            $previousArticle = false;

        }

        $article = Article::findOrFail( $id );
        $nextArticle = Article::where( 'id', '>', $id)->first();
        $previousArticle = Article::where('id', '<', $id)->orderBy('id' , 'desc')->first();
        $timeToRead= floor(str_word_count(strip_tags($article->content)) / 200);

            if ($timeToRead < 1) {
                $timeToRead = 1 ;
            }



        return view( 'post', compact( 'article' , 'nextArticle','previousArticle','timeToRead') );
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
    }
}
