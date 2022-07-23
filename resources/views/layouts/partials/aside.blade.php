@php
    $currentRouteName = Route::currentRouteName();
    [$currentRoute, $routeName] = explode('.', $currentRouteName);

    // print_r($currentRouteName);
@endphp

  <!-- Start aside =================================== -->
  <aside id="page-aside">


    <!-- Start aside button bar =================================== -->
    <div class="left-icon-wrap">


      <!-- Start logo =================================== -->
      <a class="navbar-brand" href="{{route('dashboard.index')}}">
        <x-logos.icon-logo />
      </a>
      <!-- End logo =================================== -->

      <!-- Start tad buttons =================================== -->
      <div class="nav nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

        <!-- Start page button =================================== -->
        <button class="nav-link" title="Pages" id="v-pills-pages-tab" data-bs-toggle="pill"
          data-bs-target="#v-pills-pages" type="button" role="tab" aria-controls="v-pills-pages" aria-selected="false">
          <i class="bi bi-display"></i>
        </button>
        <!-- End page button =================================== -->


        <!-- Start component button =================================== -->
        <button class="nav-link" title="Components" id="v-pills-components-tab" data-bs-toggle="pill"
          data-bs-target="#v-pills-components" type="button" role="tab" aria-controls="v-pills-components"
          aria-selected="false">
          <i class="bi bi-code-square"></i>
        </button>
        <!-- End component button =================================== -->
      </div>
      <!-- End tad buttons =================================== -->

      <!-- Start aside Expand & logout button =================================== -->
      <div class="footer-button">
        <button class="button" onclick="expandFunction()">
          <i class="bi bi-chevron-right"></i>
        </button>
        <button class="button">
          <i class="bi bi-box-arrow-left"></i>
        </button>
      </div>
      <!-- End aside Expand & logout button =================================== -->
    </div>
    <!-- End aside button bar =================================== -->


    <!-- Start aside menu bar =================================== -->
    <div class="right-menu-wrap">
      <div class="tab-content" id="v-pills-tabContent">


        <!-- Start pages menu list =================================== -->
        <div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">

          <div class="fixt-title">
            <p>Pages</p>
          </div>


          <!-- Start components dropdown menus =================================== -->
            <ul class="accordion" id="page">
                <li class="accordion-item">
                    <a href="{{route('dashboard.index')}}" class="sigle-nav-link {{ ($currentRouteName) == 'dashboard.index' ? 'active' : '' }}">
                        <i class="bi bi-speedometer2"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="accordion-item">
                    <span class="accordion-item-title mt-2">Basic</span>
                </li>

                <li class="accordion-item">
                    <a
                    href="#"
                    class="accordion-button {{ ($currentRoute == 'demo') ? '' : 'collapsed' }}"
                    data-bs-toggle="collapse"
                    data-bs-target="#demo"
                    aria-expanded="{{ ($currentRoute == 'demo') ? 'true' : 'false' }}"
                    aria-controls="demo">
                        <i class="bi bi-fingerprint"></i>
                            <span class="me-auto">Demo</span>
                        <i class="bi bi-chevron-left"></i>
                    </a>

                  <ul id="demo"
                    class="accordion-collapse collapse {{ ($currentRoute == 'demo') ? 'show' : '' }}"
                    data-bs-parent="#page">
                    <li>
                        <a href="{{route('demo.index')}}" class="nav-link {{ ($currentRouteName == 'demo.index') ? 'active' : '' }}" class="nav-link"><span>All records</span></a>

                    </li>
                    <li>
                        <a href="{{route('demo.create')}}" class="nav-link {{ ($currentRouteName == 'demo.create') ? 'active' : '' }}"><span>New entry</span></a>
                    </li>
                  </ul>
                </li>

            </ul>

        </div>
        <!-- End pages menu list =================================== -->

        <!-- Start components/settings menu list =================================== -->
        <div class="tab-pane fade" id="v-pills-components" role="tabpanel" aria-labelledby="v-pills-components-tab">

          <!-- Start fixt title =================================== -->
          <div class="fixt-title">
            <p>Components</p>
          </div>
          <!-- End fixt title =================================== -->


          <!-- Start menus =================================== -->
          <ul class="accordion">
                <li class="accordion-item">
                    <span class="accordion-item-title mt-2">Settings</span>
                </li>
            <li class="accordion-item">
                <a href="#"
                    class="accordion-button {{ ($currentRoute == 'demo') ? '' : 'collapsed' }}"
                    data-bs-toggle="collapse"
                    data-bs-target="#demo"
                    aria-expanded="{{ ($currentRoute == 'demo') ? 'true' : 'false' }}"
                    aria-controls="demo">
                        <i class="bi bi-fingerprint"></i>
                            <span class="me-auto">Demo</span>
                        <i class="bi bi-chevron-left"></i>
                </a>

                <ul id="demo"
                    class="accordion-collapse collapse {{ ($currentRoute == 'demo') ? 'show' : '' }}"
                    data-bs-parent="#page">
                    <li>
                        <a href="{{route('demo.index')}}" class="nav-link {{ ($currentRouteName == 'demo.index') ? 'active' : '' }}" class="nav-link"><span>All records</span></a>

                    </li>
                    <li>
                        <a href="{{route('demo.create')}}" class="nav-link {{ ($currentRouteName == 'demo.create') ? 'active' : '' }}"><span>New entry</span></a>
                    </li>
                </ul>
            </li>

          </ul>
          <!-- End menus =================================== -->


        </div>
        <!-- End components menu list =================================== -->

      </div>
    </div>
    <!-- End aside menu bar =================================== -->

  </aside>
  <!-- End aside =================================== -->


  <!-- Start aside background Shadow =================================== -->
  <div id="aside-layer" onclick="expandFunction()"></div>
  <!-- End aside background Shadow =================================== -->
