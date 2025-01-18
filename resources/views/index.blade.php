<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dapur Marani</title>
  <link rel="stylesheet" href="output.css" />
  <link rel="stylesheet" href="input.css" />
  <link rel="shortcut icon" href="" type="image/x-icon" />
  <link
    href="https://fonts.googleapis.com/css?family=Inter:100,200,300,regular,500,600,700,800,900"
    rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css?family=Archivo+Black:regular"
    rel="stylesheet" />
  <script
    defer
    src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>

  @include('homepage.header')
  <!-- hero section -->
  @include('homepage.herosection')
  <!-- about -->
  @include('homepage.about')
  <!-- SLIDER CARD HIGHLIGHT  -->
  @include('homepage.slidecard')
  @include('homepage.artikel')
  <!-- Contact Us -->
  @include('homepage.ContactUs')
  <!-- Contact Us -->
  <!-- Footer -->
  @include('homepage.footer')
  <!-- Footer -->
  <!-- <script src="script/script_scrollreveal.min.js"></script> -->
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="main.js"></script>
</body>

</html>