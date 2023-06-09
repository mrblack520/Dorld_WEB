﻿<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="utf-8">
<title>Drold | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<link href="assets/css/vendor.min.css" rel="stylesheet">
<link href="assets/css/app.min.css" rel="stylesheet">

<style>

  .db{

        background-image: url("./assets/images/sd.jpg") ;

        /* background-color: rgba(0,0,0,1); */

        /* position: fixed; */
        /* background-position: center;  */
        /* background-size: cover; */
        background-repeat: no-repeat;
        /* background-size:auto; */
        /* background-position-y: center; */
        background-size: cover;
        width: 100%;
        /* z-/: -999; */
        background-attachment: fixed;

        /* filter: brightness(50%); */

        }
        @media (min-width: 200px )and (max-width: 900px) {
  .db{
    background-image: url("./assets/images/Artboard\ 1-100.jpg") ;
    width: 100%;
    background-repeat: no-repeat;
        background-size:cover;
        background-attachment: fixed;

  }
}
      </style>
      <!-- FAV AND ICONS   -->
      <link rel="shortcut icon" type="image/x-icon" sizes="16x16" href="assets/images/favicon.ico">

      <link rel="shortcut icon" href="assets/images/apple-icon.png">
      <link rel="shortcut icon" sizes="16x16" href="assets/images/apple-icon-72x72.png">
      <link rel="shortcut icon" sizes="32x32" href="assets/images/apple-icon-114x114.png">

</head>
<body class='pace-top db'>

<div id="app" class="app app-full-height app-without-header">

<div class="login">

<div class="login-content">
<form action="{{route('login.post')}} " method="POST" name="login_form">
    @csrf
<h1 class="text-center">Sign In</h1>
<div class="text-inverse text-opacity-50 text-center mb-4">
For your protection, please verify your identity.
</div>
<div class="mb-3">
<label class="form-label">Email Address <span class="text-danger">*</span></label>
<input type="text" name="email" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="">
</div>
<div class="mb-3">
<div class="d-flex">
<label class="form-label">Password <span class="text-danger">*</span></label>
<a href="#" class="ms-auto text-inverse text-decoration-none text-opacity-50">Forgot password?</a>
</div>
<input type="password" name="password" class="form-control form-control-lg bg-inverse bg-opacity-5" value="" placeholder="">
</div>
<div class="mb-3">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="customCheck1">
<label class="form-check-label" for="customCheck1">Remember me</label>
</div>
</div>
<button type="submit" class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3">Sign In</button>
<div class="text-center text-inverse text-opacity-50">
Don't have an account yet? <a href="page_register ">Sign up</a>.
</div>
</form>
</div>

</div>


<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script src="assets/js/vendor.min.js" type="0567aec2727da25e8be8ae59-text/javascript"></script>
<script src="assets/js/app.min.js" type="0567aec2727da25e8be8ae59-text/javascript"></script>


<script async="" src="assets/gtag/js?id=G-Y3Q0VGQKY3" type="0567aec2727da25e8be8ae59-text/javascript"></script>
<script type="0567aec2727da25e8be8ae59-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="0567aec2727da25e8be8ae59-|49" defer=""></script><script defer="" src="../beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bdf291a4df80ac2","version":"2023.3.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>
</html>

