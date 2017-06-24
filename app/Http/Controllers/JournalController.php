<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Jenssegers\Date\Date;
use Illuminate\Http\Request;
use App\Models\JournalContact;
use App\Models\JournalArticle;

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
        $journal_articles = JournalArticle::getPublishedArticle();
        return view('journal.journal', compact('journal_articles'));
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
        return view('journal.single-journal', compact('journal_article'));
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
        $last_journal = Journal::latest()->first();
        $journals = Journal::getAnotherJournals($last_journal->id);
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
        $contact = new JournalContact;
        $contact->name = trim(stripslashes(htmlspecialchars($request->input('name'))));
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->journal_id = $request->input('journal_id');

        if ($contact->save()){
            try {
                return response()->json(200);
            } catch (\Exception $e) {
                return response()->json(['error' => true, 'msg' => 'test'], 400);
            }
        }
    }

}
