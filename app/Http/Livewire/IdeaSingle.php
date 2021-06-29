<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaSingle extends Component
{
    public $idea;
    public $votesCount;
    public $Isvoted;


    protected $listeners = ['statusWasUpdated','ideaWasUpdated','commented' ];

    public function statusWasUpdated(){
        $this->idea->refresh();
    }
    
    public function ideaWasUpdated(){
        $this->idea->refresh();
    }

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
        $this->idea->refresh();
    }

   
    public function commented()
    {
        $this->idea->refresh();
    }

    public function render()
    {
        return view('livewire.idea-single');
    }
}
