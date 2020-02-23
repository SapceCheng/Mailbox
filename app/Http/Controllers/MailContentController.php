<?php

namespace App\Http\Controllers;

use App\content;
use Illuminate\Http\Request;
use Illuminate\Validation\Concerns\ValidatesAttributes;

class MailContentController extends Controller
{
    //Render a list of mailbox
    public function index()
    {
        $content = content::latest()->get();
        return view('/email', ['content' => $content]);
    }
    //Show a singer email
    public function show($id)
    {
        $content = content::findOrFail($id);
        return view ('mailbox.show', ['content' => $content]);

    }
    //show a view of compose new email.
    public function create()
    {
        return view('mailbox.create');

    }
    //persist new email
    public function store()
    {
        // die('hello');
        // dump(request()->all());
        // $content = new Content();
        // $content->email = request('email');
        // $content->title = request('title');
        // $content->body= request('body');

        // $content->save();
    }

    public function edit()
    {

    }

    public function update()
    {
        $validatesAttributes = request()->validate([
            'email' => 'required',
            'title' => 'required',
            'body' =>'required'
        ]);

        content::update($validatesAttributes);

        return redirect('/email');

    }

    //Delete the email

    public function delete($id)
    {
        $content = content::find($id);
        $content->delete();
        return view ('/email', ['content' => $content]);
    }

    public function archive()
    {
        // $content = content::onlyTrashed()->get();
        // return view('mailbox.archive',compact('content'));
    }

    public function filter()
    {
        $email = collect([1,2,3,4]);

        $email->filter(function ($value, $key){
            return $key > 2;
        });

        return $email;
    }
}
