<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Power Plumbing Drain Cleaning</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        }
        th, td {
        padding: 5px;
        text-align: left;
        }
    </style>
</head>
<body>
    <p style="font-size: 18px; font-weight:700;">Hi, {{$userData['customer_name']}}</p>,
    <p>{{$userData['message']}} </p>

    <h4>Booking Details:</h4>
    <table style="width:100%">
        <tr>
          <th>Service Name:</th>
          <td>{{$userData['service_name']}}</td>
        </tr>
        <tr>
          <th>Service Provider:</th>
          <td>{{$userData['service_provider_name']}}</td>
        </tr>
        <tr>
          <th>Schedule Date:</th>
          <td>{{$userData['schedule_date']}}</td>
        </tr>
        <tr>
          <th>Schedule Time:</th>
          <td>{{$userData['schedule_time']}}</td>
        </tr>
        <tr>
          <th>Amount Total:</th>
          <td>{{$userData['service_price']}}</td>
        </tr>
      </table> 
    <p>Thank you for using <a href="https://powerplumbingdraincleaning.com">powerplumbingdraincleaning.com</a></p>
</body>
</html>