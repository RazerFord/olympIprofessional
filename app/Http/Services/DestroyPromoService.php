<?php

namespace App\Http\Services;

use App\Models\Promotion;

class DestroyPromoService
{
    /**
     * Создает запись в таблице промоакции
     * @param Illuminate\Http\Request  $request
     * 
     * @return JSON возвращает массив всех промоакций
     */
    public function __invoke(&$request)
    {
        try {
            $promotions = Promotion::find($request->id)->delete();
            return response()->json();
        } catch (\Exception $e) {
            return response()->json('Not found', 404);
        }
    }
}
