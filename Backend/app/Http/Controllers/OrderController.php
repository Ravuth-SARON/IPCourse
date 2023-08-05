<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Order;

class OrderController extends Controller
{
    public function createOrder(Request $request)
    {
        $user = Auth::user();

        // Retrieve cart items for the authenticated user along with the product details
        $cartItems = Cart::where('user_id', $user->id)
            ->with('product') // Load the associated product data
            ->get();

        // Calculate the total order amount based on cart items
        $totalAmount = $cartItems->sum(function ($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });

        // Create a new order
        $order = new Order();
        $order->user_id = $user->id;
        $order->PhoneNumber=$request->input('PhoneNumber');
        $order->total_amount = $totalAmount;
        $order->Delivery = $request->input('Delivery');
        $order->Payment = $request->input('Payment');
        $order->shipping_province = $request->input('shipping_province');
        $order->shipping_district = $request->input('shipping_district');
        $order->shipping_commune = $request->input('shipping_commune');
        $order->more_detail = $request->input('more_detail');
        $order->save();

        return response()->json(['message' => 'Order created successfully']);
    }
    public function getAllOrders()
{
    $user = Auth::user();

    // Retrieve all orders for the authenticated user
    $orders = Order::where('user_id', $user->id)
        ->orderBy('created_at', 'desc') // Order by creation date in descending order
        ->get();

    return response()->json($orders);
}

    
}
