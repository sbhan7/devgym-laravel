<div>
    <div class="offcanvas-body p-3 p-xl-0">
        <div class="bg-dark border rounded-3 p-3 w-100">
            <!-- Dashboard menu -->
            <div class="list-group list-group-dark list-group-borderless collapse-list">
                <a class="list-group-item {{Route::is('dashboard') ? 'active' : ''}}" wire:navigate.hover href="{{route('dashboard')}}"><i
                        class="bi bi-ui-checks-grid fa-fw me-2"></i>داشبورد</a>
                <a class="list-group-item {{Route::is('edit_profile') ? 'active' : ''}}" wire:navigate.hover href="{{route('edit_profile')}}"><i
                        class="bi bi-pencil-square fa-fw me-2"></i>ویرایش پروفایل</a>
                <a class="list-group-item text-danger bg-danger-soft-hover" href="{{route('logout')}}"><i
                        class="fas fa-sign-out-alt fa-fw me-2"></i>خروج</a>
            </div>
        </div>
    </div>
</div>
