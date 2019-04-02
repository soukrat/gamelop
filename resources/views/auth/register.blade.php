<!doctype html>
<!--[if lte IE 9]>     <html lang="en" class="no-focus lt-ie10 lt-ie10-msg"> <![endif]-->
<!--[if gt IE 9]><!--> <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

        <title>Primalobby - Login</title>

        <meta name="description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <!-- Open Graph Meta -->
        <meta property="og:title" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework">
        <meta property="og:site_name" content="Codebase">
        <meta property="og:description" content="Codebase - Bootstrap 4 Admin Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta property="og:type" content="website">
        <meta property="og:url" content="">
        <meta property="og:image" content="">

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

<body class="">
<div id="page-container" class="main-content-boxed side-trans-enabled">
<main id="main-container" style="min-height: 363px;"><div class="bg-body-dark bg-pattern bg-image" style="background-image: url('assets/img/photos/img_master.jpg');">
<div class="row mx-0 justify-content-center">
<div class="hero-static col-md-6">
<div class="content content-full overflow-hidden">


<form id="myform" class="js-validation-signup" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="block block-themed block-rounded block-shadow">
        <div class="block-header bg-gd-emerald">
            <h3 class="block-title">Inscription</h3>
            <div class="block-options">
            <button type="button" class="btn-block-option">
            <i class="si si-wrench"></i>
            </button>
            </div>
        </div>
        <div class="block-content">
            <div class="form-group row ">
                <div class="col-12 {{ $errors->has('email') ? 'is-invalid' : '' }}">
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required>
                 @if ($errors->has('email'))
                    <span class="invalid-feedback">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-6 {{ $errors->has('nom') ? 'is-invalid' : '' }}">
                <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" value="{{ old('nom') }}" required>
                    @if ($errors->has('nom'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('nom') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-6 {{ $errors->has('prenom') ? 'is-invalid' : '' }}">
                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom" value="{{ old('prenom') }}" required>
                    @if ($errors->has('prenom'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('prenom') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row ">
                <div class="col-6 {{ $errors->has('password') ? 'is-invalid' : '' }}">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                    @if ($errors->has('password'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-6">
                <input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirmer password" required>

                </div>
            </div>
            <div class="form-group row ">
                <div class="col-6 {{ $errors->has('telephone') ? 'is-invalid' : '' }}">
                <input type="text" class="form-control" id="telephone" name="telephone" placeholder="Telephone" value="{{ old('telephone') }}" required>
                    @if ($errors->has('telephone'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('telephone') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="col-6 {{ $errors->has('societe_city') ? 'is-invalid' : '' }}">
                <select name="societe_city" id="societe_city" class="form-control">
                    <option value="">Choisez la Ville</option>
                </select>
                    @if ($errors->has('societe_city'))
                        <span class="invalid-feedback">
                        <strong>{{ $errors->first('societe_city') }}</strong>
                    </span>
                    @endif
                </div>
            </div>
            <div class="form-group row mb-0">
                <div class="col-sm-6 push">
                    <label class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="signup-terms" name="signup-terms" required>
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">I agree to Terms &amp; Conditions</span>
                    </label>
                </div>
                <div class="col-sm-6 text-sm-right push">
                    <button type="submit"  class="btn btn-alt-success">
                    <i class="fa fa-plus mr-10"></i> Create compte
                    </button>
                </div>
            </div>

        </div>
        <div class="block-content bg-body-light">
            <div class="form-group text-center">
                <a class="link-effect text-muted mr-10 mb-5 d-inline-block" href="{{ route('login')}}">
                <i class="fa fa-user text-muted mr-5"></i> Se connecter
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
<script src="{{asset('assets/js/plugins/bootstrap-wizard/jquery.bootstrap.wizard.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/jquery-validation/additional-methods.min.js')}}"></script>

<script type="text/javascript">
                    var serviceArray= ["Ad Dakhla","Agadir","Al Hoceima","Azilal","Ben guerir","Beni Mellal","Ben Slimane",
                                        "Boujdour","Boulemane","Casablanca","Chaouen","El Jadida","El Kelaa des Sraghna",
                                        "Er Rachidia","Essaouira","Es Smara","Fes","Figuig","Guelmim","Ifrane","Kenitra",
                                        "Khemisset","Khenifra","Khouribga","Laayoune","Larache","Marrakech","Meknes","Nador",
                                        "Ouarzazate","Oujda","Rabat","Safi","Settat","Sidi Kacem","Tanger","Tan-Tan","Taounate",
                                        "Taroudannt","Tata","Taza","Tetouan","Tiznit"];

                    for (i = 0; i < serviceArray.length; i++) {
                        var data = '<option value="'+serviceArray[i]+'">' + serviceArray[i] + '</option>';
                        $('#societe_city').append(data);
                    }
</script>
</body>
</html>