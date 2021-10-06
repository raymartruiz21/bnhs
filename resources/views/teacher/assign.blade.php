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

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1><i class="far fa-bell color-font"></i>&nbsp;&nbsp;Assign Subject</h1>
        </div>
      </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <input type="hidden" name="current_curriculum" value="BEC">
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="row sectionListAvailable mb-3"></div>
                    <div class="card">
                        <div class="card-body">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <form id="assignForm">@csrf
                                    <input type="hidden" name="id">
                                    <div class="form-row mb-3">
                                        <div class="col-lg-2 col-md-2 col-sm-12 mb-1">
                                            <label class="my-2"><h4>Subject:</h4></label>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 mb-1">
                                            <select name="subject_id" class="custom-select">
                                                <option value=""></option>
                                                @foreach ($subjects as $item)
                                                <option value="{{ $item->id }}">[{{ $item->subject_code }}] -
                                                    {{ $item->descriptive_title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-3 col-md-3 col-sm-12 mb-1">
                                            <select name="teacher_id" class="select2 custom-select">
                                                <option value=""></option>
                                                @foreach ($teachers as $item)
                                                <option value="{{ $item->id }}">{{ $item->teacher_name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-4 col-md-6 col-sm-12 mb-1">
                                            <button class="btn btn-outline-primary pl-4 pr-4 assignBtn"
                                                type="submit">Save</button>
                                            <button class="btn btn-outline-warning pl-4 pr-4 cancelNow"
                                                type="submit">Cancel</button>
                                        </div>
                                    </div>
                                    <input type="hidden" name="section_id" value="{{  Auth::user()->section->id }}">
                                    <input type="hidden" name="grade_level"
                                        value="{{  Auth::user()->section->grade_level }}">
                                </form>
                            </div>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Subject Name</th>
                                        <th>Subject Teacher</th>
                                        <th width="13%">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="tableAssign">
                                </tbody>
                            </table>
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
<script src="{{ asset('js/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('teacher/assign.js') }}"></script>
@endsection