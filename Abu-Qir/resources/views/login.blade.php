<!DOCTYPE html>
<html lang="ar" dir="rtl">
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
    <form method="post" action="{{route('login.check')}}" autocomplete="off">
        @csrf
        <h1 class="mb-4 font-weight-normal dispslay-4">برجاء تسجيل الدخول</h1>
        <div class="col-4 mx-auto">
            <label for="name" class="sr-only">Email address</label>
            <input type="text" id="name" name="name" class="form-control mt-4" placeholder="اسم المستخدم" required>
            @if($errors->has('name'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">برجاء ادخال اسم المستخدم</div>
                </div>
            @endif
            <label for="password" class="sr-only">Password</label>
            <input type="password" id="password" name="password" class="form-control mt-4" placeholder="كلمة المرور"
                   required>
            @if($errors->has('password'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">برجاء ادخال كلمة مرور</div>
                </div>
            @endif
            @if(session()->has('login-error'))
                <div class="mt-2 alert alert-danger mt-4">
                    <div class="text-danger font-weight-bold">{{session('login-error')}}</div>
                </div>
            @endif
            <button class="btn btn-lg btn-primary btn-block mt-4" type="submit">تسجيل الدخول</button>
        </div>
    </form>
</div>
<script>
    $('.no-js').removeClass('no-js');
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
