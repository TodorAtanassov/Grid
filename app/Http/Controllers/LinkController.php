<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();
        return view('grid', compact('links'));
    }

    public function show(string $id)
    {
        return view('links.edit/{id}', [
            'user' => Link::findOrFail($id)
        ]);
    }

    // public function create(string $id, Request $request)
    // {
    //     $data = $request;
    //     $link = new Link;
    //     $link->title = $data['title'];
    //     $link->page = $data['page'];
    //     $link->color = $data['color'];
    //     $link->save();
    //     return redirect()->route('links.index');
    // }
    public function destroy(string $id)
    {
        return view('links.edit/{id}', [
            'user' => Link::findOrFail($id)
        ]);
    }
}
