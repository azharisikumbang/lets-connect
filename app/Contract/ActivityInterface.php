<?php

/**
 * Pengelolaan Aktifitas dari komunitas 
 * 
 */
interface ActivityInterface 
{
    public function getActivities(Community $community): array;

    public function postActivity(Community $community, Activity $activity): bool;

    public function updateActivity(Community $community, Activity $activity, array $data): bool;
    
    public function removeActivity(Community $community, Activity $activity): bool;
}