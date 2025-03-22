<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/')->withErrors(['error' => 'You must be logged in!']);;
        }

        if (Auth::user()->role === 'user') {
            return redirect('/')->withErrors(['error' => 'You must be an admin!']);;
        }
        //all data
        $count=1;

        $data=product::all();
        return view('dashbord.index',compact('data'),compact('count'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        if (!Auth::check()) {
            return redirect('/')->withErrors(['error' => 'You must be logged in!']);;
        }

        if (Auth::user()->role === 'user') {
            return redirect('/')->withErrors(['error' => 'You must be an admin!']);;
        }
        //مشان يودي على صفحة ال create
        return view('dashbord.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // عشان يخزن بالداتا بيس
    $validatedData = $request->validate([
        'productname' => 'required',
        'price' => 'required|numeric',
        'category' => 'required',
        'description' => 'required',
    ]);

    // تخزين المنتج
    Product::create($validatedData);

    // إعادة التوجيه مع رسالة نجاح
    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        // يظهر البودكت بالفيو

        return view('dashbord.view', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        // بدو ياخد بيانات البرودكت علة صفحة ال edit
        return view('dashbord.updata', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {

        //عشان يعمل تحديت للبروكت جوا الداتا بيس
        $validatedData = $request->validate([
            'productname' => 'required',
            'price' => 'required|numeric',
            'category' => 'required',
            'description' => 'required',

        ]) ;

        // تحديث المنتج
        $product->update($validatedData);
        

        //إعادة التوجيه مع رسالة نجاح
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //عشان يحذف البرودكت 
        $product->delete();

        //إعادة التوجيه مع رسالة نجاح
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
