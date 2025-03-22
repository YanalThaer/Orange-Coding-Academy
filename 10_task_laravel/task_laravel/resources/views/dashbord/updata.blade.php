

@section('style')
  @vite('resources/css/welcome.css')
  @endsection
  @include('layouts.head')
  

    
    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">Update Product</h2>
        <div class="card p-4">
            <form method="POST" action="{{ route('products.update', $product->id) }}">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" name="productname" value="{{ $product->productname }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" class="form-control" name="category" value="{{ $product->category }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" name="price" value="{{ $product->price }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" name="description" rows="3">{{ $product->description }}</textarea>
                </div>
                <button type="submit" class="btn btn-primary">Update Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
    @include('layouts.footer')
