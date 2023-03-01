<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Laravelcommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:basic
    {argument : ini adalah deskripsi argument}
                            {--o|opsi= : ini adalah Deskripsi Saya}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'laravel basic command
                            ';

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
     * @return int
     */
    public function handle(): void
    {
        $this->info("Bakal Ini Yang Muncul Kayaknya");
        $this->error("Keknya Ada Yang Salah Ga Sih?");
        $this->line("Tampilkan Ini Di Layar");

        // $this->line(print_r($this->options()) . '' . print_r($this->arguments()));

        $this->line($this->argument('argument') . " " . $this->option('opsi'));
        
        $name = $this->ask("nama loe siapa bang?");
        $password = $this->secret("Masukkan Sebuah Passsword!");

        

        if ($this->confirm("Apa Anda Mau Melanjutkan?")){
            $this->line($name . " " . $password);
        }
    }
}
