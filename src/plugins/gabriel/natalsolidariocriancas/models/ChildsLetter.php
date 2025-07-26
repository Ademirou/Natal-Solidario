<?php namespace Gabriel\NatalSolidarioCriancas\Models;

use Model;

/**
 * Model
 */
class ChildsLetter extends Model
{
    use \October\Rain\Database\Traits\Validation;
    use \October\Rain\Database\Traits\SoftDelete;

    /**
     * @var array dates to cast from the database.
     */
    protected $dates = ['deleted_at'];

    /**
     * @var string table in the database used by the model.
     */
    public $table = 'gabriel_natalsolidariocriancas_letter';

    public $belongsTo = [
       'childs' => Childs::class
    ];

    /**
     * @var array rules for validation.
     */
    public $rules = [
    ];

}
