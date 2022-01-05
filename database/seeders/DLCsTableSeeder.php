<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DLCsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('DLCs')->insert([
            'product'=>'黎明死線標準包',
            'price'=>'379',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-The Halloween Chapter',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Of Flesh and Mud',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Spark and Madness',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-A Nightmare on Elm Street',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-the Saw Chapter',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Stranger Things Chapter',
            'price'=>'226',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Cursed Legacy',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Chains of Hate',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Silent Hill Chapter',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
        'product'=>'Dead By Daylight-Descend Beyond Chapter',
        'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-All-Kill Chapter',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Resident Evil Chapter',
            'price'=>'226',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Hour of the Witch Chapter',
            'price'=>'99',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-A Binding of Kin Chapter',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight- Ash Vs Evil Dead',
            'price'=>'99',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Demise of the Faithful',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Curtain Call',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Shattered Bloodline',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Darkness Among Us',
            'price'=>'138',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight-Hellraiser Chapter',
            'price'=>'99',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight:Ghost Face',
            'price'=>'99',
        ]);
        DB::table('DLCs')->insert([
            'product'=>'Dead By Daylight:LEATHFACE',
            'price'=>'99',
        ]);
   }
}
