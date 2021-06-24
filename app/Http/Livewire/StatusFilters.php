<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Route;
use Livewire\Component;

class StatusFilters extends Component
{

    public $status = 'All';

    protected $queryString = [
        'status'
    ];

    public function mount(){
        if(Route::currentRouteName()==='showIdea'){
            $this->status = null;
        }
    }

    public function setStatus($newStatus){
        $this->status = $newStatus;

        return redirect()->route('community',['status' => $this->status,]);
    }

    public function render()
    {
        return view('livewire.status-filters');
    }
}
