<?php

namespace App\Services;

use App\Contract\PublicUserInterface;
use App\Models\Community;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

class RegisterCommunityService implements PublicUserInterface
{
    public function joinToCommunity(User|Authenticatable $user, Community $community): bool
    {
        return true;
    }

    public function RegisterCommunity(User|Authenticatable $user, Community $community): bool
    {
        $user->communities()->save($community);

        return true;
    }
}