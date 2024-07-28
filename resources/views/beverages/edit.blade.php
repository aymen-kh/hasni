
    <h1>Edit Beverage</h1>
    <form action="{{ route('beverages.update', $beverage->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $beverage->name }}" required>
        </div>
        <!-- Add other fields as necessary -->
        <button type="submit" class="btn btn-primary">Update Beverage</button>
    </form>

