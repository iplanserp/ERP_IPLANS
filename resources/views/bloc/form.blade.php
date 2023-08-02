@extends('base')
@section('title','specialite')
@section('content')
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-6 form" >
           <h1 class="title"> <label>choix de la specialite</label></h1>
            <h4> lycee de new bell</h4>
            <form action="" method="post">
                @csrf
                <LABEL>choisir votre specialite</LABEL><br>
                <select class="select ">
                    <option>premier cycle</option>
                    <option>second cycle</option>
                    <option>formateur</option>
                </select><br><br>

                <center> <input type="reset" class="btn val form-control" value="annuler">
                    <input type="submit" class="btn val form-control" value="valider">
                </center>
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>


@endsection

