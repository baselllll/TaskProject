<?php
namespace Modules\Widegts\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Widegts\Entities\Customer;
use Modules\Widegts\Entities\Shops;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        $customer = Customer::with('shops')->paginate(10);;
        return view('widegts::customers.index',compact('customer'));
    }
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        $shop = Shops::all();
        return view('widegts::customers.create',compact('shop'));
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'id' =>'required',
        ]);
        
        $row = Customer::create([
            'firstname'=>$request->input('firstname'),
            'lastname'=>$request->input('lastname'),
            'email'=> $request->input('email'),
            'phone'=>$request->input('phone'),
            'shop_id'=>$request->input('id')
        ]);
        return redirect()->route('customer.index')->with('success');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        $row = Customer::where('id',$id)->with('shops')->first();
        return view('widegts::customers.edit',compact('row'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'shope_name' => 'required',
            'shope_email' => 'required',
            'shope_logo'=> 'required'
        ]);
        
        $row = Customer::where('id',$id)->with('shops')->first();
        
        $row->firstname = $request->input('firstname');
        $row->lastname = $request->input('lastname');
        $row->email = $request->input('email');
        $row->phone = $request->input('phone');
        $row->shops->name = $request->input('shope_name');
        $row->shops->email = $request->input('shope_email');
        $row->shops->logo = $request->input('shope_logo');
        $row->save();

        return redirect()->route('customer.index')->with('message');
       
    }
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        $row = Customer::where('id',$id)->with('shops')->first();
        $row->shops->delete();
        return redirect()->route('customer.index')->with('message');
    }
}
