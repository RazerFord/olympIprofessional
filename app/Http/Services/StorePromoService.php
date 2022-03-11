<?php

namespace App\Http\Services;

use App\FormRequests\StoreRequest;
use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\DTO\StorePromotion;

class StorePromoService
{
    /**
     * Создает запись в таблице промоакции
     * @var Illuminate\Http\Request  $request
     * 
     * @return JSON
     */
    public function __invoke(&$request)
    {
        try {
            $data = Controller::validated($request, StoreRequest::rules());
            $result = Promotion::create($data);
            return response()->json(StorePromotion::getAnswer($result), 201);
        } catch (\Exception $e) {
            return response()->json('Error create', 422);
        }
    }
}
