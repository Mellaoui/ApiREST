<?php

namespace App\Http\Livewire;

use App\Models\Idea;
use Livewire\Component;

class IdeaSingle extends Component
{
    public $idea;
    public $votesCount;

    public function mount(Idea $idea, $votesCount){
        $this->idea = $idea;
        $this->votesCount = $votesCount;
    }

    public function render()
    {
        return view('livewire.idea-single');
    }
}
