<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Applicant;
use App\ApplicantShift;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }
    public function about()
    {
        return view('user.about');
    }
    public function services()
    {
        return view('user.services');
    }
    public function blog()
    {
        return view('user.blog');
    }
    public function contact()
    {
        return view('user.contact');
    }
    public function aboutjob()
    {
        return view('user.aboutjob');
    }
    public function applyjob()
    {
        return view('user.applyjob');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $r)
    {
        $validation = array(
            'name' => 'required',
            'surname' => 'required',
            'gender' => 'required',
            'dob' => 'required',
            'birthplace' => 'required',
            'country' => 'required',
            'currentsuburb' => 'required',
            'currentstate' => 'required',
            'postcode' => 'required',
            'phone' => 'required',
            'email' => 'required',

            'passport_no' => 'required',
            'passport_country' => 'required',

            'visatype' => 'required',
            'visaIssued' => 'required',
            'visaExpiry' => 'required',
            'workPermit' => 'required',

            'image' => 'mimes:jpeg,bmp,png,gif|max:5000',
            'coverletter' => 'mimes:jpeg,bmp,png,gif,pdf,doc,docx|max:5000',
            'resume' => 'mimes:jpeg,bmp,png,gif,pdf,doc,docx|max:5000'
        );

       $r->validate($validation);

        $image = '';
        if ($r->hasfile('image')) {
            $file = $r->file('image');
            $image = date('ymdhis') . $file->getClientOriginalName();
            $path = public_path() . '/uploads/';
            $file->move($path, $image);
        }
        $coverletter = '';
        if ($r->hasfile('coverletter')) {
            $file = $r->file('coverletter');
            $coverletter = date('ymdhis') . $file->getClientOriginalName();
            $path = public_path() . '/uploads/';
            $file->move($path, $coverletter);
        }
        $resume = '';
        if ($r->hasfile('resume')) {
            $file = $r->file('resume');
            $resume = date('ymdhis') . $file->getClientOriginalName();
            $path = public_path() . '/uploads/';
            $file->move($path, $resume);
        }

        $Applicant = new Applicant;
        $Applicant->name = $r->get('name');
        $Applicant->middle_name = $r->get('middlename');
        $Applicant->surname = $r->get('surname');
        $Applicant->gender = $r->get('gender');
        $Applicant->dob = $r->get('dob');
        $Applicant->place_of_birth = $r->get('birthplace');
        $Applicant->suburb = $r->get('suburb');
        $Applicant->state = $r->get('state');
        $Applicant->country = $r->get('country');
        $Applicant->street = $r->get('street');
        $Applicant->suburb2 = $r->get('currentsuburb');
        $Applicant->state2 = $r->get('currentstate');
        $Applicant->postcode = $r->get('postcode');

        $Applicant->phone = $r->get('phone');
        $Applicant->email = $r->get('email');

        $Applicant->driver_licence = $r->get('driver_licence_no');
        $Applicant->driver_state = $r->get('driver_state_territory');
        $Applicant->firearms_licence = $r->get('firearms_licence_no');
        $Applicant->firearms_state = $r->get('firearms_state_territorys');
        $Applicant->passport = $r->get('passport_no');
        $Applicant->passport_country = $r->get('passport_country');

        $Applicant->visa_type = $r->get('visatype');
        $Applicant->visa_issued_date = $r->get('visaIssued');
        $Applicant->visa_expiry_date = $r->get('visaExpiry');
        $Applicant->work_permit = $r->get('workPermit');

        $Applicant->academic_start_year = $r->get('startyear');
        $Applicant->academic_end_year = $r->get('endyear');
        $Applicant->course = $r->get('course');
        $Applicant->college = $r->get('college');
        $Applicant->course_type = $r->get('coursetype');

        $Applicant->image = $image;
        $Applicant->cover_letter = $coverletter;
        $Applicant->resume = $resume;



        $ApplicantShift = new ApplicantShift;
        $ApplicantShift->email = $r->get('email');
        $ApplicantShift->shift = "Monday: ".$r->get('monday') ."\n".
                                 "Tuesday: " . $r->get('tuesday') ."\n".
                                 "Wednesday: " . $r->get('wednesday') ."\n".
                                 "Thursday: " . $r->get('thursday') ."\n".
                                 "Friday: " . $r->get('friday') ."\n".
                                 "Sunday: " . $r->get('sunday')


        ;

        $Applicant->save();
        $ApplicantShift->save();
        $email = $r->get('email');

        return redirect('/question')->with('data', $email);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
