<?php

use Illuminate\Database\Seeder;

class TabelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $u=[
        	['NIS'=>'12121112','nama'=>'No Name','tempat_lahir'=>'Curug Candung','tanggal_lahir'=>'2003-04-14','alamat'=>'Verbas','citacita'=>'Pesepak Bola','hobi'=>'Edit Foto','gambar'=>'s2.jpg']];
        DB::table('siswas')->insert($u);
    }
}
