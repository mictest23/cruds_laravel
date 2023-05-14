<?php

namespace App\Http\Livewire;

use App\Models\Record;
use Livewire\Component;

class Input extends Component
{

    public $name, $email, $message;


    public function AddRecord(){
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        $record = new Record;
        $record->name = $this->name;
        $record->email = $this->email;
        $record->message = $this->message;
        $record->save();
    }


    public function render()
    {
        return view('livewire.input');
    }
}
