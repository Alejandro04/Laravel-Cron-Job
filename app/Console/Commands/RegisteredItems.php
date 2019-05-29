<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Item;

class RegisteredItems extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:items';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Registra un item en la base de datos';

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
        Item::create([
            'name' => 'nuevo item',
        ]);
    }
}
