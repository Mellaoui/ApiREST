<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;

class SetStatus extends Component
{

    public $idea;
    public $status;

    public function mount(Idea $idea){
        $this->idea = $idea;
         
        $this->status = $this->idea->status_id;
    }

    public function setStatus(){
        $this->idea->status_id = $this->status;
        $this->idea->save();
        $this->emit('statusWasUpdated');
       
    }

    public function render()
    {
        return view('livewire.set-status');
    }

}   
