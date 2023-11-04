<?php

namespace App\Contract;

use App\Models\Community;
use App\Models\User;

/**
 * interaksi dari user publik ke platform
 */
interface PublicUserInterface
{
    public function joinToCommunity(User $user, Community $community): bool;

    public function RegisterCommunity(User $user, Community $community): bool;
}