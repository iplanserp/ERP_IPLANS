@extends('base')
@section('title','formulaire')
@section('content')
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-6 form" >
            <h1>Connexion        IPLANS ERP</h1> <BR>
            <h2>PACK EDUCATION MINESEC</h2><BR>

                <LABEL>ETABLISSEMENT:</LABEL>
                <select class="select form-control">
                    <option>nom du lycee</option>
                    <option>Lycee de new bell</option>
                </select><br><br>

            <a href="{{'/iplans/form'}}" ><button type="submit" class="btn val form-control" >suivant</button></a>

        </div>
        <div class="col-md-2"></div>
    </div>


@endsection

