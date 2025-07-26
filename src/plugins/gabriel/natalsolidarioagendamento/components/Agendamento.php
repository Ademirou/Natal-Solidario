<?php

namespace Gabriel\Natalsolidarioagendamento\components;

use Auth;
use Cms\Classes\ComponentBase;
use \Gabriel\Natalsolidarioagendamento\Models\Agendamento as AgendamentoModel;

class Agendamento extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name' => 'Agendar',
            'description' => 'Botao para agendamento de entrega'
        ];
    }

    public function onRun()
    {

        $schedules = AgendamentoModel::where('user_id', Auth::id())
            ->where('completed', false)->get();


        $this->page ['canSchedule'] = $schedules->count();
        $this->page['agendamento'] = $schedules->last();


    }


    public function onAgendar()
    {
        $user = Auth::getUser();
        $childId = post('child_id');
        $data = post('scheduled_date');
        $agendamento = null;

        if ($data && $user && $childId){

                $agendamento = \Gabriel\Natalsolidarioagendamento\Models\Agendamento::create([
                    'user_id' => $user->id,
                    'child_id' => $childId,
                    'scheduled_date' => $data,
                    'completed' => false,

                ]);

        \Flash::success("Agendamento realizado com sucesso!");


        return [
             '#agendamentoWrapper' => $this->renderPartial('@default',
                 [ 'agendamento' => $agendamento ])
        ];
    }


}
















































//    public function onRun()
//    {
//        $schedules = AgendamentoModel::where('user_id', Auth::id())
//            ->where('completed', false)->get();
//
//
//
//        $this->page['canSchedule'] = $schedules->count();
//        $this->page['agendamento'] = $schedules->last();
//    }


//    public function onAgendar()
//    {
//        $user = Auth::getUser();
//        $childId = post('child_id');
//        $data = post('scheduled_date');
//        $agendamento = null;
//        if ($data && $user && $childId) {
//            $agendamento =  \Gabriel\NatalSolidarioAgendamento\Models\Agendamento::create([
//                'user_id' => $user->id,
//                'child_id' => $childId,
//                'scheduled_date' => $data,
//                'completed' => false
//            ]);
//
//            \Flash::success('Agendamento realizado com sucesso!');
//        }
//
//
//
//        return [
//            '#agendamentoWrapper' => $this->renderPartial('@default',[
//                'agendamento' => $agendamento,
//            ])
//        ];
//    }


}
