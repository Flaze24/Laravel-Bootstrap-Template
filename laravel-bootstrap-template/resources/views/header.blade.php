
      <!-- Fixed navbar -->

      <div class="probootstrap-header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
              <span>
                <i class="icon-location2"></i>Brooklyn, NY 10036, United States</span>
              <span>
                <i class="icon-phone2"></i>+1-123-456-7890</span>
              <span>
                <i class="icon-mail"></i>info@probootstrap.com</span>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
              <ul>
                <li>
                  <a href="#">
                    <i class="icon-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-facebook2"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-instagram2"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#" class="probootstrap-search-icon js-probootstrap-search">
                    <i class="icon-search"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <nav class="navbar navbar-default probootstrap-navbar">
        <div class="container">
          <div class="navbar-header">
            <div class="btn-more js-btn-more visible-xs">
              <a href="#">
                <i class="icon-dots-three-vertical "></i>
              </a>
            </div>
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"
              aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}" title="ProBootstrap:Enlight">Enlight</a>
          </div>

          <div id="navbar-collapse" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="active">
                <a href="{{route('index')}}">Home</a>
              </li>
              <li>
                <a href="{{route('courses')}}">Courses</a>
              </li>
              <li>
                <a href="{{route('teacher')}}">Teachers</a>
              </li>
              <li>
                <a href="{{route('event')}}">Events</a>
              </li>
              <li class="dropdown">
                <a href="#" data-toggle="dropdown" class="dropdown-toggle">Pages</a>
                <ul class="dropdown-menu">
                  <li>
                    <a href="{{route('about')}}">About Us</a>
                  </li>
                  <li>
                    <a href="{{route('courses')}}">Courses</a>
                  </li>
                  <li>
                    <a href="{{route('single')}}">Course Single</a>
                  </li>
                  <li>
                    <a href="{{route('gallery')}}">Gallery</a>
                  </li>
                  <li class="dropdown-submenu dropdown">
                    <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                      <span>Sub Menu</span>
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        <a href="#">Second Level Menu</a>
                      </li>
                      <li>
                        <a href="#">Second Level Menu</a>
                      </li>
                      <li>
                        <a href="#">Second Level Menu</a>
                      </li>
                      <li>
                        <a href="#">Second Level Menu</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="{{route('news')}}">News</a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="{{route('contact.create')}}">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>