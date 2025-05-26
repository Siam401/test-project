<form action="{{ $action }}" method="POST" class="card p-4 shadow-sm">
    @csrf
    @if($method === 'PUT') @method('PUT') @endif

    <div class="mb-3">
        <label for="name" class="form-label">Service Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $service->name ?? '') }}"
            required>
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Category</label>
        <input type="text" name="category" id="category" class="form-control"
            value="{{ old('category', $service->category ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="price" class="form-label">Price (৳)</label>
        <input type="number" name="price" id="price" class="form-control"
            value="{{ old('price', $service->price ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4"
            placeholder="Enter service description...">{{ old('description', $service->description ?? '') }}</textarea>
    </div>

    <div class="d-flex justify-content-center"> {{-- Or justify-content-end to push them to the right --}}
        <button type="submit" class="btn btn-primary">Save</button>
        <a href="{{ route('admin.services.index') }}" class="btn btn-secondary ms-2">Cancel</a>
        </div>
</form>