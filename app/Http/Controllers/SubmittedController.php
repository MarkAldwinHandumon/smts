<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use Illuminate\Http\Request;

class SubmittedController extends Controller
{
    public function index(){
        $documents = Upload::with('document','user')->get();
        return view('pages.submitted.index',compact('documents'));
    }
}
