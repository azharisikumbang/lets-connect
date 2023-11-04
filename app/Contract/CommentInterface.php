<?php

namespace App\Contract;

use App\Models\Activity;
use App\Models\Community;

/**
 * mengirim dan menerima pesan dari sesama komunitas
 */
interface CommentInterface
{
    public function sendComment(Community $sender, Activity $currentActivity, string $message): bool;
} 