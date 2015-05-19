<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Product;
use App\Http\Requests\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$orders = Auth::user()->orders()->get();

//        dd($orders);

        return view('orders.index', compact('orders'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @param OrderRequest $request
     * @return Response
     * @internal param Product $product
     */
	public function create(OrderRequest $request)
	{
        $user = Auth::user();
        $product = Product::find($request->get('id'));

        return view('orders.create', compact('user', 'product'));
	}

    /**
     * Store a newly created resource in storage.
     *
     * @param OrderRequest $request
     * @return Response
     */
	public function store(OrderRequest $request)
	{
        $product = Product::find($request->get('product_id'));

        $order = new Order([
            'status_id' => 1,
            'price' => $product['price']
        ]);


        if($request->get('address')) {
            $order['address'] = $request->get('address');
        } else {
            $order['address'] = Auth::user()->address;
        }

//        dd($order);

        $product->order()->save($order);
        Auth::user()->orders()->save($order);

        $orders = Auth::user()->orders()->get();

//        dd($orders);

        return redirect('/orders/');

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return back();
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        return back();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        return back();
	}

}
