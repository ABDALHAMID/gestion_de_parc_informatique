
@foreach ($materiels as $materiel)
    <tr>
        <td>
            <div class="row">
                <img class="imagg" src="{{ url('imgs/') }}/{{ $materiel->materielType->type }}.png"
                alt="{{ $materiel->materielType->type }}">
            </div>
            <div class="row">
                <span>
                    {{ $materiel->materielType->type }}
                </span>
            </div>
        </td>
        <td>{{ $materiel->materielMarque->marque }}</td>
        <td>{{ $materiel->materielModele }}</td>
        <td>{{ $materiel->materielAffectation->division }}</td>
        <td>
            <a href="{{ route('Materiel.show', $materiel) }}">
                <button class="btn btn-outline-primary">voir</button>
            </a>
        </td>
        <td>
            <a href="{{ route('Materiel.edit', $materiel->id) }}">
                <button class="btn btn-warning">modiffier</button>
            </a>
        </td>
        <td>
            <a href="{{ route('materiel.drop', $materiel->id) }}">
                <button class="btn btn-danger">sup</button>
            </a>
        </td>
    </tr>
@endforeach





