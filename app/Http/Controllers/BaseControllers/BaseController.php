<?php

namespace App\Http\Controllers\BaseControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BaseController extends Controller
{
    /** @var string тип запроса. */
    const GET = 'GET';
    const DELETE = 'DELETE';
    const POST = 'POST';
    const PUT = 'PUT';

    /** @var string имя части uri. */
    const PROMO = 'promo';

    /** @var object класс сервиса. */
    protected $service;

    /** @var Illuminate\Http\Request */
    protected $request;


    /**
     * Инициализация класса.
     *
     * @param  Illuminate\Http\Request  $request
     */
    public function __construct(Request $request)
    {
        $method = $this->checkMethod($request->method());
        $entity = $this->checkEntity($request->entity);
        $service = 'App\Http\Services\\' . $method . $entity . 'Service';
        $this->service = new $service($entity);
        $this->request = $request;
    }

    /**
     * Вернуть ответ от сервиса.
     *
     * @return Response
     */
    public function __invoke()
    {
        $data = ($this->service)($this->request);
        return $data;
    }

    /**
     * Вернуть название операции.
     * 
     * @param string $method
     * @return string
     */
    public function checkMethod(string $method)
    {
        if (!empty(request()->id) &&  $method == SELF::GET) {
            return 'Show';
        }
        switch ($method) {
            case SELF::GET:
                return 'Index';
            case SELF::DELETE:
                return 'Destroy';
            case SELF::POST:
                return 'Store';
            case SELF::PUT:
                return 'Update';
        }
    }

    /**
     * Вернуть часть названия сервиса.
     * 
     * @param string $entity
     * @return string
     */
    public function checkEntity(string $entity)
    {
        switch ($entity) {
            case SELF::PROMO: return 'Promo';
        }
    }
}
