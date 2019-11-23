<?php
    
    namespace App\Http\Controllers;
    
    use App\Order;
    
    class OrderController extends Controller {
        
        public function index() {
            $clients = Order::with([
                'client',
                'articles'
            ])->get();
            return response()->json($clients);
        }
        
    }
