<?php

namespace App\Providers;

use App\Actions\Jetstream\DeleteUser;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Blade;

class JetstreamServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // cada componente agregado debe registrarse en este array para ser donados a Blade
        $components = array(
                            'datatable',
                            'breadcrumbs-nav',
                            'icon.application-fuel',
                            'icon.application-product',
                            'icon.application-arching',
                            'icon.application-employee',
                            'icon.application-providers',
                            'icon.application-purchase',
                            'icon.application-settings',
                            'icon.application-dispenser'
                        );

        foreach ($components as $component) {
            $this->registerComponent($component);
        }
    }

    protected function registerComponent(string $component)
    {
        Blade::component('jetstream::components.'.$component, 'jet-'.$component);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::permissions([
            'create',
            'read',
            'update',
            'delete',
        ]);
    }
}
