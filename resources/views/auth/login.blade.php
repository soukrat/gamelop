<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Moropass - Login</title>

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="{{asset('assets/img/favicons/favicon.png')}}">
        <link rel="icon" type="image/png" sizes="192x192" href="{{asset('assets/img/favicons/favicon-192x192.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('assets/img/favicons/apple-touch-icon-180x180.png')}}">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Codebase framework -->
        <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">

        <!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
        <!-- <link rel="stylesheet" id="css-theme" href="{{asset('assets/css/themes/flat.min.css')}}"> -->
        <!-- END Stylesheets -->
    </head>
    <body>

    <div id="page-container" class="main-content-boxed side-trans-enabled">
        <main id="main-container">
            <div class="bg-image" style="background-image: url('{{asset('assets/img/photos/img_master.jpg')}}');">
                <div class="row mx-0 justify-content-center">
                    <div class="hero-static col-lg-6 col-xl-4">
                        <div class="content content-full overflow-hidden">
                            <div class="py-30 text-center">
                            </div>
                            <form class="js-validation-signin" method="POST" action="{{ route('login') }}">
                                {{ csrf_field() }}

                                <div class="block block-themed block-rounded block-shadow">
                                    <div class="block-header bg-gd-dusk">
                                        <h3 class="block-title">Please Sign In</h3>
                                        <div class="block-options">
                                            <button type="button" class="btn-block-option">
                                                <i class="si si-wrench"></i>
                                            </button>
                                        </div>
                                    </div>
                                    @if($status = Session::get('status'))
                                        <div class="alert alert-info">
                                            {{ $status }}
                                        </div>
                                    @endif
                                    <div class="block-content">
                                        <div class="form-group row">
                                            <div class="col-md-12">
                                                @if ($errors->has('email'))
                                                    <div class="alert alert-danger alert-dismissable" role="alert">
                                                    <span class="help-block">
                                                        <p class="mb-0">Ces identifiants ne correspondent pas à nos enregistrements</p>
                                                    </span>
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="col-12">
                                                <label for="login-username">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <label for="login-password">Mot de pass</label>
                                                <input type="password" class="form-control" id="password" name="password" >
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0">
                                            <div class="col-sm-6 d-sm-flex align-items-center push">
                                                <div class="custom-control custom-checkbox mr-auto ml-0 mb-0">
                                                    <input type="checkbox" class="custom-control-input" id="login-remember-me"  name="remember" {{ old('remember') ? 'checked' : '' }}>
                                                    <span class="custom-control-indicator"></span>
                                                    <span class="custom-control-description">Se Souvenir</span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 text-sm-right push">
                                                <button type="submit" class="btn btn-alt-primary">
                                                    <i class="si si-login mr-10"></i> Se connecter
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="block-content bg-body-light">
                                        <div class="form-group text-center">
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('register') }}">
                                                <i class="fa fa-plus mr-5"></i> Inscrivez vous
                                            </a>
                                            <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('password.request') }}">
                                                <i class="fa fa-warning mr-5"></i> Oubliez le mot de pass!
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

        <!-- Codebase Core JS -->
        <script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
        <script src="{{asset('assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('assets/js/core/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.scrollLock.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.appear.min.js')}}"></script>
        <script src="{{asset('assets/js/core/jquery.countTo.min.js')}}"></script>
        <script src="{{asset('assets/js/core/js.cookie.min.js')}}"></script>
        <script src="{{asset('assets/js/codebase.js')}}"></script>

        <!-- Page JS Plugins -->
        <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

        <!-- Page JS Code -->
        <script src="{{asset('assets/js/pages/op_auth_signin.js')}}"></script>
    </body>
</html>