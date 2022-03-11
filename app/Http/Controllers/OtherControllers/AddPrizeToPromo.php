<?php

namespace App\Http\Controllers\OtherControllers;

use App\Http\Controllers\Controller;
use App\Models\Prize;
use Illuminate\Http\Request;

class AddPrizeToPromo extends Controller
{
    public function __invoke(Request  $request, $id)
    {
        try {
            $data = $this->validate($request, ['description' => 'string|required']);
            $data['promotion_id'] = $id;
            $pId = Prize::create($data)->id;
            return response()->json($pId, 200);
        } catch (\Exception $e) {
            return response()->json('Not add', 422);
        }
    }
}
