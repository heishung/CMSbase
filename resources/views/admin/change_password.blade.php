@extends('admin.layout')
@section('title') Change Password @endsection
<style>
    .btn {
        min-width: 90px;
    }

    .error {
        font-size: 12px;
        font-weight: normal;
        color: red;
    }
</style>
@section('pageContent')
    <div class="col-md-4">
        <form class="change-password" action="{{route('admin.changePassword')}}" enctype="multipart/form-data"
              method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label>Enter Old Password</label>
                <input type="password" class="form-control" name="old_password" required>
            </div>
            <hr>
            <div class="form-group">
                <label>Enter New Password</label>
                <input id="password" type="password" class="form-control" name="password" required>
            </div>
            <div class="form-group">
                <label>Confirm New Password</label>
                <input type="password" class="form-control" name="password_confirm">
            </div>
            <div class="form-group" style="margin-top: 30px">
                <button type="submit" class="btn btn-primary"> Save</button>
                <button type="reset" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.js"></script>
    <script>
        $('.change-password').validate({
            rules: {
                password: {
                    minlength: 6,
                },
                password_confirm: {
                    minlength: 6,
                    equalTo: "#password"
                }
            },
            messages: {
                password_confirm: "Confirm Password does not match"
            }
        });
    </script>
@endsection