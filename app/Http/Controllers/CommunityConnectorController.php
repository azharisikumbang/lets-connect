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
    public function __invoke(StoreCommunityConnectorRequest $request)
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

        return redirect()->back()->with('message', 'Berhasil mengirim permintaan terhubung.');
    }
}
