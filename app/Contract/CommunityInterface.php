<?php

/**
 * Dipergunakan untuk melakukan interaksi antar komunitas dengan komunitas lain
 * 
 */
interface CommunityInterface
{
    public function connect(Community $from, Community $target): bool;

    public function disconnect(Community $from, Community $target): bool;

    public function acceptConnection(Community $me, Community $target): bool;

    public function rejectConnection(Community $me, Community $target): bool;

    public function addNewMember(Community $community, User $user): bool;

    public function rejectNewMember(Community $community, User $user): bool;

    public function kickMember(Community $community, User $user): bool;
}