@extends('main')

@section('content')

    <div class="block">
        <div class="block-content block-content-full">

                <div class="row">
                    <div class="col-md-12">
                        @if(session()->has('validecode'))
                            <div id="successMessage" class="alert alert-success">
                                {{ session()->get('validecode') }}
                            </div>
                        @endif
                        @if(session()->has('invalidevalidecode'))
                            <div id="successMessage" class="alert alert-danger">
                                {{ session()->get('invalidevalidecode') }}
                            </div>
                        @endif
                            <script>
                                setTimeout(function() {
                                    $('#successMessage').fadeOut('fast');
                                }, 8000); // <-- time in milliseconds
                            </script>
                        <!-- Main content -->
                            <div class="content-wrapper">
                                <div class="content">
                                            <div class="panel panel-flat">
                                                    <div class="row">
                                                        @foreach($starpass as $starpas)
                                                        <div class="col-md-6">
                                                                <div class="row"  style="background-color: #b1b1b1;border: 1px solid ; margin: 1px">
                                                                    <div class="col-md-8">
                                                                        <h5><span><img style="width: 7%" class="flag" src="{{ $starpas->flag }}" alt="France Flag"></span>Téléphone:</h5>
                                                                    </div>
                                                                    <div class="col-md-4" style="text-align: right;">
                                                                        <h6><span class="badge badge-success">{{ $starpas->crédits }}</span>
                                                                        Cap</h6>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <div style="text-align: center;background-color: #fff;">
                                                                            <h3 style="color: #a50f78;font-size: 30px;">{{ $starpas->numéro }}
                                                                                <span style="color: #fff;background-color: #a50f78;font-size: 14px;font-weight: 300;">{{ $starpas->description }}</span></h3>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-12" style="text-align: center">
                                                                        <form action="{{url('/valider')}}" method="POST">
                                                                            {{ csrf_field() }}
                                                                            <div class="form-group row">
                                                                                <div class="col-md-4">
                                                                                    <label style="color: #000;margin-top: 6%" for="">Starpass code:</label>
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="text" name="nombre" class="form-control" value="" required>
                                                                                    <input type="hidden" name="nomdoc" class="form-control" value="{{ $starpas->nom_doc }}">
                                                                                    <input type="hidden" name="idd" class="form-control" value="{{ $starpas->identifiant }}">
                                                                                    <input type="hidden" name="numéro" class="form-control" value="{{ $starpas->numéro }}">
                                                                                    <input type="hidden" name="cridite" class="form-control" value="{{ $starpas->crédits }}">
                                                                                </div>
                                                                                <div class="col-md-4">
                                                                                    <input type="submit" class="form-control btn btn-primary" value="Valider">
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                                </div>
                                                            @endforeach
                                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        </div>
    </div>

@endsection