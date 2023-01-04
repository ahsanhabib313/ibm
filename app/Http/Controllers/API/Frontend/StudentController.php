<?php

namespace App\Http\Controllers\API\Frontend;

use SheetDB\SheetDB;
use App\Actions\EnrolmentForm\SavePersonalDetails;
use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Course;
use App\Models\Student\Contact;
use App\Models\Student\ContactPost;
use App\Models\Student\CourseEnroll;
use App\Models\Student\EducationAgent;
use App\Models\Student\EmergencyContact;
use App\Models\Student\EnglishProficiency;
use App\Models\Student\MostRecentQualification;
use App\Models\Student\PersonalDetails;
use App\Models\Student\PreviousQualification;
use App\Models\Student\ReasonForStudy;
use App\Models\Student\ResidentialContact;
use App\Models\Student\StudentConsent;
use App\Models\Student\StudentEnroll;
use App\Models\Student\StudentSpecialNeed;
use App\Models\Student\USIDetails;
use App\Models\User;
use PDF;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class StudentController extends Controller
{
    public function onlineEnrollment(Request $request)
    {
        try {
            $qustion01 = explode(",", $request->Qustion01);
            $qustion60 = explode(",", $request->Qustion60);
            $qustion64 = explode(",", $request->Qustion64);
            $qustion68 = explode(",", $request->Qustion68);
            $data = $request->all();
            $data["Qustion01"] = $qustion01;
            $data["Qustion60"] = $qustion60;
            $data["Qustion64"] = $qustion64;
            $data["Qustion68"] = $qustion68;

            $data["email"] = "info@ibm.vic.edu.au";
            $data["title"] = "From rajin";
            $data["body"] = "This is Demo";

            $pdf = PDF::loadView('emails.onlineApplication', $data);

            Mail::send('emails.onlineApplication', $data, function ($message) use ($data, $pdf) {
                $message->to($data["email"], $data["email"])->cc("info@quadque.tech")
                    ->subject($data["title"])
                    ->attachData($pdf->output(), "ApplyOnline.pdf");
            });

            return response()->json(["message" => "mail sent successfully"], 200);
        } catch (\throwable $th) {
            return response()->json(["message" => "something went wrong"], 503);
        }
    }

    public function enrollStudent(Request $request)
    {
        // return $request->all();
        // return $request->course_id;
        DB::beginTransaction();

        $user = User::create([
            'name'          => $request->consent_student_name,
            'email'         => $request->contact_email,
            'phone'         => $request->phone,
            'user_type'     => 3,
            'student_id'    => random_int(100000, 999999),
            // 'course_code'   => Course::find($request->course_id)->course_code??'',
            'password'      => Hash::make($request->password),
        ]);



        $certificates = [];

        foreach ($request->course_id as $key => $courseId) {

            $certificates[$key]['user_id']      = $user->id;
            $certificates[$key]['course_id']    = $courseId;
            $certificates[$key]['created_at']   = Carbon::now();
        }

        // return $certificates;

        Certificate::insert($certificates);


        $data = $request->all();

        $data['user_id'] = $user->id;

        $enrol =  StudentEnroll::create([
            'airport_pickup'    => $request->airport_pickup,
            // 'course_id'         => $request->course_id,
            'user_id'           => $user->id,
            'rpl_apply'         => $request->rpl_apply,
            'employment_status' => $request->employment_status,
        ]);



        $courseEnrolls = [];

        foreach ($request->course_id as $key => $courseId) {

            $courseEnrolls[$key]['course_id']           = $courseId;
            $courseEnrolls[$key]['student_enroll_id']   = $enrol->id;
        }

        CourseEnroll::insert($courseEnrolls);

        $data['student_enroll_id'] = $enrol->id;

        $contact = new Contact;
        $contact->create([
            'student_enroll_id' => $data['student_enroll_id'],
            'address'           => $data['contact_address'],
            // 'country'           => $data['contact_country'],
            'phone'             => $data['contact_phone'],
            'email'             => $data['contact_email'],
        ]);

        $contactPost = new ContactPost;
        $contactPost->create([
            'student_enroll_id' => $data['student_enroll_id'],
            'po_box'            => $data['contact_post_po_box'],
            'code'              => $data['contact_post_postcode'],
            'state'             => $data['contact_post_state'],
            'suburb'            => $data['contact_post_suburb'],
            'street_name'       => $data['contact_post_street_name'],
            'street_no'         => $data['contact_post_street_no'],
            'flat_unit'         => $data['contact_post_flat_unit'],
            'building_name'     => $data['contact_post_building_name'],
            'method'            => $data['contact_preferred_contact_method'],
        ]);

        $educationAgent = new EducationAgent;
        $educationAgent->create($data);

        $emergencyContact = new EmergencyContact;
        $emergencyContact->create([
            'student_enroll_id'    => $data['student_enroll_id'],
            'name'                 => $data['contact_emergency_contact_name'],
            'contact_relationship' => $data['contact_emergency_contact_relationship'],
            'phone'                => $data['contact_emergency_contact_phone'],
        ]);

        $englishProficiency = new EnglishProficiency;
        $englishProficiency->create([
            'student_enroll_id' => $data['student_enroll_id'],
            'level_1_country'   => $data['english_language_proficiency_level_1_country'],
            'score_date'        => $data['english_language_proficiency_score_date'],
            'score_achieved'    => $data['english_language_proficiency_score_achieved'],
            'assessment_type'   => $data['english_language_proficiency_assessment_type'],
        ]);

        $mostRecentQualification = new MostRecentQualification;
        $mostRecentQualification->create([
            'student_enroll_id'  => $data['student_enroll_id'],
            'completed_year'     => $data['most_recent_qualification_completed_year'],
            'country'            => $data['most_recent_qualification_country'],
            'school_institution' => $data['most_recent_qualification_school_institution'],
            'qualification_name' => $data['most_recent_qualification_name_of_qualification'],
        ]);

        $personalDetails = new PersonalDetails;
        $personalDetails->create($data);

        $previousQualification = new PreviousQualification;
        $previousQualification->create([
            'student_enroll_id' => $data['student_enroll_id'],
            'qualification'     => $data['previous_completed_qualification'],
            'assessed'          => $data['previous_completed_qualification_assessed'] == 'yes',
            'name'              => $data['previous_completed_qualification_name'],
        ]);

        $reasonForStudy = new ReasonForStudy;
        $reason = $data['reason_for_study'];
        if ($reason == "Others") {
            $reason = $data['reason_for_study_other'];
        }
        $reasonForStudy->create([
            'student_enroll_id' => $data['student_enroll_id'],
            'reason' => $reason,
        ]);

        $residentialContact = new ResidentialContact;
        $residentialContact->create($data);

        $studentConsent = new StudentConsent;
        $studentConsent->create([
            'student_enroll_id' => $data['student_enroll_id'],
            'consent_1'         => $data['consent_1'],
            'consent_2'         => $data['consent_2'],
            'consent_3'         => $data['consent_3'],
            'consent_4'         => $data['consent_4'],
            'consent_5'         => $data['consent_5'],
            'name'              => $data['consent_student_name'],
            'date'              => $data["consent_student_date"],
        ]);

        $studentSpecialNeed = new StudentSpecialNeed;
        $studentSpecialNeed->create($data);

        $usiDetails = new USIDetails;
        $usiDetails->create([
            'student_enroll_id' => $data['student_enroll_id'],
            'date'              => $data['usi_date'],
            'staff_name'        => $data['usi_staff_name'],
            'usi_choice'        => $data['usi_choice'],
            'choice_name'       => $data['usi_choice_name'],
        ]);

        DB::commit();

        return response()->json([
            'message' => 'Student enrolled successfully',
        ], 201);
    }

    private function filterData($model, $data)
    {
        $model->fill($data);

        return $model;
    }

    public function SearchForCertificate(Request $request)
    {



        $sheetdb = new SheetDB('dd3l5x2y2d9iw');

        // returns specific spreadsheets data
        $response = $sheetdb->searchOr(['student_id' => $request->student_id, 'course_code' => $request->course_code]);

        if (empty($response)) {
            return response()->json([
                'status' => 200,
                'message' => ' Student ID is not Available'
            ]);
        } else {
            if ($response[0]->certificate_issued == 0) {
                $message = 'Certificate has been not issued';
            } else {
                $message = 'Certificate has been issued';
            }
            return response()->json([
                'status' => 200,
                'message' => $message
            ]);
        }
    }
}
