{{-- <div class="main-sidebar">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="{{ route('admin.dashboard') }}">PNOP</a>
            <p style="font-size: 11px;margin-top:-21px">
                {{ empty($activeAY)?'No active academic year':'S/Y '.$activeAY->from.'-'.$activeAY->to }}
            </p>

        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="{{ route('admin.dashboard') }}">OP</a>
            <p style="font-size: 11px;margin-top:-21px">
                @if (empty($activeAY))
                No active
                @else
                {{ Str::substr($activeAY->from, 2) }}-{{ Str::substr($activeAY->to, 2) }}
                @endif
            </p>
        </div>
        @if (Auth::guard('web')->check())
        @include('layout/partial/adminSide')
        @elseif(Auth::guard('teacher')->check())
        @include('layout/partial/teacherSide')
        @elseif(Auth::guard('student')->check())
        @include('layout/partial/studentSide')
        @endif
    </aside>
</div> --}}
{{-- #2B58A5 --}}

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <div href="#" class="brand-link">
      <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">

      <a class="brand-link" href="{{ route('admin.dashboard') }}">eBNHS</a>
        <p style="font-size: 13px;margin-top:-21px; margin-top: 15px;" class="text-center">
            {{ empty($activeAY)?'No active academic year':'S/Y '.$activeAY->from.'-'.$activeAY->to }}
        </p>
    </div>
  
    <!-- Sidebar -->
    <div class="sidebar">
  
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Admin</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-bell"></i>
                <p>
                Announcement
                </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-file-alt"></i>
              <p>
              Enrollees
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
              Students
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fab fa-black-tie"></i>
              <p>
              Chairman
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
              Section
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
              Mailbox
              <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    <!-- /.sidebar-menu -->
    </div>
  <!-- /.sidebar -->
  </aside>