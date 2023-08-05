<?php // CartController.php
namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request, $productId)
    {
        $user = Auth::user();

        $cartItem = Cart::where('user_id', $user->id)
            ->where('product_id', $productId)
            ->first();

        $quantity = $request->input('quantity', 1);

        if ($cartItem) {
            // If the product is already in the cart, update its quantity
            $cartItem->quantity += $quantity;
            $cartItem->save();
        } else {
            // If the product is not in the cart, create a new cart item
            Cart::create([
                'user_id' => $user->id,
                'product_id' => $productId,
                'quantity' => $quantity,
            ]);
        }

        return response()->json(['message' => 'Product added to cart successfully']);
    }
    public function getCartItems()
    {
        $user = Auth::user();

        // Retrieve all cart items for the authenticated user along with the product details
        $cartItems = Cart::where('user_id', $user->id)
            ->with('product') // Load the associated product data
            ->get();

        return response()->json($cartItems);
    }

    // Update
    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);

        // Validate the incoming request
        $this->validate($request, [
            'quantity' => 'required|integer|min:1', // Adjust the validation rules as needed
        ]);

        $cartItem->quantity = $request->input('quantity');
        $cartItem->save();

        return response()->json(['message' => 'Cart item quantity updated successfully']);
    }
    public function DeleteFromCart($productId){
        $user=Auth::user();
        $cartItem = Cart::where('user_id', $user->id)
        ->where('product_id', $productId)
        ->first();

    if ($cartItem) {
        $cartItem->delete(); // Delete the cart item
        return response()->json(['message' => 'Product removed from cart successfully']);
    } else {
        return response()->json(['message' => 'Product not found in cart'], 404);
    }
    }
}
 ?>