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
    <!-- <link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css"> -->

    <title><?= $title; ?></title>
</head>

<body class="m-0 p-0 w-100">
    <div class="row bg-dark">
        <div class="col-2">
            <a href="/home">
                <img src="/img/logo.png" alt="poto" style="width: 170px;">
            </a>
        </div>
        <div class="col-10  align-self-center">
            <form method="post" action="">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Student's name" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="seacrh">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row justify-content-between">
            <div class="col-2 p-4" style="background-color: #f8f9fb;">
                <a href="" class="text-muted">
                    <div class="row">
                        <i class="mr-4">lala</i>
                        <p>Dashboard</p>
                    </div>
                </a>
                <a href="" class="text-muted">
                    <div class="row">
                        <i class="mr-4">lala</i>
                        <p>Student</p>
                    </div>
                </a>
            </div>
            <?= $this->renderSection('content'); ?>

        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>


</html>