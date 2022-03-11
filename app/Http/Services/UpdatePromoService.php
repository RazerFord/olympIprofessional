<?php

namespace App\Http\Services;

use App\FormRequests\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Promotion;
use App\DTO\UpdatePromotion;

class UpdatePromoService
{
    /**
     * Обнвить запись в таблице промоакции
     * @param Illuminate\Http\Request  $request
     * 
     * @return JSON возращает свойства обновленной промоакции
     */
    public function __invoke(&$request)
    {
        try {
            $data = Controller::validated($request, UpdateRequest::rules());
            $result = Promotion::whereId($request->id)->update($data);
            return response()->json(UpdatePromotion::getAnswer($result), 200);
        } catch (\Exception $e) {
            return response()->json('Error update', 422);
        }
    }
}
