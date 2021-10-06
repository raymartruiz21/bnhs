@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.bootstrap4.min.css') }}">
<style>
    .color-font {
        color: #6666ff;
    }
</style>
@endsection

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><i class="fab fa-audible color-font"></i>&nbsp;&nbsp;My Class - {{ Auth::user()->section->section_name }} </h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="section-body">
            <div class="card">
                <div class="card-body pb-1">
                    <div class="">
                        {{-- table-responsive--}}
                        <table class="table table-hover" id="myClassTable" style="font-size: 11px">
                            <thead>
                                <tr>
                                    <th>LRN</th>
                                    <th>Student name</th>
                                    <th>Gender</th>
                                    <th>Contact No.</th>
                                    <th>Status</th>
                                    <th width="8%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('moreJs')
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('teacher/classMonitor.js') }}"></script>
@endsection