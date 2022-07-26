<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AreaFormBody extends Component
{

    private $area;
    /**
     * Create a new component instance.
     * @param \App\Models\Area $area
     * @return void
     */
    public function __construct($area = null)
    {
        $this->area = $area;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $params =
            [
                'area' => $this->area,

            ];
        return view('components.area-form-body', $params);
    }
}