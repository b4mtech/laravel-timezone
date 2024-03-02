<?php

namespace MedicPlus\LaravelTimezone\Traits;

trait TimezoneTrait
{
    /**
    * @return string
    */
    protected function getUserTimezone(): string
    {
        $defaultTimezone = config('app.timezone');
        $columnName = config('timezone.column_name', 'timezone');
        if(auth()->user()) {
            return (auth()->user()->getAttribute($columnName)) ?? $defaultTimezone;
        }
        return $defaultTimezone;
    }
}
