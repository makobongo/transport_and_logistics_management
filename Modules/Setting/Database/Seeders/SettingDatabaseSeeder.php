<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'SIXXSSMOD POS',
            'company_email' => 'company@test.com',
            'company_phone' => '0714151822',
            'notification_email' => 'notifications@sixx-spirits.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'SIXXSSMOD POS © 2021 || Developed by <strong><a target="_blank" href="https://sobongo.dev">sixxssmod</a></strong>',
            'company_address' => 'Nairobi, Kenya'
        ]);
    }
}
