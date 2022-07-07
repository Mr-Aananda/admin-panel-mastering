 <nav class="navbar bg-color">
      <div class="container-fluid">
        <ul class="navbar-wrap ms-auto mb-2 mb-lg-0">

          <!-- Start search button =================================== -->
          <li class="nav-item" onclick="shearchFunction()">
            <a class="nav-link " href="#"><i class="bi bi-search"></i></a>
          </li>
          <!-- End search button =================================== -->




          <!-- Start translate button =================================== -->
          <li class="nav-item">
            <a class="nav-link " href="#"><i class="bi bi-translate"></i></a>
          </li>
          <!-- End translate button =================================== -->


          <!-- Start dark theme button =================================== -->
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="themeColorChange()"><i class="bi bi-moon-stars"
                id="bi-moon-stars"></i></a>
          </li>
          <!-- End dark theme button =================================== -->


          <!-- Start notification =================================== -->
          <li class="nav-item notification dropdown">


            <!-- Start notification button =================================== -->
            <a class="nav-link" href="#" id="notification-dropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false"><i class="bi bi-bell"></i>
              <!-- badge -->
              <span class="badge badge-counter">1</span>
            </a>
            <!-- End notification button =================================== -->

            <!-- Start notification Dropdoun memu =================================== -->
            <ul class="dropdown-menu" aria-labelledby="notification-dropdown">
              <li>
                <a class="dropdown-item isseen" href="#">
                  <img src="{{vite_asset("resources/template/assets/images/user/baky.jpg")}}" alt="baky">
                  <div>
                    <p><strong>Baky Billah Khan Pathan</strong></p>
                    <p><small>Admin</small></p>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item isseen" href="#">
                  <img src="{{vite_asset("resources/template/assets/icons/success.svg")}}" alt="success">
                  <div>
                    <p><strong>Success notification</strong></p>
                    <p><small>Success</small></p>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <img src="{{vite_asset("resources/template/assets/icons/warning.svg")}}" alt="success">
                  <div>
                    <p><strong>Warning notification</strong></p>
                    <p><small>Warning</small></p>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item isseen" href="#">
                  <img src="{{vite_asset("resources/template/assets/icons/danger.svg")}}" alt="success">
                  <div>
                    <p><strong>Danger notification </strong></p>
                    <p><small>Danger Danger Danger Danger Danger Danger Danger Danger Danger
                      </small></p>
                  </div>
                </a>
              </li>
            </ul>
            <!-- End notification Dropdoun memu =================================== -->
          </li>
          <!-- End notification =================================== -->



          <!-- Start service =================================== -->
          <li class="nav-item service dropdown">



            <!-- Start service dropdown button =================================== -->
            <a class="nav-link dropdown-toggl" href="#" id="service-dropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <i class="bi bi-grid"></i>
              <!-- badge-circle -->
              <span class="badge-circle"></span>
            </a>
            <!-- End service dropdown button =================================== -->


            <!-- Start service dropdown menus =================================== -->
            <ul class="dropdown-menu" aria-labelledby="service-dropdown">
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-speedometer"></i>
                  <span>Dashboard </span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-calculator"></i>
                  <span> POS</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-people"></i>
                  <span>HR</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-chat-left-dots"></i>
                  <span>SMS</span></a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-speedometer"></i>
                  <span>Dashboard </span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-calculator"></i>
                  <span> POS</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-people"></i>
                  <span>HR</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-chat-left-dots"></i>
                  <span>SMS</span></a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-speedometer"></i>
                  <span>Dashboard </span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-calculator"></i>
                  <span> POS</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-people"></i>
                  <span>HR</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-chat-left-dots"></i>
                  <span>SMS</span></a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-speedometer"></i>
                  <span>Dashboard </span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-calculator"></i>
                  <span> POS</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-people"></i>
                  <span>HR</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-chat-left-dots"></i>
                  <span>SMS</span></a>
              </li>
            </ul>
            <!-- End service dropdown menus =================================== -->
          </li>
          <!-- End service =================================== -->


          <!-- Start full screen button =================================== -->
          <li class="nav-item d-md-inline d-none">
            <a class="nav-link" href="#" onclick="toggleFullScreen()">
              <i class="bi bi-arrows-fullscreen" id="bi-arrows-fullscreen"></i>
            </a>
          </li>
          <!-- End full screen button =================================== -->


          <!-- Start user  =================================== -->
          <li class="nav-item user dropdown">

            <!-- Start user dropdown button  =================================== -->
            <a class="nav-link dropdown-toggl" href="#" id="user-dropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="{{vite_asset("resources/template/assets/images/user/baky.jpg")}}" alt="">

              <!-- badge-circle Active-->
              <span class="badge-circle active"></span>
            </a>
            <!-- End user dropdown button  =================================== -->

            <!-- Start user dropdown menu  =================================== -->
            <ul class="dropdown-menu" aria-labelledby="user-dropdown">
              <li>
                <a class="dropdown-item profile" href="./profile.html">
                  <img src="{{vite_asset("resources/template/assets/images/user/baky.jpg")}}" alt="">
                  <div>
                    <h5>baky billah khan pathan</h5>
                    <p>Admin</p>
                  </div>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="./settings.html">
                  <i class="bi bi-gear"></i>
                  <span>Settings & Privacy</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="./support.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Help & Support</span>
                </a>
              </li>
              <li>
                <a class="dropdown-item" href="#">
                  <i class="bi bi-box-arrow-left"></i>
                  <span>Logout</span>
                </a>
              </li>
            </ul>
            <!-- End user dropdown menu  =================================== -->

          </li>
          <!-- End user  =================================== -->

        </ul>

        <!-- Start search-bar =================================== -->
        <div class="search-bar" id="search-bar">
          <form class="h-100">
            <input class="form-control" id="search-input" type="text" placeholder="Search">
            <button type="button" class="close-button" onclick="shearchFunction()"><i class="bi bi-x-lg"></i></button>
          </form>
        </div>
        <!-- End search-bar =================================== -->
      </div>
    </nav>
