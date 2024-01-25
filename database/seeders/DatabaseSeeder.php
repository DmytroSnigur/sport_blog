<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
        'name' => 'Training and fitness',
        'description' => 'training programs for various types of fitness, advice on increasing physical activity, instructions for performing various exercises.',
        ]);

        DB::table('categories')->insert([
        'name' => 'Health and lifestyle',
        'description' => 'articles about the benefits of physical activity for health, recipes for healthy food and diet, tips for maintaining emotional and physical health.',
        ]);

        DB::table('categories')->insert([
        'name' => 'Sports news and analysis',
        'description' => 'Reviews of sports events and competitions, analysis of performances of athletes and teams, forecasts and predictions in the world of sports.',
        ]);

        DB::table('categories')->insert([
        'name' => 'Sports types',
        'description' => 'Detailed articles about various sports, history and development of various sports fields, reviews of sports equipment and accessories.',
        ]);

        DB::table('categories')->insert([
        'name' => 'Tournaments competitions',
        'description' => 'Schedule of future sports events, information about tournaments and competitions in different countries, results and impressions from the held tournaments.',
        ]);

        DB::table('posts')->insert([
            'title' => '5 secrets of success',
            'content' => 'Set specific goals: Instead of general goals like "get fitter," set specific, measurable, and achievable goals. For example, run 5 km in 30 minutes or gain 10 kg of weight within a month. Create a schedule and stick to it: Plan your workouts for the week, taking into account the variety of exercises, rest and duration of the sessions. Stick to this schedule to ensure consistency and steady progress. Use proper technique: Familiarize yourself with proper exercise technique before starting your workouts. Improper technique can lead to injury and hinder your progress. Eat healthy: Your diet has a huge impact on your training results. Provide your body with energy and nutrients, especially before and after workouts. Rest: Excessive training without rest can lead to overexertion and injury. It is important to allow time for recovery, to allow the muscles to rest and recover. Remember that everyone is unique and it is important to identify your individual needs and limitations in order to achieve successful results.',
            'is_published' => 1,
            'category_id' => 1,
        ]);

        DB::table('posts')->insert([
            'title' => 'About health eating 10 healthy foods',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'is_published' => 0,
            'category_id' => 2,
        ]);

        DB::table('posts')->insert([
            'title' => 'In February fight Usyka and Fury',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'is_published' => 1,
            'category_id' => 3,
        ]);

        DB::table('posts')->insert([
            'title' => 'About Jokovich training camp',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'is_published' => 1,
            'category_id' => 4,
        ]);

        DB::table('posts')->insert([
            'title' => 'Elina Svitolina new achiev in AO',
            'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'is_published' => 0,
            'category_id' => 5,
        ]);

        DB::table('comments')->insert([
            'content' => 'ha ha ha ha ...',
            'post_id' => 1,
        ]);

        DB::table('comments')->insert([
            'content' => 'it is cool.........................................................',
            'post_id' => 2,
        ]);

        DB::table('comments')->insert([
            'content' => 'super!!!!',
            'post_id' => 3,
        ]);

        DB::table('comments')->insert([
            'content' => 'it is a good',
            'post_id' => 4,
        ]);

        DB::table('comments')->insert([
            'content' => 'super!!!!',
            'post_id' => 5,
        ]);

        DB::table('comments')->insert([
            'content' => 'lol',
            'post_id' => 1,
        ]);


               // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
