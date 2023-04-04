<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormProcessor extends Controller
{
    public function index()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $user = [
            'name' => $request->name,
            'surname' => $request->surname,
            'mail' => $request->mail
        ];
        return view('greetings', compact('user'));
    }
}
