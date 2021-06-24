<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaSingle extends Component
{
    public $idea;
    public $votesCount;
    public $Isvoted;

    public function mount(Idea $idea, $votesCount){
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->Isvoted = $idea->isVotedByUser(auth()->user());
    }

    public function vote(){
        if(auth()->guest()){
            return redirect(route('login'));
        }

        if($this->Isvoted){
            $this->idea->UnVote(auth()->user());
            $this->votesCount--;
            $this->Isvoted=false;
        }else{
            $this->idea->vote(auth()->user());
            $this->votesCount++;
            $this->Isvoted=true;
        }
    }

    public function render()
    {
        return view('livewire.idea-single');
    }
}
