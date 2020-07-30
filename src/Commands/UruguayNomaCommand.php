<?php

namespace Abr4xas\UruguayNoma\Commands;

use App\Models\Location;
use App\Models\Departament;
use Illuminate\Support\Str;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class UruguayNomaCommand extends Command
{
    public $signature = 'uruguay-noma';

	protected $description = '¡¡URUGUAY NO MA!!';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function handle()
	{
		$departaments = Storage::disk('local')->path('seed_departamentos.csv');

		if (($handle = fopen($departaments, 'r')) !== FALSE) {

			$this->info('Esto tardará un poco... ');

			while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

				Departament::create([
					'name' => $data[1],
					'slug' => Str::slug($data[1], '-')
				]);
			}
			fclose($handle);
			$this->info('Se han importado todos los departamentos...');
		}


		$locations = Storage::disk('local')->path('seed_localidades.csv');

		if (($handle = fopen($locations, 'r')) !== FALSE) {

			$this->info('Esto tardará un poco... ');

			while (($data = fgetcsv($handle, 0, ",")) !== FALSE) {

				$departamento = Departament::where('name', $data[0])->first();

				$localidad = Location::firstOrCreate([
					'departament_id' 	=> $departamento->id,
					'name'            	=> $data[1],
					'cp'              	=> $data[2],
					'slug' 				=> Str::slug($data[1], '-')
				]);
			}
			fclose($handle);
			$this->info('Se han importado todas las localidades...');
		}
	}
}
