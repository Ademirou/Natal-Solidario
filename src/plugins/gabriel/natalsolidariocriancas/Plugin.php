<?php namespace Gabriel\NatalSolidarioCriancas;

use Gabriel\NatalSolidarioCriancas\components\Adopt;
use Gabriel\NatalSolidarioCriancas\components\Childs;
use Gabriel\NatalSolidarioCriancas\components\ChildsLetter;
use RainLab\User\Models\User;
use System\Classes\PluginBase;

/**
 * Plugin class
 */
class Plugin extends PluginBase
{
    /**
     * register method, called when the plugin is first registered.
     */
    public function register()
    {
    }

    /**
     * boot method, called right before the request route.
     */
    public function boot()
    {
        User::extend(function ($model){
            $model->hasOne['child'] = \Gabriel\NatalSolidarioCriancas\Models\Childs::class;
        });
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {

        return [
            Childs::class => 'childs',
            ChildsLetter::class => 'childsLetter',
            Adopt::class => 'Adopt',

        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
