<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="/admin/dashboard">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item" id="active_book">
            <a class="nav-link" href="{{ route('book.index')}}">
              <i class="icon-book menu-icon"></i>
              <span class="menu-title">Quản lý sách</span>
            </a>
          </li>
          <li class="nav-item" id="active_account">
            <a class="nav-link" href="{{ route('account.index')}}">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Quản lý tài khoản</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/quan-ly-don-hang">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Quản lý đơn hàng</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/admin/quan-ly-binh-luan">
              <i class="fas fa-comments menu-icon"></i>
              <span class="menu-title">Quản lý bình luận</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('publish.index')}}">
              <i class="fas fa-building menu-icon"></i>
              <span class="menu-title">Nhà xuất bản</span>
            </a>
          </li>
          <li class="nav-item" id="active_promotion"> 
            <a class="nav-link" href="{{ route('promotion.index') }}">
              <i class="fas fa-gifts menu-icon"></i>
              <span class="menu-title">Khuyến mãi</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-palette menu-icon"></i>
              <span class="menu-title">Giao diện trang chủ</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{route('logoutAd') }}">
              <i class="fas fa-sign-out-alt menu-icon"></i>
              <span class="menu-title">Đăng xuất</span>
            </a>
          </li>
        </ul>
      </nav>