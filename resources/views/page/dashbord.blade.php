@extends('main')

@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" id="css-main" href="{{asset('assets/css/codebase.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/plugins/dropzonejs/min/dropzone.min.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



    <div class="row js-appear-enabled animated fadeIn" data-toggle="appear">
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-bag fa-2x text-primary-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-primary js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="1500">{{ Auth::user()->lob }}</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Cap</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-wallet fa-2x text-earth-light"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-earth">€<span data-toggle="countTo" data-speed="1000" data-to="780" class="js-count-to-enabled">{{ Auth::user()->prix }}</span></div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Solde</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">

                    </div>
                    <div class="font-size-h3 font-w600 text-elegance js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="15">1 € = 100 Cap</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Note</div>
                </div>
            </a>
        </div>
        <div class="col-6 col-xl-3">
            <a class="block block-rounded block-bordered block-link-shadow" href="javascript:void(0)">
                <div class="block-content block-content-full clearfix">
                    <div class="float-right mt-15 d-none d-sm-block">
                        <i class="si si-users fa-2x text-pulse"></i>
                    </div>
                    <div class="font-size-h3 font-w600 text-pulse js-count-to-enabled" data-toggle="countTo" data-speed="1000" data-to="4252">4252</div>
                    <div class="font-size-sm font-w600 text-uppercase text-muted">Total demande</div>
                </div>
            </a>
        </div>
    </div>


    <div class="block">

        <div class="content">

            <h3 class="block-title block-header bg-secondary text-white">
                Votre Demande
            </h3>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full mytable">
                    <thead>
                    <tr>
                        <th>prix</th>
                        <th>date demande</th>
                        <th>Mode payment</th>
                        <th>code payment</th>
                        <th>date tirage</th>
                        <th>status</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($demande as $demand)
                        <tr>
                            <td>{{$demand->prix}}</td>
                            <td>{{ $demand->date_demande }}</td>
                            <td>Cashplus</td>
                            <td>{{ $demand->code_payment }}</td>
                            <td>{{ $demand->date_retrait }}</td>
                            <td>{{ $demand->status }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="content">

            <h3 class="block-title block-header bg-secondary text-white">
                Historique Code
            </h3>
            <div class="block-content block-content-full">
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full mytable">
                    <thead>
                    <tr>
                        <th>nom doc</th>
                        <th>Cap</th>
                        <th>numéro</th>
                        <th>code</th>
                        <th>date entré</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($code as $cod)
                        <tr>
                            <td>{{$cod->nom_doc}}</td>
                            <td>{{ $cod->crédits }}</td>
                            <td>{{ $cod->numéro }}</td>
                            <td>{{ $cod->code }}</td>
                            <td>{{ $cod->created_at }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


    </div>

    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('page_script')
    <!-- Page JS Plugins -->
    <script src="{{asset('assets/js/plugins/select2/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/js/plugins/jquery-validation/additional-methods.min.js')}}"></script>

    <!-- Page JS Plugins -->
    <script src="{{('assets/js/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{('assets/js/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>

    <!-- Page JS Code -->
    <script src="{{('assets/js/pages/be_tables_datatables.js')}}"></script>
@endsection