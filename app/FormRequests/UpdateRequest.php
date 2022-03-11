<?php

namespace App\FormRequests;

class UpdateRequest
{
    /**
     * @return array возвращает массив для проверки промоакции
     */
    public static function rules()
    {
        return [
            'name' => 'string|required',
            'description' => 'string',
        ];
    }
}
