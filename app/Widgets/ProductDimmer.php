<?php

namespace App\Widgets;

use App\Models\Product;

use Illuminate\Support\Str;
use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Widgets\BaseDimmer;

class ProductDimmer extends BaseDimmer
{
    /**
     * The configuration array.
     *
     * @var array
     */
    protected $config = [];

    /**
     * Treat this method as a controller action.
     * Return view() or other content to display.
     */
    public function run()
    {
        $count = Product::count();
        $string = 'Products';

        return view('voyager::dimmer', array_merge($this->config, [
            'icon'   => 'fas fa-gift fa-3x text-warning',
            'title'  => "{$count} {$string}",
            'text'   => __('You have '.$count.' products in your database. Click on button below to view all '.Str::lower($string).'.'),
            'button' => [
                'text' => __('View Products'),
                'link' => route('voyager.product.index'),
            ],
            'image' => asset('storage/settings/widgets/product.jpg'),
        ]));
    }

    /**
     * Determine if the widget should be displayed.
     *
     * @return bool
     */
    public function shouldBeDisplayed()
    {
        return app('VoyagerAuth')->user()->can('browse', Voyager::model('User'));
    }
}
