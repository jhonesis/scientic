<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Scientic</title>
</head>
<body class="bg-light">
    <header class="container-fluid bg-dark justify-content-center align-items-center">
        <!--Menu--> 
        <nav class="navbar fixed-top bgmenu navbar-expand-md navbar-dark px-3 container-fluid">
            <div>
                <a class="navbar-brand fs-3 text-info" href="?action=home"><strong class="titles">SCIEN<span class="special rounded px-1">TIC</span></strong></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="menu" class="collapse navbar-collapse justify-content-end text-center">
                <ul class="navbar-nav fs-5">
                    <li class="nav-item">
                        <a class="nav-link active" href="?action=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=nasa">Nasa List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?action=contact">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="?action=signin" class="btn btn-info ms-md-5 mt-3 mt-md-0" target="_blank">Sign In</a>
                    </li>
                    <li class="nav-item">
                        <a href="?action=register" class="btn btn-outline-info ms-md-3 mt-3 mt-md-0">Register</a>
                    </li>
                </ul>
            </div>
        </nav>   
    </header>