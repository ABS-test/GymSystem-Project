<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>404</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="/css/style.css">	
	<link rel="icon" href="{{ URL::asset('img/fav.ico') }}" type="image/x-icon"/>
</head>
<body>
<!--404 error page-->
    <div class="container-fluid mt-5 pt-5">
        <div class="alert alert-danger text-center">
            <h2 class="display-3">404</h2>
            <p class="display-5">Oops! Something is wrong. Page not found!</p>
            <a class="btn btn-primary" href="{{ route('home') }}">Go to Homepage</a>
        </div>
    </div><!--container-fluid mt-5 pt-5-->
</body> 
</html>