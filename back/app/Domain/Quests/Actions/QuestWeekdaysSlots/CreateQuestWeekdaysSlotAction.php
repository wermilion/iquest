<?php

namespace App\Domain\Quests\Actions\QuestWeekdaysSlots;

use App\Domain\Quests\Models\QuestWeekdaysSlot;
use App\Domain\Schedules\Models\ScheduleQuest;
use Carbon\Carbon;
use Carbon\CarbonPeriod;

class CreateQuestWeekdaysSlotAction
{
    public function execute(QuestWeekdaysSlot $slot): void
    {
        $startDate = Carbon::today();
        $endDate = Carbon::today()->addMonth();

        $workingDays = CarbonPeriod::create($startDate, $endDate)
            ->addFilter(function ($date) {
                return !$date->isWeekend();
            });

        foreach ($workingDays as $currentDay) {
            $scheduleQuest = ScheduleQuest::firstOrCreate([
                'quest_id' => $slot->quest_id,
                'date' => $currentDay,
            ]);

            $scheduleQuest->timeslots()->create([
                'time' => $slot->time,
                'price' => $slot->price,
                'is_active' => true,
            ]);
        }
    }
}
