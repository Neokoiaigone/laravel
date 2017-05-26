<?php

namespace App\Http\Controllers;

use App\Article;
use App\Categories;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Conner\Likeable\Likeable;



class ArticleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show', 'jv', 'nutrition', 'economie', 'dvlp', 'sport');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $article = new Article;

        $this->validate($request,
            [
                'title' => 'required|min:3',
                'content' => 'required|min:10',
                'image' => 'required'
            ],
            [
                'title.required' => 'Le titre est requis',
                'content.required' => 'Le contenu est requis',
                'image' => 'required'
            ]);

        $input = $request->input();

        $input['user_id'] = Auth::user()->id;
        $input['categories_id'] = $request->categories;
       if( $request->hasFile('image')){
           $image = $request->file('image');
           $image->move(public_path('uploads'), $image->getClientOriginalName());
           $article->image = $image->getClientOriginalName();

       }
        $article->fill($input)->save();

        return redirect()->route('article.index', compact('id'))
            ->with('success', 'Votre défi va être exposé au monde entier !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        $comments = Comment::all();
        $comment = Comment::find($id);

        return view('articles.show', compact('article', 'comments', 'comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|min:3',
            'content' => 'required|min:10',
            'image' => 'required'
        ],
            [
                'title.required' => 'Le titre est requis',
                'content.required' => 'Le contenu est requis',
                'image' => 'required'
            ]);
        $article = Article::find($id);
        $input = $request->input();
        if( $request->hasFile('image')){
            $image = $request->file('image');
            $image->move(public_path('uploads'), $image->getClientOriginalName());
            $article->image = $image->getClientOriginalName();
            echo $article;
            die;

        }
        $article->fill($input)->save();
        return redirect()->route('article.show', compact('id'))
            ->with('success', 'Le défi a bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();
        return redirect()->route('article.index')
            ->with('success', 'L\'article a bien été supprimé !');
    }

    public function like($id)
    {
        $article = Article::find($id);
        $article->like();

        return redirect()->route('article.show', compact('id'))
            ->with('success', 'Vous aimez cet article !');
    }
    public function unlike($id)
    {
        $article = Article::find($id);
        $article->unlike();

        return redirect()->route('article.show', compact('id'))
            ->with('success', 'Vous n\'aimez plus cet article !');
    }

    public function sport()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.sport', compact('articles'));
    }
    public function economie()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.economie', compact('articles'));
    }
    public function dvlp()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.dvlp', compact('articles'));
    }
    public function nutrition()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.nutrition', compact('articles'));
    }
    public function jv()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.jv', compact('articles'));
    }
    public function follow()
    {
        $articles = Article::orderBy('id', 'DESC')->paginate(5);
        return view('articles.follow', compact('articles'));
    }
}


