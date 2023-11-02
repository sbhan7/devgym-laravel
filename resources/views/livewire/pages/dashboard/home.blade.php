@extends('livewire.pages.dashboard.index')


<div>
    @section('content')
        <!-- **************** MAIN CONTENT START **************** -->
        <main>

            <!-- =======================
            Page Banner START -->
            @livewire('pages.dashboard.components.user-info-component')
            <!-- =======================
            Page Banner END -->

            <!-- =======================
            Page content START -->
            @if(Route::current()->getName() == 'dashboard')
                @livewire('pages.dashboard.components.main-page-dashboard-component')
            @elseif(Route::current()->getName() == 'edit_profile')
                @livewire('pages.dashboard.components.edit-profile-dashboard-component')
            @endif
            <!-- =======================
            Page content END -->

        </main>
        <!-- **************** MAIN CONTENT END **************** -->
    @endsection
</div>
