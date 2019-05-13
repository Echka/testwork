<?php

use Illuminate\Database\Seeder;

class NavigatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('navigation')->insert([
            'class'     => '',
            'title'     => 'Home',
            'title_rus' => 'Главная',
            'short_address_name' => 'home',
            'parent_id' => 0,
            'active'    => 1
        ]);

        DB::table('navigation')->insert([
            'class'     => '',
            'title'     => 'About Us',
            'title_rus' => 'О нас',
            'short_address_name' => 'about_us',
            'parent_id' => 0,
            'active'    => 1
        ]);

        DB::table('navigation')->insert([
            'class'     => '',
            'title'     => 'Team',
            'title_rus' => 'Команда',
            'short_address_name' => 'team',
            'parent_id' => 0,
            'active'    => 1
        ]);

        DB::table('navigation')->insert([
            'class'     => 'centerNavElement',
            'title'     => 'H',
            'title_rus' => 'H',
            'short_address_name' => 'home',
            'parent_id' => 0,
            'active'    => 1
        ]);

        DB::table('navigation')->insert([
            'class'     => '',
            'title'     => 'Services',
            'title_rus' => 'Сервисы',
            'short_address_name' => 'service',
            'parent_id' => 0,
            'active'    => 1
        ]);

        DB::table('navigation')->insert([
            'class'     => '',
            'title'     => 'Blog',
            'title_rus' => 'Блог',
            'short_address_name' => 'blog',
            'parent_id' => 0,
            'active'    => 1
        ]);

        DB::table('navigation')->insert([
            'class'     => '',
            'title'     => 'Contact Us',
            'title_rus' => 'Блог',
            'short_address_name' => 'contact_us',
            'parent_id' => 0,
            'active'    => 1
        ]);
    }
}
