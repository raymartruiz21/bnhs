@extends('../layout/app')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Dashboard</h1>
          <p class="text-secondary">Active Academic Year :{{ empty($activeAY)?'No active academic year':'S/Y '.$activeAY->from.'-'.$activeAY->to }}</p>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                  <span class="info-box-icon elevation-1" style="background-color: #6666ff;"><i class="fas fa-user" style="color: white;"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">No. of Enrollee</span>
                    <span class="info-box-number">{{ $enrollTotal }}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-user-check"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">No. of Student</span>
                    <span class="info-box-number">{{ $studentTotal }}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
      
              <!-- fix for small devices only -->
              <div class="clearfix hidden-md-up"></div>
      
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon elevation-1" style="background-color: #00cc66;"><i class="fas fa-users" style="color: white;"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">No. of Teacher</span>
                    <span class="info-box-number">{{ $teacherTotal }}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
              </div>
              <!-- /.col -->
              <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box mb-3">
                  <span class="info-box-icon elevation-1" style="background-color: #ff9999;"><i class="fas fa-paste" style="color: white;"></i></span>
      
                  <div class="info-box-content">
                    <span class="info-box-text">No. of Section</span>
                    <span class="info-box-number">{{ $ectionTotal }}</span>
                  </div>
                  <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <!-- /.col -->
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-8 col-12 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Population by Sex</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart4"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Population by Curriculum</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Population by Grade Level</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h5>Appointment Today</h5>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            @forelse ($appointies as $item)
                            <li class="media">
                                <div class="media-body">
                                    <div class="media-title">{{ $item->fullname }}</div>
                                    <span class="text-small text-muted">{{ $item->address }}</span>
                                </div>
                            </li>
                            @empty
                            <div class="media-body text-center">No data available</div>
                            @endforelse
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="{{ route('admin.appointment') }}" class="btn btn-primary">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="section">
    <div class="section-body">
        <h2 class="section-title">Dashboard</h2>
        <p class="section-lead">Active Academic Year
            :{{ empty($activeAY)?'No active academic year':'S/Y '.$activeAY->from.'-'.$activeAY->to }}</p>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="far fa-user"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>No. of Enrollee</h4>
                        </div>
                        <div class="card-body">
                            {{ $enrollTotal }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fa fa-users text-white" style="font-size: 20px"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>No. of Student</h4>
                        </div>
                        <div class="card-body">
                            {{ $studentTotal }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fa fa-users  text-white" style="font-size:20px"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>No. of Teacher</h4>
                        </div>
                        <div class="card-body">
                            {{ $teacherTotal }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                <div class="card card-statistic-1">
                    <div class="card-icon bg-primary">
                        <i class="fas fa-border-all"></i>
                    </div>
                    <div class="card-wrap">
                        <div class="card-header">
                            <h4>No. of Section</h4>
                        </div>
                        <div class="card-body">
                            {{ $ectionTotal }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12 col-sm-12">
                <div class="row">
                    <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Population by Sex</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart4"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Population by Curriculum</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart3"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-12 col-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h6>Population by Grade Level</h6>
                            </div>
                            <div class="card-body">
                                <canvas id="myChart2"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-12 col-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Appointment Today</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled list-unstyled-border">
                            @forelse ($appointies as $item)
                            <li class="media">
                                <div class="media-body">
                                    <div class="media-title">{{ $item->fullname }}</div>
                                    <span class="text-small text-muted">{{ $item->address }}</span>
                                </div>
                            </li>
                            @empty
                            <div class="media-body text-center">No data available</div>
                            @endforelse
                        </ul>
                        <div class="text-center pt-1 pb-1">
                            <a href="{{ route('admin.appointment') }}" class="btn btn-primary btn-lg btn-round">
                                View All
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection
@section('moreJs')
{{-- <script src="{{ asset('js/chart/chart.min.js') }}"></script> --}}
<!-- ChartJS -->
<script src="{{ asset('plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('administrator/dashboard.js') }}"></script>
@endsection

