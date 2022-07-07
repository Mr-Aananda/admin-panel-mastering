  <!-- Start aside =================================== -->
  <aside id="page-aside">


    <!-- Start aside button bar =================================== -->
    <div class="left-icon-wrap">


      <!-- Start logo =================================== -->
      <a class="navbar-brand" href="index.html">
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


          <!-- Start fixt title =================================== -->
          <div class="fixt-title">
            <p>Pages</p>
          </div>
          <!-- End fixt title =================================== -->

          <!-- Start components single menus =================================== -->
          <ul class="accordion" id="page">
            <li class="accordion-item">
              <a href="{{route('dashboard')}}" class="sigle-nav-link" id="is-menu-active">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="empty_page.html" class="sigle-nav-link">
                <i class="bi bi-clipboard"></i>
                <span>Empty page</span>
              </a>
            </li>

            <li class="accordion-item">
              <a href="pages/chatbox.html" class="sigle-nav-link">
                <i class="bi bi-chat-dots"></i>
                <span>chatbox</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="pages/mail_template.html" class="sigle-nav-link">
                <i class="bi bi-envelope-paper"></i>
                <span>Mail template</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="pages/screen_lock.html" class="sigle-nav-link">
                <i class="bi bi-file-earmark-lock"></i>
                <span>Screen lock</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="pages/under_construction.html" class="sigle-nav-link">
                <i class="bi bi-tools"></i>
                <span>Under construction </span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="pages/copyright.html" class="sigle-nav-link">
                <i class="bi bi-clipboard-check"></i>
                <span>Copyright</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="pages/license.html" class="sigle-nav-link">
                <i class="bi bi-app"></i>
                <span>License</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="pages/support.html" class="sigle-nav-link">
                <i class="bi bi-question-circle"></i>
                <span>Support</span>
              </a>
            </li>


            <li class="accordion-item">
              <span class="accordion-item-title mt-2">Dropdown</span>
            </li>

            <li class="accordion-item">
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#authentication"
                aria-expanded="false" aria-controls="authentication">
                <i class="bi bi-fingerprint"></i>
                <span class="me-auto">authentication</span>
                <i class="bi bi-chevron-left"></i>
              </a>

              <ul id="authentication" class="accordion-collapse collapse" data-bs-parent="#page">
                <li>
                  <a href="pages/auth_login.html" class="nav-link"><span>Login</span></a>

                </li>
                <li>
                  <a href="pages/auth_register.html" class="nav-link"><span>Register</span></a>
                </li>
                <li>
                  <a href="pages/auth_varify_email.html" class="nav-link"><span>varify email</span>
                  </a>
                </li>
                <li>
                  <a href="pages/auth_forgot_pass.html" class="nav-link"><span>forgot
                      password</span></a>
                </li>
                <li>
                  <a href="pages/auth_reset_pass.html" class="nav-link"><span>reset
                      password</span></a>
                </li>
              </ul>
            </li>



            <li class="accordion-item">
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#demo-item"
                aria-expanded="false" aria-controls="demo-item">
                <i class="bi bi-diagram-3"></i>
                <span class="me-auto">Demo item</span>
                <i class="bi bi-chevron-left"></i>
              </a>

              <ul id="demo-item" class="accordion-collapse collapse" data-bs-parent="#page">
                <li>
                  <a href="pages/item_records.html" class="nav-link"><span>All records</span></a>
                </li>
                <li>
                  <a href="pages/item_details.html" class="nav-link"><span>view single
                      item</span></a>
                </li>
                <li>
                  <a href="pages/item_entry.html" class="nav-link"><span>New entry</span></a>
                </li>
              </ul>
            </li>




            <li class="accordion-item">
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#media"
                aria-expanded="false" aria-controls="media">
                <i class="bi bi-images"></i>
                <span class="me-auto">Media</span>
                <i class="bi bi-chevron-left"></i>
              </a>

              <ul id="media" class="accordion-collapse collapse" data-bs-parent="#page">
                <li>
                  <a href="pages/media_gallery.html" class="nav-link"><span>Media
                      gallery</span></a>
                </li>
                <li>
                  <a href="pages/media_album.html" class="nav-link"><span>Media album</span></a>
                </li>
                <li>
                  <a href="pages/media_upload.html" class="nav-link"><span>Media upload</span></a>
                </li>
              </ul>
            </li>


            <li class="accordion-item">
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#receipt"
                aria-expanded="false" aria-controls="receipt">
                <i class="bi bi-receipt"></i>
                <span class="me-auto">receipt</span>
                <i class="bi bi-chevron-left"></i>
              </a>

              <ul id="receipt" class="accordion-collapse collapse" data-bs-parent="#page">

                <li>
                  <a href="pages/invoice.html" class="nav-link"><span>Invoice</span></a>
                </li>
                <li>
                  <a href="pages/money_receipt.html" class="nav-link"><span>Money receipt</span></a>
                </li>
              </ul>
            </li>






            <li class="accordion-item">
              <a href="#" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#error"
                aria-expanded="false" aria-controls="error">
                <i class="bi bi-exclamation-diamond"></i>
                <span class="me-auto">errors</span>
                <i class="bi bi-chevron-left"></i>
              </a>

              <ul id="error" class="accordion-collapse collapse" data-bs-parent="#page">
                <li>
                  <a href="pages/error_404.html" class="nav-link"><span>404 error</span></a>
                </li>
                <li>
                  <a href="pages/error_500.html" class="nav-link"><span>500 error</span></a>
                </li>
                <li>
                  <a href="pages/error_503.html" class="nav-link"><span>503 error</span></a>
                </li>
              </ul>
            </li>




          </ul>
          <!-- End components single menus =================================== -->


        </div>
        <!-- End pages menu list =================================== -->

        <!-- Start components menu list =================================== -->
        <div class="tab-pane fade" id="v-pills-components" role="tabpanel" aria-labelledby="v-pills-components-tab">

          <!-- Start fixt title =================================== -->
          <div class="fixt-title">
            <p>Components</p>
          </div>
          <!-- End fixt title =================================== -->



          <!-- Start menus =================================== -->
          <ul class="accordion">
            <li class="accordion-item">
              <a href="./components/table.html" class="sigle-nav-link">
                <i class="bi bi-table"></i>
                <span>Table</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/form.html" class="sigle-nav-link">
                <i class="bi bi-input-cursor"></i>
                <span>Form</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/button.html" class="sigle-nav-link">
                <i class="bi bi-menu-button-fill"></i>
                <span>Button</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/accordion.html" class="sigle-nav-link">
                <i class="bi bi-view-list"></i>
                <span>Accordion</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/card.html" class="sigle-nav-link">
                <i class="bi bi-postcard"></i>
                <span>Card</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/alerts.html" class="sigle-nav-link">
                <i class="bi bi-exclamation-diamond"></i>
                <span>Alerts</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/breadcrumb.html" class="sigle-nav-link">
                <i class="bi bi-link"></i>
                <span>Breadcrumb</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/carousel.html" class="sigle-nav-link">
                <i class="bi bi-file-slides"></i>
                <span>Carousel</span>
              </a>
            </li>

            <li class="accordion-item">
              <a href="./components/List_group.html" class="sigle-nav-link">
                <i class="bi bi-card-checklist"></i>
                <span>List group</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/modal.html" class="sigle-nav-link">
                <i class="bi bi-aspect-ratio"></i>
                <span>Modal</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/pagination.html" class="sigle-nav-link">
                <i class="bi bi-123"></i>
                <span>Pagination</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/lazy_loader.html" class="sigle-nav-link">
                <i class="bi bi-arrow-clockwise"></i>
                <span>lazy loader</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/progressbar.html" class="sigle-nav-link">
                <i class="bi bi-kanban"></i>
                <span>Progressbar</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/tooltips.html" class="sigle-nav-link">
                <i class="bi bi-chat-square-dots"></i>
                <span>Tooltips</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/text_editor.html" class="sigle-nav-link">
                <i class="bi bi-postcard"></i>
                <span>Text editor</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/world_map.html" class="sigle-nav-link">
                <i class="bi bi-map"></i>
                <span>World map</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/country_map.html" class="sigle-nav-link">
                <i class="bi bi-map"></i>
                <span>Country map</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/Chart.html" class="sigle-nav-link">
                <i class="bi bi-bar-chart"></i>
                <span>Chart</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/calendar.html" class="sigle-nav-link">
                <i class="bi bi-calendar-date"></i>
                <span>Calendar</span>
              </a>
            </li>
            <li class="accordion-item">
              <a href="./components/calculator.html" class="sigle-nav-link">
                <i class="bi bi-calculator"></i>
                <span>calculator</span>
              </a>
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
