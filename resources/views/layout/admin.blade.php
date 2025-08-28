<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg"
    data-sidebar-image="none" data-preloader="disable" data-theme="default" data-theme-colors="default">


<!-- Mirrored from themesbrand.com/velzon/html/master/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Aug 2025 11:44:29 GMT -->

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Velzon - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('/admin-assets/images/favicon.ico') }}">

    <!-- jsvectormap css -->
    <link href="{{ asset('/admin-assets/libs/jsvectormap/jsvectormap.min.css') }}" rel="stylesheet" type="text/css" />

    <!--Swiper slider css-->
    <link href="{{ asset('/admin-assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- Layout config Js -->
    <script src="{{ asset('/admin-assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('/admin-assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('/admin-assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('/admin-assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('/admin-assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    @yield('css')
</head>

<body>
    <div id="layout-wrapper">
        <header id="page-topbar">
            <div class="layout-width">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box horizontal-logo">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('/admin-assets/images/logo-sm.png') }}" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/admin-assets/images/logo-dark.png') }}" alt=""
                                        height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('/admin-assets/images/logo-sm.png') }}" alt=""
                                        height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('/admin-assets/images/logo-light.png') }}" alt=""
                                        height="17">
                                </span>
                            </a>
                        </div>
                    </div>
                    <div>
                        <button class="btn btn-primary">
                            Logout
                        </button>
                    </div>
                </div>
            </div>
        </header>

        <!-- removeNotificationModal -->
        <div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                            id="NotificationModalbtn-close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mt-2 text-center">
                            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop"
                                colors="primary:#f7b84b,secondary:#f06548"
                                style="width: 100px; height: 100px"></lord-icon>
                            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                                <h4>Are you sure ?</h4>
                                <p class="text-muted mx-4 mb-0">
                                    Are you sure you want to remove this Notification ?
                                </p>
                            </div>
                        </div>
                        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
                            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">
                                Close
                            </button>
                            <button type="button" class="btn w-sm btn-danger" id="delete-notification">
                                Yes, Delete It!
                            </button>
                        </div>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
            <!-- /.modal-dialog -->
        </div>
        
        <div class="app-menu navbar-menu">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                <!-- Dark Logo-->
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="/admin-assets/images/logo-sm.png" alt="" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="/admin-assets/images/logo-dark.png" alt="" height="17" />
                    </span>
                </a>
                <!-- Light Logo-->
                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="/admin-assets/images/logo-sm.png" alt="" height="22" />
                    </span>
                    <span class="logo-lg">
                        <img src="/admin-assets/images/logo-light.png" alt="" height="17" />
                    </span>
                </a>
                <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                    id="vertical-hover">
                    <i class="ri-record-circle-line"></i>
                </button>
            </div>

            <div class="dropdown sidebar-user m-1 rounded">
                <button type="button" class="btn material-shadow-none" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="d-flex align-items-center gap-2">
                        <img class="rounded header-profile-user" src="/admin-assets/images/users/avatar-1.jpg"
                            alt="Header Avatar" />
                        <span class="text-start">
                            <span class="d-block fw-medium sidebar-user-name-text">Anna Adame</span>
                            <span class="d-block fs-14 sidebar-user-name-sub-text"><i
                                    class="ri ri-circle-fill fs-10 text-success align-baseline"></i>
                                <span class="align-middle">Online</span></span>
                        </span>
                    </span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <h6 class="dropdown-header">Welcome Anna!</h6>
                    <a class="dropdown-item" href="pages-profile.html"><i
                            class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Profile</span></a>
                    <a class="dropdown-item" href="apps-chat.html"><i
                            class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Messages</span></a>
                    <a class="dropdown-item" href="apps-tasks-kanban.html"><i
                            class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Taskboard</span></a>
                    <a class="dropdown-item" href="pages-faqs.html"><i
                            class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Help</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="pages-profile.html"><i
                            class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                    <a class="dropdown-item" href="pages-profile-settings.html"><span
                            class="badge bg-success-subtle text-success mt-1 float-end">New</span><i
                            class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Settings</span></a>
                    <a class="dropdown-item" href="auth-lockscreen-basic.html"><i
                            class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle">Lock screen</span></a>
                    <a class="dropdown-item" href="auth-logout-basic.html"><i
                            class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i>
                        <span class="align-middle" data-key="t-logout">Logout</span></a>
                </div>
            </div>
            <div id="scrollbar">
                <div class="container-fluid">
                    <div id="two-column-menu"></div>
                    <ul class="navbar-nav" id="navbar-nav">
                        <li class="menu-title"><span data-key="t-menu">Menu</span></li>

                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/heroes">
                                <i class="ri-honour-line"></i>
                                <span data-key="t-widgets">Slider</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/shorts">
                                <i class="ri-honour-line"></i>
                                <span data-key="t-widgets">YT Shorts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link menu-link" href="/videos">
                                <i class="ri-honour-line"></i>
                                <span data-key="t-widgets">YT Videos</span>
                            </a>
                        </li>

                        <!-- end Dashboard Menu -->





                    </ul>
                </div>
                <!-- Sidebar -->
            </div>

            <div class="sidebar-background"></div>
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>


        <!-- Main Content -->
        <main>
            <div class="main-content">
                <div class="page-content">

                    @yield('content')
                </div>
            </div>
        </main>
        <!-- End Main Content -->
    </div>

    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->

    <!--preloader-->
    <div id="preloader">
        <div id="status">
            <div class="spinner-border text-primary avatar-sm" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>
    </div>

    <div class="customizer-setting d-none d-md-block">
        <div class="btn-info rounded-pill shadow-lg btn btn-icon btn-lg p-2" data-bs-toggle="offcanvas"
            data-bs-target="#theme-settings-offcanvas" aria-controls="theme-settings-offcanvas">
            <i class="mdi mdi-spin mdi-cog-outline fs-22"></i>
        </div>
    </div>


    <!-- JAVASCRIPT -->
    <script src="{{ asset('/admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/libs/node-waves/waves.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/libs/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
    <script src="{{ asset('/admin-assets/js/plugins.js') }}"></script>

    <!-- apexcharts -->
    <script src="{{ asset('/admin-assets/libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- Vector map-->
    <script src="{{ asset('/admin-assets/libs/jsvectormap/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('/admin-assets/libs/jsvectormap/maps/world-merc.js') }}"></script>

    <!--Swiper slider js-->
    <script src="{{ asset('/admin-assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Dashboard init -->
    <script src="{{ asset('/admin-assets/js/pages/dashboard-ecommerce.init.') }}"></script>

    <!-- App js -->
    <script src="{{ asset('/admin-assets/js/app.j') }}'"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this YouTube Short?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" id="confirmDeleteBtn" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        let deleteFormId;

        // When delete button is clicked, store the form ID
        const deleteModal = document.getElementById('deleteModal');
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget;
            deleteFormId = button.getAttribute('data-form-id');
        });

        // When confirm delete in modal is clicked, submit the correct form
        document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
            if (deleteFormId) {
                document.getElementById(deleteFormId).submit();
            }
        });
    </script>

    @yield('script')
    <!-- Mirrored from themesbrand.com/velzon/html/master/auth-signin-basic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 25 Aug 2025 11:44:29 GMT -->
</body>

</html>
