
 
  @section('style')
  @vite('resources/css/welcome.css')
  @endsection
  @include('layouts.head')
   

    
    
    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">Add Product</h2>
        <div class="card p-4">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                @method('POST')
                <div class="mb-3">
                    <label class="form-label">Product Name</label>
                    <input type="text" class="form-control" id="product-name" placeholder="Enter product name" name="productname">
                </div>
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" class="form-control" id="product-category" placeholder="Enter category"  name="category">
                </div>
                <div class="mb-3">
                    <label class="form-label">Price</label>
                    <input type="number" class="form-control" id="product-price" placeholder="Enter price"  name="price">
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" id="product-description" rows="3" placeholder="Enter product description"  name="description"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Add Product</button>
                <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
            
        </div>
    </div>
    @include('layouts.footer')
