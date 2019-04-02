@extends('main_admin')

@section('content')
    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.css')}}">
    <div class="block">
        @if($status = Session::get('status'))
            <div class="alert alert-success">
                {{ $status }}
            </div>
        @endif
        <h3 class="block-title block-header bg-primary text-white">
            List Demande
        </h3>
        <div class="block-content block-content-full">
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full mytable">
            <thead>
            <tr>
                <th>Nom</th>
                <th>Prenome</th>
                <th>Tel</th>
                <th>CIN</th>
                <th>Prix</th>
                <th>Date Demande</th>
                <th>Code Payment</th>
                <th>Date Retrait</th>
                <th>Status</th>
                <th>Option</th>
            </tr>
            </thead>
            <tbody>
            @foreach($demandadmin as $demand)
            <tr>
                <td>{{$demand->nom}}</td>
                <td>{{$demand->prenom}}</td>
                <td>{{$demand->tel}}</td>
                <td>{{$demand->cin}}</td>
                <td>{{$demand->prix}}</td>
                <td>{{$demand->date_demande}}</td>
                <td>{{$demand->code_payment}}</td>
                <td>{{$demand->date_retrait}}</td>
                <td>{{$demand->status}}</td>
                <td>
                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#{{$demand->id}}" data-original-title="mise à jour">
                        Update
                    </button>
                </td>
            </tr>
                <!--model update -->

                <div class="modal fade" id="{{$demand->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Update Demande</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ url('demande/'.$demand->id) }}" method="post">

                                <input type="hidden" name="_method" value="PUT">
                                {{ csrf_field() }}
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="">CIN</label>
                                        <input type="text" class="form-control" name="cin" value="{{ $demand->cin }}" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Code de Payment</label>
                                        <input type="text" class="form-control" name="codepayment" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-primary">Sauvegarder</button>
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            @endforeach
            </tbody>
        </table>
        </div>
    </div>
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