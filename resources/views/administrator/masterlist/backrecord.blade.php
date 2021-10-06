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
@include('administrator/masterlist/partial/viewBackSubject')
{{-- Modal end --}}

<div class="container-fluid">
    <section class="content-header">
        <hr>
        <div class="row mb-2">
            <div class="col-12">
                <h3><i class="fas fa-undo-alt color-font"></i>&nbsp;&nbsp;Back Subject</h3>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="col-12">
                <div class="card">
    
                    <div class="card-body mt-2 pb-0 pt-1">
                        {{-- <div class="table-responsive"> --}}
                        {{-- dt-responsive nowrap --}}
                        <table class="table table-striped" id="backsubjectTable">
                            <thead>
                                <tr>
                                    <th>LRN</th>
                                    <th>Fullname</th>
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
<script src="{{ asset('administrator/masterlist/backrecord.js') }}"></script>
@endsection