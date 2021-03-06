<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'JS',
            'Laravel',
            'Php',
            'Html'
        ];

        foreach ($tags as $tag){
            $newTag = new Tag();

            $newTag-> name = $tag;

            $newTag->save();

        }
    }
}
