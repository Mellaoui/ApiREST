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

        if( auth()->user()){

            if(auth()->user()->IsAdmin() || auth()->user()->id == $this->idea->user_id){
                $this->idea->status_id = $this->status;
                $this->idea->save();
                $this->emit('statusWasUpdated');
                $this->dispatchBrowserEvent('swal',[
                    'title'=> 'Status Updated',
                    'icon' => 'success',
                ]);
            }else{
                //$this->emit('statusWasUpdated');
                //session()->flash('message', 'You can not set status to Others ideas');
                $this->dispatchBrowserEvent('swal',[
                    'title'=> 'Cannot set status on others ideas',
                    'icon' => 'error',
                ]);
            }
        }else{
           return redirect()->route('login');
        }
        
       
    }

    public function render()
    {
        return view('livewire.set-status');
    }

}   
