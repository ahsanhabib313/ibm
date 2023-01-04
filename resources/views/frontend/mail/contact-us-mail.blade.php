<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Us Mail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h5>Hi, </h5>
    <p>{{$mail['name']}} sent you message via contact us form. Email: {{$mail['email']}}, Phone: {{$mail['phone']}} <a class="btn btn-lg btn-success" href="{{url('/admin/contact')}}">View Message</a></p>
    <p>{{$mail['message']}} </p>
</body>
</html>