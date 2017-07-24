<?php

namespace App\Http\Controllers;

use App\Models\{Advertising, Expert, Journal, JournalArticle, JournalCategory, JournalContact, Setting};
use Illuminate\Http\Request;
use Jenssegers\Date\Date;

class JournalController extends Controller
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
        $category = request()->has('cat') ? JournalCategory::where('slug', request()->cat)->first() : false;
        $art = $category ? $category->articles() : new JournalArticle;
        $journal_articles = $art->published()->paginate(12);
        $advert = Advertising::getFor('journal');

        return view('journal.journal', compact('journal_articles', 'category', 'advert'));
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
        $journal_article = JournalArticle::where('slug', $id)->first();
        $suggested = JournalArticle::where('journal_category_id', $journal_article->journal_category_id)->where('id', '<>', $journal_article->id)->get();
        if($suggested->count() >= 3)
        {
            $suggested = $suggested->random(3);
        }
        return view('journal.single-journal', compact('journal_article', 'suggested'));
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

    public function buyJournal( Request $request )
    {
        $last_journal = Journal::orderBy('rgt')->first();
        $journals = $last_journal ? Journal::getAnotherJournals($last_journal->id) : false;
        if($request->ajax()) { 
            return [
                'journals' => view('journal.buy-journal-ajax')->with(compact('journals'))->render(),
                'next_page' => $journals->nextPageUrl()
            ];
        }
        return view('journal.buy-journal', compact('journals', 'last_journal'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buyAnotherJournal( Request $request, $id )
    {
        $last_journal = Journal::where('slug', $id)->first();
        if($last_journal) {
            $journals = Journal::getAnotherJournals($last_journal->id);
            if($request->ajax()) {
                return [
                    'journals' => view('journal.buy-journal-ajax')->with(compact('journals'))->render(),
                    'next_page' => $journals->nextPageUrl()
                ];
            }
            return view('journal.buy-journal', compact('journals', 'last_journal'));
        } else {
            abort(404);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function buyJournalForm( Request $request )
    {
        $request->name = trim(stripslashes(htmlspecialchars($request->input('name'))));
        
        if ($contact = JournalContact::create($request->all())){
            try {
                 $settings = Setting::first();

                \Mail::to($settings->subemail)->send(new \App\Mail\JournalForm($contact));
                return response()->json(200);
            } catch (\Exception $e) {
                return response()->json(['error' => true, 'msg' => $e->getMessage()], 400);
            }
        }
    }

}
