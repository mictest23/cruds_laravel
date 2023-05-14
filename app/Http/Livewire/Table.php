<?php

namespace App\Http\Livewire;

use App\Models\Record;
use Livewire\Component;
use Livewire\WithPagination;

class Table extends Component
{

    use WithPagination;

    public $search;


    public function render()
    {
        // $records = Record::all();
        // return view('livewire.table',['records'=>$records]);

        $search = '%'.$this->search.'%';

        return view('livewire.table', [
            'records' => Record::paginate(5),
            'records' => Record::where('name','like', $search)->paginate(5)
        ]);
    }
}
