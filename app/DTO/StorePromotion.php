<?php

namespace App\DTO;

class StorePromotion
{
    /**
     * Создает запись в таблице промоакции
     * @param Illuminate\Http\Request  $request
     * 
     * @return JSON возращает id созданной промоакции
     */
    public static function getAnswer($data)
    {
        return $data['id'];
    }
}
