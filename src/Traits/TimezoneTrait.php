<?php

namespace MedicPlus\LaravelTimezone\Traits;

trait TimezoneTrait
{
    /**
    * @return string
    */
    protected function getUserTimezone(): string
    {
        $column = config('timezone.column_name', 'timezone');
        return (auth()->user()->getAttribute($column)) ?? config('app.timezone');
    }
}
