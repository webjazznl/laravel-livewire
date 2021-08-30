<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $name = 'Jelly';

    public function mount(Request $request, $name = 'Bar')
    {
        $this->name = $request->input('name', $name);
    }

    public function render()
    {
        return view('livewire.hello-world');
    }
}
