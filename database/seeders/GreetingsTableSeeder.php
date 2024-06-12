<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GreetingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('greetings')->insert([
            ['keyword' => 'hi', 'response' => 'Hi, selamat'],
            ['keyword' => 'halo', 'response' => 'Halo, selamat'],
            ['keyword' => 'selamat pagi', 'response' => 'Selamat pagi'],
            ['keyword' => 'hai', 'response' => 'Hai, selamat'],
            ['keyword' => 'hello', 'response' => 'Hello, selamat'],
            ['keyword' => 'pagi', 'response' => 'Selamat pagi'],
            ['keyword' => 'selamat siang', 'response' => 'Selamat siang'],
            ['keyword' => 'siang', 'response' => 'Selamat siang'],
            ['keyword' => 'selamat malam', 'response' => 'Selamat malam'],
            ['keyword' => 'malam', 'response' => 'Selamat malam'],
            ['keyword' => 'shalom', 'response' => 'Shalom, selamat'],
            ['keyword' => 'assalamualaikum', 'response' => 'Assalamualaikum, selamat'],
            ['keyword' => 'p', 'response' => 'Hi, selamat'],
            ['keyword' => 'ping', 'response' => 'Hi, selamat'],
            ['keyword' => 'hola', 'response' => 'Hola, selamat'],
            ['keyword' => 'hei', 'response' => 'Hei, selamat'],
            ['keyword' => 'yo', 'response' => 'Yo, selamat'],
            ['keyword' => 'bung', 'response' => 'Bung, selamat'],
            ['keyword' => 'maaf', 'response' => 'Maaf, selamat'],
            ['keyword' => 'pardon', 'response' => 'Pardon, selamat'],
            ['keyword' => 'maaf mau tanya', 'response' => 'Maaf, mau tanya, selamat'],
            ['keyword' => 'nanya', 'response' => 'Selamat datang di chatbot FAQ layanan SPMB IT Del yang melayani kamu seputar pertanyaan SPMB IT Del. Ada yang bisa saya bantu?'],
            ['keyword' => 'tanya', 'response' => 'Selamat datang di chatbot FAQ layanan SPMB IT Del yang melayani kamu seputar pertanyaan SPMB IT Del. Ada yang bisa saya bantu?'],
        ]);
    }
}

