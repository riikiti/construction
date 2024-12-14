<?php

namespace App\Http\Controllers;

use App\Actions\Constructor\LandingAction;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{

    public function __invoke(LandingAction $action
    ): \Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application {
        return view('welcome', ['page' => (new LandingAction())->execute()]);
    }
}
