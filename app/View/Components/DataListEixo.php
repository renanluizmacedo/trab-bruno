<?php
namespace App\View\Components;

use Illuminate\View\Component;

class dataListEixo extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $header;
    public $data;
    public $hide;

    public function __construct( $header, $data, $hide) {
        $this->header = $header;
        $this->data = $data;    
        $this->hide = $hide;   
    }

    public function render() {

        return view('components.dataListEixo');
    }
}
