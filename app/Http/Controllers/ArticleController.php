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
        $articles = Article::orderBy('id', 'DESC')->paginate(5);

        return view('home', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Auth::check()) {
            $categories = Categorie::all();
            return view('articles.create', compact('categories'));
        } else {
            return redirect()->intended('login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (\Auth::check()) {
            $post = Article::create($request->all());
            return redirect()->intended('admin')->with('success', 'Article created');
        } else {
            return redirect()->intended('login');
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
        if (!Article::find($id +1)) {
            $nextArticle = false;
        }
        if (!Article::find($id-1)) {
            $previousArticle = false;
        }

        $article = Article::findOrFail($id);
        $user = $article->user;
        $nextArticle = Article::where('id', '>', $id)->first();
        $previousArticle = Article::where('id', '<', $id)->orderBy('id', 'desc')->first();


        $timeToRead= round(str_word_count(strip_tags($article->content)) / 200);

        if ($timeToRead < 1) {
            $timeToRead = 1 ;
        }



        return view('post', compact('article', 'nextArticle', 'previousArticle', 'timeToRead', 'user'));
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = \Auth::user();
        $post = Article::find($id);
        if (\Auth::check()) {
            if ($user->can('update', $post)) {
                $categories = Categorie::all();

                $findarticle = Article::find($id);

                return view('articles.edit', compact('findarticle', 'categories'));
            } else {
                return view('errors.404');
            }
        } else {
            return redirect()->intended('login');
        }
    }

    /**
     * Update the specified resource in storagema.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = \Auth::user();
        $post = Article::find($id);

        if (\Auth::check()) {
            if ($user->can('update', $post)) {
                Article::find($id)->update($request->all());
                return redirect()->intended('admin')->with('success', 'Article edited');
            }
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
        if (\Auth::check()) {
            $article = Article::findOrFail($id);
            $article->delete($id);
            return redirect()->back()->with('success', 'Article deleted');
        } else {
            return redirect()->intended('login');
        }
    }
}
