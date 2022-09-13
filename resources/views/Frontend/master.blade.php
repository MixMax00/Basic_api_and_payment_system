<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel Simple Project</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!-- Styles -->
         <link rel="stylesheet" type="text/css" href="{{ asset("Frontend/Css/style.css") }}">
         <link rel="stylesheet" type="text/css" href="{{ asset("Frontend/Css/custom.css") }}">


        @yield('css')

    </head>    
    <body>
        @include('Frontend.Include.topbar')
    	@include('Frontend.Include.navbar')




    	@yield('content')

        


        <script src="{{ asset('Frontend/jquery/jquery-3.6.0.min.js') }}"></script>
       <!--  <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <script src="{{ asset('Frontend/Js/navbar.js') }}"></script>
        <script src="{{ asset('Frontend/Js/comments.js') }}"></script>
        <script src="{{ asset('Frontend/Js/backend.js') }}"></script>
        <script src="{{ asset('Frontend/Js/setting.js') }}"></script>


        <script type="text/javascript">
            
           $(document).ready(function(){
                 var url = "{{ route('changelog') }}";

                $('.changeLog').change(function(){
                    window.location.href = url + "?lang=" + $(this).val();
                });
           });

        </script>

        @yield('js')
    </body>
</html>
