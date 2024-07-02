<?php

namespace Database\Seeders;

use App\Models\SoalCbt as ModelsSoalCbt;
use Illuminate\Database\Seeder;

class SoalCBT extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $question = ModelsSoalCbt::create([
            'isi_soal' => 'What is the capital of France?',
        ]);

        $question->jawabanCbt()->createMany([
            ['jawaban' => 'Paris', 'is_correct' => true],
            ['jawaban' => 'London', 'is_correct' => false],
            ['jawaban' => 'Berlin', 'is_correct' => false],
        ]);
    }
}
