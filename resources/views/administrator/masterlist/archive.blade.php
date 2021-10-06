@extends('../layout/app')
@section('moreCss')
<link rel="stylesheet" href="{{ asset('css/datatable/dataTables.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/datatable/responsive.bootstrap4.min.css') }}">
<style>
    .color-font {
        color: #6666ff;
    }
</style>
@endsection
@section('content')

<!-- Modal -->
@include('administrator/masterlist/partial/modal')
{{-- Modal end --}}

<div class="container-fluid">
    <section class="content-header">
        <hr>
        <div class="row mb-2 justify-content-between">
            <div class="col-sm-6">
                <h3><i class="fas fa-folder-open color-font"></i>&nbsp;&nbsp;Archive Masterlist</h3>
            </div>
            <div class="col-sm-6">
                <div class="float-right">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <select class="custom-select mr-sm-2" name="archiveType">
                                <option value="student">Student</option>
                                <option value="teacher">Teacher</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="col-12">
                <div class="card">
    
                    <div class="card-body mt-2 pb-0 pt-1">
                        {{-- <div class="table-responsive"> --}}
                        {{-- dt-responsive nowrap --}}
                        <table class="table table-striped" id="archiveTable">
                            <thead>
                                <tr>
                                    <th>LRN</th>
                                    <th>Fullname</th>
                                    <th>Gender</th>
                                    <th width="15%">Action</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
@section('moreJs')
<script src="{{ asset('js/datatable/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('js/datatable/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('js/datatable/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('administrator/masterlist/archive.js') }}"></script>
@endsection