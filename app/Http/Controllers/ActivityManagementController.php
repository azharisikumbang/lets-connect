<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreActivityRequest;
use App\Models\Activity;
use App\Models\ActivityImages;
use App\Services\ActivityService;
use Illuminate\Http\Request;

class ActivityManagementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreActivityRequest $request)
    {
        $validated = $request->validated();

        $activeUser = auth()->user();
        $activity = Activity::make([
            'body' => $validated['content']
        ]);

        $activityManager = new ActivityService();
        $posted = $activityManager->postActivity($activeUser->community, $activity, $validated['images']);

        if (! $posted) {
            return redirect()->back()->withErrors('Gagal mempublikasi aktivitas, mohon coba kembali.');
        }

        return redirect()
            ->route('activities.index')
            ->with('message', 'Berhasil mempublikasikan postingan aktivitas komunitas !')
            ;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
