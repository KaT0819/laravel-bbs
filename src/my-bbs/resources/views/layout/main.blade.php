<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Document</title>
  @include('layout.style-sheet')
</head>

<body>
  @include('layout.nav')

  <div class="container">
    @yield('content')
  </div>
</body>

</html>
