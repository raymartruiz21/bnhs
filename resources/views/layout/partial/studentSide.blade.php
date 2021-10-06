{{-- start --}}
<nav class="mt-2">
        {{-- sidebar --}}
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Dashboard</li>
                <li class="nav-item">
                        <a href="{{ route('student.dashboard') }}" class="nav-link {{ request()->is('student/my/dashboard')?'active':'' }}">
                                <i class="nav-icon fas fa-house-user"></i>
                                <p>Dashboard</p>
                        </a>
                </li>

                @if (Auth::user()->backsubject()->exists())
                        <li class="nav-item">
                                <a href="{{ route('student.backsubject') }}" class="nav-link {{ request()->is('student/my/backsubject')?'active':'' }}">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>
                                                Back Subject
                                                @if (Auth::user()->backsubject()->where('back_subjects.remarks','none')->get()->count()!=0)
                                                <small class="badge badge-danger badge-sm" style="font-size: 10px">
                                                        {{ Auth::user()->backsubject()->where('back_subjects.remarks','none')->get()->count() }}
                                                </small>
                                                @endif
                                        </p>
                                </a>
                        </li>
                @endif

                <li class="nav-header">Enrollment</li>
                <li class="nav-item">
                        <a href="{{ route('student.enrollment') }}" class="nav-link {{ request()->is('student/my/enrollment')?'active':'' }}">
                                <i class="nav-icon far fa-clipboard"></i>
                                <p>Enrollment</p>
                        </a>
                </li>
                <li class="nav-header">Report</li>
                {{-- <li class="nav-item">
                        <a href="{{ route('student.report') }}" class="nav-link {{ request()->is('student/my/report')?'active':'' }}">
                                <i class="nav-icon far fa-clipboard"></i>
                                <p>Report</p>
                        </a>
                </li> --}}
                <li class="nav-item">
                        <a href="{{ route('student.grade') }}" class="nav-link {{ request()->is('student/my/grade')?'active':'' }}">
                                <i class="nav-icon fas fa-address-card"></i>
                                <p>Grade</p>
                        </a>
                </li>
                <li class="nav-header">Student Details</li>
                <li class="nav-item">
                        <a href="{{ route('student.profile') }}" class="nav-link {{ request()->is('student/my/profile')?'active':'' }}">
                                <i class="nav-icon fas fa-user-circle"></i>
                                <p>Profile</p>
                        </a>
                </li>

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