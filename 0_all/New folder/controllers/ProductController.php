<?php

require_once 'controllers/Controller.php';

class ProductController extends Controller{
    public function index(){
        $product = $this->model('Product');
        $products = $product->all();
        $this->render('admin/product/index', ['products' => $products , 'title' => 'All Product']);
    }

    public function create(){
        $this->render('admin/product/create', ['title' => 'Create Product']);
    }

    public function store(){
        $name = $_POST['name'] ?? null;
        $price = $_POST['price'] ?? null;
        $description = $_POST['description'] ?? null;
        $image = $_POST['img_url'] ?? null;

        $errors = $this->validate([
            'name' => 'required|alphanumeric|min:3',
            'price' => 'required|numeric',
            'description' => 'required',
            'img_url' => 'required'
        ]);
        if (!empty($errors)) {
            dd($errors);
        }
        $product = $this->model('product');
        $product->create([
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'img_url' => $image
        ]);
        $this->redirect('/products');
    }

    public function edit($id)
    {
        $product = $this->model('product');
        $product = $product->find($id);
    //    dd($product);
        $this->render('admin.product.edit', ['title' => 'Edit Product', 'product' => $product]);
    }

    public function update($id)
    {
        $name = $_POST['name'] ?? null;
        $price = $_POST['price'] ?? null;
        $description = $_POST['description'] ?? null;
        $image = $_POST['img_url'] ?? null;

        $errors = $this->validate([
            'name' => 'required|min:3',
            'price' => 'required|numeric',
            'description' => 'required',
            'img_url' => 'required'
        ]);

        if (!empty($errors)) {
            dd($errors);
        }
        $product = $this->model('product');
        $product->update($id,[
            'name' => $name,
            'price' => $price,
            'description' => $description,
            'img_url' => $image
        ]);
        $this->redirect('/products');
    }

    public function destroy($id)
    {
        $product = $this->model('product');
        $product->delete($id);
        $this->redirect('/products');
    }

    public function show($id)
    {
        $product = $this->model('product');
        $product = $product->find($id);
        $this->render('admin.product.show', ['product' => $product , 'title' => 'Product Details']);
    }
}

?>