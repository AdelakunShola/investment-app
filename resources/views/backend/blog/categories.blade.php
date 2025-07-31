@extends('admin.admin_dashboard')
@section('admin')

<h2 class="mb-4">Blog Categories</h2>

<!-- Add Category Button -->
<button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#categoryModal" onclick="openCategoryModal()">Add Category</button>

<table class="table">
    <thead>
        <tr><th>Name</th><th>Actions</th></tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
        <tr>
            <td>{{ $category->name }}</td>
            <td>
                <button class="btn btn-sm btn-warning" onclick="openCategoryModal({{ $category }})">Edit</button>
                <form action="{{ route('blog.categories.destroy', $category->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button class="btn btn-sm btn-danger" onclick="return confirm('Delete?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal -->
<div class="modal fade" id="categoryModal" tabindex="-1">
  <div class="modal-dialog">
    <form class="modal-content" method="POST" id="categoryForm">
      @csrf
      <div class="modal-header"><h5 class="modal-title">Category</h5></div>
      <div class="modal-body">
        <input type="text" class="form-control" name="name" id="categoryName" required>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
      </div>
    </form>
  </div>
</div>

<script>
function openCategoryModal(category = null) {
    const modal = new bootstrap.Modal(document.getElementById('categoryModal'));
    document.getElementById('categoryForm').action = category 
        ? `/admin/blog-categories/update/${category.id}`
        : `{{ route('blog.categories.store') }}`;
    document.getElementById('categoryName').value = category?.name || '';
    modal.show();
}
</script>

@endsection
