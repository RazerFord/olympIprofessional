<?php

namespace App\Http\Controllers\OtherControllers;

use App\Http\Controllers\Controller;
use App\Models\Participant;
use Illuminate\Http\Request;

class AddParticipantToPromo extends Controller
{
    public function __invoke(Request  $request, $id)
    {
        try {
            $data = $this->validate($request, ['name' => 'string|required']);
            $data['promotion_id'] = $id;
            $pId = Participant::create($data)->id;
            return response()->json($pId, 200);
        } catch (\Exception $e) {
            return response()->json('Not add', 422);
        }
    }
}
