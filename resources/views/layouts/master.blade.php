<!--master: Deleted boilerplate code. Created own boilerplate code (use emmitt:5)
Add title with hook with yield keyword. Yield allows one to specify a tag,
in this case, title.  This is similar to pug/handlebars.  Other html components
will be insterted in these tags from other partials

-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title> <!--add yield hook for title tag-->   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{URL::to('src/css.app.css')}}">    
    @yield('styles') <!--add yield hook for styles tag-->
</head>
<body>
<!--include hook is different from yield hook (from stackoverflow:
include is used for reusable HTML just like a standard PHP include. 
It does not have that parent/child relationship like yield and section. 
https://stackoverflow.com/questions/41916127/whats-the-difference-between-laravels-yield-and-include
-->
@include('partials.header')
<div class="container">
@yield('content') <!--wrap the content in div with a container class-->
</div>

<script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

 @yield('scripts')   
</body>
</html>