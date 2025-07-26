<?php

namespace Gabriel\NatalSolidarioCriancas\components;


use Cms\Classes\ComponentBase;
use http\Client\Curl\User;
use October\Rain\Support\Facades\Auth;
use Redirect;

class Adopt extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'AdoptButton',
            'description' => 'Botao para adotar crianca'
        ];
    }

    public function onAdoptChild()
    {
    $user = auth::getUser();
    $child = request('child_id');
    $child = \Gabriel\NatalSolidarioCriancas\Models\Childs::find($child);
    $child->user_id = $user->id;
    $child->save();
    \Flash::success($user->id.' '.$child->name.' adotado');
    return Redirect::to('/minha-crianca');
    }

    public function onRun()
    {
        $user = auth::getUser();

        if ($user){
            $this->page ['user'] = $user;
        }
    }
}











