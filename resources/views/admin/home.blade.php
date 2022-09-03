<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    {{-- @php
    $data = array(
        'name'=>'Suman',
        'mobile'=>'01921440084',
        'address'=>'Sadar, Mymensingh'
    );
       echo gettype($data);
    @endphp --}}
    <h1>Hello {{ $name }} Admin Panel</h1>
    <h2>Mobile: {{ $mobile }} </h2>
    <h3>Address: {{ $address }}</h3> 
</body>
</html>