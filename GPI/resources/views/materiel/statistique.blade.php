@extends('layout')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                @include('materiel.back')
                <div class="row">
                    <div class="col-lg-10">
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40">l'acquisition annual de materiel</h3>
                                <canvas id="AAM"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10" style="margin-left: auto;">
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40">nombre de materiel par type</h3>
                                <canvas id="NMT"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10">
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40">materiel par division</h3>
                                <canvas id="MPD"></canvas>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-10" style="margin-left: auto;">
                        <div class="au-card m-b-30">
                            <div class="au-card-inner">
                                <h3 class="title-2 m-b-40">nombre de materiel par état</h3>
                                <canvas id="NME"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('bottomScripts')
    <script>
        (function($) {
            // USE STRICT
            "use strict";

            try {
                //Sales chart
                var ctx = document.getElementById("AAM");
                if (ctx) {
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'line',
                        data: {
                            labels: [
                                @foreach ($years as $year)
                                    {{ $year }},
                                @endforeach
                            ],
                            type: 'line',
                            defaultFontFamily: 'Poppins',
                            @php
                                $colors = ['rgba(255,0,0,0.6)', 'rgba(0,255,0,0.6)', 'rgba(0,0,255,0.6)', 'rgba(255,255,0,0.6)', 'rgba(0,255,255,0.6)'];
                                $colorsCount = count($colors);
                                $index = 0;
                            @endphp
                            datasets: [
                                @foreach ($data as $type => $yearCounts)
                                    {
                                        @php
                                            ++$index;
                                            if ($index >= $colorsCount) {
                                                $index = 0;
                                            }
                                        @endphp
                                        label: '{{ $type }}',
                                            data: [
                                                @foreach ($yearCounts as $year => $count)
                                                    {{ $count }},
                                                @endforeach
                                            ],
                                            backgroundColor: 'transparent',
                                            borderColor: '{{ $colors[$index] }}',
                                            borderWidth: 3,
                                            pointStyle: 'circle',
                                            pointRadius: 5,
                                            pointBorderColor: 'transparent',
                                            pointBackgroundColor: '{{ $colors[$index] }}',
                                    },
                                @endforeach
                            ]
                        },
                        options: {
                            responsive: true,
                            tooltips: {
                                mode: 'index',
                                titleFontSize: 12,
                                titleFontColor: '#000',
                                bodyFontColor: '#000',
                                backgroundColor: '#fff',
                                titleFontFamily: 'Poppins',
                                bodyFontFamily: 'Poppins',
                                cornerRadius: 3,
                                intersect: false,
                            },
                            legend: {
                                display: true,
                                position: 'bottom',
                                labels: {
                                    usePointStyle: true,
                                    fontFamily: 'Poppins',
                                },
                            },
                            scales: {
                                xAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    scaleLabel: {
                                        display: false,
                                        labelString: 'Month'
                                    },
                                    ticks: {
                                        fontFamily: "Poppins"
                                    }
                                }],
                                yAxes: [{
                                    display: true,
                                    gridLines: {
                                        display: false,
                                        drawBorder: false
                                    },
                                    scaleLabel: {
                                        display: true,
                                        labelString: 'Value',
                                        fontFamily: "Poppins"

                                    },
                                    ticks: {
                                        fontFamily: "Poppins"
                                    }
                                }]
                            },
                            title: {
                                display: false,
                                text: 'Normal Legend'
                            }
                        }
                    });
                }
            } catch (error) {
                console.log(error);
            }

            try {
                //bar chart
                var ctx = document.getElementById("MPD");
                if (ctx) {
                    ctx.height = 200;
                    var myChart = new Chart(ctx, {
                        type: 'bar',
                        defaultFontFamily: 'Poppins',
                        data: {
                            labels: [
                                @foreach ($division as $div)
                                    "{{ $div }}",
                                @endforeach
                            ],
                            datasets: [
                                @php
                                    $colors = ['rgba(255,0,0,0.6)', 'rgba(0,255,0,0.6)', 'rgba(0,0,255,0.6)', 'rgba(255,255,0,0.6)', 'rgba(0,255,255,0.6)'];
                                    $colorsCount = count($colors);
                                    $index = 0;
                                @endphp
                                @foreach ($data1 as $type => $divisionCounts)
                                    {
                                        @php
                                            ++$index;
                                            if ($index >= $colorsCount) {
                                                $index = 0;
                                            }
                                        @endphp
                                        label: "{{ $type }}",
                                            data: [
                                                @foreach ($divisionCounts as $divitsion => $count)
                                                    {{ $count }},
                                                @endforeach
                                            ],
                                            borderColor: "#88888888",
                                            borderWidth: "0",
                                            backgroundColor: "{{ $colors[$index] }}",
                                            fontFamily: "Poppins"
                                    },
                                @endforeach
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            scales: {
                                xAxes: [{
                                    ticks: {
                                        fontFamily: "Poppins"

                                    }
                                }],
                                yAxes: [{
                                    ticks: {
                                        beginAtZero: true,
                                        fontFamily: "Poppins"
                                    }
                                }]
                            }
                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }

            try {

                //doughut chart
                var ctx = document.getElementById("NMT");
                if (ctx) {
                    ctx.height = 150;
                    var myChart = new Chart(ctx, {
                        type: 'doughnut',
                        data: {
                            datasets: [{
                                @php
                                    $colors = ['rgba(255,0,0,0.6)', 'rgba(0,255,0,0.6)', 'rgba(0,0,255,0.6)', 'rgba(255,255,0,0.6)', 'rgba(0,255,255,0.6)'];
                                    $colorsCount = count($colors);
                                    $index = 0;
                                @endphp
                                data: [
                                    @foreach ($data2 as $type => $count)
                                        "{{ $count }}",
                                    @endforeach
                                ],
                                backgroundColor: [
                                    @foreach ($colors as $color)
                                        "{{ $color }}",
                                    @endforeach
                                ],
                                hoverBackgroundColor: [
                                    @foreach ($colors as $color)
                                        "{{ $color }}",
                                    @endforeach
                                ]

                            }],
                            labels: [
                                @foreach ($data2 as $type => $count)
                                    "{{ $type }}",
                                @endforeach
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                        }
                    });
                }


            } catch (error) {
                console.log(error);
            }

            try {

                // polar chart
                var ctx = document.getElementById("NME");
                if (ctx) {
                    ctx.height = 200;
                    var myChart = new Chart(ctx, {
                        type: 'polarArea',
                        data: {
                            datasets: [{
                                @php
                                    $colors = ['rgba(255,0,0,0.6)', 'rgba(0,255,0,0.6)', 'rgba(0,0,255,0.6)', 'rgba(255,255,0,0.6)', 'rgba(0,255,255,0.6)'];
                                    $colorsCount = count($colors);
                                    $index = 0;
                                @endphp
                                data: [
                                    @foreach ($data3 as $etat => $count)
                                        "{{ $count }}",
                                    @endforeach
                                ],
                                backgroundColor: [
                                    @foreach ($colors as $color)
                                        "{{ $color }}",
                                    @endforeach
                                ]

                            }],
                            labels: [
                                @foreach ($data3 as $etat => $count)
                                    "{{ $etat }}",
                                @endforeach
                            ]
                        },
                        options: {
                            legend: {
                                position: 'top',
                                labels: {
                                    fontFamily: 'Poppins'
                                }

                            },
                            responsive: true
                        }
                    });
                }

            } catch (error) {
                console.log(error);
            }

        })(jQuery);
    </script>
@endsection
