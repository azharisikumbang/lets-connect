<?php

namespace App\Http\Controllers;

use App\Models\Community;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $communities = Community::paginate(10);

        return view("welcome", [
            'communities' => $communities->toArray()
        ]);
    }
}
