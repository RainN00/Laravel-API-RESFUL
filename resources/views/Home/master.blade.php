<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <base href="{{ asset('') }}">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
        <link rel="stylesheet" href="Home/Login/style.css">
    </head>
    <body>
        <div class="container">
            <div class="kpx_login">
                <h3 class="kpx_authTitle">Log in</h3>
                <h3 class="kpx_authTitle">Log in to your account.</h3>
                <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
                    <div class="col-xs-2 col-sm-6">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fa fa-facebook fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>
                </div>
                <div class="clear-fix"></div>
                <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
                    <div class="col-xs-2 col-sm-6">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fa fa-facebook fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>
                </div>
                <div class="clear-fix"></div>
                <div class="row kpx_row-sm-offset-3 kpx_socialButtons">
                    <div class="col-xs-2 col-sm-6">
                        <a href="#" class="btn btn-lg btn-block kpx_btn-facebook" data-toggle="tooltip" data-placement="top" title="Facebook">
                            <i class="fa fa-facebook fa-2x"></i>
                            <span class="hidden-xs"></span>
                        </a>
                    </div>
                </div>
                <div class="row kpx_row-sm-offset-3 kpx_loginOr">
                    <div class="col-xs-12 col-sm-6">
                        <hr class="kpx_hrOr" />
                        <span class="kpx_spanOr">or</span>
                    </div>
                </div>
                <div class="row kpx_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">
                        <form class="kpx_loginForm" action="" autocomplete="off" method="POST">
                            <div class="input-group">
                                <input type="text" class="form-control" name="username" placeholder="Username" />
                            </div>
                            <div class="clear-fix"></div>
                            <div class="input-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" />
                            </div>
                            <div class="clear-fix"></div>
                            <button class="btn btn-lg btn-outline-primary btn-block" type="submit">Login</button>
                        </form>
                    </div>
                </div>
                <div class="row kpx_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-3">
                        <p class="kpx_forgotPwd">
                            <a href="#">Forgot password?</a>
                        </p>
                        <p>
                            New to Gyfted <a href="#">Sign up</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>