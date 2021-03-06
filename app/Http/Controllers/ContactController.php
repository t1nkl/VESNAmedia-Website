<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Setting, Lid, Contact, About};

class ContactController extends Controller
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
        $about = About::first();
        return view('site.contacts', compact('about'));
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
        $request->name = trim(stripslashes(htmlspecialchars($request->name)));
        if ($contact = Contact::create($request->all())){
            try {
                $settings = Setting::first();
                \Mail::to($settings->subemail)->send(new \App\Mail\ContactForm($contact));
                return response()->json(200);
            } catch (\Exception $e) {
                return response()->json(['error' => true, 'msg' => $e->getMessage()], 400);
            }
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function subscribeLid(Request $request)
    {
        $subscribe = new Lid;
        $subscribe->email = $request->input('email');
        if ($subscribe->save()){
            try {
                return response()->json(200);
            } catch (\Exception $e) {
                return response()->json(['error' => true, 'msg' => 'test'], 400);
            }
        }
    }

}
