<?php

namespace App\Console\Commands;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Console\Command;

class Createuser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'laravel:keren
    {argument : ini adalah deskripsi argument}
                            {--o|opsi= : ini adalah Deskripsi Saya}';

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
     * @return int
     */
    public function handle(): void
    {
        $name = $this->ask('Masukkan Nama!');
        $email = $this->ask('Masukkan Email Anda!');
        $password = $this->secret('Masukkan Password Anda!');

        $this->line("user: ($name) <($email)>");
        if ($this->confirm('Apakah Anda Mau Melanjutkan')){
            $user = new User();

            $user->name = $name;
            $user->email = $email;
            $user->password = Hash::make($password);

            $user->save();
            $this->info('Anda Telah Berhasil membuat User');
        }else{
            $this->error('gagal Membuat User');
        }

        $this->line('Selesai!');
    }
}
