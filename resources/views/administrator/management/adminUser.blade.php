@extends('../layout/app')
<style>
    .color-font {
        color: #6666ff;
    }
</style>

@section('content')
<div class="container-fluid">
    <section class="content-header">
        <hr>
        <div class="row mb-2">
            <div class="col-12">
                <h3><i class="fas fa-user-edit color-font"></i>&nbsp;&nbsp;Manage User Admin</h3>
            </div>
        </div>
        <hr>
        <div class="section-body">
            <div class="row">
                <div class="col-8 col-lg-8 col-md-8">
                    <div class="card card-outline card-info">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="userTable">
                                    <tr>
                                        <td colspan="4" class="text-center">No available data</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-4 col-lg-4 col-md-4">
                    <div class="card card-outline card-warning">
                        <div class="card-body">
                            <h4><i class="fas fa-marker"></i>&nbsp;&nbsp;Profile</h4>
                            <hr style="border-color: #3366cc;">
                            <form class="mt-3" id="userForm">@csrf
                                <input type="hidden" name="id">
                                <div class="form-group">
                                    <label>Fullname</label>
                                    <input type="text" name="name" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" name="password" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" name="confirmPassword" required class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary btnSaveUser">Submit</button>
                                <button type="button" class="btn btn-warning cancelUser">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
@section('moreJs')
<script src="{{ asset('administrator/management/user.js') }}"></script>
@endsection