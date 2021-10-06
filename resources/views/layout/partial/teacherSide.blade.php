{{-- start --}}
<nav class="mt-2">
  {{-- sidebar --}}
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <li class="nav-header">Dashboard</li>
      <li class="nav-item">
        <a href="{{ route('teacher.dashboard') }}" class="nav-link {{ request()->is('teacher/my/dashboard')?'active':'' }}">
          <i class="nav-icon fas fa-house-user"></i>
          <p>
            Dashboard
          </p>
        </a>
      </li>
      @if (Auth::user()->section()->where('school_year_id', $activeAY->id)->exists())
        <li class="nav-item">
          <a href="{{ route('teacher.class.monitor') }}" class="nav-link {{ request()->is('teacher/my/class/monitor')?'active':'' }}">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Manage Class
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('teacher.class.assign') }}" class="nav-link {{ request()->is('teacher/my/class/assign')?'active':'' }}">
            <i class="nav-icon fas fa-book"></i>
            <p>
              Assign Subject
            </p>
          </a>
        </li>
        @endif
      <li class="nav-header">Grade Entry</li>
      <li class="nav-item">
        <a href="{{ route('teacher.grading') }}" class="nav-link {{ request()->is('teacher/my/grading')?'active':'' }}">
          <i class="nav-icon far fa-clipboard"></i>
            <p>
              Grading
            </p>
        </a>
      </li>

      @if (Auth::user()->chairman()->where('school_year_id', $activeAY->id)->exists())
      <li class="nav-header">Chairman Setting</li>
      <li class="nav-item">
        <a href="{{ route('teacher.section') }}" class="nav-link {{ request()->is('teacher/my/section')?'active':'' }}">
          <i class="nav-icon fas fa-tasks"></i>
            <p>
              Manage Section
            </p>
        </a>
      </li>
      <li class="nav-item nav-item dropdown">
        <a href="#" class="nav-link {{ request()->is('teacher/my/stem') || request()->is('teacher/my/bec') || request()->is('teacher/my/spa') || request()->is('teacher/my/spj')?'active':'' }}">
          <i class="nav-icon fas fa-user-check"></i>
          <p>
              Enroll Student
          <i class="fas fa-angle-left right"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('teacher.stem') }}" class="nav-link {{ request()->is('teacher/my/stem')?'active':'' }}">
            <i class="nav-icon fas fa-award"></i>
            <p>STEM</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('teacher.bec') }}" class="nav-link {{ request()->is('teacher/my/bec')?'active':'' }}">
            <i class="nav-icon fab fa-audible"></i>
            <p>BEC</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('teacher.spa') }}" class="nav-link {{ request()->is('teacher/my/spa')?'active':'' }}">
            <i class="nav-icon fas fa-paint-brush"></i>
            <p>SP Art</p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('teacher.spj') }}" class="nav-link {{ request()->is('teacher/my/spj')?'active':'' }}">
              <i class="nav-icon far fa-newspaper"></i>
              <p>SP Journalism</p>
              </a>
          </li>
        </ul>
      </li>
      @endif
        <li class="nav-item">
          <a href="{{ route('auth.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link">
            <i class="nav-icon fas fa-sign-out-alt  text-danger"></i>
            <p>
              Logout
            </p>
            <form id="logout-form" action="{{ route('auth.logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </a>
        </li>
    </ul>
  {{-- end --}}
</nav>