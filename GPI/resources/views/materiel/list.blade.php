
@foreach ($materiels as $materiel)
    <tr>
        <td>
            <img src="{{ url('imgs/') }}/{{ $materiel->materielType->type }}.png"
                alt="{{ $materiel->materielType->type }}">
        </td>
        <td>{{ $materiel->materielType->type }}</td>
        <td>{{ $materiel->materielMarque->marque }}</td>
        <td class="text-right">{{ $materiel->materielAffectation->division }}</td>
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

