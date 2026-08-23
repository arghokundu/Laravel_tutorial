<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- loading page css -->
    <link href="{{asset('assets/css/loading_page.css')}}" rel="stylesheet" >
    

</head>

<body>

    <!-- Loading Screen -->
    <div id="loadingScreen">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    @yield('main_content')

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    
    <!-- loading page js done -->
    <script src="{{asset('assets/js/js/loading_page.js')}}"> </script>


    @stack('script')

</body>

</html>