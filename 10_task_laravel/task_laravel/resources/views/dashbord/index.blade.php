
  @section('style')
  @vite('resources/css/dashbord.css')
  @endsection
  @include('layouts.head')


   @section('logout')
    <button type="submit" class="btn btn-danger">logout</button>
    @endsection


    @section('check')
        <a class="navbar-brand d-flex align-items-center" href="/">
            <strong>Tasks</strong>
        </a>
    @endsection
    @include('layouts.app')

    <div class="container mt-4">
        <h2 class="mb-4 fw-bold">Manage Products</h2>
        <div class="d-flex justify-content-end mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Product</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Actions</th>
                    
                </tr>
            </thead>
            <tbody>
                
                
                @foreach ($data as $product)
                    <tr>
                        <td>{{ $count++ }}</td>
                        <td>{{ $product->productname }}</td>
                        <td>{{ $product->category }}</td>
                        <td>${{ $product->price }}</td>
                        <td>{{ $product->description }}</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-success btn-sm">View</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Update</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    @include('layouts.footer')
