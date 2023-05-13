


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" src="/images/logo.png">
  <title>
    administrateur
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
  @vite(['resources/assets/css/nucleo-svg.css', 'resources/assets/css/soft-ui-dashboard.css?v=1.0.3'])

  <!-- CSS Files -->
  <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />
</head>

<body class="g-sidenav-show  bg-gray-100">
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" target="_blank">
        <img src="/images/logo.png" class="navbar-brand-img h-800"  style="width: 80px" alt="main_logo">
        <span class="ms-1 font-weight-bold">Admin
        </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto  max-height-vh-100 h-100" id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link  " href="{{url('redirect')}}">
            <div>
              <img style="width:25px" src="/images/dashboard.png" alt="">
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{url('view_category')}}">
            <div>
              <img style="width:25px" src="images/category.png" alt="">

            </div>
            <span class="nav-link-text ms-1">Liste categorys</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="{{url('show_product')}}">
            <div>
              <img style="width:25px" src="/images/product.png" alt="">

            </div>

            <span class="nav-link-text ms-1">Liste products</span>
          </a>
        </li>
        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">GESTION</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link  " href="{{url('order')}}">
            <div>
              <img style="width:25px" src="/images/order.png" alt="">
            </div>
            <span class="nav-link-text ms-1">Orders</span>
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link  " href="{{url('client')}}">
            <div>
              <img style="width:28px" src="/images/client.png" alt="">
            </div>
            <span class="nav-link-text ms-1">Client</span>
          </a>
        </li>




 
        


      </ul>
    </div>

  </aside>
  <main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-dark active" aria-current="page">admin</li>
          </ol>
          <h6 class="font-weight-bolder mb-0">admin</h6>
        </nav>

      </div>
    </nav>
    <!-- End Navbar -->

   


 
