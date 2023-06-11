@extends('layout')
@section('headScripts')
    <style>
        .monitoring-dev {}

        .singel-materiel {
            box-shadow: 0px 0px 5px #888888,
                3px 3px 10px #888888;
            background-color: #d6d6d6;
            border-radius: 25px;
            display: flex;
            align-items: center;
            justify-content: space-around;

        }

        .router-info {
            position: relative;
            background-color: #dfdfdf;
            padding: 20px;
            border: 3px solid #888888;
            border-radius: 25px;
        }

        .router-info .cercle {
            position: absolute;
            top: 50%;
            right: -4%;
            z-index: 5;
            width: 20px;
            height: 20px;
            border: 3px solid #888888;
            border-radius: 50%;
            background-color: rgb(233, 231, 231);
        }

        .port-info {
            position: relative;
            background-color: #dfdfdf;
            padding: 20px;
            border: 3px solid #888888;
            border-radius: 25px;
        }

        .port-info .cercle {
            position: absolute;
            top: 50%;
            left: -4%;
            z-index: 5;
            width: 20px;
            height: 20px;
            border: 3px solid #888888;
            border-radius: 50%;
            background-color: rgb(233, 231, 231);
        }

        .spaser {
            width: 100%;
            height: 25px;
        }

        .materiel_logo {
            position: relative;
        }

        .imagg {
            object-fit: cover;
            width: 100px;
            height: auto;
        }

        .materiel-statuse {
            position: absolute;
            bottom: 0;
            right: 0;
            z-index: 5;
            width: 20px;
            height: 20px;
            border: 3px solid rgb(255, 255, 255);
            border-radius: 50%;
            background-color: rgb(255, 255, 0);
        }

        .line-svg {
            position: absolute;
            width: 100%;
            height: 100%;
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
                    <div class="col-md-12">
                        <!-- DATA TABLE -->
                        <h3 class="title-5 m-b-35">tableau des ports</h3>
                        <div>
                            <div class="monitoring-dev col-md-12">
                                @foreach ($materiels as $m)
                                    <div class="row singel-materiel p-5" id="router" name="router">
                                        <svg id="line-svg" class="line-svg"></svg>
                                        <div class="materiel_logo" id="materiel_logo">
                                            <img class="imagg" src="{{ url('imgs/') }}/{{ $m->materielType->type }}.png"
                                                alt="">
                                            <div class="materiel-statuse"></div>
                                        </div>
                                        <div class="router-info">
                                            <div class="cercle"></div>
                                            <div >marque: {{ $m->materielMarque->marque }}
                                                <br> modèle: {{ $m->materielModèle->Modèle }}
                                            </div>
                                            <div>
                                                <span class="block-email">{{ $m->materielAffectation->division }}</span>
                                            </div>
                                        </div>
                                        <div id="ports" class="m-l-50">
                                            @foreach ($m->ports as $port)
                                                <div class="port port-info">
                                                    <div class="cercle"></div>
                                                    <div id="port_stats">{{ $port->port }} est <span id="s">status</span>
                                                    </div>
                                                    <div>mac: {{ $port->mac_address }}</div>
                                                    <div class="desc">ip: <span id="ip">{{ $port->ip_address }}</span></div>
                                                    <div>masque: {{ $port->masque_reseau }}</div>
                                                </div>
                                                <tr class="spacer"></tr>
                                                <br>
                                                <div id="line"></div>
                                            @endforeach
                                        </div>
                                        <tr class="spacer"></tr>
                                    </div>
                                    <div class="spaser"><br></div>
                                @endforeach
                            </div>
                        </div>
                        {{ $materiels->links() }}
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

            function checkPings() {
                routers = document.getElementsByName("router");
                for (let i = 0; i < router.length; i++) {
                    const element = router[i];
                    ports = element.getElementsByClassName('port');
                    var status = false;
                    for (let portID = 0; portID < ports.length; portID++) {
                        const port = ports[portID];
                        const cercle = $(port).find('div.cercle');
                        const ip = $(port).find('span#ip')[0].textContent;
                        var span = $(port).find('span#s');
                        console.log(ip, '____>', span);
                        span.html('en cour de connection...');
                        $.ajax({
                            type: 'GET',
                            url: "{{ route('/checkPing') }}",
                            data: {
                                'host': ip
                            },
                            success: function(response) {
                                var span = $(port).find('span#s');
                                var materielStatuse = element.getElementsByClassName(
                                    'materiel-statuse')[0];
                                if (response.status) {
                                    status = true;
                                    materielStatuse.style.backgroundColor = '#00ff00';
                                    cercle.css('background-color', '#00ff00');
                                    span.html('connecter');
                                } else {
                                    if (!status) {
                                        materielStatuse.style.backgroundColor = '#ff0000';
                                    }
                                    cercle.css('background-color', '#ff0000');
                                    span.html('n\'est pas connecter');
                                }
                            },
                            error: function(xhr, status, error) {
                                var span = $(port).find('span#s');
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
