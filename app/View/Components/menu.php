<?php

namespace App\View\Components;

use Illuminate\View\Component;

class menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $active ; 
    public function __construct( $active)
    {
        //

        $this->active= $active ; 
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        $list =$this->list(); 
     
        return view('components.menu',['list'=>$list, 'active'=>$this->active]);
    }
    public function list()
    {
        return [
            [
                'label'=> 'Dashboard'
            ],
            [
                'label'=> 'Movie'
            ] ,           
            [
                'label'=> 'Teater'
            ],
            [
                'label'=> 'Tiket '
            ],
            [
                'label'=> 'user'
            ],

         ];


    }
    public function isActive($label)

    {
        return $label === $this->active ; 

    }
}
