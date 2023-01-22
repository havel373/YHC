<?php

namespace Database\Seeders;

use App\Models\ProjectLeader;
use Illuminate\Database\Seeder;

class ProjectLeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'Indra Setiawan',
                'email' => 'indra.setiawan@gmail.com',
                'photo' => 'avatar/300-1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hilman Syaputra',
                'email' => 'hilman.syah@gmail.com',
                'photo' => 'avatar/300-11.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Febri Gunawan',
                'email' => 'febri.gunawan@gmail.com',
                'photo' => 'avatar/300-3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Handoko Aji',
                'email' => 'handoko.aji@gmail.com',
                'photo' => 'avatar/300-13.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Doni Edy',
                'email' => 'doni@gmail.com',
                'photo' => 'avatar/300-5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Neneng Suryani',
                'email' => 'neneng@gmail.com',
                'photo' => 'avatar/300-6.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Naomi R',
                'email' => 'naomi@gmail.com',
                'photo' => 'avatar/300-4.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Dona Susanti',
                'email' => 'dona@gmail.com',
                'photo' => 'avatar/300-8.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tessalonika Ayaka',
                'email' => 'tessalonika@gmail.com',
                'photo' => 'avatar/300-2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Heni Suherni',
                'email' => 'heni@gmail.com',
                'photo' => 'avatar/300-10.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        );
        foreach($data AS $d){
            ProjectLeader::create([
                'name' => $d['name'],
                'email' => $d['email'],
                'photo' => $d['photo'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
