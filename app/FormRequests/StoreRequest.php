<?php

class StoreRequest
{
    public static function rule()
    {
        return [
            'name' => 'string|required',
            'description' => 'string',
        ];
    } 
}