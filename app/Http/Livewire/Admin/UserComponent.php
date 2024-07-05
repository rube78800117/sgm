<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserComponent extends Component
{
    use WithPagination;
    public $search;
    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function assignRole(User $user, $value)
    {
        if ($value == '1') {
            $user->assignRole('admin');
        } else {
            $user->removeRole('admin');
        }
    }




    public function render()
    {


        $usersTotal = User::all();
    
        $users = User::where('name', 'LIKE', '%'. $this->search .'%')
        ->where('email', '<>', auth()->user()->email)
        ->orWhereHas('line', function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%');
        })
        ->orderBy('id','desc')
        ->paginate(10);

        $usersFound=$users;


      





        // $users= User::paginate();
        return view('livewire.admin.user-component', compact('users', 'usersTotal','usersFound' ))->layout('layouts.admin');
    }
}
