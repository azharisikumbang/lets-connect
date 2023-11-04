<?php

namespace App\Services;
use App\Contract\CommunityInterface;
use App\Models\Community;
use App\Models\User;

class CommunityManagementService implements CommunityInterface
{

    public function connect(Community $requestor, Community $target): bool
    {
        if ($requestor->id === $target->id) return false;
        if (
            $requestor->communities()->where("target", $target->id)->exists()
        ) return false;

        $requestor->communities()->attach($target);

        return true;
    }

    public function disconnect(Community $requestor, Community $target): bool 
    {}

    public function acceptConnection(Community $me, Community $target): bool
    {}

    public function rejectConnection(Community $me, Community $target): bool
    {}

    public function addNewMember(Community $community, User $user): bool
    {}

    public function rejectNewMember(Community $community, User $user): bool
    {}

    public function kickMember(Community $community, User $user): bool
    {}
}