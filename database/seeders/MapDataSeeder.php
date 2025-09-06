<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class MapDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jsonPath = resource_path('json');

        // ---- Countries ----
        $countries = json_decode(File::get($jsonPath . '/countries.json'), true);
        $currenciesData = json_decode(File::get($jsonPath . '/currencies.json'), true);
        if (!empty($countries)) {
            foreach ($countries as $country) {
                $countryId = DB::table('countries')->insertGetId([
                    'id'            => $country['id'],
                    'iso2'          => $country['iso2'] ?? null,
                    'iso3'          => $country['iso3'] ?? null,
                    'name'          => $country['name'] ?? null,
                    'capital'       => $country['capital'] ?? null,
                    'numeric_code'  => $country['numeric_code'] ?? null,
                    'phone_code'    => $country['phone_code'] ?? null,
                    'region'        => $country['region'] ?? null,
                    'subregion'     => $country['subregion'] ?? null,
                    'tld'           => $country['tld'] ?? null,
                    'native'        => $country['native'] ?? null,
                    'latitude'      => $country['latitude'] ?? null,
                    'longitude'     => $country['longitude'] ?? null,
                    'emoji'         => $country['emoji'] ?? null,
                    'emojiU'        => $country['emojiU'] ?? null,
                    'status'        => 'Active',
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);

                // Insert timezones
                if (!empty($country['timezones'])) {
                    foreach ($country['timezones'] as $tz) {
                        DB::table('timezones')->insert([
                            'country_id'        => $countryId,
                            'name'              => $tz['zoneName'] ?? null,
                            'gmtOffset'         => $tz['gmtOffset'] ?? null,
                            'gmtOffsetName'     => $tz['gmtOffsetName'] ?? null,
                            'abbreviation'      => $tz['abbreviation'] ?? null,
                            'tzName'            => $tz['tzName'] ?? null,
                            'created_at'        => now(),
                            'updated_at'        => now(),
                        ]);
                    }
                }

                // Insert currency (only if exists in both files)
                if (!empty($country['currency'])) {
                    $code = strtoupper($country['currency']); // normalize
                    if (isset($currenciesData[$code])) {
                        $currencyData = $currenciesData[$code];

                        DB::table('currencies')->insert([
                            'country_id'          => $countryId,
                            'name'                => $currencyData['name'] ?? $code,
                            'name_plural'         => $currencyData['name_plural'] ?? $code,
                            'code'                => $currencyData['code'] ?? $code,
                            'decimal_digits'      => $currencyData['decimal_digits'] ?? 2,
                            'symbol'              => $currencyData['symbol'] ?? '',
                            'symbol_native'       => $currencyData['symbol_native'] ?? '',
                            'symbol_first'        => 1,
                            'decimal_mark'        => '.',
                            'thousands_separator' => ',',
                            'rounding'            => $currencyData['rounding'] ?? 0,
                            'created_at'          => now(),
                            'updated_at'          => now(),
                        ]);
                    } else {
                        // Log or skip if mismatch
                        logger()->warning("Currency '{$code}' not found in currencies.json for country {$country['name']}");
                    }
                }

            }
        }

        // ---- States ----
        $states = json_decode(File::get($jsonPath . '/states.json'), true);
        if (!empty($states)) {
            foreach ($states as $state) {
                DB::table('states')->insert([
                    'id'            => $state['id'],
                    'country_id'    => $state['country_id'],
                    'name'          => $state['name'] ?? null,
                    'country_code'  => $state['country_code'] ?? null,
                    'state_code'    => $state['state_code'] ?? null,
                    'type'          => $state['type'] ?? null,
                    'latitude'      => $state['latitude'] ?? null,
                    'longitude'     => $state['longitude'] ?? null,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);
            }
        }

        // ---- Cities ----
        $cities = json_decode(File::get($jsonPath . '/cities.json'), true);
        if (!empty($cities)) {
            foreach ($cities as $city) {
                DB::table('cities')->insert([
                    'id'            => $city['id'],
                    'country_id'    => $city['country_id'],
                    'state_id'      => $city['state_id'],
                    'name'          => $city['name'] ?? null,
                    'country_code'  => $city['country_code'] ?? null,
                    'latitude'      => $city['latitude'] ?? null,
                    'longitude'     => $city['longitude'] ?? null,
                    'wikiDataId'    => $city['wikiDataId'] ?? null,
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ]);
            }
        }

        // ---- Languages ----
        $languages = json_decode(File::get($jsonPath . '/languages.json'), true);
        if (!empty($languages)) {
            foreach ($languages as $lang) {
                DB::table('languages')->insert([
                    'code'       => $lang['code'] ?? null,
                    'name'       => $lang['name'] ?? null,
                    'name_native'=> $lang['name_native'] ?? '',
                    'dir'        => $lang['dir'] ?? 'ltr',
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
