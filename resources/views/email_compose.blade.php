﻿<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="utf-8">
<title>DORLD | Compose</title>
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
      

<link href="assets/plugins/tag-it/css/jquery.tagit.css" rel="stylesheet">
<link href="assets/plugins/summernote/dist/summernote-lite.css" rel="stylesheet">

</head>
<body class="db">

<div id="app" class="app app-content-full-height">

<div id="header" class="app-header">

<div class="desktop-toggler">
<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-collapsed" data-dismiss-class="app-sidebar-toggled" data-toggle-target=".app">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="mobile-toggler">
<button type="button" class="menu-toggler" data-toggle-class="app-sidebar-mobile-toggled" data-toggle-target=".app">
<span class="bar"></span>
<span class="bar"></span>
<span class="bar"></span>
</button>
</div>


<div class="brand">
<a href="/ " class="brand-logo">
<span class="brand-img">
<span class="brand-img-text text-theme">DORLD</span>
</span>
<span class="brand-text">&nbsp; ADMIN</span>
</a>
</div>


<div class="menu">
<div class="menu-item dropdown">
<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app" class="menu-link">
<div class="menu-icon"><i class="bi bi-search nav-icon"></i></div>
</a>
</div>

<div class="menu-item dropdown dropdown-mobile-full">
<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
<div class="menu-icon"><i class="bi bi-bell nav-icon"></i></div>
<div class="menu-badge bg-theme"></div>
</a>
<div class="dropdown-menu dropdown-menu-end mt-1 w-300px fs-11px pt-1">
<h6 class="dropdown-header fs-10px mb-1">NOTIFICATIONS</h6>
<div class="dropdown-divider mt-1"></div>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
<div class="fs-20px">
<i class="bi bi-bag text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-inverse">NEW ORDER RECEIVED ($1,299)</div>
<div class="small text-inverse text-opacity-50">JUST NOW</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
<div class="fs-20px w-20px">
<i class="bi bi-person-circle text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-inverse">3 NEW ACCOUNT CREATED</div>
<div class="small text-inverse text-opacity-50">2 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
<div class="fs-20px w-20px">
<i class="bi bi-gear text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-inverse">SETUP COMPLETED</div>
<div class="small text-inverse text-opacity-50">3 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
<div class="fs-20px w-20px">
<i class="bi bi-grid text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-inverse">WIDGET INSTALLATION DONE</div>
<div class="small text-inverse text-opacity-50">5 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<a href="#" class="d-flex align-items-center py-10px dropdown-item text-wrap fw-semibold">
<div class="fs-20px w-20px">
<i class="bi bi-credit-card text-theme"></i>
</div>
<div class="flex-1 flex-wrap ps-3">
<div class="mb-1 text-inverse">PAYMENT METHOD ENABLED</div>
<div class="small text-inverse text-opacity-50">10 MINUTES AGO</div>
</div>
<div class="ps-2 fs-16px">
<i class="bi bi-chevron-right"></i>
</div>
</a>
<hr class="my-0">
<div class="py-10px mb-n2 text-center">
<a href="#" class="text-decoration-none fw-bold">SEE ALL</a>
</div>
</div>
</div>
<div class="menu-item dropdown dropdown-mobile-full">
<a href="#" data-bs-toggle="dropdown" data-bs-display="static" class="menu-link">
<div class="menu-img online">
<img src="assets/img/user/profile.jpg" alt="Profile" height="60">
</div>
<div class="menu-text d-sm-block d-none w-170px"><span class="__cf_email__" data-cfemail="582d2b3d2a3639353d18393b3b372d362c763b3735">[email&#160;protected]</span></div>
</a>
<div class="dropdown-menu dropdown-menu-end me-lg-3 fs-11px mt-1">
<a class="dropdown-item d-flex align-items-center" href="profile ">PROFILE <i class="bi bi-person-circle ms-auto text-theme fs-16px my-n1"></i></a>
<a class="dropdown-item d-flex align-items-center" href="email_inbox ">INBOX <i class="bi bi-envelope ms-auto text-theme fs-16px my-n1"></i></a>
<a class="dropdown-item d-flex align-items-center" href="calendar ">CALENDAR <i class="bi bi-calendar ms-auto text-theme fs-16px my-n1"></i></a>
<a class="dropdown-item d-flex align-items-center" href="settings ">SETTINGS <i class="bi bi-gear ms-auto text-theme fs-16px my-n1"></i></a>
<div class="dropdown-divider"></div>
<a class="dropdown-item d-flex align-items-center" href="page_login ">LOGOUT <i class="bi bi-toggle-off ms-auto text-theme fs-16px my-n1"></i></a>
</div>
</div>
</div>


<form class="menu-search" method="POST" name="header_search_form">
<div class="menu-search-container">
<div class="menu-search-icon"><i class="bi bi-search"></i></div>
<div class="menu-search-input">
<input type="text" class="form-control form-control-lg" placeholder="Search menu...">
</div>
<div class="menu-search-icon">
<a href="#" data-toggle-class="app-header-menu-search-toggled" data-toggle-target=".app"><i class="bi bi-x-lg"></i></a>
</div>
</div>
</form>

</div>


<div id="sidebar" class="app-sidebar">

<div class="app-sidebar-content" data-scrollbar="true" data-height="100%">

<div class="menu">
<div class="menu-header">Navigation</div>
<div class="menu-item">
<a href="dashboard " class="menu-link">
<span class="menu-icon"><i class="bi bi-cpu"></i></span>
<span class="menu-text">Dashboard</span>
</a>
</div>
<div class="menu-item">
<a href="analytics " class="menu-link">
<span class="menu-icon"><i class="bi bi-bar-chart"></i></span>
<span class="menu-text">Analytics</span>
</a>
</div>
<div class="menu-item has-sub active">
<a href="#" class="menu-link">
<span class="menu-icon">
<i class="bi bi-envelope"></i>
</span>
<span class="menu-text">Email</span>
<span class="menu-caret"><b class="caret"></b></span>
</a>
<div class="menu-submenu">
<div class="menu-item">
<a href="email_inbox " class="menu-link">
<span class="menu-text">Inbox</span>
</a>
</div>
<div class="menu-item active">
<a href="email_compose " class="menu-link">
<span class="menu-text">Compose</span>
</a>
</div>
<div class="menu-item">
<a href="email_detail " class="menu-link">
<span class="menu-text">Detail</span>
</a>
</div>
</div>
</div>
<div class="menu-header">Components</div>

<div class="menu-divider"></div>
<div class="menu-header">Users</div>
<div class="menu-item">
<a href="profile " class="menu-link">
<span class="menu-icon"><i class="bi bi-people"></i></span>
<span class="menu-text">Profile</span>
</a>
</div>
<div class="menu-item">
<a href="calendar " class="menu-link">
<span class="menu-icon"><i class="bi bi-calendar4"></i></span>
<span class="menu-text">Calendar</span>
</a>
</div>
<div class="menu-item">
<a href="settings " class="menu-link">
<span class="menu-icon"><i class="bi bi-gear"></i></span>
<span class="menu-text">Settings</span>
</a>
</div>
<div class="menu-item">

</div>
</div>


</div>

</div>


<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<div id="content" class="app-content p-3">

<div class="card h-100">

<div class="mailbox">

<div class="mailbox-toolbar">
<div class="mailbox-toolbar-item"><span class="mailbox-toolbar-text">New Message</span></div>
<div class="mailbox-toolbar-item"><a href="#" class="mailbox-toolbar-link active">Send</a></div>
<div class="mailbox-toolbar-item"><a href="#" class="mailbox-toolbar-link">Attachment</a></div>
<div class="mailbox-toolbar-item"><a href="email_inbox " class="mailbox-toolbar-link">Discard</a></div>
<div class="mailbox-toolbar-item dropdown">
<a href="#" class="mailbox-toolbar-link" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
<div class="dropdown-menu ms-n1">
<a href="#" class="dropdown-item">Save draft</a>
<a href="#" class="dropdown-item">Show From</a>
<a href="#" class="dropdown-item">Check names</a>
<a href="#" class="dropdown-item">Set importance</a>
<a href="#" class="dropdown-item">Switch to plain text</a>
<a href="#" class="dropdown-item">Check for accessibility issues</a>
</div>
</div>
<div class="mailbox-toolbar-item ms-auto"><a href="#" class="mailbox-toolbar-link"><i class="fa fa-redo fa-fw fs-12px me-1"></i> Undo</a></div>
<div class="mailbox-toolbar-item"><a href="email_inbox " class="mailbox-toolbar-link"><i class="fa fa-times fa-fw"></i> Cancel</a></div>
</div>


<div class="mailbox-body">
<div class="mailbox-content">

<div data-scrollbar="true" data-height="100%">
<div class="mailbox-form">
<form action="#" method="POST" name="email_form">
<div class="mailbox-form-header">
<div class="row mb-2">
<label class="col-form-label w-100px px-2 fw-500 text-lg-end">To:</label>
<div class="col-lg">
<ul id="email-to" class="form-control tagit">
<li><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7a090f0a0a15080e3a091f1b140e121f171f54191517">[email&#160;protected]</a></li>
</ul>
</div>
</div>
<div class="row mb-2">
<label class="col-form-label w-100px px-2 fw-500 text-lg-end">Cc:</label>
<div class="col-lg">
<ul id="email-cc" class="form-control tagit">
</ul>
</div>
</div>
<div class="row mb-2">
<label class="col-form-label w-100px px-2 fw-500 text-lg-end">Bcc:</label>
<div class="col-lg">
<ul id="email-bcc" class="form-control tagit">
</ul>
</div>
</div>
<div class="row mb-0">
<label class="col-form-label w-100px px-2 fw-500 text-lg-end">Subject:</label>
<div class="col-lg">
<input type="text" class="form-control" placeholder="Email subject">
</div>
</div>
</div>
<textarea name="text" class="summernote form-control" title="Contents"></textarea>
</form>
</div>
</div>

</div>
</div>

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>

</div>





<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script data-cfasync="false" src="assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="cd2a3cf3931ed4f49aa61fc5-text/javascript"></script>
<script src="assets/js/app.min.js" type="cd2a3cf3931ed4f49aa61fc5-text/javascript"></script>


<script src="assets/plugins/jquery-migrate/dist/jquery-migrate.min.js" type="cd2a3cf3931ed4f49aa61fc5-text/javascript"></script>
<script src="assets/plugins/tag-it/js/tag-it.min.js" type="cd2a3cf3931ed4f49aa61fc5-text/javascript"></script>
<script src="assets/plugins/summernote/dist/summernote-lite.min.js" type="cd2a3cf3931ed4f49aa61fc5-text/javascript"></script>
<script src="assets/js/demo/email-compose.demo.js" type="cd2a3cf3931ed4f49aa61fc5-text/javascript"></script>


<script async="" src="assets/gtag/js?id=G-Y3Q0VGQKY3" type="cd2a3cf3931ed4f49aa61fc5-text/javascript"></script>
<script type="cd2a3cf3931ed4f49aa61fc5-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="cd2a3cf3931ed4f49aa61fc5-|49" defer=""></script><script defer="" src="../beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bdf292ebe690ac2","version":"2023.3.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>
</html>
