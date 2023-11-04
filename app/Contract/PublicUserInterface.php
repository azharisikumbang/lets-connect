<?php

/**
 * interaksi dari user publik ke platform
 */
interface PublicUserInterface
{
    public function joinToCommunity(User $user, Community $community): bool;

    public function RegisterCommunity(User $user, Community $community): bool;
}