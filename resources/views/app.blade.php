<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite(['resources/css/app.scss', 'resources/js/app.js'])
  <title>Hoberman</title>
</head>
<body>
  <div class="grid-container">
    <aside class="sidebar"> @include('layouts.sidebar')</aside>
    <main class="content"> @include('layouts.content')</main>
  </div>
</body>
</html> 