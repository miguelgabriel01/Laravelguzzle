<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
<!-- As a link -->
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Api</a>
</nav>

<div class="card">
  <div class="card-header">
  {{$posts->title}}
  </div>
  <div class="card-body">
    <p class="card-text">{{$posts->body}}</p>
    <small>id do post: {{$posts->id}}</small>
    <br><br>
    <a href="/posts" class="btn btn-primary">Voltar</a>
  </div>
</div>


<footer class="page-footer font-small blue">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
  <a href="https://github.com/miguelgabriel01"> mgbs@discente.ifpe.edu.br</a>
</div>
<!-- Copyright -->

</footer>
</body>
</html>