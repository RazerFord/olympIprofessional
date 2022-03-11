<?php

namespace App\Http\Controllers\OtherControllers;

use App\Http\Controllers\Controller;
use App\Models\Prize;
use Illuminate\Http\Request;

class DeletePrizeFromPromo extends Controller
{
    public function __invoke(Request  $request, $promoId, $pId)
    {
        try {
            $p = Prize::whereId($pId)->first();
            if ($p['promotion_id'] == $promoId) {
                $p->delete();
            } else {
                throw new \Exception('Error');
            }
            return response()->json();
        } catch (\Exception $e) {
            return response()->json('Not delete', 422);
        }
    }
}
