<?php

namespace App\Filters;
use Illuminate\Http\Request;
use App\Filters\ApiFilters;

class RegistrationFilters extends ApiFilters{

    protected $safeParams =[
        'period_id' =>['eq'],
        'activity_id' =>['eq'],
        'instructor_id' =>['eq'],
        'group_id' =>['eq'],
        'area_id' =>['eq'],
        'student_id' =>['eq'],
        'grade' =>['eq','gt','lt'],
        'career_id' =>['eq'],
    ];
    protected $columMap =[
        'period' => 'period_id',
        'activity' => 'activity_id',
        'instructor' => 'instructor_id',
        'group' => 'group_id',
        'area' => 'area_id',
        'student' => 'student_id',
        'career' => 'career_id',
    ];
    protected $operatorMap =[
        'eq' => '=',
        'lt' => '<',
        'lte' => '<=',
        'gt' => '>',
        'gte' => '>='

    ];


}
