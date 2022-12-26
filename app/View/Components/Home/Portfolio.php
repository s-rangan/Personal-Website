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
        $this->items =[
            [
                'category' => ['R'],
                'title' => 'Cyclistic Bike Share Case Study',
                'image' => url('/img/projectImgs/cyclistic-bike-share.png'),
                'link' => ''
            ],
            [
                'category' => ['SQL'],
                'title' => 'COVID Data Exploration',
                'image' => url('/img/projectImgs/Covid19.png'),
                'link' => 'https://github.com/s-rangan/PortfolioProjects/blob/main/COVIDdata_Project_Script.sql'
            ],
            [
                'category' => ['Jupyter Playbook'],
                'title' => 'Pokemon Correlation Project',
                'image' => url('/img/projectImgs/pokemon.jpeg'),
                'link' => 'https://github.com/s-rangan/PortfolioProjects/blob/main/Pokemon/Pokemon%20Correlation%20Project.ipynb'
            ],
            [
                'category' => ['Jupyter Playbook'],
                'title' => 'Movie Correlation Project',
                'image' => url('/img/projectImgs/movieCorrelation.webp'),
                'link' => 'https://github.com/s-rangan/PortfolioProjects/blob/main/Movie%20Correlation%20Project.ipynb'
            ],
            [
                'category' => ['Jupyter Playbook'],
                'title' => 'Nashville Housing Data Cleaning Project',
                'image' => url('/img/projectImgs/nashville-housing.jpeg'),
                'link' => 'https://github.com/s-rangan/PortfolioProjects/blob/main/NashvilleHousing_DataCleaning_Project.sql'
            ],
            [
                'category' => ['SQL'],
                'title' => 'Amazon Web Scraping Project',
                'image' => url('/img/projectImgs/amazon-logo.png'),
                'link' => 'https://github.com/s-rangan/PortfolioProjects/blob/main/Amazon%20Web%20Scraping%20Project.ipynb'
            ],
            [
                'category' => ['Laravel', 'Tailwind.css', 'Alpine.js'],
                'title' => 'Portfolio Website',
                'image' => url('/img/projectImgs/PortfolioSite.png'),
                'link' => 'https://github.com/s-rangan/Personal-Website'
            ],
            [
                'category' => ['Unity Game Engine', 'Angular'],
                'title' => 'Capstone Project: Virtual Lab Tour',
                'image' => url('/img/projectImgs/LFVRTourCapstone.png'),
                'link' => 'https://learning-factory-vr-tour.firebaseapp.com/'
            ],
            [
                'category' => ['Tableau'],
                'title' => 'Tableau Dashboards',
                'image' => url('/img/projectImgs/tableau-logo.png'),
                'link' => 'https://public.tableau.com/app/profile/sriram.rangan3331'
            ],
        ];
        

        $this->tabs = array_unique(Arr::flatten(Arr::pluck($this->items, 'category')));
        sort($this->tabs);
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
