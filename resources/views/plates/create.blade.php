
    <h1>Create Plate</h1>
    <form action="{{ route('plates.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
            <label for="availability">availability</label>
            <input type="text" name="availability" class="form-control" required>
        </div>
        <!-- Add other fields as necessary -->
        <button type="submit" class="btn btn-primary">Add Plate</button>
    </form>

