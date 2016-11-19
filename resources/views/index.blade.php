<!doctype html>
<html lang="ru-RU">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <!--<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
    <link href="{{ asset('css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
</head>
<body>
    
    <div class="container">
        <h1 class="text-center">{{ $pagetitle }}</h1>
    
        @if(count($errors)>0) 
        <div class="alert alert-danger">
            <ul>
                 @foreach($errors->all() as $error)
                 <li>{{ $error }}</li>
                 @endforeach
            </ul>
        </div>
        @endif
    
        @yield('content')
    </div>
    
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script> -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{URL::asset('js/main.js')}}"></script>
    
</body>
</html>

