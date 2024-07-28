
    <h1>Plates</h1>
    <a href="{{ route('plates.create') }}" class="btn btn-primary">Add Plate</a>
    <ul>
        @foreach
        ($plates as $plate)
            <li>
                {{ $plate->name }} - <a href="{{ route('plates.edit', $plate->id) }}">Edit</a></li>
        @endforeach
    </ul>
    @dd($plates)

