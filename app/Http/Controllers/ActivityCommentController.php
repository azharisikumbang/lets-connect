<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreActivityCommentRequest;
use App\Models\Activity;
use App\Services\ActivityCommentService;


class ActivityCommentController extends Controller
{
    public function store(StoreActivityCommentRequest $request, Activity $activity)
    {
        $validated = $request->validated();

        $owner = auth()->user()->community;

        $commentService = new ActivityCommentService();
        $commentService->sendComment($owner, $activity, $validated['comment']);

        return back()->with('message', 'Komentar disimpan.');
    }
}
