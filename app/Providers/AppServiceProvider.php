<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		view()->share("asset_types", array(
			"2d" => "2D Art",
			"3d" => "3D Art",
			"music" => "Music",
			"sfx" => "Sound FX",
			"script" => "Script(s)",
			"scene" => "Scene File(s)",
			"plugin" => "Engine Plugin(s)",
			"project" => "Godot Project(s)",
			"bundle" => "Bundle (.zip file, combination of different types)"
		));
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
