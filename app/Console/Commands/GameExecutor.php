<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\RemainingTimeChanged;
use App\Events\WinnerNumberGenerated;

class GameExecutor extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    /* 
        'game:execute'
            Nombre por el cual se llamará al comando
                php artisan game:execute
    */
    protected $signature = 'game:execute';

    /**
     * The console command description.
     *
     * @var string
     */
    /* 
        'Starts executing the game'
            Descripción del comando
    */
    protected $description = 'Starts executing the game';

    /* 
        Variable para ser usada solo en esta clase
        La ruleta se detendrá en 15 segundos
    */
    private $time = 15;

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
    /* 
        broadcast(new RemainingTimeChanged($this->time . 's'));
            Transmite el evento con tiempo indefinido
        $this->time--;
            Resta 1 a la variable
        sleep(1);
            Duerme el proceso 1 segundo
        if ($this->time === 0)
            Comparación de si el tiempo es igual a 0
        broadcast(new WinnerNumberGenerated(mt_rand(1,12)));
            Trasmite el evento mostrando el número aleatorio
        sleep(5);
            Duerme al proceso 5 segundos
        $this->time = 15; 
            Le asigna nuevamente 15 a la variable

    */
    public function handle()
    {
        while(true) {
            broadcast(new RemainingTimeChanged($this->time . 's'));
            $this->time--;
            sleep(1);
            if ($this->time === 0) {
                $this->time = 'Waiting To Start';
                broadcast(new RemainingTimeChanged($this->time));

                broadcast(new WinnerNumberGenerated(mt_rand(1,12)));
                sleep(5);
                $this->time = 15;
            }
        }
    }
}
