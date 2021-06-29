<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Illuminate\Http\Response;
use Livewire\Component;

class ManageSpam extends Component
{
    public $idea;

    public function mount(Idea $idea){
        $this->idea = $idea;
    }

    public function markAsSpam(){

        if(auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->idea->spam_reports++;
        $this->idea->save();

        $this->emit('ideasMarkedAsSpam');
        $this->dispatchBrowserEvent('swal',[
            'title'=> 'Marked as spam',
            'icon' => 'warning',
        ]);
    }
    
    public function render()
    {
        return view('livewire.manage-spam');
    }
}
