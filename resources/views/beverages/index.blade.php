
    <h1>Beverages</h1>
    <a href="{{ route('beverages.create') }}" class="btn btn-primary">Add Beverage</a>
    <ul>
        @foreach($beverages as $beverage)
            <li>{{ $beverage->name }} - <a href="{{ route('beverages.edit', $beverage->id) }}">Edit</a></li>
        @endforeach
    </ul>

