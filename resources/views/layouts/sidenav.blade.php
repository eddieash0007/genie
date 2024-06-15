<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">CPC Register</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Pages
            </li>

            <li class="sidebar-item {{ ( request()->is('admin/dashboard') )  ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span
                        class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">
                Registered Users
            </li>

            <li class="sidebar-item {{ ( request()->is('admin/registrations') )  ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.registrations')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list align-middle me-2"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3.01" y2="6"></line><line x1="3" y1="12" x2="3.01" y2="12"></line><line x1="3" y1="18" x2="3.01" y2="18"></line></svg><span class="align-middle">Registrations</span>
                </a>
            </li>
            <li class="sidebar-item {{ ( request()->is('admin/registrations/trashed*') )  ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.registrations.trashed')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 align-middle me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>Trashed Registrations</span>
                </a>
            </li>

            <li class="sidebar-header">
                User Management
            </li>

            <li class="sidebar-item {{ ( request()->is('admin/user*') )  ? 'active' : '' }}">
                <a class="sidebar-link" href="{{route('admin.users')}}">
                    <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Users</span>
                </a>
            </li>

        </ul>

       
    </div>
</nav>