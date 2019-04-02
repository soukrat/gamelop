@extends('main')

@section('content')

<div class="block">
    <div class="row">
        <div class="col-md-6">
            <form class="js-validation-signup" method="post" action="{{url('/demande')}}">
                {{ csrf_field() }}

                <div class="block block-themed block-rounded block-shadow">
                    <div class="block-header bg-gd-emerald">
                        <h3 class="block-title">Demande</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    @if(session()->has('validedemande'))
                        <div class="alert alert-success">
                            {{ session()->get('validedemande') }}
                        </div>
                    @endif
                    @if(session()->has('invalidedemande'))
                        <div class="alert alert-danger">
                            {{ session()->get('invalidedemande') }}
                        </div>
                    @endif
                    <div class="block-content">

                        <div class="alert alert-primary">
                            ==>(Disponible a partir de 50 €) Jusqu'à 100 € : 10 € , Jusqu'à 185 € : 15 € , plus en 185 € : 20 €
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Mode de payment</label>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" value="cashplus" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label>CIN</label>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" name="cin" placeholder="carte identité nationale" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label>Votre solde</label>
                            </div>
                            <div class="col-6">
                                <input type="number" name="solde" class="form-control" placeholder="€" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label>Password</label>
                            </div>
                            <div class="col-6">
                                <input type="password" name="password" class="form-control" placeholder="*****" required>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-6 push">
                            </div>
                            <div class="col-sm-6 text-sm-right push">
                                <button type="submit" class="btn btn-alt-success">
                                    <i class="fa fa-plus mr-10"></i> Demander
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <form class="js-validation-signup" method="post" action="{{url('/convert')}}">
                {{ csrf_field() }}

                <div class="block block-themed block-rounded block-shadow">
                    <div class="block-header bg-gd-emerald">
                        <h3 class="block-title">Converter</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option">
                                <i class="si si-wrench"></i>
                            </button>
                        </div>
                    </div>
                    @if(session()->has('invalide'))
                        <div class="alert alert-danger">
                            {{ session()->get('invalide') }}
                        </div>
                    @endif
                    @if(session()->has('valide'))
                        <div class="alert alert-success">
                            {{ session()->get('valide') }}
                        </div>
                    @endif
                    <div class="block-content">

                        <div class="alert alert-primary">
                            100 Cap -------> 1€
                        </div>

                        <div class="form-group row">
                            <div class="col-6">
                                <label>Votre Cap</label>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" value="{{ Auth::user()->lob }}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label>Entrer Cap</label>
                            </div>
                            <div class="col-6">
                                <input type="number" class="form-control" name="value" value="" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-6">
                                <label>Votre Solde</label>
                            </div>
                            <div class="col-6">
                                <input type="text" class="form-control" value="{{ Auth::user()->prix }}" readonly="readonly">
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-sm-6 push">
                            </div>
                            <div class="col-sm-6 text-sm-right push">
                                <button type="submit" class="btn btn-alt-primary">
                                    <i class="fa fa-plus mr-10"></i> Converter
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection