<?php

namespace App\Console\Commands;

use App\Jobs\ServiceJob;
use Illuminate\Console\Command;

class CupomCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cupom:create';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $i = 0;
        while($i < 100){
            dispatch(new ServiceJob());
            $i++;
        }

        return [
            'msg' => 'Cupom criado!'
        ];
    }
}
