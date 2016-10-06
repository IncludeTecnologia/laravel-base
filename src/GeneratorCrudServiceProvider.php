<?php
/**
 * Created by PhpStorm.
 * User: IncludeTecnologia
 * Date: 06/10/2016
 * Time: 12:28
 */
namespace IncludeTecnologia\Generator;

use Illuminate\Support\ServiceProvider;

class GeneratorCrudServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/generatorcrud.php' => config_path('generatorcrud.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/base.blade.php' => base_path('resources/views/layouts/base.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/footer.blade.php' => base_path('resources/views/layouts/footer.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/head.blade.php' => base_path('resources/views/layouts/head.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/login.blade.php' => base_path('resources/views/layouts/login.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/menu.blade.php' => base_path('resources/views/layouts/menu.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/script.blade.php' => base_path('resources/views/layouts/script.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/../publish/side-bar.blade.php' => base_path('resources/views/layouts/side-bar.blade.php'),
        ]);
        $this->publishes([
            __DIR__ . '/stubs/' => base_path('resources/crud-generator/'),
        ]);
    }
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->commands(
            'Includetecnologia\GeneratorCrud\Commands\CrudCommand',
            'Includetecnologia\GeneratorCrud\Commands\CrudControllerCommand',
            'Includetecnologia\GeneratorCrud\Commands\CrudModelCommand',
            'Includetecnologia\GeneratorCrud\Commands\CrudMigrationCommand',
            'Includetecnologia\GeneratorCrud\Commands\CrudViewCommand',
            'Includetecnologia\GeneratorCrud\Commands\CrudLangCommand'
        );
    }
}