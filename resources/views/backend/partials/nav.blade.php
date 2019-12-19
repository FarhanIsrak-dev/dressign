<!-- partial:partials/_navbar.html -->
<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
    <a class="navbar-brand brand-logo" href="{{ route('admin.index') }}"><img src="{{ asset('design/images/logo.jpg') }}" alt="logo"/></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.index') }}"><img src="/images/logo-mini.svg" alt="logo"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center">
    
    <ul class="navbar-nav navbar-nav-right">
      
      <li class="nav-item dropdown">
        <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
          <i class="mdi mdi-email-variant"></i>
          
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
          
          <div class="dropdown-divider"></div>
            <a class="nav-link"  href="#district-pages">
              <form class="form-inline" action="{{ route('admin.logout') }}" method="post">
              @csrf
                <input type="submit" value="Logout Now" class="btn btn-danger">
              </form>
            </a>
          
      </li>
      <li class="nav-item d-none d-lg-block">
        <a class="nav-link" href="#">
          <img class="img-xs rounded-circle" src="/images/faces/face4.jpg" alt="">
        </a>
      </li>
    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
      <span class="icon-menu"></span>
    </button>
  </div>
</nav>
