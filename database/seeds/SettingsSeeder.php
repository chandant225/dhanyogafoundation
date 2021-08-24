<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // General Settings
        appSettings()->set([
            'site_name' => 'Dhana Yoga Foundation',
            'tagline' => 'Dhana Yoga Foundation',
            'site_logo' => null,
            'favicon' => null,

            'show_top_bar' => 'yes',
            'mobile' => '+774-377-5112',
            'email' => 'info@dhanayogafoundation.org',
            'address' => '3 Nicole way, Dartmouth, MA 02747, USA',

            'price_unit' => 'Rs.',

            'facebook_url' => 'https://facebook.com',
            'twitter_url' => 'https://twitter.com',
            'instagram_url' => 'https://instagram.com',
            'youtube_url' => 'https://youtube.com',
            'linkedin_url' => 'https://linkedin.com',
        ]);

        // Page Settings
        appSettings()->set([
            'about_us_page_url' => '',
            'privacy_policy_page_url' => '',
            'terms_and_conditions_page_url' => '',

            'contact_us_section_title' => 'GET IN TOUCH',
            'contact_us_section_description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic officiis doloribus soluta? Animi incidunt laboriosam iusto, blanditiis aut ipsa voluptatem?',
        ]);

        // Homepage Settings
        appSettings()->set([
            'show_topbar_notice' => '',
            'topbar_notice' => '',
            'topbar_notice_action_text' => 'Learn More',
            'topbar_notice_action_link' => '#',

            'show_our_mission_section' => 'yes',
            'our_mission_title' => 'Our Mission',
            'our_mission_description' => '',
            'our_mission_page' => '',

            'show_latest_blogs_section' => 'yes',
            'latest_blogs_section_title' => 'Latest non-government organizations news and updates, special reports, videos, and more',
            'latest_blogs_display_count' => '3',
        ]);
    }
}
