<?php namespace Maxeee09\IFTTT\Maker\Facades;

use Illuminate\Support\Facades\Facade;

class IFTTTMaker extends Facade
{
    /**
     * Façade accessor name
     */
    const FACADE_ACCESSOR = 'ifttt-maker';

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return self::FACADE_ACCESSOR;
    }
}