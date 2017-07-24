<?php

namespace App\Http\Controllers;

use App\Models\{Project, JournalArticle, RecommendArticle, Gallery, Slider, Advertising};
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

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
        $page = request()->has('page') ? request()->page : 1;

        $all_articles = $journal_articles->sortByDesc('date')->forPage($page, 12)->all();
        if($request->ajax()) {
            return [
                'all_articles' => view('home_all_articles_ajax')->with(compact('all_articles'))->render(),
                'next_page' => $page+1,
                'less_then' => count($all_articles) < 12
            ];
        }

        $slides = Slider::where('status', 'PUBLISHED')->orderBy('rgt')->get();
        $advert = Advertising::getFor('main');
        $advert_sub = Advertising::getFor('main_sub');

        return view('home', compact('projects', 'all_articles', 'slides', 'advert', 'advert_sub'));
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

    public function search()
    {
        $search_items = new Collection;
        if(request()->has('s') && request()->s){        
            $search_items = JournalArticle::search(request()->s)->where('status', 'PUBLISHED')->get();
            $search_items = $search_items->merge(RecommendArticle::search(request()->s)->where('status', 'PUBLISHED')->get());
            $search_items = $search_items->merge(Gallery::search(request()->s)->get())->sortByDesc('date')->all();
        }
        return view('search.index', compact('search_items'));
    }
}
