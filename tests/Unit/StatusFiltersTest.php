<?php

namespace Tests\Unit;

use App\Models\Category;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;


class StatusFiltersTest extends TestCase
{

    use RefreshDatabase;
    /** @test */

     public function can_get_count_of_each_status()
    {
        $user = User::factory()->create();

        $categoryOne = Category::factory()->create(['name'=>'Category 1']);

        $statusOpen = Status::factory()->create(['name'=>'Open']);
        $statusConsidering = Status::factory()->create(['name'=>'Considering']);
        $statusInProgress = Status::factory()->create(['name'=>'InProgress']);
        $statusImplemented = Status::factory()->create(['name'=>'Implemented']);
        $statusClosed = Status::factory()->create(['name'=>'Closed']);

        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id'=> $categoryOne->id,
            'status_id'=> $statusOpen->id
        ]);
        Idea::factory()->create([
            'user_id' => $user->id,
            'category_id'=> $categoryOne->id,
            'status_id'=> $statusOpen->id
        ]); Idea::factory()->create([
            'user_id' => $user->id,
            'category_id'=> $categoryOne->id,
            'status_id'=> $statusOpen->id
        ]); Idea::factory()->create([
            'user_id' => $user->id,
            'category_id'=> $categoryOne->id,
            'status_id'=> $statusOpen->id
        ]); Idea::factory()->create([
            'user_id' => $user->id,
            'category_id'=> $categoryOne->id,
            'status_id'=> $statusOpen->id
        ]);

        $this->assertEquals(5, Status::getCount()['all_statuses']);
        
     }
}
