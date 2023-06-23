@extends('layout')

@section('content')

    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> il a un problem dans votre inpute.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        <p>{{ $message }}</p>
                    </div>
                @endif

                @include('materiel.back')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form id="createForm" action="{{ route('Materiel.store') }}" method="POST" class="form-horizontal">
                                    @csrf
                                    <!-- materiel type -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="materiel_type" class=" form-control-label">type de matériel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="materiel_type" id="materielType" class="form-control">
                                                <option value="" selected="true" hidden disabled>Sélectionner le type</option>
                                                @foreach($matType as $mattype)
                                                    <option value="{{ $mattype->id }}">{{ $mattype->type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- materiel marque -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="materielMarque" class=" form-control-label">marque de matériel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="marque" id="materielMarque" class="form-control">
                                                <option value="" selected="true" hidden disabled>Sélectionner la marque</option>

                                            </select>
                                        </div>
                                    </div>

                                    <!-- materiel modele -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="materielModele" class=" form-control-label">modèle de matériel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="modèle" id="materielModele" class="form-control">
                                                <option value="" selected="true" hidden disabled>Sélectionner le modèle</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- n de serie -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="NSerie" class=" form-control-label">N° Serie</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" maxlength="255" id="N_serie" name="N_serie" placeholder="########" class="form-control">
                                        </div>
                                    </div>

                                    <!-- N° Inventair -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="N_Inventair" class=" form-control-label">N° Inventaire</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="N_Inventair" maxlength="255" name="N_Inventair" placeholder="#########" class="form-control">
                                        </div>
                                    </div>

                                    <!-- affectation -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="affectationID" id="affectation" class=" form-control-label">affectation au service</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="affectation" id="affectationID" class="form-control">
                                                <option value="" selected="true" hidden disabled>Sélectionner la division</option>
                                                @foreach($afictations as $afictation)
                                                    <option value="{{ $afictation->id }}">{{ $afictation->division }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- caractiristique -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="caractéristiques" class=" form-control-label">caractéristiques</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="caractéristiques" id="caractéristiques" rows="9" placeholder="{{ $caractéristiquesPlaceHolder }}" class="form-control"></textarea>
                                        </div>
                                    </div>

                                    <!-- date d'aqusition -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="dateAqusition" class=" form-control-label">date d'Aqusition</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" id="dateAqusition" name="date_aqusition" class="form-control">
                                        </div>
                                    </div>

                                    <!-- etat -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="état" id="état" class=" form-control-label">état de matériel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="état" id="aétat" class="form-control">
                                                <option value="" selected="true" hidden disabled>Select état</option>
                                                @foreach($etats as $etat)
                                                    <option value="{{ $etat }}">{{ $etat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- port -->
                                    <div class="alert alert-primary" role="alert">
                                        l'ajout des ports avec les adresses Mac et Ip dans la modification du matériel après leur création
                                    </div>



                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary btn-sm">
                                        <i class="fa fa-dot-circle-o"></i> Submit
                                    </button>
                                    <button type="reset" class="btn btn-danger btn-sm">
                                        <i class="fa fa-ban"></i> Reset
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#materielType').change(function() {
            var materiel = $(this).find('option:selected').text();
            var matTypeId = $(this).val();
            document.getElementById("affectation").innerHTML = 'division de <b> ' + materiel + '</b>';
            $.ajax({
                    type: 'GET',
                    url: baseUrl + '/marques', // Updated URL
                    data: { 'matTypeId': matTypeId },
                    success: function(data) {
                        $('#materielMarque').empty();
                        $('#materielModele').empty();
                        if (data.length > 0) {
                            $('#materielMarque').append('<option value="" selected="true"> select un marque </option>');
                            $.each(data, function(index, marque) {
                                $('#materielMarque').append('<option value="' + marque.id + '">' + marque.marque + '</option>');
                            });
                        } else {
                            $('#materielMarque').append('<option value="">No Marques found</option>');
                        }
                    },
                    error: function(err) {
                        console.log('error');
                        console.log(err);
                    }
            });
        });
        $('#materielMarque').change(function() {
            var marqueId = $(this).val();

            $.ajax({
                    type: 'GET',
                    url: baseUrl + '/modeles', // Updated URL
                    data: { 'marqueId': marqueId },
                    success: function(data) {
                        $('#materielModele').empty();
                        if (data.length > 0) {
                            $('#materielModele').append('<option value="" selected="true"> select un modèle </option>');
                            $.each(data, function(index, modeles) {
                                $('#materielModele').append('<option value="' + modeles.id + '">' + modeles.Modèle + '</option>');
                            });
                        } else {
                            $('#materielModele').append('<option value="">No Marques found</option>');
                        }
                    },
                    error: function(err) {
                        console.log('error');
                        console.log(err);
                    }
            });
        });

      });
</script>



@endsection
