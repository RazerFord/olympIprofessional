<?php

namespace App\Http\Services;

use App\DTO\GetPromotion;
use App\Models\Promotion;

class ShowPromoService
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
            $promotions = Promotion::with('Prizes', 'Participants')->find($request->id);
            return response()->json($promotions, 200);
            // $result = GetPromotion::getAnswer($promotions);
        } catch (\Exception $e) {
            return response()->json('Not found', 404);
        }
    }
}
