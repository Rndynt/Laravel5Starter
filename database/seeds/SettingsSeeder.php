<?php
use App\Models\Settings;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder {

    public function run() {
        $array = [
            'locales' => 'en, bg',
            'sitename_en' => 'My site',
            'sitename_bg' => 'Моят сайт',
            'fallback_locale' => 'bg'
        ];

        foreach ($array as $key => $item) {
            $settings = Settings::create([
                        'param' => $key,
                        'value' => $item
            ]);

            $settings->save();
        }
    }

}