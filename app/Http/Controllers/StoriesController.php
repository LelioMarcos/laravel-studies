<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class StoriesController extends Controller
{
    public function getStories()
    {
        return view('stories', ['stories' => Story::paginate(15)]);
    }

    public function writeStory()
    {
        return view('stories_write');
    }

    public function postStory(Request $request)
    {
        $story = Story::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'content' => $request->content
        ]);

        return redirect('hists/'.$story->id);
    }

    public function getStory(Story $story)
    {
        return view('storie', ['story' => $story]);
    }
}
