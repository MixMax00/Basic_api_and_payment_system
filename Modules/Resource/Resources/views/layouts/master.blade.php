
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Resource |</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

        <!-- Styles -->
         <link rel="stylesheet" type="text/css" href="{{ asset("Frontend/Css/style.css") }}">

    </head>    
    <body>

             <nav class="navbar navbar-expand-lg navbar-light bg-dark">
              <div class="container">
                <a class="navbar-brand text-white" href="#">Dev Codding</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                  <ul class="navbar-nav f-end mb-2 mb-lg-0">
                    <li class="nav-item">
                      <a class="nav-link active" href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Books</a>
                    </li>
        
                  </ul>
                </div>
              </div>
            </nav>

        @yield('content')

        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <script src="{{ asset('Frontend/Js/navbar.js') }}"></script>
        <script src="{{ asset('Frontend/Js/comments.js') }}"></script>
    </body>
</html>