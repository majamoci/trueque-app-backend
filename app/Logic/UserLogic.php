<?php

namespace App\Logic;

class UserLogic
{
    private $req;

    public function __construct(Request $req = null) {
        $this->req = $req;
    }

    public function findAuthUser()
    {
        return auth()->user();
    }
}
