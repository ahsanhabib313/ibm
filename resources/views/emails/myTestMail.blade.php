<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if ($Qustion01)
        <ul>
            @foreach ($Qustion01 as $item)
            <li>{{$item}}</li>    
            @endforeach
        </ul>
    @endif
     
    <p>Thank you</p>
</body>
</html>