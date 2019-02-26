<?php

use Illuminate\Database\Seeder;
use App\Room;
class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::create([
            'name'=>'room1',
            'capacity'=>3,
            'status'=>'Available',
            'has_ac'=>1,
        ]);

        Room::create([
            'name'=>'room2',
            'capacity'=>5,
            'status'=>'Not Available',
            'has_ac'=>0,
        ]);
    }
}
