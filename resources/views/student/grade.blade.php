@extends('../layout/app')
<style>
    .color-font {
          color: #6666ff;
      }
</style>

@section('content')
<section class="content">
    <div class="container-fluid">
        <hr>
        <div class="row justify-content-between">
            <div class="col-lg-5 col-md-8">
                <h3><i class="fas fa-address-card color-font"></i>&nbsp;&nbsp;Grade:&nbsp;&nbsp;&nbsp;
                   <span class="txtSectionName badge badge-info size-font"></span>
                </h3>
            </div>
            <div class="col-lg-2 col-md-2">
                <div class="float-right">
                    <form class="form-inline ">
                        <label class="my-1 mr-2" for="filterLabel">Grade Level</label>
                        <select name="filterGradeLevel" class="custom-select my-1 mr-sm-2" id="filterLabel">
                        </select>
                    </form>

                </div>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="col-lg-12">
                <div class="card card-outline card-warning shadow-sm">
                    <div class="card-body pb-1">
                        <div class="">
                            <div class="float-left">
                                <span style="font-size: 15px"
                                    class="txtSubjectName badge badge-warning pt-1 pb-1 mt-2"></span>
                            </div>
                            {{-- table-responsive--}}
                            <table class="table  table-bordered table-hover" id="myClassTable" style="font-size: 14px">
                                <thead>
                                    <tr>
                                        <th>Teacher</th>
                                        <th>Subjects</th>
                                        <th class="text-center" width="8%">1st</th>
                                        <th class="text-center" width="8%">2nd</th>
                                        <th class="text-center" width="8%">3rd</th>
                                        <th class="text-center" width="8%">4th</th>
                                        <th class="text-center" width="8%">Avg</th>
                                        <th class="text-center" width="8%">Remarks</th>
                                    </tr>
                                </thead>
                                <tbody></tbody>
                                <tbody id="gradeTable">
                                    <tr>
                                        <td colspan="8" class="text-center">No data available</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6" class="text-right"><b>Final Average</b></td>
                                        <td id="overallGrade" class="text-center"></td>
                                        <td id="overallRemark" class="text-center"></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('moreJs')
<script src="{{ asset('student/grade.js') }}"></script>
@endsection