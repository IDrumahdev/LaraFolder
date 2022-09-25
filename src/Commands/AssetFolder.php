<?php

namespace Ibnudirsan\LaraAssets\Commands;

use File;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class AssetFolder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:folder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to make a new folder in assets folder';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /**
         * Example Syntax to create Folder
         */
        if(!File::exists(public_path('assets/AssetFolder'))) {
            File::makeDirectory(public_path('assets/AssetFolder'));
            Log::info('Message : Success Created Folder');
        } else {
            Log::info('Message : Aready Created Folder');
            $this->components->info('Aready Created Folder.');
            exit;
        } 

        $bar = $this->output->createProgressBar(2);
        $bar->start();
        for ($i=1; $i <= 2; $i++) {
            sleep(2);
            $bar->advance();
        }
            $bar->finish();
            $this->newLine(2);
            $this->line('List Created Folder ');
            $this->components->twoColumnDetail('1)', 'assets/AssetFolder');
            $this->newLine();
            $this->components->info('Successfully created folder report in assets.');
            $this->line('<bg=green;fg=black>..:: Created by ibnudirsan ::..</>');
            $this->newLine();
    }
}