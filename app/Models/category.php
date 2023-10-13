<?php

namespace App\Models;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function handle(Model $model, Request $request)
    {
        $model->Title = $request->get('Title');
        $model->Desc = $request->get('Desc');
        $model->save();
        return $this->response()->success('Success message.')->refresh();
    }

}
