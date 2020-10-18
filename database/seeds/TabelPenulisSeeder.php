<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TabelPenulisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
    * @return void
     */
    public function run()
    {
        DB::table('penulis')->insert([
            ['nama_penulis' => 'Andi Susanto', 'divisi' => 'SEO'],
            ['nama_penulis' => 'Krisnanto', 'divisi' => 'SEO'],
            ['nama_penulis' => 'Fandy', 'divisi' => 'SEO']
        ]);
    }
}
