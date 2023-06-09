﻿<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="utf-8">
<title>DORLD | Analytics</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">


<style>

  .db{
        
        background-image: url("assets/images/sd.jpg") ;
        
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
    background-image: url("assets/images/Artboard\ 1-100.jpg") ;
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
      

<link href="assets/css/vendor.min.css" rel="stylesheet">
<link href="assets/css/app.min.css" rel="stylesheet">


<link href="assets/plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
<span class="brand-text"> &nbsp; ADMIN</span>
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
<div class="menu-text d-sm-block d-none w-170px"><span class="__cf_email__" data-cfemail="a1d4d2c4d3cfc0ccc4e1c0c2c2ced4cfd58fc2cecc">[email&#160;protected]</span></div>
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
<a href="dashboard" class="menu-link">
<span class="menu-icon"><i class="bi bi-cpu"></i></span>
<span class="menu-text">Dashboard</span>
</a>
</div>
<div class="menu-item active">
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
<div class="menu-item">
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

<h1 class="page-header">
Analytics <small>stats, overview & performance</small>
</h1>


<div class="d-flex align-items-center mb-3">
<a href="#" class="btn btn-outline-theme" id="daterangepicker">
<i class="fa fa-fw fa-calendar"></i>
<span data-id="daterangepicker-date">Today</span>
<i class="fa fa-fw fa-caret-down me-n1"></i>
</a>
<span class="ms-3">compared to <span data-id="prev-date" id="daterangepicker-compare-date"></span></span>
</div>


<div class="row" data-masonry='{"percentPosition": true }'>

<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill fw-bold fs-16px">Total sales</div>
<a href="#" class="text-decoration-none text-inverse text-opacity-50">View report</a>
</div>

<div class="d-flex align-items-center h4 mb-3">
<div>$821.50</div>
<small class="fw-400 ms-auto text-theme">+5%</small>
</div>

<div>
<div class="fs-12px fw-bold mb-2 text-inverse text-opacity-50">SALES OVER TIME</div>
<div class="chart mb-2" style="height: 190px">
<canvas id="chart1" class="w-100" height="190"></canvas>
</div>
<div class="d-flex align-items-center justify-content-center fw-bold text-inverse text-opacity-50">
<i class="fa fa-square text-gray-300 me-2"></i>
<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-theme me-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill fw-bold fs-16px">Online store sessions</div>
<a href="#" class="text-decoration-none text-inverse text-opacity-50">View report</a>
</div>

<div class="d-flex align-items-center h3 mb-3">
<div>39</div>
<small class="fw-400 ms-auto text-danger">-2.5%</small>
</div>
<hr class="opacity-3 my-2 mx-n3">

<div class="row">
<div class="col-6">Visitors</div>
<div class="col-3 text-center">2</div>
<div class="col-3 text-end">
<span class="text-danger">-</span> 50%
</div>
</div>
<hr class="opacity-3 my-2 mx-n3">

<div class="mt-3">
<div class="fs-12px fw-bold mb-2 text-inverse text-opacity-50">SESSIONS OVER TIME</div>
<div class="chart mb-2" style="height: 190px">
<canvas id="chart2" class="w-100" height="190"></canvas>
</div>
<div class="d-flex align-items-center justify-content-center text-inverse text-opacity-50 fw-bold">
<i class="fa fa-square text-gray-300 me-2"></i>
<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-theme me-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill fw-bold fs-16px">Top product by units sold</div>
</div>

<div>
<div class="row mb-2">
<div class="col-6">iPhone 11 Pro Max</div>
<div class="col-3 text-center">329</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 25%</div>
</div>
<div class="row mb-2">
<div class="col-6">iPad Pro</div>
<div class="col-3 text-center">219</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 5.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">Macbook Pro</div>
<div class="col-3 text-center">125</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 2.3%</div>
</div>
<div class="row mb-2">
<div class="col-6">iPhone SE 2</div>
<div class="col-3 text-center">92</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 4.9%</div>
</div>
<div class="row">
<div class="col-6">Apple pencil</div>
<div class="col-3 text-center">52</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 25%</div>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill fs-16px fw-bold">Returning customer rate</div>
</div>

<div class="d-flex align-items-center h3 mb-3">
<div>52.85%</div>
<small class="fw-400 ms-auto text-danger">-7%</small>
</div>

<div>
<div class="fs-12px fw-bold mb-2 text-inverse text-opacity-50">CUSTOMERS</div>
<div class="chart mb-2" style="height: 190px">
<canvas id="chart3" class="w-100" height="190"></canvas>
</div>
<div class="d-flex align-items-center justify-content-center text-inverse text-opacity-50 fw-bold">
<i class="fa fa-square text-indigo me-2"></i>
<span class="fs-12px me-4">First-time</span>
<i class="fa fa-square text-theme me-2"></i>
<span class="fs-12px">Returning</span>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill fw-bold fs-16px">Conversion rate</div>
<a href="#" class="text-decoration-none text-inverse text-opacity-50">View report</a>
</div>

<div class="d-flex align-items-center h3 mb-3">
<div>5.29%</div>
<small class="fw-400 ms-auto text-theme">+83%</small>
</div>

<div>
<div class="fs-12px fw-bold mb-2 text-inverse text-opacity-50">CONVERSION FUNNEL</div>
<div class="row mb-2">
<div class="col-6">
<div>Added to cart</div>
<div class="small text-inverse text-opacity-50">55 session</div>
</div>
<div class="col-3 text-center">25.28%</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 5%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Reached checkout</div>
<div class="small text-inverse text-opacity-50">25 session</div>
</div>
<div class="col-3 text-center">15.28%</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 82%</div>
</div>
<div class="row">
<div class="col-6">
<div>Sessions converted</div>
<div class="small text-inverse text-opacity-50">5 session</div>
</div>
<div class="col-3 text-center">5.28%</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 82%</div>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill fw-bold fs-16px">Average order value</div>
</div>

<div class="d-flex align-items-center h3 mb-3">
<div>$35.12</div>
<small class="fw-400 ms-auto text-danger">-3.2%</small>
</div>

<div>
<div class="fs-12px fw-bold mb-2 text-inverse text-opacity-50">ORDERS BY TIME</div>
<div class="chart mb-2" style="height: 190px">
<canvas id="chart4" class="w-100" height="190"></canvas>
</div>
<div class="d-flex align-items-center justify-content-center fw-bold text-inverse text-opacity-50">
<i class="fa fa-square text-gray-300 me-2"></i>
<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-theme me-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-2">
<div class="flex-fill fw-bold fs-16px">Total orders</div>
</div>

<div class="d-flex align-items-center h3 mb-3">
<div>12</div>
<small class="fw-400 ms-auto text-theme">+57%</small>
</div>

<div>
<div class="fs-12px fw-bold mb-2 text-inverse text-opacity-50">ORDERS OVER TIME</div>
<div class="chart mb-2">
<canvas id="chart5" class="w-100" height="190"></canvas>
</div>
<div class="d-flex align-items-center justify-content-center fw-bold text-inverse text-opacity-50">
<i class="fa fa-square text-gray-300 me-2"></i>
<span class="fs-12px me-4" data-id="prev-date">&nbsp;</span>
<i class="fa fa-square text-theme me-2"></i>
<span class="fs-12px" data-id="today-date">&nbsp;</span>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill fw-bold fs-16px">Top pages by sessions</div>
</div>

<div class="row mb-2">
<div class="col-6"><div><a href="#" class="text-decoration-none text-inverse text-opacity-50">/phone/apple-11-pro-max</a></div></div>
<div class="col-3 text-center">15</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 15%</div>
</div>
<div class="row mb-2">
<div class="col-6"><div><a href="#" class="text-decoration-none text-inverse text-opacity-50">/tablet/apple-ipad-pro-128gb</a></div></div>
<div class="col-3 text-center">12</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 8%</div>
</div>
<div class="row">
<div class="col-6"><div><a href="#" class="text-decoration-none text-inverse text-opacity-50">/desktop/apple-mac-pro</a></div></div>
<div class="col-3 text-center">4</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 3%</div>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill fw-bold fs-16px">Sessions by device type</div>
<a href="#" class="text-decoration-none text-inverse text-opacity-50">View report</a>
</div>

<div class="row mb-2">
<div class="col-6">
<div>Desktop</div>
</div>
<div class="col-3 text-center">247</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 4.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Mobile</div>
</div>
<div class="col-3 text-center">198</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 2.2%</div>
</div>
<div class="row">
<div class="col-6">
<div>Tablet</div>
</div>
<div class="col-3 text-center">35</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 8.9%</div>
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


<div class="col-lg-6 col-xl-4 mb-4">

<div class="card">

<div class="card-body">

<div class="d-flex align-items-center mb-3">
<div class="flex-fill fw-600 fs-16px">Visits from social sources</div>
<a href="#" class="text-decoration-none text-inverse text-opacity-50">View report</a>
</div>

<div class="row mb-2">
<div class="col-6">
<div>Facebook</div>
</div>
<div class="col-3 text-center">247</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 4.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Twitter</div>
</div>
<div class="col-3 text-center">153</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 8.2%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Instagram</div>
</div>
<div class="col-3 text-center">98</div>
<div class="col-3 text-center"><span class="text-danger">-</span> 3.4%</div>
</div>
<div class="row mb-2">
<div class="col-6">
<div>Pinterest</div>
</div>
<div class="col-3 text-center">75</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 1.9%</div>
</div>
<div class="row">
<div class="col-6">
<div>Dribbble</div>
</div>
<div class="col-3 text-center">22</div>
<div class="col-3 text-center"><span class="text-theme">+</span> 2.1%</div>
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

</div>




<a href="#" data-toggle="scroll-to-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>

</div>


<script data-cfasync="false" src="assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>
<script src="assets/js/app.min.js" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>


<script src="assets/plugins/masonry-layout/dist/masonry.pkgd.min.js" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>
<script src="assets/plugins/chart.js/dist/chart.umd.js" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>
<script src="assets/plugins/moment/min/moment.min.js" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>
<script src="assets/js/demo/analytics.demo.js" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>


<script async="" src="assets/gtag/js?id=G-Y3Q0VGQKY3" type="fdd1c6c948a2c47fd4d36645-text/javascript"></script>
<script type="fdd1c6c948a2c47fd4d36645-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="fdd1c6c948a2c47fd4d36645-|49" defer=""></script><script defer="" src="../beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bdf2924baae0ac2","version":"2023.3.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>
</html>
