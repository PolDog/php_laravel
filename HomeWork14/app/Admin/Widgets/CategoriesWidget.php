<?php

namespace App\Admin\Widgets;

use App\Models\Category;
use Arrilot\Widgets\AbstractWidget;

class CategoriesWidget extends AbstractWidget
{
    protected $config = [];

    public function run()
    {
        $count = Category::count();

        return view('voyager::dimmer', array_merge($this->config, [
            'icon' => "voyager-news",
            'title' => "счетчик категорий",
            'text' => "Количество категорий: {$count}",
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
