@extends('main_admin')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{ url('store') }}" method="post" enctype="multipart/form-data">

                    {{ csrf_field() }}

                    <div class="form-group">
                        <label for="nom">Nom Produit</label>
                        <input type="text" name="nom" class="form-control" maxlength="20">
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control" maxlength="75"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="cridite">cap</label>
                        <input type="text" name="cridite" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="photo">Image</label>
                        <input type="file" name="photo" class="form-control">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="form-control btn btn-primary" value="Enregistrer">
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection