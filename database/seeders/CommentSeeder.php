<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create(['post_id' => 2, 'content' => 'Ejemplo de comentario 1']);
        Comment::create(['post_id' => 3, 'content' => 'Ejemplo de comentario 2']);
        Comment::create(['post_id' => 3, 'content' => 'Ejemplo de comentario 3']);
        Comment::create(['post_id' => 3, 'content' => 'Ejemplo de comentario 4']);

    }
}
