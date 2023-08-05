<?php 
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ProductController extends Controller
{
    // ... Other methods ...

    // Create a new product with image upload
    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'title' => 'required|string|max:255',
                'slug' => 'required|string|unique:products,slug',
                'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'size' => 'required|string|max:50',
                'color' => 'required|string|max:50',
                'description' => 'required|string',
                'price' => 'required|numeric|min:0',
                'category_id' => 'nullable|exists:categories,id',
            ]);

            if ($validator->fails()) {
                return response()->json(['errors' => $validator->errors()], 400);
            }

            $productData = $request->all();

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imagePath = $image->store('products', 'public');
                $productData['image_path'] = $imagePath;
            }

            $product = Product::create($productData);

            return response()->json(['product' => $product]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error occurred: ' . $e->getMessage()]);
        }
    }
    public function index()
    {
        try {
            $products = Product::all();
            return response()->json(['products' => $products]);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error occurred: ' . $e->getMessage()]);
        }
    }

    // ... Other methods ...
}
 ?>