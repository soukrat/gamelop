@extends('main_admin')

@section('content')

    <link rel="stylesheet" href="{{asset('assets/js/plugins/datatables/dataTables.bootstrap4.min.css')}}">
    <div class="block">
        <h3 class="block-title block-header bg-primary text-white">
            List des codes
        </h3>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full mytable">
                <thead>
                <tr>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>tel</th>
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
                        <td>{{ $cod->nom}}</td>
                        <td>{{ $cod->prenom}}</td>
                        <td>{{ $cod->tel}}</td>
                        <td>{{ $cod->nom_doc}}</td>
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