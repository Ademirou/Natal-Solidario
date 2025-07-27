<?php

namespace Gabriel\NatalSolidarioCriancas\components;
use Auth;
use Gabriel\NatalSolidarioCriancas\Models\Childs;

use Cms\Classes\ComponentBase;
class ChildsLetter extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Carta criançás',
            'description' => ' esse componente exibe a carta das crianças'
        ];
    }

    public function onGetChildrenInfo()
    {
        $id = request('item_id');
       $child = Childs::find($id);

       return [
           '#contents' => $this->renderPartial('@child_info.htm',[
               'childInfo'=> $child,
               'user' => Auth::getUser()

           ])
       ];
    }
    public function onRun()
    {
        $user = Auth::getUser();

        if ($user){
            $this->page['auser'] = $user;
        }
    }


}
