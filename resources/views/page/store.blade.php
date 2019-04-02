@extends('main')

@section('content')
    <style>
        .thumbnail{
            display: block;
            padding: 20px;
            margin-bottom: 20px;
            line-height: 1.42857143;
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .thumbnail:hover{
            background-color: #0e353f;
            color: #fff !important;
        }
    </style>
<div class="block">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-flat">
                <div class="content">
                    <div id="showdata" class="row">
                        @foreach($store as $stor)
                        <div class="col-md-4 text-center">
                            <div class="thumbnail">

                                <img src="{{ asset('storage/'.$stor->image) }}">

                                <p style="text-align: center;font-size: 1.5rem;font-weight: 600;margin-bottom: 10px;">{{ $stor->nom_produit }}</p>
                                <h5 style="text-align: center;border: 1px solid #2196F3;background-color: #2196F3;color: #fff">Cap : {{ $stor->cridite }}</h5>
                                <p style="text-align: center;margin-bottom: 10px;">{{ $stor->description }}</p>
                                <div>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $stor->id }}acheter">
                                        Acheter
                                    </button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#{{ $stor->id }}fiche">
                                        <i class="si si-magnifier-add"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                            <!-- modal acheter -->
                            <div id="{{ $stor->id }}acheter" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                                    <div class="modal-content">
                                        <div class="block-header bg-primary">
                                            <h4 class="block-title">Acheter</h4>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <form id="myForm" action="" method="post" class="form-horizontal">
                                                <input type="hidden" name="id_produit" value="1">
                                                <div class="form-group">
                                                    <label for="name" readonly="readonly" class="label-control col-md-4">Nom jeux</label>
                                                    <div class="col-md-8">
                                                        <input type="text" readonly="readonly" name="name_game" class="form-control" value="{{ $stor->nom_produit }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="label-control col-md-4">Cap</label>
                                                    <div class="col-md-8">
                                                        <input type="text" readonly="readonly" name="prix_mp" class="form-control" value="{{ $stor->cridite }}">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="label-control col-md-4">votre Cap</label>
                                                    <div id="pas" class="col-md-8 has-warning">
                                                        <input type="text" name="your_amount" readonly="readonly" value="0" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="name" class="label-control col-md-4">total</label>
                                                    <div class="col-md-8">
                                                        <input type="text" readonly="readonly" name="total" class="form-control">
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="alert alert-danger" role="alert">
                                                <strong>Oh danger!</strong>
                                                tu n'as pas plus crédite
                                                <a class="btn btn-default" href="/cridite">Ajouter Cap</a>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                            <button type="button" id="btnbuy" class="btn btn-primary" disabled="">Acheter</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->

                            <!-- modal de fiche de produit -->
                            <div id="{{ $stor->id }}fiche" class="modal fade" tabindex="-1" role="dialog">
                                <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                                    <div class="modal-content">
                                        <div class="block-header bg-primary">
                                            <h4 class="block-title">Fiche de produit</h4>
                                            <div class="block-options">
                                                <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                                                    <i class="si si-close"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="modal-body">
                                            <p style="text-align: center;font-size: 1.8rem;font-weight: 600;margin-bottom: 10px;">{{ $stor->nom_produit }}</p>
                                            <h5 style="text-align: center;border: 1px solid #2196F3;background-color: #2196F3;color: #fff">Cap : {{ $stor->cridite }}</h5>
                                            <p style="text-align: center;margin-bottom: 10px;">{{ $stor->description }}</p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection