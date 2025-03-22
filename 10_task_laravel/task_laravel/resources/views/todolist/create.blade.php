

    @section('style')
    @vite('resources/css/create.css')
    @endsection
    @include('layouts.head')
 



    
    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">Add New Category</h2>
        <div class="card p-4">
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label class="form-label">Category Name</label>
                    <input type="text" class="form-control" id="category-name" placeholder="Enter category name" name="name">
                </div>
                <button type="submit" class="btn btn-primary">Add Category</button>
                <a href="/" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>



@include('layouts.footer')