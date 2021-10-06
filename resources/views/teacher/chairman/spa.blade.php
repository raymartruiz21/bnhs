@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
<style>
    .color-font {
          color: #6666ff;
      }
</style>
@endsection

@section('content')
<!-- Modal -->
@include('teacher/chairman/partial/enrollForm')
@include('teacher/chairman/partial/setSectionForm')
@include('teacher/chairman/partial/exportExcel')
@include('teacher/chairman/partial/listEnrolled')
{{-- Modal end --}}

<section class="content">
    <div class="container-fluid">
        <hr>
        <div class="row justify-content-between">
            <div class="col-lg-5 col-md-8">
                <h3>
                    <i class="fas fa-paint-brush color-font"></i>&nbsp;&nbsp;
                    Enrolle's of (Grade {{ Auth::user()->chairman->grade_level }} | SPA Student)
                </h3>
            </div>
            <div class="col-lg-2 col-md-2 ">
                <div class="btn-group float-right" role="group" aria-label="Basic example">
                    <button type="button" class="btn btn-outline-primary" id="btnModalExport"><i
                            class="fas fa-file-export"></i>&nbsp;Export
                    </button>
                    <button type="button" class="btn btn-outline-info" id="btnModalStudent"><i
                            class="fas fa-plus-circle"></i>&nbsp;Student
                    </button>
                </div>
            </div>
        </div><hr>
        <input type="hidden" name="current_curriculum" value="SPA">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row sectionListAvailable mb-3"></div>
                    <div class="card">
                        <div class="card-body">
                            {{-- <div class="table-responsive"> --}}
                            <form id="massSectioningForm">
                                @include('teacher/chairman/partial/massSection')
                                <div class="col-lg-2 float-left">
                                    <select class="custom-select mr-sm-2" name="selectBarangay">
                                    </select>
                                </div>
                                <table class="table table-striped" style="font-size: 11px;" id="tableCurriculum">
                                    <thead>
                                        <tr>
                                            <th width="2%"></th>
                                            <th width="10%">Enrollment No</th>
                                            <th>LRN</th>
                                            <th>Fullname</th>
                                            <th width="10%">Section</th>
                                            <th width="8%">Status</th>
                                            <th width="10%">Balik Aral</th>
                                            <th width="10%">Action Taken</th>
                                            <th width="8%">State</th>
                                            <th width="13%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="9" class="text-center">No available data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </form>
                            {{-- </div> --}}
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- section-body -->
    </div>
</section>
@endsection

@section('moreJs')
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('teacher/chairman/enroll.js') }}"></script>
<script src="{{ asset('teacher/chairman/threeCurriculum.js') }}"></script>
@endsection