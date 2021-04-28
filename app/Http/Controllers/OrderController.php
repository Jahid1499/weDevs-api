<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {

       //return "hello";
        $data = Order::where('user_id', $id)->get();
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $myData = json_decode($request->getContent(), true);

        $order = new Order();
        $order->product_id =$myData['product_id'];
        $order->user_id =$myData['user_id'];
        $order->payment_status =$myData['payment_status'];
        $order->order_status =$myData['order_status'];
        $order->total =$myData['total'];
        $order->quantity =$myData['quantity'];

        $result = $order->save();
        if ($result)
        {
            return "Thank you for place order";
        }else{
            return "Some thing wrong";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Order::where('id', $id)->delete();
        if ($result)
        {
            return "Successfully order deleted";
        }else{
            return "Someting worng";
        }
    }
}
