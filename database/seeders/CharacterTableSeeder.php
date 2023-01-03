<?php

namespace Database\Seeders;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Character;

class CharacterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $c1 = new Character;

        // $c1->name = "Rohith";
        // $c1->weight = 65;
        // $c1->haki = "Yes";
        // $c1->power = "Brain";
        // $c1->height = 172;
        // $c1->save();
        //\App\Models\Character::factory()->count(50)->create();
        Character::factory(50)->create();

    }
}
