<?php

class Lasagna
{
    public function expectedCookTime()
    {
        $expected_cook_time = 40;
        return $expected_cook_time;
    }

    public function remainingCookTime($elapsed_minutes)
    {
        $remaining_cook_time = $this->expectedCookTime() - $elapsed_minutes;
        return $remaining_cook_time;
    }

    public function totalPreparationTime($layers_to_prep)
    {
        $time_for_layer = 2;
        $total_prep_time = $time_for_layer * $layers_to_prep;
        return $total_prep_time;
    }

    public function totalElapsedTime($layers_to_prep, $elapsed_minutes)
    {
        $total_time_elapsed = $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
        return $total_time_elapsed;
    }

    public function alarm()
    {
        return "Ding!";
    }
}
