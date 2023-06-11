@extends('layout')
@section('headScripts')
    <style>
        .form-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .imagg {
            object-fit: cover;
            width: 100px;
            height: auto;
        }

        td {
            max-width: 210px;
            max-height: 210px;
            overflow: auto;
        }
        td::-webkit-scrollbar {
            height: 5px;
        }

        td::-webkit-scrollbar-thumb {
            background: #3a4c618a;
            border-radius: 25px;
        }
        td::-webkit-scrollbar-thumb:hover {
            background: #3a4c61af;
            border-radius: 20px;
        }
    </style>
@endsection
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('materiel.back')
                <div class="row">
                    <div class="col-lg-12">
                        <h2>recherch</h2>
                        <form id="searchForm" class="form-virtical">
                            @csrf
                            <div class="form-row">
                                <!-- materiel type -->
                                <div class="form-group">
                                    <div class="col">
                                        <label for="materiel_type" class=" form-control-label">materiel Type</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="materiel_type" id="materielType" class="form-control">
                                            <option value="" selected="true">tout</option>
                                            @foreach ($matType as $mattype)
                                                <option value="{{ $mattype->id }}">{{ $mattype->type }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- materiel marque -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="materielMarque" class=" form-control-label">materiel marque</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="marque" id="materielMarque" class="form-control">
                                            <option value="" selected="true">tout</option>
                                            @foreach ($marques as $marque)
                                                <option value="{{ $marque->id }}">{{ $marque->marque }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- materiel modele -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="materielModele" class=" form-control-label">materiel modele</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="modèle" id="materielModele" class="form-control">
                                            <option value="" selected="true">tout</option>
                                            @foreach ($modeles as $modele)
                                                <option value="{{ $modele->id }}">{{ $modele->Modèle }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <!-- n de serie -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="NSerie" class=" form-control-label">N° Serie</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" maxlength="255" id="N_serie" name="N_serie"
                                            placeholder="N_serie" class="form-control">
                                    </div>
                                </div>

                                <!-- N° Inventair -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="N_Inventair" class=" form-control-label">N° Inventair</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="text" id="N_Inventair" maxlength="255" name="N_Inventair"
                                            placeholder="N° Inventair" class="form-control">
                                    </div>
                                </div>

                                <!-- affectation -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="affectationID" id="affectation"
                                            class=" form-control-label">affectation</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="affectation" id="affectationID" class="form-control">
                                            <option value="" selected="true">tout</option>
                                            @foreach ($afictations as $afictation)
                                                <option value="{{ $afictation->id }}">{{ $afictation->division }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>


                                <!-- caractiristique -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="caractéristiques" class=" form-control-label">caractéristiques</label>
                                    </div>
                                    <div class="col-12">
                                        <textarea name="caractéristiques" id="caractéristiques" class="form-control"></textarea>
                                    </div>
                                </div>

                                <!-- date d'aqusition -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="dateAqusition" class=" form-control-label">date d'Aqusition</label>
                                    </div>
                                    <div class="col-12">
                                        <input type="date" id="dateAqusition" name="date_aqusition" class="form-control">
                                    </div>
                                </div>

                                <!-- etat -->
                                <div class="form-group">
                                    <div class="col ">
                                        <label for="état" id="état" class=" form-control-label">état de
                                            materiel</label>
                                    </div>
                                    <div class="col-12">
                                        <select name="état" id="aétat" class="form-control">
                                            <option value="" selected="true">tout</option>
                                            @foreach ($etats as $etat)
                                                <option value="{{ $etat }}">{{ $etat }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="title-1 m-b-25">list de materiels</h2>
                        <div class="table-responsive table--no-card m-b-40">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                    <tr>
                                        <th>type</th>
                                        <th>marque</th>
                                        <th>modèle</th>
                                        <th>N° Serie</th>
                                        <th>N° Inventair</th>
                                        <th>affectation</th>
                                        <th>caractéristiques</th>
                                        <th>date d'Aqusition</th>
                                        <th>état </th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="materielList">
                                </tbody>

                            </table>
                        </div>
                    </div>
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
                    data: {
                        'matTypeId': matTypeId
                    },
                    success: function(data) {
                        $('#materielMarque').empty();
                        $('#materielModele').empty();
                        if (data.length > 0) {
                            $('#materielMarque').append(
                                '<option value="" selected="true"> tout dans ' + materiel +
                                ' </option>'
                            );
                            $.each(data, function(index, marque) {
                                $('#materielMarque').append('<option value="' + marque
                                    .id + '">' + marque.marque + '</option>');
                            });
                        } else {
                            $('#materielMarque').append(
                                '<option value="">No Marques trouver</option>');
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
                var marque = $(this).find('option:selected').text();
                $.ajax({
                    type: 'GET',
                    url: baseUrl + '/modeles', // Updated URL
                    data: {
                        'marqueId': marqueId
                    },
                    success: function(data) {
                        $('#materielModele').empty();
                        if (data.length > 0) {
                            $('#materielModele').append(
                                '<option value="" selected="true"> tout dans ' + marque +
                                ' </option>'
                            );
                            $.each(data, function(index, modeles) {
                                $('#materielModele').append('<option value="' + modeles
                                    .id + '">' + modeles.Modèle + '</option>');
                            });
                        } else {
                            $('#materielModele').append(
                                '<option value="">No modèle trouver</option>');
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
    <script>
        var r = ''
        $(document).ready(function() {
            // Function to update the material list
            function updateMaterialList() {
                var formData = $('#searchForm').serialize();
                $.ajax({
                    type: 'POST',
                    url: "{{ route('materiel.search') }}",
                    data: formData,
                    datatype: 'html',
                    cache: false,
                    success: function(response) {
                        $('#materielList').html(response);
                    },
                    error: function(err) {
                        console.log('error');
                        console.log(err);
                    }
                });
            }

            $('#caractéristiques').on('keyup', function() {
                updateMaterialList();
            });
            $('#N_serie').on('keyup', function() {
                updateMaterialList();
            });
            $('#N_Inventair').on('keyup', function() {
                updateMaterialList();
            });

            updateMaterialList();

            // Event listener for form inputs
            $('#searchForm input, #searchForm select').change(function() {
                updateMaterialList();
            });
        });
    </script>
@endsection
