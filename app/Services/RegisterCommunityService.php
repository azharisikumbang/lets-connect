<?php

namespace App\Services;

use App\Contract\PublicUserInterface;
use App\Models\Community;
use App\Models\User;

class RegisterCommunityService implements PublicUserInterface
{
    public function joinToCommunity(User $user, Community $community): bool
    {
        return true;
    }

    public function RegisterCommunity(User $user, Community $community): bool
    {
        $user->communities()->save($community);

        return true;
    }
}