<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Test for GS</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <!--Bootstrap -->
    <link href="/css/mdb.min.css" rel="stylesheet">
    <!-- JQery -->
    <script type="text/javascript" src="/js/jquery-3.3.1.min.js"></script>
</head>

<body class="bkg">
    <h2 class="mb-5 mt-5 font-weight-bold text-center">Greensite test</h2>
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-lg-4">
                <form class="p-5" method="post" id="form">
                    <div class="md-form form-sm">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="name" class="form-control form-control-sm">
                        <label for="name">name</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-user prefix grey-text"></i>
                        <input type="text" id="surname" class="form-control form-control-sm">
                        <label for="surname">surname</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fas fa-at prefix grey-text"></i>
                        <input type="text" id="email" class="form-control form-control-sm">
                        <label for="email">email</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fas fa-unlock prefix grey-text"></i>
                        <input type="password" id="password1" class="form-control form-control-sm">
                        <label for="password1">password</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fas fa-unlock prefix grey-text"></i>
                        <input type="password" id="password2" class="form-control form-control-sm">
                        <label for="password2">confirm password</label>
                    </div>

                    <div class="text-center mt-4">
                        <button class="btn btn-success waves-effect waves-light" type="submit" id="admbtn"><a
                        style="text-decoration:none;color:#000000;">Login</a>
                        <i class="fas fa-sign-in-alt"></i></button>
                        <script src="js/ajax.js"></script>
                    </div>
                </form>

                <div class="md-form form-sm" id="ajax-form-success"></div>
            </div>
        </div>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="/js/mdb.min.js"></script>
<script src="http://code.jquery.com/jquery-latest.js"></script>
</body>
</html>
