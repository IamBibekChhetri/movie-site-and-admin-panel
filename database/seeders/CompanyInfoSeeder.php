<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CompanyInfo;

class CompanyInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $store = new CompanyInfo();
        $store->name = "Movie site";
        $store->email = "support@gmail.com";
        $store->address = "Butwal";
        $store->phone_no = "9811111111";
        $store->mobile_no = "980000012";
        $store->support_no = "9804567890";
        $store->save();
    }
}
