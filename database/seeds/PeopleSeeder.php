<?php

use Illuminate\Database\Seeder;
use App\People;
class PeopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        people::create([

            'name'=>'Shahid',
            'city'=>'lahore',
            'phone'=>'0348987498',
            'room_id'=>1,
        ]);
        people::create([

        'name'=>'Watto',
        'city'=>'Isb',
        'phone'=>'0348987458',
        'room_id'=>2,
    ]);

    }
}
