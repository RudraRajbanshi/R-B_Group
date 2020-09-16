<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index(){
        return view('user.question');
    }

    public function store(Request $r){
        $validation = array(
            'q1' => 'required',
            'q2' => 'required',
            'q3' => 'required',
            'q4' => 'required',
            'q5' => 'required',
            'q6' => 'required',
            'q7' => 'required',
            'q8' => 'required',
            'q9' => 'required',
            'q10' => 'required',
            'q11' => 'required',
            'q12' => 'required',
            'q13' => 'required',
            'q14' => 'required',
            'q15' => 'required',
            'q16' => 'required',
            'q17' => 'required',
            'q18' => 'required',
            'q19' => 'required',
            'q20' => 'required'

        );

        $r->validate($validation);

        $Question = new Question;
        $Question->email = $r->get('email');
        $Question->Q1 = $r->get('q1');
        $Question->Q2 = $r->get('q2');
        $Question->Q3 = $r->get('q3');
        $Question->Q4 = $r->get('q4');
        $Question->Q5 = $r->get('q5');
        $Question->Q6 = $r->get('q6');
        $Question->Q7 = $r->get('q7');
        $Question->Q8 = $r->get('q8');
        $Question->Q9 = $r->get('q9');
        $Question->Q10 = $r->get('q10');
        $Question->Q11 = $r->get('q11');
        $Question->Q12 = $r->get('q12');
        $Question->Q13 = $r->get('q13');
        $Question->Q14 = $r->get('q14');
        $Question->Q15 = $r->get('q15');
        $Question->Q16 = $r->get('q16');
        $Question->Q17 = $r->get('q17');
        $Question->Q18 = $r->get('q18');
        $Question->Q19 = $r->get('q19');
        $Question->Q20 = $r->get('q20');

        $Question->save();


        return redirect('/applyjob')->with('msg','Your Details have been sent. You will soon receive mail. Thank You!');
    }
}
