<?php

namespace App\Http\Controllers;

use App\Events\NewReply;
use App\Http\Requests\ReplyRequest;
use App\Reply;

class ReplyController extends Controller
{
    public function show($id)
    {
        $reply = Reply::where('thread_id', $id)
            ->with('user')
            ->get();

        return $reply;
    }

    public function store(ReplyRequest $request)
    {
        $reply = new Reply;
        $reply->body = $request->input('body');
        $reply->thread_id = $request->input('thread_id');
        $reply->user_id = \Auth::user()->id;
        $reply->save();

        broadcast(new NewReply($reply));

        return response()->json($reply);
    }
}
