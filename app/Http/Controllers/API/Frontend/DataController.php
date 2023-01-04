<?php

namespace App\Http\Controllers\API\Frontend;

use Auth;
use App\Models\User;
use App\Models\Course;
use App\Models\Package;
use App\Models\Service;
use App\Models\Certificate;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Http\Controllers\Controller;
use App\Http\Resources\CourseResource;
use App\Http\Resources\PackageResource;
use PragmaRX\Countries\Package\Countries;
use App\Http\Resources\CertificateResource;
use App\Http\Resources\CourseCategoryResource;

class DataController extends Controller
{
    public function getPicnicPackage()
    {
        $data['packages'] = Package::with('service')->where('package_type', 1)->get();
        return response()->json($data);
    }

    public function getFamilyPackage()
    {
        $data['packages'] = Package::with('service')->where('package_type', 2)->get();
        return response()->json($data);
    }

    public function getService()
    {
        $data['services'] = Package::all();
        return response()->json($data);
    }

    public function findService($find_service)
    {
        // return $find_service;
        $data['services'] = Service::with('user')->where('name', 'LIKE', "%$find_service%")->get();

        return response()->json($data);
    }

    public function getSinglePackage($package_id)
    {
        $package = Package::select('id', 'name', 'price')->where('id', $package_id)->first();

        return new PackageResource($package);
    }

    public function getAustralia()
    {
        $countries = Countries::all();
        $states = $countries->where('cca3', 'AUS')->first()->hydrateStates()->states;

        $stateNames = [];

        foreach ($states as $key => $state) {
            $stateNames[] = [
                'name' => $state['name'],
            ];
        }

        return response()->json($stateNames);
    }

    public function getCourse()
    {
        return $courses = CourseResource::collection(Course::all());
    }

    public function getSingleCourse($slug)
    {
        // return $slug;
        $course = Course::where('slug', $slug)->first();
        return new CourseResource($course);
    }

    public function getIndustryCourse($slug)
    {
        // return $slug;
        $check = CourseCategory::where('slug', $slug)->exists();

        if ($check) {

            $categoryIds = CourseCategory::where('slug', $slug)->first();
            $course = Course::where('course_category_id',  $categoryIds->id)->get();
            return CourseResource::collection($course);
        }
    }

    public function getStudentCertificate()
    {
        $data = Certificate::where('user_id', Auth::user()->id)->where('course_id', Auth::user()->course_id)->first();
        return new CertificateResource($data);
    }

    public function getCourseCategory()
    {
        return CourseCategoryResource::collection(CourseCategory::all());
    }


    public function SearchForCertificate(Request $request)
    {
    //    return $request->all();
        $check = User::where('phone', $request->phone)->where('student_id', $request->student_id)->where('course_code', $request->course_code)->exists();
      

       if($check){
        $user = User::where('phone', $request->phone)->where('student_id', $request->student_id)->where('course_code', $request->course_code)->first();
        $certificate = Certificate::where('user_id', $user->id)->where('certificate_status', 4)->exists();

        if($certificate == true){

            return response()->json([
                'success' => 200,
                'message' => 'Your certificate is issued'
            ]);

        } else {

            return response()->json([
                'success' => 401,
                'message' => 'Your certificate is not issued'
            ]);

        }
       } else {

        return response()->json([
            'success' => 401,
            'message' => 'Your certificate is not issued'
        ]);

    }
        // return $request->all();
    }
}
