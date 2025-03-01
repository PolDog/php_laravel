<?php

namespace App\Admin\Widgets;

use App\Models\Product;
use Arrilot\Widgets\AbstractWidget;

class ProductsWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Product::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => "voyager-news",
            'title' => "счетчик продуктов",
            'text' => "Количество продуктов: {$count}",
            'image' => "",
            'button' => [
                'text' => "Перейти к списку",
                'link' => '',
            ],
        ]));
    }

    public function shouldBeDisplayed()
    {
        return true;
    }
}
