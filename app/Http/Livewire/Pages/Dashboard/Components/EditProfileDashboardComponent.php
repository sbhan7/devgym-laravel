<?php

namespace App\Http\Livewire\Pages\Dashboard\Components;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;


class EditProfileDashboardComponent extends Component
{

    public $Curent_user;
    public $user;


    public function mount()
    {
        $this->Curent_user = Auth::user();
        $this->user =  Client::query()->where('id', $this->Curent_user->id)->firstOrFail();
    }


    public function render()
    {
        return view('livewire.pages.dashboard.components.edit-profile-dashboard-component');
    }
}
