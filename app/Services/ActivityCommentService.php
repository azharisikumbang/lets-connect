<?php

namespace App\Services;

use App\Contract\CommentInterface;
use App\Models\Activity;
use App\Models\Comment;
use App\Models\Community;

class ActivityCommentService implements CommentInterface
{
    public function sendComment(Community $sender, Activity $currentActivity, string $message): bool
    {
        $comment = Comment::make([
            'body' => $message,
            'commented_by' => $sender->id
        ]); // TODO: escape the message
        
        $currentActivity->comments()->save($comment);

        return true;
    }
}