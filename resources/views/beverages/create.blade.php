
    <h1>Create Beverage</h1>
    <form action="{{ route('beverages.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <!-- Add other fields as necessary -->
        <button type="submit" class="btn btn-primary">Add Beverage</button>
    </form>

