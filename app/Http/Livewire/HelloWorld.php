<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $names = ['Foo', 'Bar', 'Batz'];

    public function render()
    {
        return view('livewire.hello-world');
    }
}
