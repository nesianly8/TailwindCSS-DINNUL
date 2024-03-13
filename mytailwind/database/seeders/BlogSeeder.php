<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            Blog::create([
                'title' => 'Judul Pertama',
                'slug' => 'judul-pertama',
                'image' => '1project.jpeg',
                'body' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam quis leo id nisl gravida tincidunt. Duis cursus orci ut luctus auctor. Phasellus rutrum et justo vel ullamcorper. Cras vestibulum, odio finibus vehicula gravida, libero lacus suscipit nisl, id aliquet orci mi vel nulla. Curabitur et dui dolor. In aliquam ultricies leo id sollicitudin. Sed convallis bibendum nibh, quis pulvinar orci tempor vitae. Maecenas ipsum ante, ornare vel hendrerit ac, consectetur sit amet justo. Suspendisse gravida sagittis porta. Etiam ante nibh.",
            ]);
    }
}
