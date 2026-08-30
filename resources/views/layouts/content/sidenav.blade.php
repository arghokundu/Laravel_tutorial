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
          <span class="brand-text">Admin<span>Hub</span></span>
        </a>
        <button type="button" class="btn-sidebar-toggle d-lg-none" aria-label="Close sidebar">
          <i class="bi bi-x-lg"></i>
        </button>
      </div>

      <!-- Scrollable Navigation Body -->
      <div class="sidebar-body">

        <!-- Workspace / Profile Info Card -->
        <div class="sidebar-workspace-card">
          <div class="avatar-wrapper">
            <div class="user-avatar">
              <i class="bi bi-building"></i>
            </div>
          </div>
          <div class="user-info">
            <span class="user-name">Acme Enterprise</span>
            <span class="user-role"><i class="bi bi-shield-check text-success me-1"></i>Enterprise Plan</span>
          </div>
        </div>

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

          <!-- Dropdown Menu: Analytics -->
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link-custom" data-sidebar-toggle="dropdown" aria-expanded="false" id="navDropdownAnalytics">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-graph-up-arrow"></i></span>
                <span class="nav-text">Analytics</span>
              </div>
              <div class="link-right">
                <i class="bi bi-chevron-right dropdown-chevron"></i>
              </div>
            </a>
            <!-- Submenu Items -->
            <ul class="sidebar-submenu" style="display: none;">
              <li><a href="#" class="submenu-link"><i class="bi bi-graph-up"></i>Traffic Overview</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-pie-chart"></i>Audience Demographics</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-funnel"></i>Conversion Funnels</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-activity"></i>Real-time Activity</a></li>
            </ul>
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
            <a href="javascript:void(0);" class="nav-link-custom" data-sidebar-toggle="dropdown" aria-expanded="false" id="navDropdownUsers">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-people-fill"></i></span>
                <span class="nav-text">Employees & Users</span>
              </div>
              <div class="link-right">
                <i class="bi bi-chevron-right dropdown-chevron"></i>
              </div>
            </a>
            <ul class="sidebar-submenu" style="display: none;">
              <li><a href="employee-list.html" class="submenu-link"><i class="bi bi-person-lines-fill"></i>Employee List</a></li>
              <li><a href="employee-form.html" class="submenu-link"><i class="bi bi-person-plus"></i>Add Employee</a></li>
              <li><a href="employee-details.html" class="submenu-link"><i class="bi bi-person-vcard"></i>Employee Profile</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-shield-check"></i>Roles & Permissions</a></li>
            </ul>
          </li>

          <!-- Dropdown Menu: E-Commerce -->
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link-custom" data-sidebar-toggle="dropdown" aria-expanded="false" id="navDropdownEcommerce">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-bag-check-fill"></i></span>
                <span class="nav-text">E-Commerce</span>
              </div>
              <div class="link-right">
                <i class="bi bi-chevron-right dropdown-chevron"></i>
              </div>
            </a>
            <ul class="sidebar-submenu" style="display: none;">
              <li><a href="#" class="submenu-link"><i class="bi bi-box-seam"></i>Products Catalog</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-receipt"></i>Order List</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-people"></i>Customer Database</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-tag"></i>Discounts & Coupons</a></li>
            </ul>
          </li>

          <!-- Single Link: Invoices -->
          <li class="nav-item">
            <a href="#" class="nav-link-custom" id="navInvoices">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-receipt"></i></span>
                <span class="nav-text">Invoices & Billing</span>
              </div>
              <div class="link-right">
                <span class="badge badge-custom badge-warning">3 Due</span>
              </div>
            </a>
          </li>
        </ul>

        <!-- ----------------------------------------------------------------
             SECTION 3: APPLICATIONS & TOOLS
             ---------------------------------------------------------------- -->
        <div class="sidebar-heading">Applications</div>
        <div class="sidebar-heading-divider"></div>

        <ul class="sidebar-nav">
          <li class="nav-item">
            <a href="#" class="nav-link-custom" id="navCalendar">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-calendar3"></i></span>
                <span class="nav-text">Calendar Schedule</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link-custom" id="navChat">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-chat-dots-fill"></i></span>
                <span class="nav-text">Messages</span>
              </div>
              <div class="link-right">
                <span class="badge badge-custom badge-success">8</span>
              </div>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link-custom" id="navFileManager">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-folder-fill"></i></span>
                <span class="nav-text">File Manager</span>
              </div>
            </a>
          </li>
        </ul>

        <!-- ----------------------------------------------------------------
             SECTION 5: SYSTEM & SETTINGS
             ---------------------------------------------------------------- -->
        <div class="sidebar-heading">System & Config</div>
        <div class="sidebar-heading-divider"></div>

        <ul class="sidebar-nav">
          <!-- Dropdown Menu: Settings -->
          <li class="nav-item">
            <a href="javascript:void(0);" class="nav-link-custom" data-sidebar-toggle="dropdown" aria-expanded="false" id="navDropdownSettings">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-gear-fill"></i></span>
                <span class="nav-text">System Settings</span>
              </div>
              <div class="link-right">
                <i class="bi bi-chevron-right dropdown-chevron"></i>
              </div>
            </a>
            <ul class="sidebar-submenu" style="display: none;">
              <li><a href="#" class="submenu-link"><i class="bi bi-sliders"></i>General Config</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-shield-lock"></i>Security & 2FA</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-key"></i>API Keys & Webhooks</a></li>
              <li><a href="#" class="submenu-link"><i class="bi bi-envelope"></i>Email Templates</a></li>
            </ul>
          </li>

          <!-- Single Link: Help & Documentation -->
          <li class="nav-item">
            <a href="#" class="nav-link-custom" id="navDocs">
              <div class="link-left">
                <span class="nav-icon"><i class="bi bi-journal-code"></i></span>
                <span class="nav-text">Documentation</span>
              </div>
            </a>
          </li>
        </ul>

      </div>

    </aside>