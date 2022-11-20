<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>helo</title>
  
    <link rel="stylesheet" href="{{ URL::to('assets/css/app.css') }}">
    

    {{-- message toastr --}}
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css"> 
    <script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
    <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

</head>


<body>
    <div id="app">
        @yield('menu')
        {{-- content main page --}}
        @yield('content')
       
    </div>

    <script src="{{ URL::to('assets/js/main.js') }}"></script>


    <script src="{{ URL::to('assets/js/main.js') }}"></script>

    

</body>

</html>