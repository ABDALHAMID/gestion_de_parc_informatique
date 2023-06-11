@foreach ($materiels as $materiel)
    <tr>
        <td>
            <img class="imagg" src="{{ url('imgs/') }}/{{ $materiel->materielType->type }}.png"
                alt="{{ $materiel->materielType->type }}">
        </td>
        <td>{{ $materiel->materielMarque->marque }}</td>
        <td>{{ $materiel->materielModèle->Modèle }}</td>
        <td>{{ $materiel->N_serie }}</td>
        <td>{{ $materiel->N_Inventair }}</td>
        <td>{{ $materiel->materielAffectation->division }}</td>
        <td>{{ $materiel->caractéristiques }}</td>
        <td>{{ $materiel->date_aqusition }}</td>
        <td>{{ $materiel->état }}</td>
        <td>
            <a href="{{ route('Materiel.show', $materiel) }}">
                <button class="btn btn-outline-primary"><i class="fa fa-eye" style="transform: scale(1.2)"></i></button>
            </a>
            <a href="{{ route('Materiel.edit', $materiel->id) }}">
                <button class="btn btn-warning"><i class="fa fa-edit" style="transform: scale(1.2)"></i></button>
            </a>
            <a href="{{ route('materiel.drop', $materiel->id) }}">
                <button class="btn btn-danger"><i class="fa fa-trash-o" style="transform: scale(1.2)"></i></button>
            </a>
        </td>
    </tr>
@endforeach
