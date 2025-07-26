<?php namespace Gabriel\Natalsolidarioagendamento;

use Gabriel\Natalsolidarioagendamento\components\Agendamento;
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
            $model->hasMany['agendamento'] = \Gabriel\Natalsolidarioagendamento\Models\Agendamento::class;
        });
    }

    /**
     * registerComponents used by the frontend.
     */
    public function registerComponents()
    {
        return [
            Agendamento::class => 'agendamento',
        ];
    }

    /**
     * registerSettings used by the backend.
     */
    public function registerSettings()
    {
    }
}
