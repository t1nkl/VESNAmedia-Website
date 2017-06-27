<?php

namespace App\Http\Controllers;

use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Models\{Project, JournalArticle, RecommendArticle};

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Request $request )
    {
        Date::setLocale('ru');

        $projects = Project::orderBy("rgt")->get();

        $journal_articles = JournalArticle::getAllPublishedArticle();
        $recommend_articles = RecommendArticle::getAllPublishedArticle();
        $all_articles = $journal_articles->merge($recommend_articles);
        $page = request()->has('page') ? request()->page : 1;
        $all_articles = $all_articles->sortByDesc('date')->forPage($page, 12)->all();

        if($request->ajax()) {
            return [
                'all_articles' => view('home_all_articles_ajax')->with(compact('all_articles'))->render(),
                'next_page' => $page+1
            ];
        }

        return view('home', compact('projects', 'all_articles'));
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
