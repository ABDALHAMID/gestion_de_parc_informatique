@extends('layout')
@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('materiel.back')
                <div class="row">
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">tableau des ports</h3>
                        <div class="table-responsive table-responsive-data2">
                            <div>
                                @foreach ($materiels as $m)
                                    <div class="row" id="router" name="router">
                                        <div class="router-info">
                                            <div id="logo">routeur is </div>
                                            <div class="">marque: {{ $m->materielMarque->marque }}
                                                <br> modèle:{{ $m->materielModèle->Modèle }}
                                            </div>
                                            <div>
                                                <span class="block-email">{{ $m->materielAffectation->division }}</span>
                                            </div>
                                        </div>
                                        <div id="ports" class="text-right">
                                            @foreach ($m->ports as $port)
                                                <div class="port">
                                                    <div id="port_stats">{{ $port->port }} est <span
                                                            style="color:yellow;">status</span>
                                                    </div>
                                                    <div>{{ $port->mac_address }}</div>
                                                    <div class="desc" id="ip">{{ $port->ip_address }}</div>
                                                    <div>{{ $port->masque_reseau }}</div>
                                                </div>
                                                <tr class="spacer"></tr>
                                                <br>
                                            @endforeach
                                        </div>
                                        <tr class="spacer"></tr>
                                        <br><br>
                                    </div>
                                @endforeach
                            </div>
                            {{-- <table class="table table-data2">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="td-style">marque et modèle</th>
                                        <th class="td-style">division</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($materiels as $m)
                                        <div id="router">
                                            <tr class="tr-shadow" style="background-color: rgb(150, 197, 102)">
                                                <td>
                                                    <div id="logo">routeur is </div>
                                                </td>
                                                <td>marque: {{ $m->materielMarque->marque }}
                                                    <br> modèle:{{ $m->materielModèle->Modèle }}
                                                </td>
                                                <td>
                                                    <span class="block-email">{{ $m->materielAffectation->division }}</span>
                                                </td>
                                            </tr>
                                            <div>
                                                <th>port status</th>
                                                <th class="td-style">mac address</th>
                                                <th class="td-style">ip address</th>
                                                <th class="td-style">masque reseaux</th>
                                                @foreach ($m->ports as $port)
                                                    <tr>
                                                        <td id="port">{{ $port->port }} est <span
                                                                style="color:yellow;">status</span>
                                                        </td>
                                                        <td>{{ $port->mac_address }}</td>
                                                        <td class="desc">{{ $m->ip_address }}</td>
                                                        <td>{{ $m->masque_reseau }}</td>
                                                    </tr>
                                                @endforeach
                                            </div>
                                            <tr class="spacer"></tr>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table> --}}
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
            var timer = setInterval(checkPings, 15000);
            checkPings();
            routers = document.getElementsByName("router");

            function checkPings() {
                for (let i = 0; i < router.length; i++) {
                    const element = router[i];
                    ports = element.getElementsByClassName('port');
                    for (let portID = 0; portID < ports.length; portID++) {
                        const port = ports[portID];
                        const ip = port.getElementsByClassName('desc')[0].textContent;
                        var span = $(port).find('span');
                        span.css('color', 'yellow');
                                    span.html('connecting ...');
                        $.ajax({
                            type: 'GET',
                            url: "{{ route('/checkPing') }}",
                            data: {
                                'host': ip
                            },
                            success: function(response) {
                                var span = $(port).find('span');
                                if (response.status) {
                                    span.css('color', 'green');
                                    span.html('connected');
                                } else {
                                    span.css('color', 'red');
                                    span.html('disconnected');
                                }
                            },
                            error: function(xhr, status, error) {
                                var span = $(port).find('span');
                                span.css('color', 'RED');
                                    span.html('CONNECTION ERROR:' + error.code);
                                console.log(error);
                                // Handle error response
                            }
                        })


                    }
                }
            }
        });
    </script>
@endsection
