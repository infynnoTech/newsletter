<?php

namespace Infynno\Newsletter\Http\Controllers;

use Infynno\Newsletter\Models\NewsLetter;
use Infynno\Newsletter\Mail\NewsletterMailable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;

class NewsLetterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //calling news letter view
        try {

            return view('newsletter::newsletter');

        } catch (Exception $e) {

           Log::error($e);

           return response()->json(['status' => 0, 'message' => 'Something went wrong.'], 500);
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
        try {
            //send a thank you mail to subsctibed used
            Mail::to($request->email)->send(new NewsletterMailable($request->email));
            //insert in to data base subscriber email
            NewsLetter::create($request->all());

            return redirect(route('newsletter'));

        } catch (Exception $e) {

           Log::error($e);

           return response()->json(['status' => 0, 'message' => 'Something went wrong.'], 500);
        }
    }

}
