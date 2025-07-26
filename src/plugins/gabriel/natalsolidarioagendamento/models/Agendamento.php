<?php namespace Gabriel\Natalsolidarioagendamento\Models;

use Auth;
use Gabriel\NatalSolidarioCriancas\Models\Childs;
use Model;
use RainLab\User\Models\User;

/**
 * Model
 */
class Agendamento extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    protected $table= 'gabriel_natalsolidarioagendamento_agendamento';



    protected $guarded = [];

    public $belongsTo = [
        'child' => Childs::class,
        'user' => User::class,
    ];

    public  $rules = [];

}
