<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>mvc app</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merienda+One">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Core theme CSS (includes Bootstrap)-->
    <!--suppress HtmlUnknownTarget -->
    <link href="css/style.css" rel="stylesheet"/>
</head>

<body>

<!--<nav class="navbar navbar-expand-xl navbar-light bg-light">-->
<!--    <a href="#" class="navbar-brand"><i class="fa fa-cube"></i>MVC<b> Framework</b></a>-->
<!--    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--    </button>-->
<!--    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start navbar-nav ms-auto mb-2 mb-lg-0">-->
<!--        <div class="navbar-nav">-->
<!--            <a href="#" class="nav-item nav-link active">Home</a>-->
<!--            <a href="#" class="nav-item nav-link">About</a>-->
<!--            <a href="#" class="nav-item nav-link">Blog</a>-->
<!--            <a href="#" class="nav-item nav-link">Contact</a>-->
<!--        </div>-->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"-->
<!--                aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!---->
<!--        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false"-->
<!--                aria-label="Toggle navigation">-->
<!--            <span class="navbar-toggler-icon"></span>-->
<!--        </button>-->
<!--        <div class="navbar-nav ml">-->
<!--            <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">-->
<!--                <ul class="navbar-nav">-->
<!--                    <li class="nav-item dropdown">-->
<!--                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                            user-->
<!--                        </a>-->
<!--                        <ul class="dropdown-menu dropdown-menu-dark">-->
<!--                            <li><a href="#" class="dropdown-item"><i class="fa fa-user-o"></i> Profile</a></li>-->
<!--                            <li><a href="#" class="dropdown-item"><i class="fa fa-calendar-o"></i> Calendar</a></li>-->
<!--                            <li><a href="#" class="dropdown-item"><i class="fa fa-sliders"></i> Settings</a></li>-->
<!--                            <li>-->
<!--                                <div class="dropdown-divider"></div>-->
<!--                            </li>-->
<!--                            <li><a href="#" class="dropdown-item"><i class="material-icons">&#xE8AC;</i> Logout</a></li>-->
<!--                        </ul>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</nav>-->

<!--bootstrap navbar with about contact and login/register-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">MVC Framework</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Home</a>
                <a class="nav-link" href="/about">About</a>
                <a class="nav-link" href="/blog">Blog</a>
                <a class="nav-link" href="/contact">Contact</a>
            </div>
        </div>
        <div class="navbar-nav ml-auto">
            <a class="nav-link" href="/login">Login</a>
            <a class="nav-link" href="/register">Register</a>
        </div>
    </div>
</nav>


<div class="container masthead">
    {{content}}
</div>


<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>

</body>

</html>