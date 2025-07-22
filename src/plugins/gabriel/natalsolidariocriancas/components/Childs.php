<?php

namespace Gabriel\NatalSolidarioCriancas\components;

use Cms\Classes\ComponentBase;

class Childs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Crianças',
            'description' => ' este componente exibe as crianças na pagina'
        ];
    }

    public function onRun()
    {

        $this->page['children'] = $this->getChilds();

    }


    public function getChilds()
    {
        return \Gabriel\NatalSolidarioCriancas\Models\Childs::all();
    }

}
