<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $primaryKey = 'username';
    public $incrementing = false;
    protected $keyType = 'string';
    public $timestamps = false;
    protected $fillable = [
        'name',
        'national_id',
        'certificate_obtained',
        'other_certificate_obtained',
        'certificate_obtained_date',
        'nationality',
        'birth_date',
        'birth_province',
        'birth_country',
        'gender',
        'religion',
        'address',
        'landline_phone',
        'mobile',
        'father_profession',
        'Parents_phone1',
        'Parents_phone2',
        'student_classification',
        'study_group',
        'specialization',
        'studying_status',
        'immigrant_student',
        'email',
        'notes',
        'username',
        'password',
        'military_number',
        'recruitment_area',
        'photo',
    ];

    public static function last($type = null)
    {
        if ($type) {
            return self::where('username', 'LIKE', $type . '%')->orderBy('username', 'desc')->first();
        } else {
            return self::orderBy('username', 'desc')->first();
        }
    }
}
