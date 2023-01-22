<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
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
                'project_name' => 'Pembuatan SI Keuangan',
                'client' => 'Bakeuda Prov. Kalsel',
                'project_leader' => 1,
                'start_date' => '2022-01-14',
                'end_date' => '2022-08-14',
                'progress' => '30',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Learning Management System',
                'client' => 'Ruang Guru',
                'project_leader' => 2,
                'start_date' => '2022-01-30',
                'end_date' => '2022-03-10',
                'progress' => '80',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'SI Pendataan Atlet Dearah',
                'client' => 'Dispora Jawa Timur',
                'project_leader' => 3,
                'start_date' => '2022-02-02',
                'end_date' => '2022-05-30',
                'progress' => '40',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Employee Monitoring',
                'client' => 'PT Bina Sarana Sukses',
                'project_leader' => 4,
                'start_date' => '2021-09-02',
                'end_date' => '2022-01-15',
                'progress' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Ecommerce Multiuser',
                'client' => 'Griya Kain Tuan Kentang',
                'project_leader' => 5,
                'start_date' => '2022-01-14',
                'end_date' => '2023-08-14',
                'progress' => '14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Pinjaman Hibah Luar Negeri',
                'client' => 'Kementrian PUPR',
                'project_leader' => 6,
                'start_date' => '2022-01-14',
                'end_date' => '2025-08-14',
                'progress' => '25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'Sayembara IKN',
                'client' => 'Kementrian Parekraf',
                'project_leader' => 7,
                'start_date' => '2022-01-14',
                'end_date' => '2029-08-14',
                'progress' => '5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'SI Monitoring PLN',
                'client' => 'PLN',
                'project_leader' => 8,
                'start_date' => '2022-01-14',
                'end_date' => '2024-08-14',
                'progress' => '50',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'SI Monitoring Tambak Ikan',
                'client' => 'E-fishery',
                'project_leader' => 9,
                'start_date' => '2022-01-14',
                'end_date' => '2028-08-14',
                'progress' => '72',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'SI Inventory Gudang',
                'client' => 'Gudangku',
                'project_leader' => 10,
                'start_date' => '2022-04-14',
                'end_date' => '2020-08-14',
                'progress' => '99',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'SI Perbankan',
                'client' => 'Bank Indonesia',
                'project_leader' => 9,
                'start_date' => '2021-02-23',
                'end_date' => '2022-01-21',
                'progress' => '100',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'project_name' => 'MoneyManagement',
                'client' => 'Dana',
                'project_leader' => 2,
                'start_date' => '2025-01-23',
                'end_date' => '2028-01-21',
                'progress' => '0',
                'created_at' => now(),
                'updated_at' => now(),
            ],
           
        );
        foreach($data AS $d){
            Project::create([
                'project_name' => $d['project_name'],
                'client' => $d['client'],
                'project_leader' => $d['project_leader'],
                'start_date' => $d['start_date'],
                'end_date' => $d['end_date'],
                'progress' => $d['progress'],
                'created_at' => $d['created_at'],
                'updated_at' => $d['updated_at'],
            ]);
        }
    }
}
