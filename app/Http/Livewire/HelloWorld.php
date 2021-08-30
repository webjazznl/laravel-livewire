<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $name = 'Jelly';

    public $flower = '.';

    //Runs on the first request
    public function mount(Request $request, $name = 'Bar')
    {
        $this->name = $request->input('name', $name);
    }

    //runs every subsequent ajax request
    public function hydrate()
    {
        $this->flower .= '.';
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
