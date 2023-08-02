@extends('base')
@section('title','accueil')
@section('content')
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-6 form" >
            <p class="alert-heading">
            <h1 class="title">Connexion          IPLANS ERP</h1> <BR>
            <h2>PACK EDUCATION MINESEC</h2><BR>
            </p>
                <LABEL>ETABLISSEMENT:</LABEL>
                <select class="select ">
                    <option>nom du lycee</option>
                    <option>Lycee de new bell</option>
                </select><br><br>

           <center> <a href="{{'/iplans/form'}}" ><button class="btn val form-control" >suivant</button></a></center>

        </div>
        <div class="col-md-2"></div>
    </div>


@endsection

