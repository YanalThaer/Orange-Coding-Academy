

  @section('style')
  @vite('resources/css/welcome.css')
  @endsection
  @include('layouts.head')

  
  

    
    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">View Product</h2>
        <div class="card p-4">
            <h4>Product Name: <span id="product-name">{{ $product->name }}</span></h4>
            <p><strong>Category:</strong> <span id="product-category">{{ $product->category }}</span></p>
            <p><strong>Price:</strong> <span id="product-price">${{ $product->price }}</span></p>
            <p><strong>Description:</strong> <span id="product-description">{{ $product->description }}</span></p>
            <a href="{{ route('products.index') }}" class="btn btn-secondary">Back to Dashboard</a>
        </div>
    </div>
    @include('layouts.footer')