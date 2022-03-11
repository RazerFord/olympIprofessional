<?php

namespace App\DTO;

use App\Models\Promotion;

class UpdatePromotion
{
    /**
     * Создает запись в таблице промоакции
     * @param array $data
     * 
     * @return JSON возращает id созданной промоакции
     */
    public static function getAnswer($data)
    {
        $object = Promotion::find($data);
        $result = [
         'name' => $object['name'],   
         'description' => $object['description'],   
        ];
        return $result;
    }
}
