<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="/ " class="app-brand-link">
              
                
                 
              </span>
              <img width="" height="50" src="{{ asset('assets/img/cmr.png')}}" alt="">
              <!-- <span class="app-brand-text demo menu-text fw-bold ms-2">sneat</span> -->
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
              <i class="bx bx-chevron-left bx-sm d-flex align-items-center justify-content-center"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboards -->
            <li class="menu-item active open">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-home-smile"></i>
                <div class="text-truncate" data-i18n="Dashboards">Dashboards</div>
               
              </a>
              <ul class="menu-sub">
                <li class="menu-item active">
                  <a href="{{ url('/dashboard')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Analytics">Show Analytics</div>
                  </a>
                </li>
               
              </ul>
            </li>
      <!-- master  -->
      <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Master</div>
              </a>

              <ul class="menu-sub">
             

                <!-- corridor master -->
                                        <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Corridor Master</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('corridor')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('corridor/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>

                <!-- corridor msater ends -->

                <!-- station master starts -->

                                          <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Station Master</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('station')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('station/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>
                <!-- station master ends -->

                <!-- manual master starts -->
                                          <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Manual Master</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('manual')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('manual/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>

                <!-- manual master ends -->


                <!-- Designation master starts -->
                                      <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Designation Master</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('designation')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('designation/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>

                <!-- Designation master ends -->

                <!-- Department master starts -->
                                     <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Department Master</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('department')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('department/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>

                <!-- Department master ends -->
                 <!-- Register master starts -->
                                       <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Register Master</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('registers')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('registers/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>

                 <!-- Register master ends -->
             
               
              </ul>
            </li>

      <!-- main master ends -->





      <!-- Main Register starts here -->
  <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Registers</div>
              </a>

              <ul class="menu-sub">
             

                <!-- Station Shift master -->
                                        <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Station shift Registers</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('stationshift')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('stationshift/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>

                <!-- Station Shift ends -->


                <!-- Key Register -->
                <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Key Registers</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('stationshift')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('stationshift/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>

                
              <!-- Possession Register -->
              <li class="menu-item">
                                          <a href="javascript:void(0);" class="menu-link menu-toggle">
                                            <i class="menu-icon tf-icons bx bx-layout"></i>
                                            <div class="text-truncate" data-i18n="Layouts">Possession Registers</div>
                                          </a>

                                          <ul class="menu-sub">
                                          <li class="menu-item">
                                              <a href="{{ url('stationshift')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Show</div>
                                              </a>
                                            </li>
                                            <li class="menu-item">
                                              <a href="{{ url('stationshift/create')}}" class="menu-link">
                                                <div class="text-truncate" data-i18n="Without menu">Create</div>
                                              </a>
                                            </li>
                                          
                                          
                                          </ul>
                                        </li>
         

             
               
              </ul>
            </li>


      <!-- Main Register Ends here -->



            <!-- permissions -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Permissions</div>
              </a>

              <ul class="menu-sub">
              <li class="menu-item">
                  <a href="{{ url('permissions')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Show</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('permissions/create')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Create</div>
                  </a>
                </li>
               
               
              </ul>
            </li>

            <!-- roles -->
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Roles</div>
              </a>

              <ul class="menu-sub">
              <li class="menu-item">
                  <a href="{{ url('roles')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Show</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('roles/create')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Create</div>
                  </a>
                </li>
               
              
               
              </ul>
            </li>


             <!-- Users -->
             <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Users</div>
              </a>

              <ul class="menu-sub">
              <li class="menu-item">
                  <a href="{{ url('users')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Show</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('users/create')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Create</div>
                  </a>
                </li>

          </ul>

          

                <!-- incident register -->
                  <!-- Users -->
                  <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div class="text-truncate" data-i18n="Layouts">Incident Report</div>
              </a>

              <ul class="menu-sub">
              <li class="menu-item">
                  <a href="{{ url('incident')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Show</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="{{ url('incident/create')}}" class="menu-link">
                    <div class="text-truncate" data-i18n="Without menu">Create</div>
                  </a>
                </li>
         

                </ul>
        </aside>
      

        
        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-4 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-6" href="javascript:void(0)">
                <i class="bx bx-menu bx-md"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search bx-md"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none ps-1 ps-sm-2"
                    placeholder="Search..."
                    aria-label="Search..." />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                <li class="nav-item lh-1 me-4">
                  <a
                    class="github-button"
                    href="https://github.com/themeselection/sneat-html-admin-template-free"
                    data-icon="octicon-star"
                    data-size="large"
                    data-show-count="true"
                    aria-label="Star themeselection/sneat-html-admin-template-free on GitHub"
                    >Star</a
                  >
                </li>

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">John Doe</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="bx bx-user bx-md me-3"></i><span>My Profile</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#"> <i class="bx bx-cog bx-md me-3"></i><span>Settings</span> </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <span class="d-flex align-items-center align-middle">
                          <i class="flex-shrink-0 bx bx-credit-card bx-md me-3"></i
                          ><span class="flex-grow-1 align-middle">Billing Plan</span>
                          <span class="flex-shrink-0 badge rounded-pill bg-danger">4</span>
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="bx bx-power-off bx-md me-3"></i><span>Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->
