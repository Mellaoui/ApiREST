<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use App\Models\User;
use Livewire\Component;

class CommunityMain extends Component
{

    public $idea;
    public $votesCount;
    public $Isvoted;

    public function mount(Idea $idea, $votesCount){
        $this->idea = $idea;
        $this->votesCount = $votesCount;
        $this->Isvoted = $idea->voted_by_user;
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
        return view('livewire.community-main');
    }
}
