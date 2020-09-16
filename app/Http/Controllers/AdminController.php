<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\ApplicantShift;
use App\Contact;
use App\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use File;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index');
    }

    public function applicant_details(){
        $applicants = Applicant::orderBy('created_at', 'DESC')->paginate(20);
        $applicant = Applicant::all();


        return view('admin.applicant_details', compact('applicants', 'applicant'));
    }

    public function message(){
        $contacts = Contact::orderBy('created_at', 'DESC')->paginate(20);
        $contact = Contact::all();


        return view('admin.message', compact('contacts', 'contact'));
    }

    public function view_message($id){
        $message = Contact::findorFail($id);

        return view('admin.view_full_message', compact('message'));
    }

    public function delete_message(Request $r)
    {
        $id = $r->get('id');
        $message = Contact::findorFail($id);

        $message->delete();
        return redirect('/message')->with('msg', 'Message deleted');
    }

    public function full_details($id){
        $applicant = Applicant::findorFail($id);
        $applicant_shift = ApplicantShift::where('email', $applicant->email)->first();

        $shift = $applicant_shift->shift;

        return view('admin.view_full_details', compact('applicant','shift'));
    }
    public function answers(Request $r)
    {
       $email = $r->get('email');
       $answers = Question::where('email',$email)->first();
       $applicant = Applicant::where('email',$email)->first();

        return view('admin.answers', compact('applicant', 'answers'));
    }

    public function view_cover_letter($id){
        $applicant = Applicant::findorFail($id);

        return view('admin.cover_letter',compact('applicant'));
    }

    public function view_resume($id){
        $applicant = Applicant::findorFail($id);

        return view('admin.resume', compact('applicant'));
    }

    public function change_password(){
        return view('admin.change_password');
    }

    public function password_change(Request $r){
        $v = array(
            'password' => 'required|min:8'

        );
        $r->validate($v);

        //does the users cpass and ncpass match
        $opass = $r->get('opass');
        $npass = $r->get('password');
        $ncpass = $r->get('ncpass');
        if ($npass != $ncpass) {
            return redirect('/change_password')->with('msg', 'Your confirm password does not not match');
        }
        $user = Auth::user();


        if (!Hash::check($opass, $user['password'])) {
            return redirect('change_password')->with('msg', 'Your Old Password does not match');
        }

        $user = Auth::user();
        $user->password = bcrypt($npass);
        $user->save();

        auth()->logout();
        return redirect('/login')->with('msg', 'Password Changed.');
    }

    public function applicant_delete(Request $r){
        $id = $r->get('id');
        $email = $r->get('email');

        $applicant = Applicant::findorFail($id);
        $shift = ApplicantShift::where('email',$email)->first();
        $question = Question::where('email', $email)->first();

            $image_path = public_path() . "/uploads/" . $applicant['image'];
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $cover_letter = public_path() . "/uploads/" . $applicant['cover_letter'];
            if (File::exists($cover_letter)) {
                File::delete($cover_letter);
            }
            $resume = public_path() . "/uploads/" . $applicant['resume'];
            if (File::exists($resume)) {
                File::delete($resume);
            }

            $applicant->delete();
            $shift->delete();
            $question->delete();
            return redirect('/applicant/details')->with('msg', 'Applicant Deleted');

    }

}
