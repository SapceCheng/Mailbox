<?php

namespace App\Http\Controllers;

use App\sent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SentController extends Controller
{
    public function index()
    {
        // die('hello');
       $sent = sent::latest()->get();
       return view('mailbox.sent', ['sents' => $sent]);

    }

    public function create()

    {
        return view('mailbox.create');

    }

    public function show($id)
    {
        $sent = sent::findOrFail($id);
        return view ('mailbox.sentshow', ['sent' => $sent]);
    }

    public function store()
    {
        $validateAttributes = request()->validate([
            'title' => 'required',
            'body' => 'required',
            'email' => 'required|email',
            ]);

            sent::create($validateAttributes);
            request()->validate(['email'=> 'required|email']);
            Mail::raw('it works', function ($message) {
            $message->to(request('email'))
                     ->subject('Hello There');
            $message->from('myEmail@test.com')
                    ->to('iljimae.ic@gmail.com', 'John Smith')
                    ->subject('Welcome!');
            });
            return redirect('/create')
                    ->with('message', 'Email Sent');

        // die('hello');
        // dump(request()->all());

        // $sent = new Sent();
        // $sent->email = request('email');
        // $sent->title = request('title');
        // $sent->body= request('body');

        // $sent->save();
    }

}
