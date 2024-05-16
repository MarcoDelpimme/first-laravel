<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    function index()
    {
        return view('list');
    }

    function details($id)
    {

        return view('details', ['id' => $id]);
    }

    function modify()
    {
        return view('modify');
    }


    function delete($id)
    {
        return view('delete', ['id' => $id]);
    }


    function create()
    {
        return view('create');
    }
}
