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
                                modiffier : <strong> {{ $type }}</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="createForm" action="{{ route('materiel.modify', $materiel[0]->id) }}" method="post" class="form-horizontal">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" hidden name="id" value="{{ $materiel[0]->id }}">

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="materiel_type" class=" form-control-label">materiel Type</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="materiel_type" id="materielType" class="form-control" @selected(true)>
                                                @foreach($matType as $mattype)
                                                    @php
                                                        $selected = '';
                                                        if($materiel[0]->materiel_type == $mattype->id) $selected = 'selected';
                                                    @endphp
                                                    <option value="{{ $mattype->id }}" {{ $selected }}>{{ $mattype->type }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- materiel marque -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="materielMarque" class=" form-control-label">materiel marque</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="marque" id="materielMarque" class="form-control">
                                                @foreach($marque as $m)
                                                    @php
                                                        $selected = '';
                                                        if($materiel[0]->marque == $m->id) $selected = 'selected';
                                                    @endphp
                                                    <option value="{{ $m->id }}" {{ $selected }}>{{ $m->marque }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- materiel modele -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="materielModele" class=" form-control-label">materiel modele</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="modèle" id="materielModele" class="form-control">
                                                @foreach($modele as $m)
                                                    @php
                                                        $selected = '';
                                                        if($materiel[0]->modèle == $m->id) $selected = 'selected';
                                                    @endphp
                                                    <option value="{{ $m->id }}" {{ $selected }}>{{ $m->Modèle }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <!-- n de serie -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="NSerie" class=" form-control-label">N° Serie</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $materiel[0]->N_serie }}" maxlength="255" id="N_serie" name="N_serie" placeholder="N_serie" class="form-control">
                                            <small class="form-text text-muted">1000123456789</small>
                                        </div>
                                    </div>

                                    <!-- N° Inventair -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="N_Inventair" class=" form-control-label">N° Inventair</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" value="{{ $materiel[0]->N_Inventair }}" id="N_Inventair" maxlength="255" name="N_Inventair" placeholder="N° Inventair" class="form-control">
                                            <small class="form-text text-muted">1000123456789</small>
                                        </div>
                                    </div>

                                    <!-- affectation -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="affectationID" id="affectation" class=" form-control-label">affectation</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="affectation" id="affectationID" class="form-control">
                                                <option value="" selected="true">Select division</option>
                                                @foreach($afictations as $afictation)
                                                    @php
                                                        $selected = '';
                                                        if($materiel[0]->affectation == $afictation->id) $selected = 'selected';
                                                    @endphp
                                                    <option {{ $selected }} value="{{ $afictation->id }}">{{ $afictation->division }}</option>
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
                                            <textarea name="caractéristiques" id="caractéristiques" rows="9"  class="form-control">{{ $materiel[0]->caractéristiques }}</textarea>
                                        </div>
                                    </div>

                                    <!-- date d'aqusition -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="dateAqusition" class=" form-control-label">date d'Aqusition</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="date" value="{{ $materiel[0]->date_aqusition }}" id="dateAqusition" name="date_aqusition" class="form-control">
                                        </div>
                                    </div>

                                    <!-- etat -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="état" id="état" class=" form-control-label">état de materiel</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <select name="état" id="aétat" class="form-control">
                                                @foreach($etats as $etat)
                                                    @php
                                                        $selected = '';
                                                        if($materiel[0]->état == $etat) $selected = 'selected';
                                                    @endphp
                                                    <option value="{{ $etat }}" {{ $selected }} >{{ $etat }}</option>
                                                @endforeach
                                            </select>
                                        </div>
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
                <!-- port message -->
                <div class="alert alert-primary" role="alert">
                    vous pouver ajouter les ports et leur address ici
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                ajouter un <strong> port</strong>
                            </div>
                            <div class="card-body card-block">
                                <form id="createForm" action="{{ route('PortController.store') }}" method="POST" class="form-horizontal">
                                    @csrf
                                    <!-- port -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="port" class=" form-control-label">port / adapteur</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="port" maxlength="255" name="port" placeholder="port / adapteur" class="form-control">
                                            <small class="form-text text-muted">Ethernet / Wi-Fi</small>
                                        </div>
                                    </div>

                                    <!-- mac -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="mac" class=" form-control-label">address mac</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="mac" maxlength="255" name="mac_address" placeholder="xx:xx:xx:xx:xx:xx" class="form-control">
                                            <small class="form-text text-muted">A4:4C:C8:17:E2:54</small>
                                        </div>
                                    </div>

                                    <!-- ip -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="ip" class=" form-control-label">address ip</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="ipv4" maxlength="255" name="ip_address" placeholder="__.__.__.__" class="form-control">
                                            <small class="form-text text-muted">192.168.1.45</small>
                                        </div>
                                    </div>

                                    <!-- mask -->
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="port" class=" form-control-label">maskque d'address ip</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="ipv4" maxlength="255" name="masque_reseau" placeholder="__.__.__.__" class="form-control">
                                            <small class="form-text text-muted">255.255.255.0</small>
                                        </div>
                                    </div>

                                    <input type="number" hidden name="material" value="{{ $materiel[0]->id }}"/>

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
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">tableau des ports</h3>
                        <div class="table-responsive table-responsive-data2">
                            <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th>port</th>
                                        <th>mac address</th>
                                        <th>ip address</th>
                                        <th>masque reseaux</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($ports as $port)
                                        <tr class="tr-shadow">
                                            <td>{{ $port->port }}</td>
                                            <td>
                                                <span class="block-email">{{ $port->mac_address }}</span>
                                            </td>
                                            <td class="desc">{{ $port->ip_address }}</td>
                                            <td>{{ $port->masque_reseau }}</td>
                                            <td>
                                                <div class="table-data-feature">
                                                    <form action="{{ route('port.drop', ['portID' => $port->id]) }}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="material" value="{{ $materiel[0]->id }}">
                                                        <button type="submit" class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                            <i class="zmdi zmdi-delete"></i>
                                                        </button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    <tr class="spacer"></tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- END DATA TABLE -->
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
<script>
    var ipv4_address = $('#ipv4');
ipv4_address.inputmask({
    alias: "ip",
    greedy: false //The initial mask shown will be "" instead of "-____".
});
</script>



@endsection
