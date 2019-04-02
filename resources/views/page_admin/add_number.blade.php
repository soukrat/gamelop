@extends('main_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                <form action="{{ url('starpass') }}" method="post">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="">Nom Document</label>
                        <input type="text" name="nom" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Identifiant</label>
                        <input type="text" name="identifiant" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">Country</label>
                        <input type="text" name="country" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">flag</label></br>
                        <input type="radio" name="result" value="https://lipis.github.io/flag-icon-css/flags/4x3/fr.svg" checked>
                        <img style="width: 3%" class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/fr.svg" alt="France Flag">

                        <input type="radio" name="result" value="https://lipis.github.io/flag-icon-css/flags/4x3/be.svg">
                        <img style="width: 3%" class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/be.svg" alt="Belgium Flag">

                        <input type="radio" name="result" value="https://lipis.github.io/flag-icon-css/flags/4x3/ca.svg">
                        <img style="width: 3%" class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ca.svg" alt="Canada Flag">

                        <input type="radio" name="result" value="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg">
                        <img style="width: 3%" class="flag" src="https://lipis.github.io/flag-icon-css/flags/4x3/ch.svg" alt="Belgium Flag">
                    </div>

                    <div class="form-group">
                        <label for="">Numéro</label>
                        <input type="text" name="numero" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="">description</label>
                        <input type="text" name="description" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Cap</label>
                        <input type="text" name="credits" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label>Prix</label>
                        <input type="text" name="prix" class="form-control" required>
                    </div>

                    <div class="form-group col-md-2">
                        <input type="submit" class="form-control btn btn-primary" value="Ajouter">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection