<?php

namespace App\Console\Commands;

use App\Imports\CitiesImport;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class GetCities extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'get:cities';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync Italian Cities';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Download file comuni in corso');
        $response = Http::get('https://www.istat.it/storage/codici-unita-amministrative/Elenco-comuni-italiani.xls');
        Storage::put('Elenco-comuni-italiani.xls', $response);
        $this->info('Download file comuni terminato');
        $this->info('Inizio import');
        (new CitiesImport)->withOutput($this->output)->import('Elenco-comuni-italiani.xls');
        $this->info('Elimino file dei comuni');
        Storage::delete('Elenco-comuni-italiani.xls');
        $this->output->success('Operazione Completata');
    }
}
