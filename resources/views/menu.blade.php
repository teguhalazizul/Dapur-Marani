<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Menu TriHita Vegan</title>
    <link rel="stylesheet" href="output.css" />
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Archivo+Black:regular"
      rel="stylesheet"
    />
    <script
      defer
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"
    ></script>
  </head>

  <body>
  @include('menu.header')
    <!-- Banner -->
    @include('menu.banner')
    <!-- Banner -->
    <!-- All Menu -->
    @include('menu.allmenu')
    <!-- All Menu -->
    <!-- Footer -->
    @include('menu.footer')
    <!-- Footer -->
    <script src="script/script_scrollreveal.min.js"></script>
    <script src="script/main.js"></script>
  </body>
</html>
