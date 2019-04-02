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
            List d'ulilisateur
        </h3>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full mytable">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenome</th>
                    <th>Tel</th>
                    <th>Email</th>
                    <th>Adresse</th>
                    <th>Cap</th>
                    <th>Prix</th>
                    <th>date create</th>
                    <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <td>{{$user->nom}}</td>
                        <td>{{$user->prenom}}</td>
                        <td>{{$user->tel}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->adresse}}</td>
                        <td>{{$user->lob}}</td>
                        <td>{{$user->prix}}</td>
                        <td>{{$user->created_at}}</td>
                        <td>
                            @if($user->is_admin == 0)
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#{{$user->id}}" data-original-title="Supprimer">
                                {{--<i class="fa fa-trash-o fa-2x"></i>--}}Delete
                            </button>
                            @else
                            Administrateur
                            @endif
                        </td>
                    </tr>

                    <!-- modal -->

                    <div class="modal fade" id="{{$user->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg modal-dialog-fromright" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Deleted</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p>Do you want to delete this user ?</p>
                                </div>
                                <div class="modal-footer">

                                    <form action="{{ url('user/'.$user->id) }}" method="post">

                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button type="submit" class="btn btn-danger">Yes</button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    </form>

                                </div>
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