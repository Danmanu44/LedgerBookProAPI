<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- CSS only -->
<!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
 rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
  crossorigin="anonymous">



  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <title>Client</title>
  <style>
      section{
          padding: 60px 0;
      }
  </style>

</head>
<body>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
     integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
    </script>

          <!-- navbar -->
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
        <div class="container-xxl">
          
            <a class="navbar-brand btn-outline-secondary" href="{{ route('home') }}">
                <i class="bi bi-person-fill"></i>
                <span class="fw-bold text-white ">Dashboard</span>
            </a>
        
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav" 
          aria-controls="main-nav" aria-expanded="false"
          aria-label="toggle navigation">
            <span class="navbar-toggler-icon"> </span>
          </button>


          <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <div class="dropdown">
                  <button class="btn btn-outline-secondary dropdown-toggle" 
                  type="button" id="dropdownlist" data-bs-toggle="dropdown">
                  Stores
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownlist">
                  <li class=""><a href="{{ route('items') }}" class="dropdown-item">Items</a></li>
                  <li><a href="#" class="dropdown-item">Stores</a></li>
                  <li><a href="{{ route('client') }}" class="dropdown-item">Client</a></li>
                </ul>
                </div>
              </li>

            
              <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#reviews">Review</a>
              </li>

              <li class="nav-item ms-2 d-none d-md-inline">
                <a class="btn btn-secondary" href="#">Sign in</a>
              </li>
            </ul>
           
          </div>
        </div>
      </nav>

    
        <main class="py-4">
            @yield('content')
        </main>
    </div>



  <!-- cdn axios setup-->

  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script>
   axios.all([
    axios.get('https://api.github.com/users/mapbox'),
    axios.get('https://api.github.com/users/phantomjs') 
   ])
   .then(responseArr => {
    console.log(responseArr[0].data);
    console.log(responseArr[1].data);
   });
  </script>

<!-- Latest compiled JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" 
integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
 crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
 <script>
  // Swal.fire(
  // 'The Internet?',
  // 'That thing is still around?',
  // 'question'
)
 </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js" 
integrity="sha512-HWlJyU4ut5HkEj0QsK/IxBCY55n5ZpskyjVlAoV9Z7XQwwkqXoYdCIC93/htL3Gu5H3R4an/S0h2NXfbZk3g7w==" 
crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<script>
    const tooltips = document.querySelectorAll('.tt')
    tooltips.forEach(t=>{
        new bootstrap.Tooltip(t)
    })
</script>

</body>
</html>
