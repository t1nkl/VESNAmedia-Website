<?php

namespace App\Http\Controllers;

use App\Models\Advertising;
use App\Models\RecommendArticle;
use App\Models\RecommendCategory;
use Illuminate\Http\Request;

class RecommendController extends Controller
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
    public function index()
    { 
        $category = request()->has('cat') ? RecommendCategory::where('slug', request()->cat)->first() : false;

        $art = $category ? $category->articles() : new RecommendArticle;
        
        $recommend_articles = $art->published()->paginate(12);    
        $advert = Advertising::getFor('recomends');            
        return view('recommend.recommend', compact('recommend_articles', 'category', 'advert'));
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
        $recommend_article = RecommendArticle::where('slug', $id)->first();
        return view('recommend.single-recommend', compact('recommend_article'));
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function faceLook($id, $image)
    {
        $recommend_article = RecommendArticle::where('slug', $id)->first();
        preg_match("/.*\/(.*)\/.*.png/", $recommend_article->recommend_photos[0], $output_array);
        $image = '/uploads/Recommends/'.$output_array[1].'/'. $image . '.png';
        return view('recommend.single-recommend', compact('recommend_article', 'image'));
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
