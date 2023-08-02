@extends('base')
@section('title','login')
@section('content')

    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-6 form" >

            <form method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">login</label>
                    <input type="text" class="form-control" name="email" aria-describedby="login">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">mot de passe</label>
                    <input type="password" class="form-control" name="motdepasse" >
                </div>
                <input type="reset" class="btn" name="annuler" value="annuler">
                <input type="submit" class="btn" name="envoyer" value="se connecter">
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>


@endsection

