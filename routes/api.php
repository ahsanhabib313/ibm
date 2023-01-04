<?php

use App\Http\Controllers\OnlineApplicationsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\SubscriptionController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('student/subscription',[SubscriptionController::class, 'subscribe']);
Route::group(['namespace' => 'API\Backend', 'middleware' => 'api'], function () {
    Route::post('/auth/signin', 'AuthController@signIn');
    Route::post('/auth/signup', 'AuthController@signUp');
    Route::post('/auth/signout', 'AuthController@signOut');
});


Route::group(['namespace' => 'API\Backend', 'middleware' => 'auth:sanctum'], function () {

    Route::apiResources([
        'service-provider'       => 'ServiceProviderController',
        'provider-service'       => 'UserServiceController',
        'service'                => 'ServiceController',
        'post'                   => 'PostController',
        'gallery'                => 'GalleryController',
        'comment'                => 'CommentController',
        'rating'                 => 'RatingController',
        'customer'               => 'CustomerController',
        'booking'                => 'BookingController',
        'order'                  => 'OrderController',
        'service-provider-order' => 'MyOrderController',
        'assign-order'           => 'AssignOrderController',
        'wallet'                 => 'WalletController',
        'my-wallet'              => 'MyWalletController',
        'paypal-credential'      => 'PaypalCredentialController',
        'my-profile'             => 'ServiceProviderProfileController',
        'customer-message'       => 'CustomerMessageController',
        'students'               => 'StudentsController',
        'certificate'            => 'CertificateController',
        'agents'                 => 'AgentController',
        'courses'                => 'CourseController',
        'course-category'        => 'CourseCategoryController',
    ]);

    // General Controller
    Route::get('get-customer-user', 'CustomerMessageController@getCustomer');
    Route::get('get-single-order/{order_id}', 'MyOrderController@getSingleOrder');
    Route::post('order-acception', 'MyOrderController@acceptOrder');

    Route::post('create-payment', 'PaypalController@createServiceProviderPayment');
    Route::post('execute-service-provider-payment', 'PaypalController@executePaypal');
    Route::post('execute-company-payment', 'PaypalController@executeCompanyPayment');

    // Cash Payment
    Route::post('cash-payment-to-company', 'PaypalController@cashPaymentToComapny');
    Route::post('cash-payment-from-provider', 'PaypalController@cashPaymentFromProvider');

    Route::get('cancel', 'PaypalController@cencel');
    Route::get('success', 'PaypalController@success');

    // Report

    Route::get('get-service-provider', 'ServiceProviderController@getAllServiceProvider');
    Route::get('total-customer', 'CompanyReportController@totalCustomer');
    Route::get('total-provider', 'CompanyReportController@totalProvider');

    Route::post('total-customer-order', 'CompanyReportController@totalCustomerOrder');
    Route::post('total-order', 'CompanyReportController@totalOrder');
});

Route::group(['namespace' => 'API\Frontend', 'middleware' => 'api'], function () {

    Route::post('signup', 'AuthController@signUp');
    Route::post('login', 'AuthController@login');
    Route::post('signout', 'AuthController@signOut');
    Route::get('get-service', 'DataController@getService');
    Route::get('find-service/{find_service}', 'DataController@findService');

    Route::get('get-service', 'ServiceVisibilityController@getService');

    Route::get('services/{service_slug}', 'ServiceVisibilityController@singleService');

    Route::get('single-appointment', 'BookingController@singleAppointment');
    Route::get('request-nearest-all', 'BookingController@requestNearestAll');

    Route::get('nearest-service-provider', 'NearestServiceProviderController@getNearestProvider');

    Route::get('single-user/{user_id}', 'UserController@getSingleUser');

    Route::post('send-contact', 'ContactController@sendContactMessage');

    Route::get('image-gallery', 'GalleryController@getImage');
    Route::get('get-post', 'PostController@getPost');
    Route::get('get-australia', 'DataController@getAustralia');
    Route::get('get-course', 'DataController@getCourse');
    Route::get('get-industry-courses/{slug}', 'DataController@getIndustryCourse');
    Route::get('get-single-course/{slug}', 'DataController@getSingleCourse');
    Route::get('get-course-category', 'DataController@getCourseCategory');
    Route::get('get-blog-post', 'BlogController@getBlog');
    Route::get('get-single-blog-post/{slug}', 'BlogController@getSingleBlog');

    Route::post('submit-student-enrolment', 'StudentController@onlineEnrollment');
    Route::post('search-for-certificate', 'StudentController@SearchForCertificate');
});


Route::group(['namespace' => 'API\Frontend', 'middleware' => 'auth:sanctum'], function () {

    Route::apiResources([

        'my-booking' => 'MyBookingController'

    ]);

    Route::post('send-message', 'MessageController@sendMessage');

    Route::post('single-appointment', 'BookingController@singleAppointment');
    Route::get('customer-order', 'CustomerOrderController@customerOrder');
    Route::get('get-student-certificate', 'DataController@getStudentCertificate');
});

Route::post("online-application", [OnlineApplicationsController::class, "handleApplication"]);
