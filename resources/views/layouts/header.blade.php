
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<ul class="nav justify-content-center">
    @guest
  <li class="nav-item">
    <a class="nav-link" href="signin">вход</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="signup">авторизация</a>
  </li>
  @endguest
  @auth
  <li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">выход</a>
  </li>
<li class="nav-item">
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Заявки</a>
  </li>
  @endauth
</ul>