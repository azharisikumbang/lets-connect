<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterCommunityRequest;
use App\Models\Community;
use App\Services\RegisterCommunityService;

class RegisterCommunityController extends Controller
{
    public function index()
    {
        return view("community-registration.index");
    }

    /**
     * Handle the incoming request.
     */
    public function store(StoreRegisterCommunityRequest $request)
    {
        $validated = $request->validated();
        $community = Community::make([
            'name' => $validated['community_name'],
            'description' => $validated['community_description'],
            'area' => $validated['community_area'],
            'category' => $validated['community_category']
        ]);

        $registrationService = new RegisterCommunityService();
        $registrationService->RegisterCommunity(auth()->user(), $community);

        return redirect()
            ->route('activities.create')
            ->with("success", "Selamat komunitas berhasil didaftarkan.");
    }
}
