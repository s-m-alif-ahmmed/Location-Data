<?php

namespace App\Imports;

use App\Models\City;
use App\Models\Country;
use App\Models\PostalCode;
use App\Models\State;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PostalCodeImport implements ToModel, WithHeadingRow
{
    public function model(array $row)
    {
        // 1. Get country by ISO2 or ISO3 code
        $country = Country::where('iso2', $row['country_code'])
            ->orWhere('iso3', $row['country_code'])
            ->first();
        if (!$country) {
            return null; // Skip if country not found
        }

        // 2. Find state with a "fuzzy" match
        $state = State::where('country_id', $country->id)
            ->where('name', 'LIKE', '%' . trim($row['state']) . '%')
            ->first();

        if (!$state) {
            return null; // Skip if state not found
        }

        // Get or create city
        $city = City::firstOrCreate(
            ['name' => $row['city'], 'state_id' => $state->id],
            ['country_id' => $country->id],
            ['state_id' => $state->id]
        );

        if (!$city) {
            // Create city if not found
            $city = City::create([
                'name'       => trim($row['city']),
                'state_id'   => $state->id,
                'country_id' => $country->id,
                'country_code' => $row['country_code'] ?? null,
            ]);
        }

        // 4. Check for duplicate postal code
        $exists = PostalCode::where('country_id', $country->id)
            ->where('state_id', $state->id)
            ->where('city_id', $city->id)
            ->where('postal_code', $row['postal_code'])
            ->first();

        if ($exists) {
            return null; // Skip duplicate entry
        }

        return new PostalCode([
            'country_id'   => $country->id,
            'state_id'     => $state->id,
            'city_id'      => $city->id,
            'area'         => $row['area'] ?? null,
            'postal_code'  => $row['postal_code'] ?? null,
            'latitude'     => $row['latitude'] ?? null,
            'longitude'    => $row['longitude'] ?? null,
            'status'       => 'Active',
        ]);
    }
}
