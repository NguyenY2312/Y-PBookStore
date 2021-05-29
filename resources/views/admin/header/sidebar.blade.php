<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('book.index')}}">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Quản lý sách</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('account.index')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Quản lý tài khoản</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Quản lý đơn hàng</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
              <i class="fas fa-comments menu-icon"></i>
              <span class="menu-title">Quản lý bình luận</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="fas fa-warehouse menu-icon"></i>
              <span class="menu-title">Nhà xuất bản</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Quản lý kho</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages/documentation/documentation.html">
              <i class="fas fa-sign-out-alt menu-icon"></i>
              <span class="menu-title">Đăng xuất</span>
            </a>
          </li>
        </ul>
      </nav>