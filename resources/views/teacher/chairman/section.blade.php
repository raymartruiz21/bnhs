@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/select2/select2.min.css') }}">
<style>
    .color-font {
        color: #6666ff;
    }
</style>
@endsection

@section('content')
<section class="content">
    <div class="container-fluid">
        <hr>
        <div class="row mb-2">
            <div class="col-12">
              <h3><i class="fas fa-chalkboard-teacher color-font"></i>&nbsp;&nbsp;Manage Section | Grade {{ auth()->user()->chairman->grade_level }} Chairman</h3>
            </div>
        </div><hr>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                    <div class="card card-outline card-primary">
                        <div class="card-body pb-1">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Section name</th>
                                            <th>Curiculum</th>
                                            <th>Adviser</th>
                                            <th width="10%">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="sectionTable">
                                        <tr>
                                            <td colspan="5" class="text-center">No available data</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><!-- col-lg-8 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="card card-outline card-warning">
                        <div class="card-body m-1">
                            <form id="sectionForm">@csrf
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label>Section / Class Name</label>
                                    <input type="text" class="form-control" name="section_name" required>
                                </div>
                                <div class="form-group">
                                    <label>Class Type</label>
                                    <select name="class_type" class="form-control" required>
                                        <option value=""></option>
                                        <option value="STEM">STEM - Science Technology Engineering and Mathematics</option>
                                        <option value="BEC">BEC - Basic Education Curriculum</option>
                                        <option value="SPA">SPA - Special Program Art</option>
                                        <option value="SPJ">SPJ - Special Program Journalism</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Class Adviser</label>
                                    <select name="teacher_id" class="form-control select2" id="mySelect2" required>
                                        <option value=""></option>
                                        @foreach ($teachers as $teacher)
                                        <option value="{{ $teacher->id }}">
                                            {{ $teacher->teacher_lastname.', '.$teacher->teacher_firstname.' '.$teacher->teacher_middlename }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-outline-primary btnSaveSection"
                                    {{ (session()->has('sessionAY')!="")?now()->year==(1-session('sessionAY')->to)?'disabled':'':'' }}>Submit</button>
                                <button type="submit" class="btn btn-outline-warning cancelSection">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div><!-- col-lg-4 -->
            </div><!-- row -->
        </div><!-- section-body -->
    </div>
</section>
@endsection

@section('moreJs')
<script src="{{ asset('js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('teacher/chairman/section.js') }}"></script>
@endsection