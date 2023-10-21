<?php

namespace ACdev\UruguayNoma\Commands;

use ACdev\UruguayNoma\Models\Departament;
use ACdev\UruguayNoma\Models\Location;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class UruguayNomaCommand extends Command
{
    public $signature = 'uruguay-noma';

    public $description = '¡¡URUGUAY NO MA!!';

    public function handle(): int
    {
        $departaments = Storage::disk('local')->path('seed_departamentos.csv');

        if (($handle = fopen($departaments, 'r')) !== false) {

            $this->info('Esto tardará un poco... ');

            while (($data = fgetcsv($handle, 0, ',')) !== false) {

                Departament::create([
                    'name' => Str::upper($data[1]),
                    'slug' => Str::slug($data[1], '-'),
                ]);
            }
            fclose($handle);
            $this->info('Se han importado todos los departamentos...');
        }

        $locations = Storage::disk('local')->path('seed_localidades.csv');

        if (($handle = fopen($locations, 'r')) !== false) {

            $this->info('Esto tardará un poco... ');

            while (($data = fgetcsv($handle, 0, ',')) !== false) {

                Location::firstOrCreate([
                    'departament_id' => $data[0],
                    'name' => $data[1],
                    'cp' => $data[2],
                    'slug' => Str::slug($data[1], '-'),
                ]);
            }
            fclose($handle);
            $this->info('Se han importado todas las localidades...');
        }

        return self::SUCCESS;
    }
}
