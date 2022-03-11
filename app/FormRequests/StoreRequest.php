<?php

namespace App\FormRequests;

class StoreRequest
{
    public static function rules()
    {
        return [
            'name' => 'string|required',
            'description' => 'string',
        ];
    } 
}