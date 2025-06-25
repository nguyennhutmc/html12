<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/import.css" rel="stylesheet"/>
    <link href="css/style.css" rel="stylesheet"/>
    <script src="js/jquery.2.2.4.min.js"></script>
    <title>Hello, world!</title>
</head>
<body>
<div id="page">
    <header>
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container-fluid mx-auto px-0">
                <a class="navbar-brand p-0 m-0" href="#">
                    <img src="images/logo.svg" alt="Logo" class="logo_img d-inline-block align-top">
                </a>
                <a class="menu m-0 p-0 border-0 mb" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar">
                    <img src="images/menu.svg" alt="">
                </a>
            </div>
        </nav>
    </header>
    <div class="header_height"></div>
    <div class="offcanvas offcanvas-end d-block" tabindex="-1" id="offcanvasNavbar">
        <div class="offcanvas-header">
            <button type="button" class="btn-close fs-6 me-auto ms-0 ps-0" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="navbar-nav m-0">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                <li class="nav-item"><a class="nav-link disabled" aria-disabled="true">Disabled</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"
                                                 aria-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>



