<?php namespace Gabriel\Natalsolidarioagendamento\Controllers;

use Backend;
use BackendMenu;
use Backend\Classes\Controller;

class AgendamentosController extends Controller
{
    public $implement = [
        \Backend\Behaviors\ListController::class
    ];

    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Gabriel.Natalsolidarioagendamento', 'main-menu-item');
    }

    public function onConfirmarEntrega()
    {
        $id = post('record_id');

        $registro = \Gabriel\NatalSolidarioAgendamento\Models\Agendamento::find($id);

        if ($registro) {
            $registro->completed = true;
            $registro->save();
            \Flash::success('Entrega confirmada com sucesso!');
        } else {
            \Flash::error('Agendamento não encontrado.');
        }

        return $this->listRefresh();
    }


}
