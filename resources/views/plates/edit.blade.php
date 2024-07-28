
    <h1>Edit Plate</h1>
    <form action="{{ route('plates.update', $plate->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" value="{{ $plate->name }}" required>
        </div>
        <!-- Add other fields as necessary -->
        <button type="submit" class="btn btn-primary">Update Plate</button>
    </form>

