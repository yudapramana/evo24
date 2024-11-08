<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Model\Schedule;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schedule = Schedule::create([
            'event' => 'Pemilu Raya BEM UNDIP 2024',
            'start_time' => '2024-11-05 06:30:00',
            'end_time' => '2024-11-05 17:00:00',
        ]);
    }
}
