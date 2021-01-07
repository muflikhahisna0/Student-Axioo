<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- CSS -->
    <!--Get your own code at fontawesome.com-->
    <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css">

    <title><?= $title; ?></title>
</head>

<body class="m-0 p-0 w-100">
    <nav class="navbar navbar-expand-lg">
        <img src="/img/logo.png" alt="poto" style="width: 170px;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item lala">
                    <a class="nav-link font-weight-bold text-warning" href="/home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lala font-weight-bold text-warning" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lala font-weight-bold text-warning" href="/contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link lala font-weight-bold text-warning" href="/student">Students</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
            </form>
        </div>
    </nav>
    <?= $this->renderSection('content'); ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <style>
        .movie-title {
            font-size: 90px;
            text-transform: uppercase;
        }

        .button {
            background: -webkit-linear-gradient(left, #F7971E, #FFD200);
            border-radius: 8px;
            display: inline-block;
            font-family: 'Poppins', sans-serif;
            position: relative;
            padding: 10px 15px 10px;
            line-height: 25px;
            color: #ffffff;
            cursor: pointer;
            border-style: none;
        }

        .yellow {
            background: -webkit-linear-gradient(left, #F7971E, #FFD200);

        }

        #content {
            height: 660px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0), rgb(0 0 0 / 90%), rgba(0, 0, 0));
        }

        .content-list {
            min-height: 660px;
            background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0), rgb(0 0 0 / 90%), rgba(0, 0, 0));
        }

        .black {
            background-color: black;
            height: 1200px;
        }

        .navbar {
            background-color: black;
            top: 0;
        }

        .lala:hover {
            color: white;
            text-decoration: white;
        }
    </style>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>