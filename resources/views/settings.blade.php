﻿<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="utf-8">
<title>DORLD | Settings</title>
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
<body class="db">

<div id="app" class="app">

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
<div class="menu-text d-sm-block d-none w-170px"><span class="__cf_email__" data-cfemail="f4818791869a959991b49597979b819a80da979b99">[email&#160;protected]</span></div>
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
<div class="menu-item has-sub">
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
<div class="menu-item">
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
<div class="menu-item active">
<a href="settings " class="menu-link">
<span class="menu-icon"><i class="bi bi-gear"></i></span>
<span class="menu-text">Settings</span>
</a>
</div>

</div>


</div>

</div>


<button class="app-sidebar-mobile-backdrop" data-toggle-target=".app" data-toggle-class="app-sidebar-mobile-toggled"></button>


<div id="content" class="app-content">

<div class="container">

<div class="row justify-content-center">

<div class="col-xl-10">

<div class="row">

<div class="col-xl-9">

<div id="general" class="mb-5">
<h4><i class="far fa-user fa-fw text-theme"></i> General</h4>
<p>View and update your general account information and settings.</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Name</div>
<div class="text-inverse text-opacity-50">Sean Ngu</div>
</div>
<div class="w-100px">
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Username</div>
<div class="text-inverse text-opacity-50">@seantheme</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Phone</div>
<div class="text-inverse text-opacity-50">+1-202-555-0183</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Email address</div>
<div class="text-inverse text-opacity-50"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="66151316160914122615030708120e030b034805090b">[email&#160;protected]</a></div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Password</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
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


<div id="notifications" class="mb-5">
<h4><i class="far fa-bell fa-fw text-theme"></i> Notifications</h4>
<p>Enable or disable what notifications you want to receive.</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Comments</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Enabled (Push, SMS)
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Tags</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw me-1"></i> Disabled
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Reminders</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Enabled (Push, Email, SMS)
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>New orders</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Enabled (Push, Email, SMS)
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
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


<div id="privacyAndSecurity" class="mb-5">
<h4><i class="far fa-copyright fa-fw text-theme"></i> Privacy and security</h4>
<p>Limit the account visibility and the security settings for your website.</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Who can see your future posts?</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
Friends only
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Photo tagging</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Enabled
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Location information</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw text-muted me-1"></i> Disabled
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Firewall</div>
<div class="text-inverse text-opacity-50 d-block d-xl-flex align-items-center">
<div class="d-flex align-items-center"><i class="fa fa-circle fs-8px fa-fw text-muted me-1"></i> Disabled</div>
<span class="bg-warning-transparent-1 text-warning ms-xl-3 mt-1 d-inline-block mt-xl-0 px-1 rounded-sm">
<i class="fa fa-exclamation-circle text-warning fs-12px me-1"></i>
<span class="text-warning">Please enable the firewall for your website</span>
</span>
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
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


<div id="payment" class="mb-5">
<h4><i class="far fa-credit-card fa-fw text-theme"></i> Payment</h4>
<p>Manage your website payment provider</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Allowed payment method</div>
<div class="text-inverse text-opacity-50">
Paypal, Credit Card, Apple Pay, Amazon Pay, Google Wallet, Alipay, Wechatpay
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
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


<div id="shipping" class="mb-5">
<h4><i class="far fa-paper-plane fa-fw text-theme"></i> Shipping</h4>
<p>Allowed shipping area and zone setting</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Allowed shipping method</div>
<div class="text-inverse text-opacity-50">
Local, Domestic
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
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


<div id="mediaAndFiles" class="mb-5">
<h4><i class="far fa-images fa-fw text-theme"></i> Media and Files</h4>
<p>Allowed files and media format upload setting</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Allowed files and media format</div>
<div class="text-inverse text-opacity-50">
.png, .jpg, .gif, .mp4
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Media and files cdn</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw text-muted me-1"></i> Disabled
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
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


<div id="languages" class="mb-5">
<h4><i class="fa fa-language fa-fw text-theme"></i> Languages</h4>
<p>Language font support and auto translation enabled</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Language enabled</div>
<div class="text-inverse text-opacity-50">
English (default), Chinese, France, Portuguese, Japense
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Auto translation</div>
<div class="text-inverse text-opacity-50 d-flex align-items-center">
<i class="fa fa-circle fs-8px fa-fw text-success me-1"></i> Enabled
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Edit</a>
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


<div id="system" class="mb-5">
<h4><i class="far fa-hdd fa-fw text-theme"></i> System</h4>
<p>System storage, bandwidth and database setting</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Web storage</div>
<div class="text-inverse text-opacity-50">
40.8gb / 100gb
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px">Manage</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Monthly bandwidth</div>
<div class="text-inverse text-opacity-50">
Unlimited
</div>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Database</div>
<div class="text-inverse text-opacity-50">
MySQL version 8.0.19
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-default w-100px disabled">Update</a>
</div>
</div>
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Platform</div>
<div class="text-inverse text-opacity-50">
PHP 7.4.4, NGINX 1.17.0
</div>
</div>
<div>
<a href="#modalEdit" data-bs-toggle="modal" class="btn btn-outline-success w-100px">Update</a>
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


<div id="resetSettings" class="mb-5">
<h4><i class="fa fa-redo fa-fw text-theme"></i> Reset settings</h4>
<p>Reset all website setting to factory default setting.</p>
<div class="card">
<div class="list-group list-group-flush">
<div class="list-group-item d-flex align-items-center">
<div class="flex-1 text-break">
<div>Reset Settings</div>
<div class="text-inverse text-opacity-50">
This action will clear and reset all the current website setting.
</div>
</div>
<div>
<a href="#" class="btn btn-outline-default w-100px">Reset</a>
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

</div>


<div class="col-xl-3">

<nav id="sidebar-bootstrap" class="navbar navbar-sticky d-none d-xl-block">
<nav class="nav">
<a class="nav-link" href="#general" data-toggle="scroll-to">General</a>
<a class="nav-link" href="#notifications" data-toggle="scroll-to">Notifications</a>
<a class="nav-link" href="#privacyAndSecurity" data-toggle="scroll-to">Privacy and security</a>
<a class="nav-link" href="#payment" data-toggle="scroll-to">Payment</a>
<a class="nav-link" href="#shipping" data-toggle="scroll-to">Shipping</a>
<a class="nav-link" href="#mediaAndFiles" data-toggle="scroll-to">Media and Files</a>
<a class="nav-link" href="#languages" data-toggle="scroll-to">Languages</a>
<a class="nav-link" href="#system" data-toggle="scroll-to">System</a>
<a class="nav-link" href="#resetSettings" data-toggle="scroll-to">Reset settings</a>
</nav>
</nav>

</div>

</div>

</div>

</div>

</div>

</div>


<div class="modal fade" id="modalEdit">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Edit name</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>
<div class="modal-body">
<div class="mb-3">
<label class="form-label">Name</label>
<div class="row row-space-10">
<div class="col-4">
<input class="form-control" placeholder="First" value="Sean">
</div>
<div class="col-4">
<input class="form-control" placeholder="Middle" value="">
</div>
<div class="col-4">
<input class="form-control" placeholder="Last" value="Ngu">
</div>
</div>
</div>
<div class="alert bg-inverse bg-opacity-10 border-0">
<b>Please note:</b>
If you change your name, you can't change it again for 60 days.
Don't add any unusual capitalization, punctuation, characters or random words.
<a href="#" class="alert-link">Learn more.</a>
</div>
<div class="mb-3">
<label class="form-label">Other Names</label>
<div>
<a href="#" class="btn btn-outline-default"><i class="fa fa-plus fa-fw"></i> Add other names</a>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-outline-default" data-bs-dismiss="modal">Close</button>
<button type="button" class="btn btn-outline-theme">Save changes</button>
</div>
</div>
</div>
</div>





<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script data-cfasync="false" src="assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="5854f9dc5db5016a8a672a48-text/javascript"></script>
<script src="assets/js/app.min.js" type="5854f9dc5db5016a8a672a48-text/javascript"></script>


<script src="assets/js/demo/sidebar-scrollspy.demo.js" type="5854f9dc5db5016a8a672a48-text/javascript"></script>


<script async="" src="assets/gtag/js?id=G-Y3Q0VGQKY3" type="5854f9dc5db5016a8a672a48-text/javascript"></script>
<script type="5854f9dc5db5016a8a672a48-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="5854f9dc5db5016a8a672a48-|49" defer=""></script><script defer="" src="../beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bdf29023c530ac2","version":"2023.3.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>
</html>
