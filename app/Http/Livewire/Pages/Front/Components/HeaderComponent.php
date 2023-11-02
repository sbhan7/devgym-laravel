<?php

namespace App\Http\Livewire\Pages\Front\Components;

use App\Models\Client;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class HeaderComponent extends Component
{
    public $Curent_user;
    public $user;
    public function mount()
    {
        if (Auth::user())
        {
            $this->Curent_user = Auth::user();
            $this->user =  Client::query()->where('id', $this->Curent_user->id)->firstOrFail();
        }
    }
    public function render()
    {
        return view('livewire.pages.front.components.header-component');
    }
}
