<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IBM - Institute of Business & Management</title>
    <meta name="keywords" content="IBM - Institute of Business & Management">
    <meta name="description" content="Institute of Business & Management">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="base-url" content="{{config('app.url')}}">

    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/img/favicon.png')}}">

    @include('frontend.layouts.style')
    
   <style>
    .vs__dropdown-toggle{
        padding-top: 1px !important;
        padding-bottom: 5px !important;
        border-radius: 0px !important;
      }
    </style> 
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    
   
    @section('content')
     <div id="frontend_app">
        
    </div>   
    @show
    
   

    @include('frontend.layouts.script')
   
</body>
</html>