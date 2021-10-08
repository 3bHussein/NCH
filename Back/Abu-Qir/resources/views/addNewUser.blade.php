<!DOCTYPE html>
<html lang="ar" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login</title>
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <script src="{{asset('/js/app.js')}}"></script>
    <style>
        .no-js {
            display: none;
        }
    </style>
</head>
<body>
<noscript class="mx-5 bg-dark text-white">
    Your browser does not support JavaScript!
</noscript>
<div class="container-fluid text-center no-js" style="margin-top: 180px;">
    <form method="post" action="{{route('add.user')}}" autocomplete="off">
        @csrf
        <h1 class="mb-4 font-weight-normal display-4 text-capitalize">add new user</h1>
        <div class="col-7 mx-auto">
            @if(session()->has('success'))
                <div class="alert alert-success text-center mx-auto col-12">
                    <span class="h4 text-success text-center text-capitalize">{{session('success')}}</span>
                </div>
            @endif
            <label for="username" class="sr-only">Username</label>
            <input type="text" id="username" name="username" class="form-control mt-4 form-control-lg"
                   placeholder="Username" required>
            @if($errors->has('username'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('username')}}</div>
                </div>
            @endif
            <div class="row my-4">
                <div class="col-7">
                    <label for="password" class="sr-only">Password</label>
                    <input type="text" id="password" name="password" class="form-control form-control-lg"
                           placeholder="Password" required readonly>
                </div>
                <div class="col-5">
                    <button class="btn btn-lg btn-primary btn-block text-capitalize" type="button"
                            onclick="generatePassword()">
                        generate password
                    </button>
                </div>
            </div>
            @if($errors->has('password'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('password')}}</div>
                </div>
            @endif
            <label for="role" class="sr-only">Role</label>
            <select class="form-control mt-4 form-control-lg" id="role" name="role" required>
                <option value="admin">admin</option>
                <option value="student-affair">student affair</option>
            </select>
            @if($errors->has('role'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('role')}}</div>
                </div>
            @endif
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">Register</button>
        </div>
    </form>
</div>
<script>
    $('.no-js').removeClass('no-js');

    function generatePassword() {
        let num = '0123456789';
        let upper_char = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        let lower_char = 'abcdefghijklmnopqrstuvwxyz';
        let special_char = '!@#&*_+?.-';
        let password = '';
        for (let i = 0; i < 3; i++) {
            password += num[Math.floor(Math.random() * num.length)] + upper_char[Math.floor(Math.random() * upper_char.length)]
                + special_char[Math.floor(Math.random() * special_char.length)] + lower_char[Math.floor(Math.random() * lower_char.length)];
        }
        $('#password').val(password.split('').sort(function () {
            return 0.5 - Math.random()
        }).join(''));
    }
    {{--if(performance.navigation.type == 2)--}}
    {{--{--}}
    {{--    $.ajax({--}}
    {{--        type: 'get',--}}
    {{--        url: '{{route('login.out')}}',--}}
    {{--        success: function () {--}}
    {{--            window.location = '{{route('login')}}';--}}
    {{--        }--}}
    {{--    });--}}
    {{--}--}}
</script>
</body>
</html>
