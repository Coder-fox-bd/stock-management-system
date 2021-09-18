<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;

class UserRoles extends Component
{
    public function render()
    {
        return view('livewire.user-roles', [
            'users' => User::with('roles')->get()
        ])->extends('layouts.app');
    }
}
