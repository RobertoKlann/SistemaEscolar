<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Customer;

class CustomerCustomerDemoController extends Controller
{
    protected $customer = null;

    public function __construct(Customer $customer)
    {
        $this->customer = $customer;
    }

    public function todosCustomers()
    {
        return response()->json($this->customer->todosCustomers(), 200)
            ->header('Content-Type', 'application/json');
    }

    public function salvarCustomers(Request $req){
        return response()->json($this->customer->salvarCustomers($req), 201)
        ->header("Content-Type","application/json");
    }

    public function atualizarCustomers(Request $req, $id){
        $customer = $this->customer->atualizarCustomers($req->all(), $id);
        if(!$customer){
            return response()->json(['response','Customer Não encontrado(a)'], 400)
        ->header("Content-Type","application/json");
        } else {
            return response()->json($customer,200)
            ->header("Content-Type","application/json");
        }
    }

    public function getCustomers($id)
    {
        $customer = $this->customer->getCustomers($id);
        if(!$customer){
            return response()->json(['response','Customer Não encontrado(a)'], 400)
            ->header("Content-Type","application/json");
        }else {
            return response()->json($customer,200)
            ->header("Content-Type","application/json");
        }
    }
    
    public function deletarCustomers($id)
    {
        $customer = $this->customer->deletarCustomers($id);
        if(!$customer){
            return response()->json(['response','Customer Não encontrado(a)'], 400)
        ->header("Content-Type","application/json");
        } else {
            return response()->json($customer,200)
            ->header("Content-Type","application/json");
        }
    }
}
