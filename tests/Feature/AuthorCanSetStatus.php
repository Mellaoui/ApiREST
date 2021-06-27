<?php

namespace Tests\Feature;

use App\Models\User;
use App\Models\Category;
use App\Models\Status;
use App\Models\Idea;
use Livewire\Livewire;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthorCanSetStatus extends TestCase
{
    use RefreshDatabase;

    /** @test */

    public function check_if_author_is_logged_inu_user(){

        $user = User::factory()->create([
            'name'=>'mohamed',
            'email' => 'modijavelin@gmail.com'
        ]);

        $categoryOne = Category::factory()->create(['name'=>'Category1']);

        $statusopen = Status::factory()->create(['name'=>'Open']);

        $idea = Idea::factory()->create([
                'user_id'=>$user->id,
                'category_id'=>$categoryOne->id,
                'status_id'=>$statusopen->id,
                'title' => 'My First Idea',
                'description'=>'Description for my first idea',
            ]);


           /* Vote::create([
                'idea_id'=>$idea->id,
                'user_id'=>$user->id
            ]);*/
            Livewire::actingAs($user)
            ->test(SetStatus::class,[
                'idea' => $idea,
                
            ])->assertSet('status',$statusopen->id);
            

    }
}
