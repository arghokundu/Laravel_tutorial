    <!-- ==================================================================
         2. SIDEBAR NAVIGATION (#sideNavbar)
         ================================================================== -->
    <aside id="sideNavbar" aria-label="Main Navigation">

        <!-- Brand Logo Header -->
        <div class="sidebar-header">
            <a href="index.html" class="brand-logo" id="brandLogo">
                <div class="brand-icon">
                    <i class="bi bi-layers-half"></i>
                </div>
                <span class="brand-text">Practice<span>Myself</span></span>
            </a>
            <button type="button" class="btn-sidebar-toggle d-lg-none" aria-label="Close sidebar">
                <i class="bi bi-x-lg"></i>
            </button>
        </div>

        <!-- Scrollable Navigation Body -->
        <div class="sidebar-body">

            <!-- Workspace / Profile Info Card -->
            <!-- <div class="sidebar-workspace-card">
                <div class="avatar-wrapper">
                    <div class="user-avatar">
                        <i class="bi bi-building"></i>
                    </div>
                </div>
                <div class="user-info">
                    <span class="user-name">Acme Enterprise</span>
                    <span class="user-role"><i class="bi bi-shield-check text-success me-1"></i>Enterprise Plan</span>
                </div>
            </div> -->

            <!-- ----------------------------------------------------------------
             SECTION 1: CORE / MAIN MENU
             ---------------------------------------------------------------- -->
            <div class="sidebar-heading">Core</div>
            <div class="sidebar-heading-divider"></div>

            <ul class="sidebar-nav">
                <!-- Active Single Link: Overview -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link-custom active" id="navDashboard">
                        <div class="link-left">
                            <span class="nav-icon"><i class="bi bi-grid-1x2-fill"></i></span>
                            <span class="nav-text">Dashboard</span>
                        </div>
                        <div class="link-right">
                            <span class="badge badge-custom badge-primary">New</span>
                        </div>
                    </a>
                </li>
            </ul>

            <!-- ----------------------------------------------------------------
             SECTION 2: MANAGEMENT & EMPLOYEES
             ---------------------------------------------------------------- -->
            <div class="sidebar-heading">Management</div>
            <div class="sidebar-heading-divider"></div>

            <ul class="sidebar-nav">
                <!-- Dropdown Menu: Employees & User Management -->
                <li class="nav-item">
                    <a href="javascript:void(0);" class="nav-link-custom" data-sidebar-toggle="dropdown"
                        aria-expanded="false" id="navDropdownUsers">
                        <div class="link-left {{request()->is('api/showAll/api/users') ? 'active' : '' }}">
                            <span class="nav-icon"><i class="bi bi-people-fill"></i></span>
                            <span class="nav-text">API Employees & Users</span>
                        </div>
                        <div class="link-right">
                            <i class="bi bi-chevron-right dropdown-chevron"></i>
                        </div>
                    </a>
                    <ul class="sidebar-submenu" style="display: none;">
                        <li><a href="/api/showAll/api/users" class="submenu-link 
                          {{request()->is('api/showAll/api/users') ? 'active' : '' }}"><i
                                    class="bi bi-person-lines-fill"></i>Employee List</a></li>
                        <li><a href="employee-form.html" class="submenu-link">
                                <i class="bi bi-person-plus">
                                </i> Add Employee</a></li>
                        <li><a href="employee-details.html" class="submenu-link"><i
                                    class="bi bi-person-vcard"></i>Employee Profile</a></li>
                        <li><a href="#" class="submenu-link"><i class="bi bi-shield-check"></i>Roles & Permissions</a>
                        </li>
                    </ul>
                </li>
            </ul>





        </div>

    </aside>