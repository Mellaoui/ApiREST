<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateIdea extends Component
{
    
    use WithFileUploads;

    public $title;
    public $category = 1;
    public $description;
    public $ideas;
  

    protected $rules = [
        'title' => 'required|min:4',
        'category' => 'required|integer|exists:categories,id',
        'description' => 'required|min:4',
    ];


    public function createIdea(Request $request)
    {
        
        if (auth()->check()) {
           
             $this->validate([
                'title' => 'required|min:4',
                'category' => 'required|integer|exists:categories,id',
                'description' => 'required|min:4',
            ]);

           Idea::create([
                'user_id' => auth()->id(),
                'category_id' => $this->category,
                'status_id' => 1,
                'title' => $this->title,
                'description' => $this->description,
            ]);

            
        
            session()->flash('success_message', 'Idea was added successfully.');

            $this->reset();

            return redirect()->route('community');
        }

        abort(Response::HTTP_FORBIDDEN);
    }


    public function render()
    {
        return view('livewire.create-idea',['categories'=>Category::all()]);
    }

}
