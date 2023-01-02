<template>
  <div>
    <div class="page">
      <!-- main-sidebar -->
      <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
      <aside class="app-sidebar sidebar-scroll" v-if="isloggedin">
        <div class="main-sidebar-header active">
          <a class="desktop-logo logo-light active" href="index.html"
            ><img src="assets/img/brand/logo.png" class="main-logo" alt="logo"
          /></a>
          <a class="desktop-logo logo-dark active" href="index.html"
            ><img
              src="assets/img/brand/logo-white.png"
              class="main-logo dark-theme"
              alt="logo"
          /></a>
          <a class="logo-icon mobile-logo icon-light active" href="index.html"
            ><img
              src="assets/img/brand/favicon.png"
              class="logo-icon"
              alt="logo"
          /></a>
          <a class="logo-icon mobile-logo icon-dark active" href="index.html"
            ><img
              src="assets/img/brand/favicon-white.png"
              class="logo-icon dark-theme"
              alt="logo"
          /></a>
        </div>
        <div class="main-sidemenu">
          <div class="app-sidebar__user clearfix">
            <div class="dropdown user-pro-body">
              <div class="">
                <img
                  alt="user-img"
                  class="avatar avatar-xl brround"
                  src="assets/img/faces/6.jpg"
                /><span class="avatar-status profile-status bg-green"></span>
              </div>
              <div class="user-info">
                <h4 class="fw-semibold mt-3 mb-0">Petey Cruiser</h4>
                <span class="mb-0 text-muted">Premium Member</span>
              </div>
            </div>
          </div>
          <ul class="side-menu">
            <li class="side-item side-item-category">ເມນູຫຼັກ</li>
            <li class="slide">
             
              <router-link class="side-menu__item" to="/store"
                ><span class="side-menu__label">
                  <i class="fa fa-cubes mx-2"></i> Store</span
                ><span class="badge bg-success text-light" id="bg-side-text"
                  >1</span
                ></router-link>
            </li>
            <li class="slide">
              <router-link class="side-menu__item" to="/pos"
                ><span class="side-menu__label"
                  ><i class="fa fa-cart-arrow-down mx-2"></i> POS</span
                ><span class="badge bg-success text-light" id="bg-side-text"
                  >1</span
                ></router-link>
            </li>
            <li class="slide">
              <router-link class="side-menu__item" to="/transection"
                ><span class="side-menu__label"
                  ><i class="fa fa-signal mx-2"></i> Transection</span
                ><span class="badge bg-success text-light" id="bg-side-text"
                  >1</span
                ></router-link>
            </li>
            <li class="slide">
              <router-link class="side-menu__item" to="/report"
                ><span class="side-menu__label">
                  <i class="far fa-file-alt mx-2"></i> Report</span
                ><span class="badge bg-success text-light" id="bg-side-text"
                  >1</span
                ></router-link>
            </li>
            
          </ul>
        </div>
      </aside>
      <!-- main-sidebar -->

      <!-- main-content main-content app-content -->
      <div :class="appclass">
        <!-- main-header -->
        <div class="main-header sticky side-header nav nav-item" v-if="isloggedin">
          <div class="container-fluid">
            <div class="main-header-left">
              <div class="responsive-logo">
                <a href="index.html"
                  ><img
                    src="assets/img/brand/logo.png"
                    class="logo-1"
                    alt="logo"
                /></a>
                <a href="index.html"
                  ><img
                    src="assets/img/brand/logo-white.png"
                    class="dark-logo-1"
                    alt="logo"
                /></a>
                <a href="index.html"
                  ><img
                    src="assets/img/brand/favicon.png"
                    class="logo-2"
                    alt="logo"
                /></a>
                <a href="index.html"
                  ><img
                    src="assets/img/brand/favicon-white.png"
                    class="dark-logo-2"
                    alt="logo"
                /></a>
              </div>
              <div class="app-sidebar__toggle" data-bs-toggle="sidebar">
                <a class="open-toggle" href="#"
                  ><i class="header-icon fe fe-align-left"></i
                ></a>
                <a class="close-toggle" href="#"
                  ><i class="header-icons fe fe-x"></i
                ></a>
              </div>
              <div
                class="main-header-center ms-3 d-sm-none d-md-none d-lg-block"
              >
                <input
                  class="form-control"
                  placeholder="Search for anything..."
                  type="search"
                />
                <button class="btn">
                  <i class="fas fa-search d-none d-md-block"></i>
                </button>
              </div>
            </div>
            <div class="main-header-right">
              <ul class="nav nav-item navbar-nav-right ms-auto">
                <li class="nav">
                  <div class="dropdown nav-itemd-none d-md-flex">
                    <a
                      href="#"
                      class="d-flex nav-item country-flag1"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      <span
                        class="
                          avatar
                          country-Flag
                          me-0
                          align-self-center
                          bg-transparent
                        "
                        ><img src="assets/img/flags/us_flag.jpg" alt="img"
                      /></span>
                      <div class="my-auto">
                        <strong class="me-2 ms-2 my-auto">English</strong>
                      </div>
                    </a>
                    <div
                      class="
                        dropdown-menu dropdown-menu-left dropdown-menu-arrow
                      "
                      x-placement="bottom-end"
                    >
                      <a href="#" class="dropdown-item d-flex">
                        <span
                          class="avatar me-3 align-self-center bg-transparent"
                          ><img
                            src="assets/img/flags/french_flag.jpg"
                            alt="img"
                        /></span>
                        <div class="d-flex">
                          <span class="mt-2">French</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span
                          class="avatar me-3 align-self-center bg-transparent"
                          ><img
                            src="assets/img/flags/germany_flag.jpg"
                            alt="img"
                        /></span>
                        <div class="d-flex">
                          <span class="mt-2">Germany</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span
                          class="avatar me-3 align-self-center bg-transparent"
                          ><img src="assets/img/flags/italy_flag.jpg" alt="img"
                        /></span>
                        <div class="d-flex">
                          <span class="mt-2">Italy</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span
                          class="avatar me-3 align-self-center bg-transparent"
                          ><img
                            src="assets/img/flags/russia_flag.jpg"
                            alt="img"
                        /></span>
                        <div class="d-flex">
                          <span class="mt-2">Russia</span>
                        </div>
                      </a>
                      <a href="#" class="dropdown-item d-flex">
                        <span
                          class="avatar me-3 align-self-center bg-transparent"
                          ><img src="assets/img/flags/spain_flag.jpg" alt="img"
                        /></span>
                        <div class="d-flex">
                          <span class="mt-2">spain</span>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>

                <li class="nav-link" id="bs-example-navbar-collapse-1">
                  <form class="navbar-form" role="search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control"
                        placeholder="Search"
                      />
                      <span class="input-group-btn">
                        <button type="reset" class="btn btn-default">
                          <i class="fas fa-times"></i>
                        </button>
                        <button
                          type="submit"
                          class="btn btn-default nav-link resp-btn"
                        >
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            class="header-icon-svgs"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                            stroke-linecap="round"
                            stroke-linejoin="round"
                          >
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                          </svg>
                        </button>
                      </span>
                    </div>
                  </form>
                </li>

                <li class="dropdown nav-item main-header-message">
                  <a class="new nav-link" href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="header-icon-svgs"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path
                        d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"
                      ></path>
                      <polyline points="22,6 12,13 2,6"></polyline></svg
                    ><span class="pulse-danger"></span
                  ></a>
                  <div class="dropdown-menu">
                    <div class="menu-header-content bg-primary text-start">
                      <div class="d-flex">
                        <h6
                          class="
                            dropdown-title
                            mb-1
                            tx-15
                            text-white
                            fw-semibold
                          "
                        >
                          Messages
                        </h6>
                        <span
                          class="
                            badge
                            rounded-pill
                            bg-warning
                            ms-auto
                            my-auto
                            float-end
                          "
                          >Mark All Read</span
                        >
                      </div>
                      <p
                        class="
                          dropdown-title-text
                          subtext
                          mb-0
                          text-white
                          op-6
                          pb-0
                          tx-12
                        "
                      >
                        You have 4 unread messages
                      </p>
                    </div>
                    <div class="main-message-list chat-scroll">
                      <a href="#" class="p-3 d-flex border-bottom">
                        <div
                          class="drop-img cover-image"
                          data-bs-image-src="assets/img/faces/3.jpg"
                        >
                          <span class="avatar-status bg-teal"></span>
                        </div>
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5 class="mb-1 name">Petey Cruiser</h5>
                          </div>
                          <p class="mb-0 desc">
                            I'm sorry but i'm not sure how to help you with
                            that......
                          </p>
                          <p class="time mb-0 text-start float-start ms-2 mt-2">
                            Mar 15 3:55 PM
                          </p>
                        </div>
                      </a>
                      <a href="#" class="p-3 d-flex border-bottom">
                        <div
                          class="drop-img cover-image"
                          data-bs-image-src="assets/img/faces/2.jpg"
                        >
                          <span class="avatar-status bg-teal"></span>
                        </div>
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5 class="mb-1 name">Jimmy Changa</h5>
                          </div>
                          <p class="mb-0 desc">
                            All set ! Now, time to get to you now......
                          </p>
                          <p class="time mb-0 text-start float-start ms-2 mt-2">
                            Mar 06 01:12 AM
                          </p>
                        </div>
                      </a>
                      <a href="#" class="p-3 d-flex border-bottom">
                        <div
                          class="drop-img cover-image"
                          data-bs-image-src="assets/img/faces/9.jpg"
                        >
                          <span class="avatar-status bg-teal"></span>
                        </div>
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5 class="mb-1 name">Graham Cracker</h5>
                          </div>
                          <p class="mb-0 desc">
                            Are you ready to pickup your Delivery...
                          </p>
                          <p class="time mb-0 text-start float-start ms-2 mt-2">
                            Feb 25 10:35 AM
                          </p>
                        </div>
                      </a>
                      <a href="#" class="p-3 d-flex border-bottom">
                        <div
                          class="drop-img cover-image"
                          data-bs-image-src="assets/img/faces/12.jpg"
                        >
                          <span class="avatar-status bg-teal"></span>
                        </div>
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5 class="mb-1 name">Donatella Nobatti</h5>
                          </div>
                          <p class="mb-0 desc">Here are some products ...</p>
                          <p class="time mb-0 text-start float-start ms-2 mt-2">
                            Feb 12 05:12 PM
                          </p>
                        </div>
                      </a>
                      <a href="#" class="p-3 d-flex border-bottom">
                        <div
                          class="drop-img cover-image"
                          data-bs-image-src="assets/img/faces/5.jpg"
                        >
                          <span class="avatar-status bg-teal"></span>
                        </div>
                        <div class="wd-90p">
                          <div class="d-flex">
                            <h5 class="mb-1 name">Anne Fibbiyon</h5>
                          </div>
                          <p class="mb-0 desc">
                            I'm sorry but i'm not sure how...
                          </p>
                          <p class="time mb-0 text-start float-start ms-2 mt-2">
                            Jan 29 03:16 PM
                          </p>
                        </div>
                      </a>
                    </div>
                    <div class="text-center dropdown-footer">
                      <a href="text-center">VIEW ALL</a>
                    </div>
                  </div>
                </li>

                <li class="dropdown nav-item main-header-notification">
                  <a class="new nav-link" href="#">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="header-icon-svgs"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path
                        d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"
                      ></path>
                      <path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg
                    ><span class="pulse"></span
                  ></a>
                  <div class="dropdown-menu">
                    <div class="menu-header-content bg-primary text-start">
                      <div class="d-flex">
                        <h6
                          class="
                            dropdown-title
                            mb-1
                            tx-15
                            text-white
                            fw-semibold
                          "
                        >
                          Notifications
                        </h6>
                        <span
                          class="
                            badge
                            rounded-pill
                            bg-warning
                            ms-auto
                            my-auto
                            float-end
                          "
                          >Mark All Read</span
                        >
                      </div>
                      <p
                        class="
                          dropdown-title-text
                          subtext
                          mb-0
                          text-white
                          op-6
                          pb-0
                          tx-12
                        "
                      >
                        You have 4 unread Notifications
                      </p>
                    </div>
                    <div class="main-notification-list Notification-scroll">
                      <a class="d-flex p-3 border-bottom" href="#">
                        <div class="notifyimg bg-pink">
                          <i class="la la-file-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                          <h5 class="notification-label mb-1">
                            New files available
                          </h5>
                          <div class="notification-subtext">10 hour ago</div>
                        </div>
                        <div class="ms-auto">
                          <i class="las la-angle-right text-end text-muted"></i>
                        </div>
                      </a>
                      <a class="d-flex p-3 border-bottom" href="#">
                        <div class="notifyimg bg-purple">
                          <i class="la la-gem text-white"></i>
                        </div>
                        <div class="ms-3">
                          <h5 class="notification-label mb-1">
                            Updates Available
                          </h5>
                          <div class="notification-subtext">2 days ago</div>
                        </div>
                        <div class="ms-auto">
                          <i class="las la-angle-right text-end text-muted"></i>
                        </div>
                      </a>
                      <a class="d-flex p-3 border-bottom" href="#">
                        <div class="notifyimg bg-success">
                          <i class="la la-shopping-basket text-white"></i>
                        </div>
                        <div class="ms-3">
                          <h5 class="notification-label mb-1">
                            New Order Received
                          </h5>
                          <div class="notification-subtext">1 hour ago</div>
                        </div>
                        <div class="ms-auto">
                          <i class="las la-angle-right text-end text-muted"></i>
                        </div>
                      </a>
                      <a class="d-flex p-3 border-bottom" href="#">
                        <div class="notifyimg bg-warning">
                          <i class="la la-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                          <h5 class="notification-label mb-1">
                            New review received
                          </h5>
                          <div class="notification-subtext">1 day ago</div>
                        </div>
                        <div class="ms-auto">
                          <i class="las la-angle-right text-end text-muted"></i>
                        </div>
                      </a>
                      <a class="d-flex p-3 border-bottom" href="#">
                        <div class="notifyimg bg-danger">
                          <i class="la la-user-check text-white"></i>
                        </div>
                        <div class="ms-3">
                          <h5 class="notification-label mb-1">
                            22 verified registrations
                          </h5>
                          <div class="notification-subtext">2 hour ago</div>
                        </div>
                        <div class="ms-auto">
                          <i class="las la-angle-right text-end text-muted"></i>
                        </div>
                      </a>
                      <a class="d-flex p-3 border-bottom" href="#">
                        <div class="notifyimg bg-primary">
                          <i class="la la-check-circle text-white"></i>
                        </div>
                        <div class="ms-3">
                          <h5 class="notification-label mb-1">
                            Project has been approved
                          </h5>
                          <div class="notification-subtext">4 hour ago</div>
                        </div>
                        <div class="ms-auto">
                          <i class="las la-angle-right text-end text-muted"></i>
                        </div>
                      </a>
                    </div>
                    <div class="dropdown-footer">
                      <a href="">VIEW ALL</a>
                    </div>
                  </div>
                </li>

                <li class="nav-item full-screen fullscreen-button">
                  <a class="new nav-link full-screen-link" href="#"
                    ><svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="header-icon-svgs"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <path
                        d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"
                      ></path></svg
                  ></a>
                </li>

                <li class="dropdown main-profile-menu nav nav-item nav-link">
                  <a class="profile-user d-flex" href=""
                    ><img alt="" src="assets/img/faces/6.jpg"
                  /></a>
                  <div class="dropdown-menu">
                    <div class="main-header-profile bg-primary p-3">
                      <div class="d-flex wd-100p">
                        <div class="main-img-user">
                          <img alt="" src="assets/img/faces/6.jpg" class="" />
                        </div>
                        <div class="ms-3 my-auto">
                          <h6>Petey Cruiser</h6>
                          <span>Premium Member</span>
                        </div>
                      </div>
                    </div>
                    <a class="dropdown-item" href=""
                      ><i class="bx bx-user-circle"></i>Profile</a
                    >
                    <a class="dropdown-item" href=""
                      ><i class="bx bx-cog"></i> Edit Profile</a
                    >
                    <a class="dropdown-item" href=""
                      ><i class="bx bxs-inbox"></i>Inbox</a
                    >
                    <a class="dropdown-item" href=""
                      ><i class="bx bx-envelope"></i>Messages</a
                    >
                    <a class="dropdown-item" href=""
                      ><i class="bx bx-slider-alt"></i> Account Settings</a
                    >
                    <a class="dropdown-item" href="#" @click="Logout()"
                      ><i class="bx bx-log-out"></i> Sign Out</a
                    >
                  </div>
                </li>

                <li class="dropdown main-header-message right-toggle">
                  <a
                    class="nav-link pe-0"
                    data-bs-toggle="sidebar-right"
                    data-bs-target=".sidebar-right"
                  >
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="header-icon-svgs"
                      viewBox="0 0 24 24"
                      fill="none"
                      stroke="currentColor"
                      stroke-width="2"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    >
                      <line x1="3" y1="12" x2="21" y2="12"></line>
                      <line x1="3" y1="6" x2="21" y2="6"></line>
                      <line x1="3" y1="18" x2="21" y2="18"></line>
                    </svg>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- /main-header -->

        <!-- container -->
        <div class="container-fluid">
          <!-- breadcrumb -->
          <router-view></router-view>
          <!-- /row -->
        </div>
        <!-- /Container -->
      </div>
      <!-- /main-content -->

      <!-- Sidebar-right-->
      <div class="sidebar sidebar-right sidebar-animate">
        <div class="panel panel-primary card mb-0 box-shadow">
          <div class="tab-menu-heading border-0 p-3">
            <div class="card-title mb-0">Notifications</div>
            <div class="card-options ms-auto">
              <a href="#" class="sidebar-remove"><i class="fe fe-x"></i></a>
            </div>
          </div>
          <div class="panel-body tabs-menu-body latest-tasks p-0 border-0">
            <div class="tabs-menu">
              <!-- Tabs -->
              <ul class="nav panel-tabs">
                <li class="">
                  <a href="#side1" class="active" data-bs-toggle="tab"
                    ><i class="ion ion-md-chatboxes tx-18 me-2"></i> Chat</a
                  >
                </li>
                <li>
                  <a href="#side2" data-bs-toggle="tab"
                    ><i class="ion ion-md-notifications tx-18 me-2"></i>
                    Notifications</a
                  >
                </li>
                <li>
                  <a href="#side3" data-bs-toggle="tab"
                    ><i class="ion ion-md-contacts tx-18 me-2"></i> Friends</a
                  >
                </li>
              </ul>
            </div>
            <div class="tab-content">
              <div class="tab-pane active" id="side1">
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-primary brround avatar-md">CH</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>New Websites is Created</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">30 mins ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-danger brround avatar-md">N</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>Prepare For the Next Project</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">2 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-info brround avatar-md">S</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>Decide the live Discussion</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">3 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-warning brround avatar-md">K</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>Meeting at 3:00 pm</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">4 hours ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-success brround avatar-md">R</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">1 day ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-pink brround avatar-md">MS</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">1 day ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center border-bottom p-3">
                  <div class="">
                    <span class="avatar bg-purple brround avatar-md">L</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">45 minutes ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="list d-flex align-items-center p-3">
                  <div class="">
                    <span class="avatar bg-blue brround avatar-md">U</span>
                  </div>
                  <a class="wrapper w-100 ms-3" href="#">
                    <p class="mb-0 d-flex">
                      <b>Prepare for Presentation</b>
                    </p>
                    <div
                      class="d-flex justify-content-between align-items-center"
                    >
                      <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted me-1"></i>
                        <small class="text-muted ms-auto">2 days ago</small>
                        <p class="mb-0"></p>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
              <div class="tab-pane" id="side2">
                <div class="list-group list-group-flush">
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-lg brround cover-image"
                        data-bs-image-src="assets/img/faces/12.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-3">
                      <strong>Madeleine</strong> Hey! there I' am available....
                      <div class="small text-muted">3 hours ago</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-lg brround cover-image"
                        data-bs-image-src="assets/img/faces/1.jpg"
                      ></span>
                    </div>
                    <div class="ms-3">
                      <strong>Anthony</strong> New product Launching...
                      <div class="small text-muted">5 hour ago</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-lg brround cover-image"
                        data-bs-image-src="assets/img/faces/2.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> New Schedule Realease......
                      <div class="small text-muted">45 minutes ago</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-lg brround cover-image"
                        data-bs-image-src="assets/img/faces/8.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-3">
                      <strong>Madeleine</strong> Hey! there I' am available....
                      <div class="small text-muted">3 hours ago</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-lg brround cover-image"
                        data-bs-image-src="assets/img/faces/11.jpg"
                      ></span>
                    </div>
                    <div class="ms-3">
                      <strong>Anthony</strong> New product Launching...
                      <div class="small text-muted">5 hour ago</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-lg brround cover-image"
                        data-bs-image-src="assets/img/faces/6.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> New Schedule Realease......
                      <div class="small text-muted">45 minutes ago</div>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-lg brround cover-image"
                        data-bs-image-src="assets/img/faces/9.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-3">
                      <strong>Olivia</strong> Hey! there I' am available....
                      <div class="small text-muted">12 minutes ago</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="side3">
                <div class="list-group list-group-flush">
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/9.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Mozelle Belt
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/11.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Florinda Carasco
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/10.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Alina Bernier
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/2.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Zula Mclaughin
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/13.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Isidro Heide
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/12.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Mozelle Belt
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/4.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Florinda Carasco
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/7.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Alina Bernier
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/2.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Zula Mclaughin
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/14.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Isidro Heide
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a href="#" class="btn btn-sm btn-light"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/11.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Florinda Carasco
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/9.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Alina Bernier
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/15.jpg"
                        ><span class="avatar-status bg-success"></span
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Zula Mclaughin
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                  <div class="list-group-item d-flex align-items-center">
                    <div>
                      <span
                        class="avatar avatar-md brround cover-image"
                        data-bs-image-src="assets/img/faces/4.jpg"
                      ></span>
                    </div>
                    <div class="ms-2">
                      <div
                        class="fw-semibold"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                      >
                        Isidro Heide
                      </div>
                    </div>
                    <div class="ms-auto">
                      <a
                        href="#"
                        class="btn btn-sm btn-light"
                        data-bs-toggle="modal"
                        data-bs-target="#chatmodel"
                        ><i class="fab fa-facebook-messenger"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--/Sidebar-right-->

      <!-- Message Modal -->
      <div
        class="modal fade"
        id="chatmodel"
        tabindex="-1"
        role="dialog"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-dialog-right chatbox" role="document">
          <div class="modal-content chat border-0">
            <div class="card overflow-hidden mb-0 border-0">
              <!-- action-header -->
              <div class="action-header clearfix">
                <div class="float-start hidden-xs d-flex ms-2">
                  <div class="img_cont me-3">
                    <img
                      src="assets/img/faces/6.jpg"
                      class="rounded-circle user_img"
                      alt="img"
                    />
                  </div>
                  <div class="align-items-center mt-2">
                    <h4 class="text-white mb-0 fw-semibold">Daneil Scott</h4>
                    <span class="dot-label bg-success"></span
                    ><span class="me-3 text-white">online</span>
                  </div>
                </div>
                <ul class="ah-actions actions align-items-center">
                  <li class="call-icon">
                    <a
                      href=""
                      class="d-done d-md-block phone-button"
                      data-bs-toggle="modal"
                      data-bs-target="#audiomodal"
                    >
                      <i class="si si-phone"></i>
                    </a>
                  </li>
                  <li class="video-icon">
                    <a
                      href=""
                      class="d-done d-md-block phone-button"
                      data-bs-toggle="modal"
                      data-bs-target="#videomodal"
                    >
                      <i class="si si-camrecorder"></i>
                    </a>
                  </li>
                  <li class="dropdown">
                    <a href="" data-bs-toggle="dropdown" aria-expanded="true">
                      <i class="si si-options-vertical"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <li>
                        <i class="fa fa-user-circle"></i>
                        View profile
                      </li>
                      <li><i class="fa fa-users"></i>Add friends</li>
                      <li><i class="fa fa-plus"></i> Add to group</li>
                      <li><i class="fa fa-ban"></i> Block</li>
                    </ul>
                  </li>
                  <li>
                    <a
                      href=""
                      class=""
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      <span aria-hidden="true"
                        ><i class="si si-close text-white"></i
                      ></span>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- action-header end -->

              <!-- msg_card_body -->
              <div class="card-body msg_card_body">
                <div class="chat-box-single-line">
                  <abbr class="timestamp">February 1st, 2019</abbr>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/6.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                  <div class="msg_cotainer">
                    Hi, how are you Jenna Side?
                    <span class="msg_time">8:40 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <div class="msg_cotainer_send">
                    Hi Connor Paige i am good tnx how about you?
                    <span class="msg_time_send">8:55 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/9.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/6.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                  <div class="msg_cotainer">
                    I am good too, thank you for your chat template
                    <span class="msg_time">9:00 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end">
                  <div class="msg_cotainer_send">
                    You welcome Connor Paige
                    <span class="msg_time_send">9:05 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/9.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/6.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken born and I
                    will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/9.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/6.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken born and I
                    will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/9.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/6.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                  <div class="msg_cotainer">
                    Yo, Can you update Views?
                    <span class="msg_time">9:07 AM, Today</span>
                  </div>
                </div>
                <div class="d-flex justify-content-end mb-4">
                  <div class="msg_cotainer_send">
                    But I must explain to you how all this mistaken born and I
                    will give
                    <span class="msg_time_send">9:10 AM, Today</span>
                  </div>
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/9.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                </div>
                <div class="d-flex justify-content-start">
                  <div class="img_cont_msg">
                    <img
                      src="assets/img/faces/6.jpg"
                      class="rounded-circle user_img_msg"
                      alt="img"
                    />
                  </div>
                  <div class="msg_cotainer">
                    Okay Bye, text you later..
                    <span class="msg_time">9:12 AM, Today</span>
                  </div>
                </div>
              </div>
              <!-- msg_card_body end -->
              <!-- card-footer -->
              <div class="card-footer">
                <div class="msb-reply d-flex">
                  <div class="input-group">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Typing...."
                    />
                    <div class="input-group-text">
                      <button type="button" class="btn btn-primary">
                        <i class="far fa-paper-plane" aria-hidden="true"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- card-footer end -->
            </div>
          </div>
        </div>
      </div>

      <!--Video Modal -->
      <div id="videomodal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content bg-dark border-0 text-white">
            <div class="modal-body mx-auto text-center p-7">
              <h5>Valex Video call</h5>
              <img
                src="assets/img/faces/6.jpg"
                class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3"
                alt="img"
              />
              <h4 class="mb-1 fw-semibold">Daneil Scott</h4>
              <h6>Calling...</h6>
              <div class="mt-5">
                <div class="row">
                  <div class="col-4">
                    <a
                      class="icon icon-shape rounded-circle mb-0 me-3"
                      href="#"
                    >
                      <i class="fas fa-video-slash"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      class="
                        icon icon-shape
                        rounded-circle
                        text-white
                        mb-0
                        me-3
                      "
                      href="#"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      <i class="fas fa-phone bg-danger text-white"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      class="icon icon-shape rounded-circle mb-0 me-3"
                      href="#"
                    >
                      <i class="fas fa-microphone-slash"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal-body -->
          </div>
        </div>
        <!-- modal-dialog -->
      </div>
      <!-- modal -->

      <!-- Audio Modal -->
      <div id="audiomodal" class="modal fade">
        <div class="modal-dialog" role="document">
          <div class="modal-content border-0">
            <div class="modal-body mx-auto text-center p-7">
              <h5>Valex Voice call</h5>
              <img
                src="assets/img/faces/6.jpg"
                class="rounded-circle user-img-circle h-8 w-8 mt-4 mb-3"
                alt="img"
              />
              <h4 class="mb-1 fw-semibold">Daneil Scott</h4>
              <h6>Calling...</h6>
              <div class="mt-5">
                <div class="row">
                  <div class="col-4">
                    <a
                      class="icon icon-shape rounded-circle mb-0 me-3"
                      href="#"
                    >
                      <i class="fas fa-volume-up bg-light text-dark"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      class="
                        icon icon-shape
                        rounded-circle
                        text-white
                        mb-0
                        me-3
                      "
                      href="#"
                      data-bs-dismiss="modal"
                      aria-label="Close"
                    >
                      <i class="fas fa-phone text-white bg-success"></i>
                    </a>
                  </div>
                  <div class="col-4">
                    <a
                      class="icon icon-shape rounded-circle mb-0 me-3"
                      href="#"
                    >
                      <i class="fas fa-microphone-slash bg-light text-dark"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- modal-body -->
          </div>
        </div>
        <!-- modal-dialog -->
      </div>
      <!-- modal -->

      <!-- Footer opened -->
      <div class="main-footer ht-40" v-if="isloggedin">
        <div class="container-fluid pd-t-0-f ht-100p">
          <span
            >Copyright © 2021 <a href="#">Valex</a>. Designed by
            <a href="https://www.spruko.com/">Spruko</a> All rights
            reserved.</span
          >
        </div>
      </div>
      <!-- Footer closed -->
    </div>
  </div>
</template>

<script>
export default {
  name: "MyWebAppApp",

  data() {
    return {
      isloggedin:false,
      appclass:''
    };
  },

  mounted() {},

  methods: {
    Logout(){
                    this.$axios.post("api/logout").then((response) => {
                            if(response.data.success){
                                window.location.href = "/" // ໄປໜ້າທຳອິດ
                            } else {
                              console.log(response.data.message);
                            }
                        }).cath(function(error){
                            console.error(error);
                        });
    }
  },
  created(){

    console.log("ສະຖານະ Login: "+window.Laravel.isLoggedin_laravel);


    if(window.Laravel.isLoggedin_laravel){
        this.isloggedin = true;
        this.appclass = "main-content app-content";
    } else {
        this.isloggedin = false;
        this.appclass = "";
    }
  }
};
</script>

<style >
.new-btn{
    padding: 8px;
}

.cursor-pointer{
  cursor: pointer;
}
</style>
