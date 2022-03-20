<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function show($username)
    {
        try {
            $user = (new UserService())->findByUsername($username);

        } catch (ModelNotFoundException $exception) {
            return view('users.notfound');
        }
        return view('users.show', compact('user'));
    }
}
