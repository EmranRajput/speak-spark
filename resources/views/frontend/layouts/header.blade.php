<style>
:root{
  --menu-font-size: 20px;   /* 18–22px looks great */
  --menu-pad-y: 18px;       /* vertical click area */
  --menu-pad-x: 14px;       /* horizontal spacing */
  --menu-gap: 36px;         /* space between items */
}
    .header-top {
  background: #1f7696;   /* teal */
  color: #fff;
}

/* Left icons */
.header-top i {
  color: #f1bd6a;        /* gold */
}

/* Social icons */
.social-link {
  color: #fff;
  font-size: 1.2rem;
  transition: color 0.3s ease;
}
.social-link:hover {
  color: #e8b561;        /* gold on hover */
}
.menu-wrapper{
    padding-top: 10px !important;
    padding-bottom: 10px !important;

}

</style>

<header class="header-menu-area bg-white">
    <!-- Top Header -->
<div class="header-top py-2">
  <div class="container-fluid">
    <div class="row align-items-center">

      <!-- Left: Address + Phone -->
      <div class="col-md-8 d-flex align-items-center">
        <span class="me-4 d-flex align-items-center text-white px-2">
          <i class="bi bi-geo-alt-fill me-2 px-2"></i> Loss Angless US Block ABC
        </span>
        <span class="d-flex align-items-center text-white">
          <i class="bi bi-telephone-fill me-2 px-2"></i> +62 123 456 789
        </span>
      </div>

      <!-- Right: Social Icons -->
      <div class="col-md-4">
        <div class="d-flex justify-content-md-end justify-content-center gap-3">
          <a href="#" class="social-link px-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="social-link px-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="social-link px-2"><i class="bi bi-youtube"></i></a>
          <a href="#" class="social-link px-2"><i class="bi bi-pinterest"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Bootstrap Icons -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <div class="header-menu-content pr-150px pl-150px bg-white">
        <div class="container-fluid">
            <div class="main-menu-content">
                <a href="#" class="down-button"><i class="la la-angle-down"></i></a>
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="logo-box">
                            <a href="index.html" class="logo"><img src="{{ asset('frontend/images/speak-spark-logo.png') }}" alt="logo" width="120px"></a>
                            <div class="user-btn-action">

                                <div class="off-canvas-menu-toggle main-menu-toggle icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="top" title="Main menu">
                                    <i class="la la-bars"></i>
                                </div>
                            </div>
                        </div>
                    </div><!-- end col-lg-2 -->
                    <div class="col-lg-10">
                        <div class="menu-wrapper">
                            <nav class="main-menu">
                                <ul>
                                    <li>
                                        <a href="#" class="#">Home </a>

                                    </li>
                                    <li>
                                        <a href="#">Serivces </a>

                                    </li>

                                    <li>
                                        <a href="#">About <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">About us </a></li>
                                            <li><a href="blog-no-sidebar.html">Team & Trainer</a></li>

                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Blog <i class="la la-angle-down fs-12"></i></a>
                                        <ul class="dropdown-menu-item">
                                            <li><a href="blog-full-width.html">blog full width </a></li>
                                            <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>

                                        </ul>
                                    </li>
                                </ul><!-- end ul -->
                            </nav><!-- end main-menu -->

                            <div class="nav-right-button">
                                <a href="admission.html" class="btn theme-btn d-none d-lg-inline-block"><i class="la la-user-plus mr-1"></i> Registration</a>
                            </div><!-- end nav-right-button -->
                        </div><!-- end menu-wrapper -->
                    </div><!-- end col-lg-10 -->
                </div><!-- end row -->
            </div>
        </div><!-- end container-fluid -->
    </div><!-- end header-menu-content -->


    <div class="off-canvas-menu custom-scrollbar-styled main-off-canvas-menu">
        <div class="off-canvas-menu-close main-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->
        <ul class="generic-list-item off-canvas-menu-list pt-90px">
            <li>
                <a href="#">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="home-2.html">Home Two</a></li>

                </ul>
            </li>
            <li>
                <a href="#">courses</a>
                <ul class="sub-menu">
                    <li><a href="course-grid.html">course grid</a></li>
                    <li><a href="course-list.html">course list</a></li>

                </ul>
            </li>


            <li>
                <a href="#">blog</a>
                <ul class="sub-menu">
                    <li><a href="blog-full-width.html">blog full width </a></li>
                    <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>

                </ul>
            </li>
        </ul>
    </div><!-- end off-canvas-menu -->
    <div class="off-canvas-menu custom-scrollbar-styled category-off-canvas-menu">
        <div class="off-canvas-menu-close cat-menu-close icon-element icon-element-sm shadow-sm" data-toggle="tooltip" data-placement="left" title="Close menu">
            <i class="la la-times"></i>
        </div><!-- end off-canvas-menu-close -->

    </div><!-- end off-canvas-menu -->

    <div class="body-overlay"></div>
</header><!-- end header-menu-area -->
