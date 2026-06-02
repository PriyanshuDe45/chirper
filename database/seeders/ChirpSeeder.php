<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Chirp;
use App\Models\User;

class ChirpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Priyanshu',
                'email' => 'priyanshu@example.com',
            ],
            [
                'name' => 'Alex',
                'email' => 'alex@example.com',
            ],
            [
                'name' => 'Sarah',
                'email' => 'sarah@example.com',
            ],
        ];

        $messages = [
            'Laravel deployment successful 🚀',
            'Working on the Chirper project.',
            'AWS setup completed today.',
            'Tailwind + DaisyUI looks amazing.',
            'Testing some mock chirp data.'
        ];

        foreach ($users as $index => $userData) {

            $user = User::firstOrCreate(
                ['email' => $userData['email']],
                [
                    'name' => $userData['name'],
                    'password' => bcrypt('password'),
                ]
            );

            Chirp::create([
                'user_id' => $user->id,
                'message' => $messages[$index % count($messages)],
            ]);
        }
    }
}
