<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Area;
use App\Models\Career;
use App\Models\Group;
use App\Models\Instructor;
use App\Models\Period;
use App\Models\Registration;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Filters\RegistrationFilters;
use App\Http\Resources\RegistrationCollection;

class RegistrationController extends Controller
{

        public function index(Request $request)
    {
        $filter = new RegistrationFilters();
        $queryItems = $filter->transform($request);

        $registration = Registration::where($queryItems);
        return new RegistrationCollection($registration->paginate()->appends($request->query()));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }



    public function show(Registration $registration)
    {
        //
    }

    public function edit(Registration $registration)
    {
       //
    }

    public function update(Request $request, Registration $registration)
    {
     //
    }

    public function destroy(Registration $registration)
    {
        //
    }


}
