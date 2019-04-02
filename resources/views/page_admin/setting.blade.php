@extends('main_admin')

@section('content')

    <div class="block">
        <div class="block-content block-content-full">
            <div class="row">
                <div class="col-md-12">
                    @if($status = Session::get('status'))
                        <div class="alert alert-success">
                            {{ $status }}
                        </div>
                    @endif
                    <h3>Setting</h3>
                    <form action="{{ url('autorisation/'.$list->id_autorisation) }}" method="post">
                        <input type="hidden" name="_method" value="PUT">

                        {{ csrf_field() }}

                        <div class="row">
                            <div class="form-group col-md-4">
                                <label class="display-block text-semibold">Page Login:</label>
                                <div class="radio">
                                    <label><input class="choice" type="radio" value="0" id="Login0" name="Login">Enable</label>
                                </div>

                                <div class="radio">
                                    <label><input class="choice" type="radio" value="1" id="Login1" name="Login">Disable</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="display-block text-semibold">Page inscription:</label>
                                <div class="radio">
                                    <label><input class="choice" type="radio" value="0" id="inscription0" name="inscription">Enable</label>
                                </div>

                                <div class="radio">
                                    <label><input class="choice" type="radio" value="1" id="inscription1" name="inscription">Disable</label>
                                </div>
                            </div>
                            <div class="form-group col-md-4">
                                <label class="display-block text-semibold">Page forget:</label>
                                <div class="radio">
                                    <label><input class="choice" type="radio" value="0" id="forgot0" name="forget">Enable</label>
                                </div>

                                <div class="radio">
                                    <label><input class="choice" type="radio" value="1" id="forgot1" name="forget">Disable</label>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="text-center">
                                    <button type="submit" class="btn bg-pink-400 btn-primary">Enregistrer</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <script type="text/javascript">

                        var login = {{ $list->login }} ;
                        var inscription ={{ $list->inscription }} ;
                        var forgot = {{ $list->forget }} ;

                        if (login == 0) {
                            document.getElementById("Login0").checked = true ;
                        }else{
                            document.getElementById("Login1").checked = true ;
                        }

                        if (inscription == 0) {
                            document.getElementById("inscription0").checked = true ;
                        }else{
                            document.getElementById("inscription1").checked = true ;
                        }

                        if (forgot == 0) {
                            document.getElementById("forgot0").checked = true ;
                        }else{
                            document.getElementById("forgot1").checked = true ;
                        }

                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection