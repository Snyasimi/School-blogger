<?php

namespace App\Services;

use \App\Models\{User,Posts};

class UserService {



    public function getUser($user_id)
    {

        $user = User::with(['posts'])->findOrFail($user_id);

        return $user;

    }


}