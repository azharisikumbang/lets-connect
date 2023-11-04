<?php

/**
 * pengelolaan profil dari komunitas
 */
interface ProfilInterface
{
    public function getProfilDetail(Community $community): Community;
}