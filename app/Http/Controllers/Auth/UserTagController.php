<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use App\Models\User_tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserTagController extends Controller
{
    public function store(Request $request)
    {
        unset($request['_token']);
        $user_id = Auth::id();

        foreach ($request->all() as $tag) {
            $user_tag = new User_tag();

            $user_tag->user_id = $user_id;
            $user_tag->tag_id = $tag;

            $user_tag->save();
        }

        return redirect('/');
    }
}
