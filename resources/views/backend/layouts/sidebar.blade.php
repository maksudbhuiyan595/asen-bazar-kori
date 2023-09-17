<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{route('category.index')}}">
          <i class="bi bi-menu-button-wide"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('category.create')}}">
              <i class="bi bi-circle"></i><span>Category Create</span>
            </a>
          </li>
          <li>
            <a href="{{route('category.index')}}">
              <i class="bi bi-circle"></i><span>Category Items</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End categories -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav-product" data-bs-toggle="collapse" href="{{route('product.index')}}">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav-product" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('product.create')}}">
              <i class="bi bi-circle"></i><span>Product Create</span>
            </a>
          </li>
          <li>
            <a href="{{route('product.index')}}">
              <i class="bi bi-circle"></i><span>Product Items</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- End products -->

      

  </aside>