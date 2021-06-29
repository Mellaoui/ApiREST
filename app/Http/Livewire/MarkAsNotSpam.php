<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;
use Illuminate\Http\Response;

class MarkAsNotSpam extends Component
{

    public $idea;

    public function mount(Idea $idea){
        $this->idea = $idea;
    }

    public function MarkAsNotSpam(){
        if(auth()->guest()){
            abort(Response::HTTP_FORBIDDEN);
        }

        $this->idea->spam_reports = 0;
        $this->idea->save();

        $this->emit('MarkedAsNotSpam');
        $this->dispatchBrowserEvent('swal',[
            'title'=> 'Marked as not spam',
            'icon' => 'warning',
        ]);
    }
    public function render()
    {
        return view('livewire.mark-as-not-spam');
    }
}
