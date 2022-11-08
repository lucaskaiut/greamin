<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserService
{
    private string $model = User::class;

    public function authenticated(): ?User
    {
        return Auth::user() ?? null;
    }
}