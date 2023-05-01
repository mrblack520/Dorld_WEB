﻿<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
<meta charset="utf-8">
<title>DORLD | Dashboard</title>
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
        /* z-index: -999; */
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
      

<link href="assets/plugins/jvectormap-next/jquery-jvectormap.css" rel="stylesheet">

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
<div class="menu-text d-sm-block d-none w-170px"><span class="__cf_email__" data-cfemail="d7a2a4b2a5b9b6bab297b6b4b4b8a2b9a3f9b4b8ba">[email&#160;protected]</span></div>
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
<div class="menu-item active">
<a href="/ " class="menu-link">
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

<div class="row">

<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">SITE VISITORS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0">4.2m</h3>
</div>
<div class="col-5">
<div class="mt-n2" data-render="apexchart" data-type="bar" data-title="Visitors" data-height="30"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> 33.3% more than last week<br>
<i class="far fa-user fa-fw me-1"></i> 45.5% new visitors<br>
<i class="far fa-times-circle fa-fw me-1"></i> 3.25% bounce rate
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


<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">STORE SALES</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0">$35.2K</h3>
</div>
<div class="col-5">
<div class="mt-n2" data-render="apexchart" data-type="line" data-title="Visitors" data-height="30"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> 20.4% more than last week<br>
<i class="fa fa-shopping-bag fa-fw me-1"></i> 33.5% new orders<br>
<i class="fa fa-dollar-sign fa-fw me-1"></i> 6.21% conversion rate
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


<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">NEW MEMBERS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0">4,490</h3>
</div>
<div class="col-5">
<div class="mt-n3 mb-n2" data-render="apexchart" data-type="pie" data-title="Visitors" data-height="45"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> 59.5% more than last week<br>
<i class="fab fa-facebook-f fa-fw me-1"></i> 45.5% from facebook<br>
<i class="fab fa-youtube fa-fw me-1"></i> 15.25% from youtube
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


<div class="col-xl-3 col-lg-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">BANDWIDTH</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="row align-items-center mb-2">
<div class="col-7">
<h3 class="mb-0">4.5TB</h3>
</div>
<div class="col-5">
<div class="mt-n3 mb-n2" data-render="apexchart" data-type="donut" data-title="Visitors" data-height="45"></div>
</div>
</div>


<div class="small text-inverse text-opacity-50 text-truncate">
<i class="fa fa-chevron-up fa-fw me-1"></i> 5.3% more than last week<br>
<i class="far fa-hdd fa-fw me-1"></i> 10.5% from total usage<br>
<i class="far fa-hand-point-up fa-fw me-1"></i> 2MB per visit
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


<div class="col-xl-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">SERVER STATS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="ratio ratio-21x9 mb-3">
<div id="chart-server"></div>
</div>


<div class="row">

<div class="col-lg-6 mb-3 mb-lg-0">
<div class="d-flex align-items-center">

<div class="w-50px h-50px">
<div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
</div>


<div class="ps-3 flex-1">
<div class="fs-10px fw-bold text-inverse text-opacity-50 mb-1">DISK USAGE</div>
<div class="mb-2 fs-5 text-truncate">20.04 / 256 GB</div>
<div class="progress h-3px bg-secondary-transparent-2 mb-1">
<div class="progress-bar bg-theme" style="width: 20%"></div>
</div>
<div class="fs-11px text-inverse text-opacity-50 mb-2 text-truncate">
Last updated 1 min ago
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme"></i>
<div class="flex-1">DISK C</div>
<div>19.56GB</div>
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i>
<div class="flex-1">DISK D</div>
<div>0.50GB</div>
</div>
</div>

</div>
</div>


<div class="col-lg-6">
<div class="d-flex">

<div class="w-50px pt-3">
<div data-render="apexchart" data-type="donut" data-title="Visitors" data-height="50"></div>
</div>


<div class="ps-3 flex-1">
<div class="fs-10px fw-bold text-inverse text-opacity-50 mb-1">BANDWIDTH</div>
<div class="mb-2 fs-5 text-truncate">83.76GB / 10TB</div>
<div class="progress h-3px bg-secondary-transparent-2 mb-1">
<div class="progress-bar bg-theme" style="width: 10%"></div>
</div>
<div class="fs-11px text-inverse text-opacity-50 mb-2 text-truncate">
Last updated 1 min ago
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme"></i>
<div class="flex-1">HTTP</div>
<div>35.47GB</div>
</div>
<div class="d-flex align-items-center small">
<i class="bi bi-circle-fill fs-6px me-2 text-theme text-opacity-50"></i>
<div class="flex-1">FTP</div>
<div>1.25GB</div>
</div>
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


<div class="col-xl-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">TRAFFIC ANALYTICS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="ratio ratio-21x9 mb-3">
<div id="world-map" class="jvectormap-without-padding"></div>
</div>


<div class="row gx-4">

<div class="col-lg-6 mb-3 mb-lg-0">
<table class="w-100 small mb-0 text-truncate text-inverse text-opacity-60">
<thead>
<tr class="text-inverse text-opacity-75">
<th class="w-50">COUNTRY</th>
<th class="w-25 text-end">VISITS</th>
<th class="w-25 text-end">PCT%</th>
</tr>
</thead>
<tbody>
<tr>
<td>FRANCE</td>
<td class="text-end">13,849</td>
<td class="text-end">40.79%</td>
</tr>
<tr>
<td>SPAIN</td>
<td class="text-end">3,216</td>
<td class="text-end">9.79%</td>
</tr>
<tr class="text-theme fw-bold">
<td>MEXICO</td>
<td class="text-end">1,398</td>
<td class="text-end">4.26%</td>
</tr>
<tr>
<td>UNITED STATES</td>
<td class="text-end">1,090</td>
<td class="text-end">3.32%</td>
</tr>
<tr>
<td>BELGIUM</td>
<td class="text-end">1,045</td>
<td class="text-end">3.18%</td>
</tr>
</tbody>
</table>
</div>


<div class="col-lg-6">

<div class="card">

<div class="card-body py-2">
<div class="d-flex align-items-center">
<div class="w-70px">
<div data-render="apexchart" data-type="donut" data-height="70"></div>
</div>
<div class="flex-1 ps-2">
<table class="w-100 small mb-0 text-inverse text-opacity-60">
<tbody>
<tr>
<td>
<div class="d-flex align-items-center">
<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-95"></div> FEED
</div>
</td>
<td class="text-end">25.70%</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center">
<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-75"></div> ORGANIC
</div>
</td>
<td class="text-end">24.30%</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center">
<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-55"></div> REFERRAL
</div>
</td>
<td class="text-end">23.05%</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center">
<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-35"></div> DIRECT
</div>
</td>
<td class="text-end">14.85%</td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center">
<div class="w-6px h-6px rounded-pill me-2 bg-theme bg-opacity-15"></div> EMAIL
</div>
</td>
<td class="text-end">7.35%</td>
</tr>
</tbody>
</table>
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

</div>


<div class="card-arrow">
<div class="card-arrow-top-left"></div>
<div class="card-arrow-top-right"></div>
<div class="card-arrow-bottom-left"></div>
<div class="card-arrow-bottom-right"></div>
</div>

</div>

</div>


<div class="col-xl-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">TOP PRODUCTS</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="table-responsive">
<table class="w-100 mb-0 small align-middle text-nowrap">
<tbody>
<tr>
<td>
<div class="d-flex">
<div class="position-relative mb-2">
<div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-1.jpeg);">
</div>
<div class="position-absolute top-0 start-0">
<span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">1</span>
</div>
</div>
<div class="flex-1 ps-3">
<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU90400</small></div>
<div class="fw-500 text-inverse">Huawei Smart Watch</div>
$399.00
</div>
</div>
</td>
<td>
<table class="mb-2">
<tr>
<td class="pe-3">QTY:</td>
<td class="text-inverse text-opacity-75 fw-500">129</td>
</tr>
<tr>
<td class="pe-3">REVENUE:</td>
<td class="text-inverse text-opacity-75 fw-500">$51,471</td>
</tr>
<tr>
<td class="pe-3 text-nowrap">PROFIT:</td>
<td class="text-inverse text-opacity-75 fw-500">$15,441</td>
</tr>
</table>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<div class="d-flex mb-2 align-items-center">
<div class="position-relative">
<div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-2.jpeg);">
</div>
<div class="position-absolute top-0 start-0">
<span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">2</span>
</div>
</div>
<div class="flex-1 ps-3">
<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU85999</small></div>
<div class="text-inverse fw-500">Nike Shoes Black Version</div>
$99.00
</div>
</div>
</td>
<td>
<table class="mb-2">
<tr>
<td class="pe-3">QTY:</td>
<td class="text-inverse text-opacity-75 fw-500">108</td>
</tr>
<tr>
<td class="pe-3">REVENUE:</td>
<td class="text-inverse text-opacity-75 fw-500">$10,692</td>
</tr>
<tr>
<td class="pe-3 text-nowrap">PROFIT:</td>
<td class="text-inverse text-opacity-75 fw-500">$5,346</td>
</tr>
</table>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<div class="d-flex mb-2 align-items-center">
<div class="position-relative">
<div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-3.jpeg);">
</div>
<div class="position-absolute top-0 start-0">
<span class="badge bg-theme text-theme-900 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">3</span>
</div>
</div>
<div class="flex-1 ps-3">
<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU20400</small></div>
<div class="text-inverse fw-500">White Sony PS4</div>
$599
</div>
</div>
</td>
<td>
<table class="mb-2">
<tr>
<td class="pe-3">QTY:</td>
<td class="text-inverse text-opacity-75 fw-500">72</td>
</tr>
<tr>
<td class="pe-3">REVENUE:</td>
<td class="text-inverse text-opacity-75 fw-500">$43,128</td>
</tr>
<tr>
<td class="pe-3 text-nowrap">PROFIT:</td>
<td class="text-inverse text-opacity-75 fw-500">$4,312</td>
</tr>
</table>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<div class="d-flex mb-2 align-items-center">
<div class="position-relative">
<div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-4.jpeg);">
</div>
<div class="position-absolute top-0 start-0">
<span class="badge bg-black bg-opacity-50 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">4</span>
</div>
</div>
<div class="flex-1 ps-3">
<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU19299</small></div>
<div class="text-inverse fw-500">Apple Watch Series 5</div>
$1,099
</div>
</div>
</td>
<td>
<table class="mb-2">
<tr>
<td class="pe-3">QTY:</td>
<td class="text-inverse text-opacity-75 fw-500">53</td>
</tr>
<tr>
<td class="pe-3">REVENUE:</td>
<td class="text-inverse text-opacity-75 fw-500">$58,247</td>
</tr>
<tr>
<td class="pe-3 text-nowrap">PROFIT:</td>
<td class="text-inverse text-opacity-75 fw-500">$2,912</td>
</tr>
</table>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<div class="d-flex align-items-center">
<div class="position-relative">
<div class="bg-position-center bg-size-cover bg-repeat-no-repeat w-80px h-60px" style="background-image: url(assets/img/dashboard/product-5.jpeg);">
</div>
<div class="position-absolute top-0 start-0">
<span class="badge bg-black bg-opacity-50 rounded-0 d-flex align-items-center justify-content-center w-20px h-20px">5</span>
</div>
</div>
<div class="flex-1 ps-3">
<div class="mb-1"><small class="fs-9px fw-500 lh-1 d-inline-block rounded-0 badge bg-secondary bg-opacity-25 text-inverse text-opacity-75 pt-5px">SKU19299</small></div>
<div class="text-inverse fw-500">Black Nikon DSLR</div>
1,899
</div>
</div>
</td>
<td>
<table>
<tr>
<td class="pe-3">QTY:</td>
<td class="text-inverse text-opacity-75 fw-500">50</td>
</tr>
<tr>
<td class="pe-3">REVENUE:</td>
<td class="text-inverse text-opacity-75 fw-500">$90,950</td>
</tr>
<tr>
<td class="pe-3 text-nowrap">PROFIT:</td>
<td class="text-inverse text-opacity-75 fw-500">$2,848</td>
</tr>
</table>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
</tbody>
</table>
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


<div class="col-xl-6">

<div class="card mb-3">

<div class="card-body">

<div class="d-flex fw-bold small mb-3">
<span class="flex-grow-1">ACTIVITY LOG</span>
<a href="#" data-toggle="card-expand" class="text-inverse text-opacity-50 text-decoration-none"><i class="bi bi-fullscreen"></i></a>
</div>


<div class="table-responsive">
<table class="table table-striped table-borderless mb-2px small text-nowrap">
<tbody>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
You have sold an item - $1,299
</span>
</td>
<td><small>just now</small></td>
<td>
<span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PRODUCT</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
Firewall upgrade
</span>
</td>
<td><small>1 min ago</small></td>
<td>
<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">SERVER</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
Push notification v2.0 installation
</span>
</td>
<td><small>1 mins ago</small></td>
<td>
<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">ANDROID</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
New Subscription - 1yr Plan
</span>
</td>
<td><small>1 min ago</small></td>
<td>
<span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">SALES</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
2 Unread enquiry
</span>
</td>
<td><small>2 mins ago</small></td>
<td>
<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">ENQUIRY</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
$30,402 received from Paypal
</span>
</td>
<td><small>2 mins ago</small></td>
<td>
<span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PAYMENT</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-theme me-2"></i>
3 payment received
</span>
</td>
<td><small>5 mins ago</small></td>
<td>
<span class="badge d-block bg-theme text-theme-900 rounded-0 pt-5px w-70px" style="min-height: 18px">PAYMENT</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
1 pull request from github
</span>
</td>
<td><small>5 mins ago</small></td>
<td>
<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">GITHUB</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
 <i class="bi bi-circle-fill fs-6px text-inverse-transparent-3 me-2"></i>
3 pending invoice to generate
</span>
</td>
<td><small>5 mins ago</small></td>
<td>
<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">INVOICE</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
<tr>
<td>
<span class="d-flex align-items-center">
<i class="bi bi-circle-fill fs-6px text-inverse text-opacity-25 me-2"></i>
2 new message from fb messenger
</span>
</td>
<td><small>7 mins ago</small></td>
<td>
<span class="badge d-block text-inverse bg-secondary bg-opacity-25 rounded-0 pt-5px w-70px" style="min-height: 18px">INBOX</span>
</td>
<td><a href="#" class="text-decoration-none text-inverse"><i class="bi bi-search"></i></a></td>
</tr>
</tbody>
</table>
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


<script data-cfasync="false" src="assets/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor.min.js" type="afbf6eec42f052df38a2033a-text/javascript"></script>
<script src="assets/js/app.min.js" type="afbf6eec42f052df38a2033a-text/javascript"></script>


<script src="assets/plugins/jvectormap-next/jquery-jvectormap.min.js" type="afbf6eec42f052df38a2033a-text/javascript"></script>
<script src="assets/plugins/jvectormap-content/world-mill.js" type="afbf6eec42f052df38a2033a-text/javascript"></script>
<script src="assets/plugins/apexcharts/dist/apexcharts.min.js" type="afbf6eec42f052df38a2033a-text/javascript"></script>
<script src="assets/js/demo/dashboard.demo.js" type="afbf6eec42f052df38a2033a-text/javascript"></script>


<script async="" src="assets/gtag/js?id=G-Y3Q0VGQKY3" type="afbf6eec42f052df38a2033a-text/javascript"></script>
<script type="afbf6eec42f052df38a2033a-text/javascript">
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-Y3Q0VGQKY3');
</script>
<script src="assets/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js" data-cf-settings="afbf6eec42f052df38a2033a-|49" defer=""></script><script defer="" src="../beacon.min.js/v52afc6f149f6479b8c77fa569edb01181681764108816" integrity="sha512-jGCTpDpBAYDGNYR5ztKt4BQPGef1P0giN6ZGVUi835kFF88FOmmn8jBQWNgrNd8g/Yu421NdgWhwQoaOPFflDw==" data-cf-beacon='{"rayId":"7bdf28d5ae460ac2","version":"2023.3.0","r":1,"b":1,"token":"4db8c6ef997743fda032d4f73cfeff63","si":100}' crossorigin="anonymous"></script>
</body>
</html>
