<?php

// Seeder data
$farms = [];

for ($i = 11; $i <= 100; $i++) {
    $farms[] = [
        'farm_id' => $i,
        'category' => rand(1, 3), // Assuming categories range from 1 to 3
        'farmer_id' => 100 + $i,
        'farm_number' => 'FARM' . str_pad($i, 3, '0', STR_PAD_LEFT),
        'owner_name' => 'OwnerName' . $i,
        'owner_surname' => 'OwnerSurname' . $i,
        'owner_email' => 'owner' . $i . '@example.com',
        'owner_mobile' => rand(1000000000, 1999999999), // Random mobile number
        'farm_name' => 'FarmName' . $i,
        'district' => 'District' . $i,
        'longitude' => rand(-180, 180) + mt_rand() / mt_getrandmax(), // Random longitude
        'latitude' => rand(-90, 90) + mt_rand() / mt_getrandmax(), // Random latitude
        'farm_description_english' => 'English Description for Farm ' . $i,
        'farm_description_afrikaans' => 'Afrikaanse Beskrywing vir Plaas ' . $i,
        'farm_size' => rand(100, 1000), // Random farm size
        'accommodation' => rand(0, 1),
        'aircon' => rand(0, 1),
        'atm_on_site' => rand(0, 1),
        'free_wifi' => rand(0, 1),
        'housekeeping' => rand(0, 1),
        'swimming_pool' => rand(0, 1),
        'dstv' => rand(0, 1),
        'wood' => rand(0, 1),
        'boma' => rand(0, 1),
        'fitness_center' => rand(0, 1),
        'meeting_hall' => rand(0, 1),
        'bar_lounge' => rand(0, 1),
        'restaurant' => rand(0, 1),
        'terrace_patio' => rand(0, 1),
        'free_parking' => rand(0, 1),
        'pet_allowed' => rand(0, 1),
        'gift_shop' => rand(0, 1),
    ];
}


// Insert seeder data into the database
$sql = '';
foreach ($farms as $farm) {
    $sql .= "INSERT INTO farm (
        farm_id, category, farmer_id, farm_number, owner_name, owner_surname,
        owner_email, owner_mobile, farm_name, district, longitude, latitude,
        farm_description_english, farm_description_afrikaans, farm_size,
        accommodation, aircon, atm_on_site, free_wifi, housekeeping,
        swimming_pool, dstv, wood, boma, fitness_center, meeting_hall,
        bar_lounge, restaurant, terrace_patio, free_parking, pet_allowed, gift_shop
    ) VALUES (
        '{$farm['farm_id']}', '{$farm['category']}', '{$farm['farmer_id']}',
        '{$farm['farm_number']}', '{$farm['owner_name']}', '{$farm['owner_surname']}',
        '{$farm['owner_email']}', '{$farm['owner_mobile']}', '{$farm['farm_name']}',
        '{$farm['district']}', '{$farm['longitude']}', '{$farm['latitude']}',
        '{$farm['farm_description_english']}', '{$farm['farm_description_afrikaans']}',
        '{$farm['farm_size']}', '{$farm['accommodation']}', '{$farm['aircon']}',
        '{$farm['atm_on_site']}', '{$farm['free_wifi']}', '{$farm['housekeeping']}',
        '{$farm['swimming_pool']}', '{$farm['dstv']}', '{$farm['wood']}', '{$farm['boma']}',
        '{$farm['fitness_center']}', '{$farm['meeting_hall']}', '{$farm['bar_lounge']}',
        '{$farm['restaurant']}', '{$farm['terrace_patio']}', '{$farm['free_parking']}',
        '{$farm['pet_allowed']}', '{$farm['gift_shop']}'
    );\n";
}

echo $sql;

