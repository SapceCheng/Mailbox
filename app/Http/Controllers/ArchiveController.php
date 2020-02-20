<?php

namespace App\Http\Controllers;

use App\archive;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{

    public function archive()
    {
        $archive = archive::onlyTrashe()->get();
        return view('mailbox.archive',compact('archive'));
    }
}
