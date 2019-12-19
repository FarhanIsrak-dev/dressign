<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <div class="nav-link">
        <div class="profile-image"> <img src="{{asset('admin/images/faces/face.png')}}" alt="image"/> <span class="online-status online"></span> </div>
        <div class="profile-name">
          <p class="name">Admin</p>
        </div>
      </div>
    </li>
    <li class="nav-item"><a class="nav-link" href="{{ route('admin.index') }}"><img class="menu-icon" src="{{asset('admin/images/menu_icons/01.png')}}"><span class="menu-title">Dashboard</span></a></li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">Manage Products</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="general-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.products') }}">Manage Products</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.product.create') }}">Add Product</a></li>
          </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#order-pages" aria-expanded="false" aria-controls="order-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">Manage Orders</span><i class="menu-arrow"></i></a>
        <div class="collapse" id="order-pages">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('admin.orders') }}">Manage Orders</a></li>
          </ul>
        </div>
      </li>

      

      <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="slider-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">Manage Design Orders</span><i class="menu-arrow"></i></a>
            <div class="collapse" id="slider-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.designorder') }}">Manage Orders</a></li>
              </ul>
            </div>
          </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">Manage Categories</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="category-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.categories') }}">Manage Category</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.category.create') }}">Add Category</a></li>
          </ul>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">
        Manage Brands</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="brand-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brands') }}">Manage Brand</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.brand.create') }}">Add Brand</a></li>
          </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#design-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">
        Manage FAQs</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="design-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.faq') }}">Check FAQs</a></li>
          </ul>
      </div>
    </li>

    <!-- <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#design1-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">
        Manage Kameez Back Designs</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="design1-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.kameez_back') }}">Manage Design</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.kameez_back.create') }}">Add Design</a></li>
          </ul>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#design2-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">
        Manage Neck Front Designs</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="design2-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.neck_front') }}">Manage Design</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.neck_front.create') }}">Add Design</a></li>
          </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#design3-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">
        Manage Neck Back Designs</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="design3-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.neck_back') }}">Manage Design</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.neck_back.create') }}">Add Design</a></li>
          </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#design4-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">
        Manage Sleeves Designs</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="design4-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sleeves') }}">Manage Design</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.sleeves.create') }}">Add Design</a></li>
          </ul>
      </div>
    </li>


    <li class="nav-item">
      <a class="nav-link" data-toggle="collapse" href="#design5-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="{{asset('admin/images/menu_icons/08.png')}}"> <span class="menu-title">
        Manage Bottom Designs</span><i class="menu-arrow"></i></a>
      <div class="collapse" id="design5-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.bottom') }}">Manage Design</a></li>
          <li class="nav-item"> <a class="nav-link" href="{{ route('admin.bottom.create') }}">Add Design</a></li>
          </ul>
      </div>
    </li> -->



  </ul>
</nav>
<!-- partial -->
