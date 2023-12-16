<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
      <!-- Dark Logo-->
      <a href="index.html" class="logo logo-dark">
        <span class="logo-sm">
          <img src="{{asset("assets/images")}}/logo-sm.png" alt="" height="22" />
        </span>
        <span class="logo-lg">
          <img src="{{asset("assets/images")}}/logo-dark.png" alt="" height="17" />
        </span>
      </a>
      <!-- Light Logo-->
      <a href="index.html" class="logo logo-light">
        <span class="logo-sm">
          <img src="{{asset("assets/images")}}/logo-sm.png" alt="" height="22" />
        </span>
        <span class="logo-lg">
          <img src="{{asset("assets/images")}}/logo-light.png" alt="" height="17" />
        </span>
      </a>
      <button
        type="button"
        class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
        id="vertical-hover"
      >
        <i class="ri-record-circle-line"></i>
      </button>
    </div>

    <div id="scrollbar">
      <div class="container-fluid">
        <div id="two-column-menu"></div>
        <ul class="navbar-nav" id="navbar-nav">
          <li class="menu-title"><span data-key="t-menu">Menu</span></li>
          <li class="nav-item">
            <a
              class="nav-link menu-link"
              href="#sidebarDashboards"
              data-bs-toggle="collapse"
              role="button"
              aria-expanded="false"
              aria-controls="sidebarDashboards"
            >
              <i data-feather="home" class="icon-dual"></i>
              <span data-key="t-dashboards">Dashboards</span>
            </a>
            <div class="collapse menu-dropdown" id="sidebarDashboards">
              <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                  <a
                    href="{{route("add.product")}}"
                    class="nav-link"
                    data-key="t-analytics"
                  >
                    Add Product
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="{{route("view.all.product")}}"
                    class="nav-link"
                    data-key="t-crm"
                  >
                    View All Product
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="{{route("order.project")}}"
                    class="nav-link"
                    data-key="t-ecommerce"
                  >
                    Product Order
                  </a>
                </li>
                <li class="nav-item">
                  <a
                    href="{{route("orders.all")}}"
                    class="nav-link"
                    data-key="t-crypto"
                  >
                    All Oders List
                  </a>
                </li>
                
              </ul>
            </div>
          </li>
          

        </ul>
      </div>
      <!-- Sidebar -->
    </div>

    <div class="sidebar-background"></div>
  </div>