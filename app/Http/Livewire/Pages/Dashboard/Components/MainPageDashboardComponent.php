<?php

namespace App\Http\Livewire\Pages\Dashboard\Components;

use App\Models\Course;
use Livewire\Component;

class MainPageDashboardComponent extends Component
{
    public $courses;
    public function mount()
    {
        $this->courses = Course::all();
    }
    public function render()
    {
        return view('livewire.pages.dashboard.components.main-page-dashboard-component');
    }
}
