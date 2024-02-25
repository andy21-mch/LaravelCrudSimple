<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Hello world</h1>

    @php
        $data = 'SomethingEkse';

        // define an array of names
        $arrayofNames = ['Jane', 'Andrew', 'Godwill'];
    @endphp

    {{-- conditionals, if , else if and else statement --}}
    @if ($data == 'Something')
        <h1 style="color: green">Hello {{ $data }}</h1>
    @elseif($data == 'SomethingEkse')
        <h1 style="color: red">Hello {{ $data }}</h1>
    @endif


    {{-- loops --}}

    <ul>
        @if(count($arrayofNames))
        @foreach ($arrayofNames as $name)
            <li>{{ $name }}</li>
            
        @endforeach
        @else
        <h1>no Names found</h1>
        @endif


        {{-- ------------------------------------- --}}

        {{-- use to check for null arrays implicitly --}}
        
        {{-- @forelse ($arrayofNames as $name)
            <li>{{ $name }}</li>
        @empty
            <h1>No Names found</h1>
        @endforelse --}}
    </ul>





</body>

</html>
