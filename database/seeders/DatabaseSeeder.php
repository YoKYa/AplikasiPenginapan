<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use AzisHapidin\IndoRegion\RawDataGetter;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Get Data
        $districts = RawDataGetter::getDistricts();
        $provinces = RawDataGetter::getProvinces();
        $regencies = RawDataGetter::getRegencies();
        $villages = RawDataGetter::getVillages();
        // Insert Data to Database
        DB::table('indoregion_districts')->insert($districts);
        DB::table('indoregion_provinces')->insert($provinces);
        DB::table('indoregion_regencies')->insert($regencies);
        DB::transaction(function() use($villages) {
            $collection = collect($villages);
            $parts = $collection->chunk(1000);
            foreach ($parts as $subset) {
                DB::table('indoregion_villages')->insert($subset->toArray());
            }
        });
    }
}
