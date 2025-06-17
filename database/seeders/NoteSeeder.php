<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Note;

class NoteSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::where('email', 'test@example.com')->first();

        if ($user) {
            Note::factory()->count(10)->create([
                'user_id' => $user->id,
            ]);
        } else {
            echo "❌ User with email test@example.com not found.\n";
        }
    }
}
