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
        if(!File::exists(public_path('assets/reportx'))) {
            File::makeDirectory(public_path('/public/assetsx/report/mutasiBank/dailyMail'));
            Log::info('Message : Success Created Folder');
        } else {
            Log::info('Message : Aready Created Folder');
            $this->components->info('Aready Created Folder.');
            exit;
        } 

        $bar = $this->output->createProgressBar(6);
        $bar->start();
        for ($i=1; $i <= 6; $i++) {
            sleep(2);
            $bar->advance();
        }
            $bar->finish();
            $this->newLine(2);
            $this->line('List Created Folder : ');
            $this->components->twoColumnDetail('1)', '/public/assets/report/mutasiBank/dailyMail');
            $this->components->twoColumnDetail('2)', '/public/assets/report/mutasiBank/sendMail');
            $this->components->twoColumnDetail('3)', '/public/assets/report/paymentGateway/dailyMail');
            $this->components->twoColumnDetail('4)', '/public/assets/report/paymentGateway/sendMail');
            $this->components->twoColumnDetail('5)', '/public/assets/report/paymentTransfer/dailyMail');
            $this->components->twoColumnDetail('6)', '/public/assets/report/paymentTransfer/sendMail');
            $this->newLine();
            $this->components->info('Successfully created folder report in assets.');
            $this->line('<bg=green;fg=black>..:: Created by ibnudirsan ::..</>');
            $this->newLine();
    }
}