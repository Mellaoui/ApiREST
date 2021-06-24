<?php

namespace Tests\Feature;
use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VoteForIdea extends TestCase
{

    /** @test */
    public function vote_for_idea(){
        $user = User::factory()->create();

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
            $this->assertFalse($idea->isVotedByUser($user));
            $idea->vote($user);
            $this->assertTrue($idea->isVotedByUser($user));
            $idea->Unvote($user);
            
    }
        
}
