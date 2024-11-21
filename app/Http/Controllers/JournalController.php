<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $journals = Journal::get();
        return view('home', compact('journals'));
        
    }
}
