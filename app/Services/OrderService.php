<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;

class OrderService
{
    private string $model = Order::class;

    /**
     * @return Order[]
     */
    public function list()
    {
        return Order::paginate();
    }
}