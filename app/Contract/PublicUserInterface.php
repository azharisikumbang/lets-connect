<?php

namespace App\Contract;

use App\Models\Community;
use App\Models\User;
use Illuminate\Auth\Authenticatable;

/**
 * interaksi dari user publik ke platform
 */
interface PublicUserInterface
{
    public function joinToCommunity(User|Authenticatable $user, Community $community): bool;

    public function RegisterCommunity(User|Authenticatable $user, Community $community): bool;
}