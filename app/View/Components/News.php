<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class News extends Component
{
    public $news = [
        'ASTO Emergency CEC Resolution',
        'ASTO CEC Resolution-Holding Election',
        'ASTO MoU with Kotak-Regular Employee',
        'ASTO MoU with Kotak-Contractual Employee',
        'ASTO MoU with AXIS',
        'ASTO MoU with HDFC',
        'CPF-EPS-UAN_Mapping',
        'Contributions made for Late Shri Sandeep Kumar',
        'ASTO legal fee collection-Pay Anamoly',
        'ASTO CWC Minutes of Bilateral Meeting'
    ];

    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.news');
    }
}
