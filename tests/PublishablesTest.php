<?php

use function Pest\Laravel\artisan;

it('can publish csv\'s files', function (): void {

    artisan('vendor:publish', [
        '--provider' => 'ACdev\UruguayNoma\UruguayNomaServiceProvider',
        '--tag' => 'uruguay-noma-csv',
    ])->assertExitCode(0);

    expect(file_exists(storage_path('app/seed_departamentos.csv')))
        ->toBeTrue()
        ->and(unlink(storage_path('app/seed_departamentos.csv')))
        ->toBeTrue();

    expect(file_exists(storage_path('app/seed_localidades.csv')))
        ->toBeTrue()
        ->and(unlink(storage_path('app/seed_localidades.csv')))
        ->toBeTrue();
});
