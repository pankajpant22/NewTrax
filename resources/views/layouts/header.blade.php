<header id="header" class="">
          <div class="sqs-cart-dropzone"></div>
          <div class="title-nav-wrapper">
            <h1 class="site-title">
              <a href="/" id="top">
                  Vinay Paramanand
              </a>
            </h1>
            <button type="button" class="navbar-toggle collapsed mobile-nav-button" data-toggle="collapse" data-target="#navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
            </button>
            <a class="icon-menu" id="mobileMenu"></a>

            <!--MAIN NAVIGATION-->
            <div id="desktopNav">
              <nav class="main-nav">
                  <div class="nav-wrapper">
                    <ul class="cf">
                        <li class="folder {{ url()->current() == url("/") ? 'active-link': '' }}">
                          <a href="{{ url("/") }}"><span>Welcome</span></a>
                        </li>
                        <li class="folder {{ url()->current() == url("/portfolio") ? 'active-link': '' }}">
                            <a href="{{ url("/portfolio") }}"><span>Portfolio</span></a>
                        </li>
                        <li class="folder {{ url()->current() == url("/blog") ? 'active-link': '' }}">
                          <a href="{{ url("/blog") }}"><span>Interested in Canada</span></a>
                        </li>
                        <li class="folder {{ url()->current() == url("/resources") ? 'active-link': '' }}">
                          <a href="{{ url("/resources") }}"><span>Resources</span></a>
                        </li>
                        <li class="folder {{ url()->current() == url("/wordpressblog") ? 'active-link': '' }}">
                          <a href="{{ url("/wordpressblog") }}"><span>Blogs</span></a>
                        </li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
               <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse mobile-nav" id="navbar-collapse-1">
            <nav class="main-nav mobile-nav">
                <div class="nav-wrapper">
                      <ul class="cf">
                          <li class="folder {{ url()->current() == url("/") ? 'active-link': '' }}">
                              <a href="{{ url("/")}}/"><span>Welcome</span></a>
                          </li>
                          <li class="folder {{ url()->current() == url("/portfolio") ? 'active-link': '' }}">
                              <a href="{{ url("/portfolio")}}"><span>Portfolio</span></a>
                          </li>
                          <li class="folder {{ url()->current() == url("/blog") ? 'active-link': '' }}">
                            <a href="{{ url("/blog")}}"><span>Interested in Canada</span></a>
                          </li>
                          <li class="folder {{ url()->current() == url("/resources") ? 'active-link': '' }}">
                            <a href="{{ url("/resources") }}"><span>Resources</span></a>
                          </li>
                          <li class="folder {{ url()->current() == url("/wordpressblog") ? 'active-link': '' }}">
                            <a href="{{ url("/wordpressblog") }}"><span>Blogs</span></a>
                          </li>
                    </ul>
                  </div>
            </nav>
        </div>
</header>
<style>


@media screen and (min-width: 767px) {
    .mobile-nav {
      display:none;
    }

    .mobile-portfolio-scroll { display:none;}
    .navbar-brand { position: relative; z-index: 2; }

    .navbar-nav.navbar-right .btn { position: relative; z-index: 2; padding: 4px 20px; margin: 10px auto; transition: transform 0.3s; }

    .navbar .navbar-collapse { position: relative; overflow: hidden !important; }
    .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 22px; }

    .navbar .nav-collapse { position: absolute; z-index: 1; top: 0; left: 0; right: 0; bottom: 0; margin: 0; padding-right: 120px; padding-left: 80px; width: 100%; }
    .navbar.navbar-default .nav-collapse { background-color: #f8f8f8; }
    .navbar.navbar-inverse .nav-collapse { background-color: #222; }
    .navbar .nav-collapse .navbar-form { border-width: 0; box-shadow: none; }
    .nav-collapse>li { float: right; }

    .btn.btn-circle { border-radius: 50px; }
    .btn.btn-outline { background-color: transparent; }

    .navbar-nav.navbar-right .btn:not(.collapsed) {
        background-color: rgb(111, 84, 153);
        border-color: rgb(111, 84, 153);
        color: rgb(255, 255, 255);
    }

    .navbar.navbar-default .nav-collapse,
    .navbar.navbar-inverse .nav-collapse {
        height: auto !important;
        transition: transform 0.3s;
        transform: translate(0px,-50px);
    }
    .navbar.navbar-default .nav-collapse.in,
    .navbar.navbar-inverse .nav-collapse.in {
        transform: translate(0px,0px);
    }


}

@media screen and (max-width: 767px) {
    html { overflow-x: hidden}
    #content-wrapper .content {min-height:240px; margin-top:24%;margin-bottom: 15%;}
    #header, #footer { position:fixed; z-index: 1000;}
    #about_me p { margin-top: 20px !important;padding-right: 25px;padding-left: 25px;}
    .title-nav-wrapper { padding: 25px 25px; }
    #header .site-title {font-size: 20px;width: 200px;}
    .mobile-nav ul li {
      text-align: left;
      margin: 10px 10px 10px 0px;
      width: 100%;
    }
    .mobile-nav-button {background:white;}

    .mobile-nav-button .icon-bar {background:black;}

    .navbar .navbar-collapse .navbar-right > li:last-child { padding-left: 15px; padding-right: 15px; } 
    
    .navbar .nav-collapse { margin: 7.5px auto; padding: 0; }
    .navbar .nav-collapse .navbar-form { margin: 0; }
    .nav-collapse>li { float: none; }
   
    .navbar.navbar-default .nav-collapse,
    .navbar.navbar-inverse .nav-collapse {
        transform: translate(-100%,0px);
    }
    .navbar.navbar-default .nav-collapse.in,
    .navbar.navbar-inverse .nav-collapse.in {
        transform: translate(0px,0px);
    }
    
    .navbar.navbar-default .nav-collapse.slide-down,
    .navbar.navbar-inverse .nav-collapse.slide-down {
        transform: translate(0px,-100%);
    }
    .navbar.navbar-default .nav-collapse.in.slide-down,
    .navbar.navbar-inverse .nav-collapse.in.slide-down {
        transform: translate(0px,0px);
    }

    .mobile-portfolio-scroll{ 
        margin-bottom: 50px;
        margin-top: 50px;
    }

    .mobile-portfolio-scroll a { color: black;}
    .about_me_profile {height: 350px;}
    .main_page_scroll { margin-top: -50px;}
    .main_page_scroll_up { margin-top: -30px; }
    .landing-page { margin-bottom:0px !important;}
}
</style>