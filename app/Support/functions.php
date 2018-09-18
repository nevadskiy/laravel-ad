<?php

use App\Entity\Adverts\Category;
use App\Entity\Region;
use App\Router\AdvertPath;

if (! function_exists('advert_path')) {
    /**
     * @param Region|null $region
     * @param Category|null $category
     * @return AdvertPath
     */
    function advert_path(?Region $region, ?Category $category)
    {
        return app()->make(AdvertPath::class)
            ->withRegion($region)
            ->withCategory($category);
    }
}
