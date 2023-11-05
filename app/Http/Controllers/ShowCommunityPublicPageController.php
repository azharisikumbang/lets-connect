<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class ShowCommunityPublicPageController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Community $community)
    {
        $community->load('activities');
        $community->load('manager');

        return view('community-public.show', ['community' => $community->toArray()]);
    }
}
