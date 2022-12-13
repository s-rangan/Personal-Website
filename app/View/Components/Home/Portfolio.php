<?php

namespace App\View\Components\Home;

use Illuminate\Support\Arr;
use Illuminate\View\Component;
use function url;
use function view;

class Portfolio extends Component
{
    public array $items = [];
    public array $tabs = [];
    
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this-> items =[
            [
                'category' => ['SQL'],
                'title' => 'COVID Data Project',
                'image' => url('/img/survey.png'),
                'link' => 'https://github.com/s-rangan/PortfolioProjects/blob/main/COVIDdata_Project_Script.sql'
            ],
            [
                'category' => ['Jupyter Playbook'],
                'title' => 'Movie Correlation Project',
                'image' => url('/img/yii2-ecommerce.jpg'),
                'link' => 'https://github.com/s-rangan/PortfolioProjects/blob/main/Movie%20Correlation%20Project.ipynb'
            ],
            [
                'category' => ['Unity Game Engine', 'Angular'],
                'title' => 'Capstone Project: Virtual Tour of the Learning Factory',
                'image' => url('/img/projectImgs/LFVRTourCapstone.png'),
                'link' => 'https://learning-factory-vr-tour.firebaseapp.com/'
            ],
        ];
        

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.home.portfolio');
    }
}
