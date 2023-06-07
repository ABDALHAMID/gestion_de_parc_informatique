@extends('layout')
@section('headScripts')
    <style>
        .imagg{
        object-fit: cover;
            width: 100px;
            height: auto;
        }
    </style>
@endsection
@section('content')
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    <a href="{{ route('Materiel.create') }}">
                                    <button class="au-btn au-btn-icon au-btn--blue" >
                                        <i class="zmdi zmdi-plus"></i>cree un materiel</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex m-t-25 justify-content-evenly">
                            @php
                                $counter = 1;
                            @endphp
                            @foreach($matTypes as $mt)
                                <div class="col-sm-12 col-lg-4">
                                <div class="overview-item overview-item--c{{ $counter }}">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon ">
                                                    <div class="imageos">
                                                        <img class="img-radius img-70" src="{{ url('imgs/') }}/{{ $mt }}.png" alt="">
                                                    </div>
                                            </div>
                                            <div class="text">
                                                <h2>{{ $nomMateriels[$mt] }}</h2>
                                                <span>{{ $mt }}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                @php
                                    $counter++;
                                    if ($counter > 4) {
                                        $counter = 1;
                                    }
                                @endphp
                            @endforeach
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
                                                <th>Modèle</th>
                                                <th>division</th>
                                                <th class="text-right"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($materiels as $materiel)
                                            <tr>

                                                        <td><img class="imagg" src="{{ url('imgs/') }}/{{ $materiel->materielType->type }}.png" alt=""></td>
                                                        <td>{{ $materiel->materielMarque->marque }}</td>
                                                        <td>{{ $materiel->materielModèle->Modèle }}</td>
                                                        <td>{{ $materiel->materielAffectation->division }}</td>
                                                        <td class="text-right"><a href="{{ route('Materiel.show',$materiel) }}">
                                                            <button class="btn btn-outline-primary"><i class="fa fa-eye" style="transform: scale(1.3)"></i></button>
                                                            </a>
                                                            <a href="{{ route('Materiel.edit',$materiel->id) }}">
                                                                <button class="btn btn-warning"><i class="fa fa-edit" style="transform: scale(1.3)"></i></button>
                                                            </a>
                                                            <a href="{{ route('materiel.drop',$materiel->id) }}">
                                                            <button class="btn btn-danger"><i class="fa fa-trash-o" style="transform: scale(1.3)"></i></button>
                                                            </a>
                                                        </td>

                                                    </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                {{ $materiels->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



@endsection
