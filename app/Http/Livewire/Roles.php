<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Role;

class Roles extends Component
{
    public $name;
    public $role_id;
    public $updateMode = false;
    
    public function resetPage()
    {
        $this->reset();
        $this->updateMode = false;
    }

    public function addRole()
    {
        $role = new Role;
        $role->name = $this->name;
        $role->save();
        $this->reset();
    }

    public function editRole(Role $role)
    {
        $this->updateMode = true;
        $this->name = $role->name;
        $this->role_id = $role->id;
    }

    public function updateRole()
    {
        $role = Role::findOrFail($this->role_id);
        $role->name = $this->name;
        $role->update();
        $this->reset();
    }

    public function delete(Role $role)
    {
        $role->delete();
    }

    public function render()
    {
        return view('livewire.roles', [
            'roles' => Role::all() 
        ])->extends('layouts.app');
    }
}
