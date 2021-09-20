<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\ClientOrder;
use App\Models\Comment;
use App\Models\Idea;
use App\Models\Status;
use App\Models\User;
use App\Models\Vote;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    private $category_count = 5;
    private $user_count = 20;
    private $client_order_count = 20;

    public function run()
    {
        User::factory()->create([
            'name' => 'Mohamed',
            'email' => 'modijavelin@gmail.com'
        ]);

        User::factory()
            ->count($this->user_count - 1)
            ->create();

        Category::factory()
            ->count($this->category_count)
            ->sequence(fn ($sequence) => [
                'name' => 'Category ' . $sequence->index + 1
            ])
            ->create();

        ClientOrder::factory()
            ->count($this->client_order_count)
            ->create();

        // Status::factory()->create(['name' => 'Open']);
        // Status::factory()->create(['name' => 'Considering']);
        // Status::factory()->create(['name' => 'In Progress']);
        // Status::factory()->create(['name' => 'Implemented']);
        // Status::factory()->create(['name' => 'Closed']);

        // Idea::factory(100)->create();

        //Generate unique votes.ensure idea_id and user_id are unique for each row

        // foreach (range(1, 20) as $user_id) {
        //     foreach (range(1, 100) as $idea_id) {
        //         if ($idea_id % 2 === 0) {
        //             Vote::factory()->create([
        //                 'user_id' => $user_id,
        //                 'idea_id' => $idea_id
        //             ]);
        //         }
        //     }
        // }

        //Generate comments for ideas

        // foreach (Idea::all() as $idea) {
        //     Comment::factory(5)->existing()->create(['idea_id' => $idea->id]);
        // }

    }
}
