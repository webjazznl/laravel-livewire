<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Illuminate\Http\Request;

class HelloWorld extends Component
{
    public $contacts;

    public function mount()
    {
        $this->contacts=Contact::all();
    }

    public function removeContact($id)
    {
        Contact::destroy($id);
        $this->contacts = Contact::all();
    }
    public function render()
    {
        return view('livewire.hello-world');
    }
}
