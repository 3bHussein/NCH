<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تسجيل الطلاب</title>
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
<div class="container-fluid text-center no-js mt-4">
    <div class="position-absolute" style="width: fit-content;top: 40px;left: 100px;z-index: 1;">
        <form method="get" action="{{route('login.out')}}">
            <button class="btn btn-lg btn-primary" type="submit">تسجيل الخروج</button>
        </form>
    </div>
    <form method="post" action="{{route('add.student')}}" autocomplete="off" enctype="multipart/form-data">
        @csrf
        @if(session()->has('success'))
            <div class="alert alert-success text-center mx-auto col-12">
                <span class="h4 text-success text-center text-capitalize">{{session('success')}}</span>
            </div>
        @endif
        <h1 class="mb-4 font-weight-normal display-4">تسجيل الطلاب</h1>
        <div class="col-7 mx-auto">
            <input type="text" id="name" name="name" class="form-control my-4"
                   placeholder="name" required value="{{ old('name') }}">
            @if($errors->has('name'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('name')}}</div>
                </div>
            @endif
            <input type="text" id="national_id" name="national_id" class="form-control my-4"
                   placeholder="National ID" required value="{{ old('national_id') }}">
            @if($errors->has('national_id'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('national_id')}}</div>
                </div>
            @endif
            <select class="form-control my-4" id="certificate_obtained" name="certificate_obtained" required>
                <option value="" hidden></option>
                <option
                    value="ثانوى عامة علوم" @if (old('certificate_obtained') == "ثانوى عامة علوم") {{ 'selected' }} @endif>
                    ثانوى عامة علوم
                </option>
                <option value="اخرى" @if (old('certificate_obtained') == "اخرى") {{ 'selected' }} @endif>اخرى</option>
            </select>
            @if($errors->has('certificate_obtained'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('certificate_obtained')}}</div>
                </div>
            @endif
            <input type="text" id="other_certificate_obtained" name="other_certificate_obtained"
                   class="form-control my-4"
                   placeholder="other_certificate_obtained"
                   value="{{ old('other_certificate_obtained') }}">
            @if($errors->has('other_certificate_obtained'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('other_certificate_obtained')}}</div>
                </div>
            @endif
            <input type="number" id="certificate_obtained_date" min="1990" max="2300" step="1"
                   name="certificate_obtained_date" placeholder="certificate obtained year" class="form-control my-4"
                   required value="{{ old('certificate_obtained_date') }}">
            @if($errors->has('certificate_obtained_date'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('certificate_obtained_date')}}</div>
                </div>
            @endif
            <input type="text" id="nationality" name="nationality" class="form-control my-4"
                   placeholder="nationality" required value="{{ old('nationality') }}">
            @if($errors->has('nationality'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('nationality')}}</div>
                </div>
            @endif
            <input type="date" id="birth_date" name="birth_date" class="form-control my-4"
                   required value="{{ old('birth_date') }}">
            @if($errors->has('birth_date'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('birth_date')}}</div>
                </div>
            @endif
            <input type="text" id="birth_province" name="birth_province" class="form-control my-4"
                   placeholder="birth_province" required value="{{ old('birth_province') }}">
            @if($errors->has('birth_province'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('birth_province')}}</div>
                </div>
            @endif
            <input type="text" id="birth_country" name="birth_country" class="form-control my-4"
                   placeholder="birth_country" required value="{{ old('birth_country') }}">
            @if($errors->has('birth_country'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('birth_country')}}</div>
                </div>
            @endif
            <div class="row col-12 my-4">
                <span>الجنس</span>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderm"
                           value="ذكر" @if(old('gender') == "ذكر") checked @endif>
                    <label class="form-check-label" for="genderm">ذكر</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="gender" id="genderf"
                           value="أنثى" @if(old('gender') == "أنثى") checked @endif>
                    <label class="form-check-label" for="genderf">أنثى</label>
                </div>
            </div>
            @if($errors->has('gender'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('gender')}}</div>
                </div>
            @endif
            <input type="text" id="religion" name="religion" class="form-control my-4"
                   placeholder="religion" required value="{{ old('religion') }}">
            @if($errors->has('religion'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('religion')}}</div>
                </div>
            @endif
            <input type="text" id="address" name="address" class="form-control my-4"
                   placeholder="address" required value="{{ old('address') }}">
            @if($errors->has('address'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('address')}}</div>
                </div>
            @endif
            <input type="text" id="landline_phone" name="landline_phone" class="form-control my-4"
                   placeholder="landline_phone" value="{{ old('landline_phone') }}">
            @if($errors->has('landline_phone'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('landline_phone')}}</div>
                </div>
            @endif
            <input type="text" id="mobile" name="mobile" class="form-control my-4"
                   placeholder="mobile" required value="{{ old('mobile') }}">
            @if($errors->has('mobile'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('mobile')}}</div>
                </div>
            @endif
            <input type="text" id="father_profession" name="father_profession" class="form-control my-4"
                   placeholder="father_profession" required value="{{ old('father_profession') }}">
            @if($errors->has('father_profession'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('father_profession')}}</div>
                </div>
            @endif
            <input type="text" id="Parents_phone1" name="Parents_phone1" class="form-control my-4"
                   placeholder="Parents_phone1" value="{{ old('Parents_phone1') }}">
            @if($errors->has('Parents_phone1'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('Parents_phone1')}}</div>
                </div>
            @endif
            <input type="text" id="Parents_phone2" name="Parents_phone2" class="form-control my-4"
                   placeholder="Parents_phone2" value="{{ old('Parents_phone2') }}">
            @if($errors->has('Parents_phone2'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('Parents_phone2')}}</div>
                </div>
            @endif
            <select class="form-control my-4" id="student_classification"
                    name="student_classification" required>
                <option value="" hidden></option>
                <option value="خريجين" @if (old('student_classification') == "خريجين") {{ 'selected' }} @endif>خرجين
                </option>
                <option value="سحب ملف" @if (old('student_classification') == "سحب ملف") {{ 'selected' }} @endif>سحب
                    ملف
                </option>
            </select>
            @if($errors->has('student_classification'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('student_classification')}}</div>
                </div>
            @endif
            <select class="form-control my-4" id="study_group" name="study_group" required>
                <option value="" hidden></option>
                <option value="الاولى" @if (old('study_group') == "الاولى") {{ 'selected' }} @endif>الاولى</option>
                <option value="الرابعة" @if (old('study_group') == "الرابعة") {{ 'selected' }} @endif>الرابعة</option>
            </select>
            @if($errors->has('study_group'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('study_group')}}</div>
                </div>
            @endif
            <select class="form-control my-4" id="specialization" name="specialization" required>
                <option value="" hidden></option>
                <option value="انجليزى" @if (old('specialization') == "انجليزى") {{ 'selected' }} @endif>انجليزى
                </option>
                <option value="عربى" @if (old('specialization') == "عربى") {{ 'selected' }} @endif>عربى</option>
            </select>
            @if($errors->has('specialization'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('specialization')}}</div>
                </div>
            @endif
            <select class="form-control my-4" id="studying_status" name="studying_status" required>
                <option value="" hidden></option>
                <option value="مستجد" @if (old('studying_status') == "مستجد") {{ 'selected' }} @endif>مستجد</option>
                <option value="باقى" @if (old('studying_status') == "باقى") {{ 'selected' }} @endif>باقى</option>
            </select>
            @if($errors->has('studying_status'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('studying_status')}}</div>
                </div>
            @endif
            <div class="form-check text-right col-12 my-4" dir="ltr">
                <input class="form-check-input" type="checkbox" name="immigrant_student" value="1"
                       id="immigrant_student" @if(old('immigrant_student') == "1") checked @endif>
                <label class="form-check-label" for="immigrant_student">
                    طالب وافد
                </label>
                @if($errors->has('immigrant_student'))
                    <div class="mt-2 text-center alert alert-danger">
                        <div class="text-danger h5">{{$errors->first('immigrant_student')}}</div>
                    </div>
                @endif
            </div>
            <input type="email" id="email" name="email" class="form-control my-4"
                   placeholder="email" value="{{ old('email') }}">
            @if($errors->has('email'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('email')}}</div>
                </div>
            @endif
            <div class="form-group my-4">
                <textarea class="form-control" placeholder="بيانات أخرى" name="notes" id="notes" rows="3"
                          style="resize: none;">@if (old('notes')) {{ old('notes') }}@endif</textarea>
            </div>
            @if($errors->has('notes'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('notes')}}</div>
                </div>
            @endif
            <input type="text" id="username" name="username" class="form-control my-4"
                   placeholder="username" required value="{{ old('username') }}"
                   readonly>
            @if($errors->has('username'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('username')}}</div>
                </div>
            @endif
            <input type="text" id="password" name="password" class="form-control my-4"
                   placeholder="password" required readonly>
            @if($errors->has('password'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('password')}}</div>
                </div>
            @endif
            <input type="text" id="military_number" name="military_number" class="form-control my-4"
                   placeholder="military_number" value="{{ old('military_number') }}">
            @if($errors->has('military_number'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('military_number')}}</div>
                </div>
            @endif
            <input type="text" id="recruitment_area" name="recruitment_area" class="form-control my-4"
                   placeholder="recruitment_area" value="{{ old('recruitment_area') }}">
            @if($errors->has('recruitment_area'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('recruitment_area')}}</div>
                </div>
            @endif
            <div class="form-group my-4">
                <input type="file" class="form-control-file" name="photo" id="photo">
            </div>
            @if($errors->has('photo'))
                <div class="mt-2 alert alert-danger">
                    <div class="text-danger h5">{{$errors->first('photo')}}</div>
                </div>
            @endif
            <button class="btn btn-lg btn-primary btn-block my-4" type="submit">Register</button>
        </div>
    </form>
</div>
<script>
    $('.no-js').removeClass('no-js');
    generatePassword();

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

    if ($('#other_certificate_obtained').val() === '') {
        $('#other_certificate_obtained').attr('disabled', 'disabled');
        $('#other_certificate_obtained').hide();
    }
    if ($('#certificate_obtained').val() === 'اخرى') {
        $('#other_certificate_obtained').removeAttr('disabled');
        $('#other_certificate_obtained').show();
    }

    $('#specialization').on('input', function () {
        $.ajax({
            type: 'get',
            url: '{{route('student.username')}}',
            data: {
                'specialization': $('#specialization').val(),
            },
            success: function (data) {
                $('#username').val(data);
            }
        });
    });

    $('#certificate_obtained').on('input', function () {
        if ($(this).val() === 'اخرى') {
            $('#other_certificate_obtained').removeAttr('disabled');
            $('#other_certificate_obtained').show();
        } else {
            $('#other_certificate_obtained').attr('disabled', 'disabled');
            $('#other_certificate_obtained').hide();
        }
    })
</script>
</body>
</html>
