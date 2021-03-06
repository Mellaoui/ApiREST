<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Idea;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Jorenvh\Share\Share;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateIdea extends Component
{
    
    use WithFileUploads;

    public $title;
    public $category = 1;
    public $description;
    public $newImage;

  

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
                'newImage' => 'image|max:1000'
            ]);

            $newImage =  $this->newImage->store('/','images');

           Idea::create([
                'user_id' => auth()->id(),
                'category_id' => $this->category,
                'status_id' => 1,
                'title' => $this->title,
                'description' => $this->description,
                'image' => $newImage,
            ]);

           
           
            //Share::currentPage()->facebook();
        
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
