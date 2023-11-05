<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommunityConnectorRequest;
use App\Models\Community;
use App\Services\CommunityManagementService;

class CommunityConnectorController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function connect(StoreCommunityConnectorRequest $request)
    {
        $validated = $request->validated();

        $requestor = auth()->user()->community;
        $target = Community::find($validated['community_target']); // TODO: refactor, the model value has been retrieve at rule validation 

        $connected = (new CommunityManagementService)->connect($requestor, $target);

        if (! $connected) {
            return redirect()
                ->back()
                ->withErrors('Gagal melakukan permintaan terkoneksi.');
        }

        return redirect()->route('community-profil.show', ['community' => $target->id]);
    }

        /**
     * Handle the incoming request.
     */
    public function disconnect(StoreCommunityConnectorRequest $request)
    {
        $validated = $request->validated();

        $requestor = auth()->user()->community;
        $target = Community::find($validated['community_target']); // TODO: refactor, the model value has been retrieve at rule validation 

        $disconnected = (new CommunityManagementService)->disconnect($requestor, $target);

        if (! $disconnected) {
            return redirect()
                ->back()
                ->withErrors('Gagal melakukan permintaan memutus terkoneksi.');
        }

        return redirect()->back()->with('message', 'Koneksi komunitas telah dihapus.');
    }
}
