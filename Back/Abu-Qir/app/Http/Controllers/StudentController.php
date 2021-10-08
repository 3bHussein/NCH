<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    public function index()
    {
        return view('studentRegistration');
    }

    public function getLastUsername(Request $request)
    {
        if ($request->ajax()) {
            date_default_timezone_set('Africa/Cairo');
            $output = '';
            if ($request->specialization === 'انجليزى') {
                $output .= 'E';
            } else if ($request->specialization === 'عربى') {
                $output .= 'A';
            } else {
                return Response('خطاء فى البيانات');
            }
            $username = Student::last($output)->username;
//            $username = Student::last()->username;
            if (substr($username, 1, 2) === date('y')) {
                $output .= (substr($username, 1, 6) + 1);
            } elseif (substr($username, 1, 2) < date('y')) {
                $output .= date('y') . '0001';
            }
            return Response($output);
        }
        return Response('no data found');
    }

    public function addStudent(Request $request)
    {
        $rules = [
            'name' => 'required|regex:/^[\x{0621}-\x{064A} ]+$/u',
            'national_id' => 'required|digits:14|unique:students,national_id',
            'certificate_obtained' => ['required', Rule::in(['ثانوى عامة علوم', 'اخرى', ''])],
            'other_certificate_obtained' => (($request->certificate_obtained === "اخرى") ? 'required|regex:/^[\x{0621}-\x{064A} ]+$/u' : 'nullable|regex:/^$/i'),
            'certificate_obtained_date' => 'required|integer|digits:4|min:1990|max:2300',
            'nationality' => 'required|regex:/^[\x{0621}-\x{064A} ]+$/u',
            'birth_date' => 'required|date|before:-15 years',
            'birth_province' => 'required|regex:/^[\x{0621}-\x{064A} ]+$/u',
            'birth_country' => 'required|regex:/^[\x{0621}-\x{064A} ]+$/u',
            'gender' => ['required', Rule::in(['ذكر', 'أنثى'])],
            'religion' => 'required|regex:/^[\x{0621}-\x{064A} ]+$/u',
            'address' => 'required|regex:/^[\x{0621}-\x{064A}0-9٠-٩ ]+$/u',
            'landline_phone' => 'nullable|digits:9',
            'mobile' => 'required|unique:students,mobile|digits:11|regex:/^(01)/',
            'father_profession' => 'required|regex:/^[\x{0621}-\x{064A}0-9٠-٩ ]+$/u',
            'Parents_phone1' => 'nullable|digits:11|regex:/^(01)/',
            'Parents_phone2' => 'nullable|digits:11|regex:/^(01)/',
            'student_classification' => ['required', Rule::in(['خريجين', '', ''])],
            'study_group' => ['required', Rule::in(['الاولى', '', ''])],
            'specialization' => ['required', Rule::in(['انجليزى', 'عربى'])],
            'studying_status' => ['required', Rule::in(['مستجد', ''])],
            'immigrant_student' => 'nullable|in:1',
            'email' => 'nullable|email:rfc,dns|unique:students,email|regex:/^[^\x{0621}-\x{064A}٠-٩ ]+$/u',
            'notes' => 'nullable|regex:/^[^<>#*]+$/u',
            'username' => 'required|string|min:7|max:7|unique:students,username|regex:/^[AE][0-9]{6}$/u',
            'password' => 'required|string|min:12|max:12|regex:/^[a-zA-Z0-9!@#&*_+?.-]{12}$/u',
            'military_number' => (($request->gender === "ذكر") ? 'required|unique:students,military_number|digits:10' : 'nullable|regex:/^$/i'),
            'recruitment_area' => (($request->gender === "ذكر") ? 'required|regex:/^[\x{0621}-\x{064A}0-9٠-٩ ]+$/u' : 'nullable|regex:/^$/i'),
            'photo' => 'nullable|image|max:1024',
        ];
        $request->validate($rules);
        $data = $request->except('_token');
        if ($data['certificate_obtained'] == 'اخرى') {
            $data['certificate_obtained'] = $data['other_certificate_obtained'];
        }
        unset($data['other_certificate_obtained']);
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $fileName = $request->username . '-' . $request->certificate_obtained_date . '.' . $photo->extension();
            $photo->move(public_path('uploads/photos'), $fileName);
            $data['photo'] = '/uploads/photos/' . $fileName;
        }
        Student::create($data);
        return redirect()->back()->with('success', 'تم اضافة الطالب بنجاح');
    }
}
