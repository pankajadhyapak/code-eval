<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model {

	protected $fillable = ['exam_code', 'student_id', 'passed_test_cases'];

}
