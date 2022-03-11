<?php

namespace App\Http\Services;

use App\DTO\GetPromotion;
use App\Models\Promotion;

class IndexPromoService
{
    public function __invoke(&$request)
    {
        try {
            $promotions = Promotion::all();
            $result = GetPromotion::getAnswer($promotions);
            return response()->json($result, 200);

        } catch (\Exception $e) {
            return response()->json('Not found', 404);
        }
    }
}
