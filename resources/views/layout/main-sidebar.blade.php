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
    <a href="{{ route('admin.dashboard') }}" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
        eBNHS &middot;
        <span  style="font-size: 13px;">
          {{ empty($activeAY)?'No active academic year':'S/Y '.$activeAY->from.'-'.$activeAY->to }}
        </span>
      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../../dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::guard('web')->user()->name }}</a>
        </div>
      </div>
  
    <!-- Sidebar -->
    <div class="sidebar">

    @if (Auth::guard('web')->check())
    @include('layout/partial/adminSide')
    @elseif(Auth::guard('teacher')->check())
    @include('layout/partial/teacherSide')
    @elseif(Auth::guard('student')->check())
    @include('layout/partial/studentSide')
    @endif
    </div>
  <!-- /.sidebar -->
  </aside>