      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
              <a class="sidebar-brand brand-logo" href="index.html"><img
                      src="{{ asset('assets') }}/admin/images/logo.svg" alt="logo" /></a>
              <a class="sidebar-brand brand-logo-mini" href="index.html"><img
                      src="{{ asset('assets') }}/admin/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <ul class="nav">
              <li class="nav-item profile">
                  <div class="profile-desc">
                      <div class="profile-pic">
                          <div class="count-indicator">
                              <img class="img-xs rounded-circle "
                                  src="{{ asset('assets') }}/admin/images/faces/face15.jpg" alt="">
                              <span class="count bg-success"></span>
                          </div>
                          <div class="profile-name">
                              <h5 class="mb-0 font-weight-normal">Henry Klein</h5>
                              <span>Gold Member</span>
                          </div>
                      </div>
                      <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                      <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list"
                          aria-labelledby="profile-dropdown">
                          <a href="#" class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-settings text-primary"></i>
                                  </div>
                              </div>
                              <div class="preview-item-content">
                                  <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                              </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-onepassword  text-info"></i>
                                  </div>
                              </div>
                              <div class="preview-item-content">
                                  <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                              </div>
                          </a>
                          <div class="dropdown-divider"></div>
                          <a href="#" class="dropdown-item preview-item">
                              <div class="preview-thumbnail">
                                  <div class="preview-icon bg-dark rounded-circle">
                                      <i class="mdi mdi-calendar-today text-success"></i>
                                  </div>
                              </div>
                              <div class="preview-item-content">
                                  <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                              </div>
                          </a>
                      </div>
                  </div>
              </li>

              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/">
                      <span class="menu-icon">
                          <i class="mdi mdi-home"></i>
                      </span>
                      <span class="menu-title">DashBoard</span>
                  </a>
              </li>

              <li class="nav-item menu-items">
                  <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false"
                      aria-controls="ui-basic">
                      <span class="menu-icon">
                          <i class="mdi mdi-human-greeting"></i>
                      </span>
                      <span class="menu-title">Orders</span>
                      <i class="menu-arrow"></i>
                  </a>
                  <div class="collapse" id="ui-basic">
                      <ul class="nav flex-column sub-menu">
                          <li class="nav-item menu-items">
                              <a class="nav-link" href="/admin/payment">
                                  <span class="menu-icon">
                                      <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                  </span>
                                  <span class="menu-title">Payment</span>
                              </a>
                          </li>
                          <li class="nav-item menu-items">
                              <a class="nav-link" href="/admin/request">
                                  <span class="menu-icon">
                                      <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                                  </span>
                                  <span class="menu-title">Request</span>
                              </a>
                          </li>
                      </ul>
                  </div>
              </li>


              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/menu">
                      <span class="menu-icon">
                          <i class="mdi mdi-checkbox-blank-circle-outline"></i>
                      </span>
                      <span class="menu-title">Menu</span>
                  </a>
              </li>

              </li>

              </li>
              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/comment">
                      <span class="menu-icon">
                          <i class="mdi mdi-comment-processing-outline"></i>
                      </span>
                      <span class="menu-title">Comment</span>
                  </a>
              </li>

              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/content">
                      <span class="menu-icon">
                          <i class="mdi mdi-content-copy"></i>
                      </span>
                      <span class="menu-title">Content</span>
                  </a>
              </li>

              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/image">
                      <span class="menu-icon">
                          <i class="mdi mdi-image"></i>
                      </span>
                      <span class="menu-title">İmage</span>
                  </a>
              </li>
              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/faq">
                      <span class="menu-icon">
                          <i class="mdi mdi-comment-question-outline"></i>
                      </span>
                      <span class="menu-title">FAQ</span>
                  </a>
              </li>
              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/messages">
                      <span class="menu-icon">
                          <i class="mdi mdi-email"></i>
                      </span>
                      <span class="menu-title">Messages</span>
                  </a>
              </li>
              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/user">
                      <span class="menu-icon">
                          <i class="mdi mdi-account"></i>
                      </span>
                      <span class="menu-title">Users</span>
                  </a>
              </li>

              <li class="nav-item nav-category">
                  <span class="nav-link">Labels</span>
              </li>


              <li class="nav-item menu-items">
                  <a class="nav-link" href="/admin/setting">
                      <span class="menu-icon">
                          <i class="mdi mdi-settings"></i>
                      </span>
                      <span class="menu-title">Settings</span>
                  </a>
              </li>
              </li>


      </nav>
