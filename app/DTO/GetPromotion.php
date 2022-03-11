<?php

namespace App\DTO;

class GetPromotion
{
    /**
     * Создает запись в таблице промоакции
     * @param array $data
     * 
     * @return JSON возращает id созданной промоакции
     */
    public static function getAnswer($data)
    {
        $result = [];

        foreach ($data as $value) {
            $object['id'] = $value['id'];
            $object['name'] = $value['name'];
            $object['description'] = $value['description'];
            $result[] = $object;
        }

        return $result;
    }
}
