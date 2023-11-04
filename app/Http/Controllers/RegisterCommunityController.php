<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRegisterCommunityRequest;
use App\Models\Community;
use App\Services\RegisterCommunityService;

class RegisterCommunityController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function store(StoreRegisterCommunityRequest $request)
    {
        $validated = $request->validated();
        $community = Community::make([
            'name' => $validated['community_name'],
        ]);

        $registrationService = new RegisterCommunityService();
        $registrationService->RegisterCommunity(auth()->user(), $community);

        return redirect()
            ->route("profil.index")
            ->with("success", "Selamat komunits berhasil didaftarkan.");
    }
}
