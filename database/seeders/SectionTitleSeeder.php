<?php

namespace Database\Seeders;

use App\Models\SectionTitle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SectionTitle::insert([
            // why choose us section
            [
                'key' => 'why_choose_us_top_title',
                'value' => 'Why Choose Us',
            ],
            [
                'key' => 'why_choose_us_main_title',
                'value' => 'Why Choose Us',
            ],
            [
                'key' => 'why_choose_us_sub_title',
                'value' => 'Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.',
            ],

            //offer section
            [
                'key' => 'offer_top_title',
                'value' => 'Daily Offer',
            ],
            [
                'key' => 'offer_main_title',
                'value' => 'Up To 75% Off For This Day',
            ],
            [
                'key' => 'offer_sub_title',
                'value' => 'Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.'
            ],

            // menu section
            [
                'key' => 'menu_top_title',
                'value' => 'Food Menu',
            ],
            [
                'key' => 'menu_main_title',
                'value' => 'Our Popular Delicious Foods',
            ],
            [
                'key' => 'menu_sub_title',
                'value' => 'Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.',
            ],

            //team section
            [
                'key' => 'team_top_title',
                'value' => 'Our Team',
            ],
            [
                'key' => 'team_main_title',
                'value' => 'Meet Our Expert Chefs',
            ],
            [
                'key' => 'team_sub_title',
                'value' => 'Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.',
            ],

            //testimonial section
            [
                'key' => 'testimonial_top_title',
                'value' => 'Testimonial',
            ],
            [
                'key' => 'testimonial_main_title',
                'value' => 'Our Customar Feedbacks',
            ],
            [
                'key' => 'testimonial_sub_title',
                'value' => 'Objectively pontificate quality models before intuitive information. Dramatically recaptiualize multifunctional materials.',
            ]
        ]);
    }
}
