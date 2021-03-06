<?php

namespace Modules\Icommercefreeshipping\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Ilocations\Entities\Geozones;

class GeozoneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $params = array(
            'name' => "freeshipping",
            'description' => "geozone with freeshipping"
        );

        $newGeozone = Geozones::create($params);
        
        $newData["icommercefreeshipping::geozone"] = $newGeozone->id;

        $setting = app('Modules\Setting\Repositories\SettingRepository');
        $setting->createOrUpdate($newData);
       

    }
}
