<?php

namespace App\Services;

use App\Contract\ActivityInterface;
use App\Models\Activity;
use App\Models\ActivityImages;
use App\Models\Community;
use Illuminate\Support\Collection;

class ActivityService implements ActivityInterface
{
    public function postActivity(Community $community, Activity $activity, array $images = []): bool
    {
        $storedImages = $this->storeActivityImages($activity, $images);
        
        $activity = $community->activities()->save($activity);

        $activity->images()->saveMany($storedImages);


        return true;
    }

    public function updateActivity(Community $community, Activity $activity, array $data): bool 
    {}
    
    public function removeActivity(Community $community, Activity $activity): bool
    {}

    public function getActivities(Community $community): array
    {}

    private function storeActivityImages(Activity $activity, array|Collection $images): array
    {   
        $activityImages = [];
        foreach ($images as $image) {
            $filename = sprintf("%s.%s", md5(time()), $image->getClientOriginalExtension());
            
            // store to disk
            $image->storeAs('images', $filename);
            
            $activityImages[] = ActivityImages::make([
                'filename' => $filename
            ]);
        }

        return $activityImages;
    }
}