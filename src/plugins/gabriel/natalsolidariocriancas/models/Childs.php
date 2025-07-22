<?php

namespace Gabriel\NatalSolidarioCriancas\Models;

use Model;

/**
 * Model
 */
class Childs extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];


    public $attachOne = [
        'image' => 'System\Models\File',
    ];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'gabriel_natalsolidariocriancas_criancas';

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
