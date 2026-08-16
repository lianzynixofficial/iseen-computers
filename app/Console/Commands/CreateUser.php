<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    protected $signature = 'user:create';

    protected $description = 'Create a new user';

    public function handle(): int
    {
        $name = $this->ask('User name');
        $email = $this->ask('User email');

        if (User::where('email', $email)->exists()) {
            $this->error('A user with this email already exists.');

            return self::FAILURE;
        }

        $password = $this->secret('User password');

        if (strlen($password) < 6) {
            $this->error('Password must be at least 6 characters.');

            return self::FAILURE;
        }

        $passwordConfirmation = $this->secret('Confirm password');

        if ($password !== $passwordConfirmation) {
            $this->error('Passwords do not match.');

            return self::FAILURE;
        }

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
            'role' => 'user',
        ]);

        $this->newLine();
        $this->info('User account created successfully.');
        $this->line("Email: {$email}");
        $this->line('Role: user');

        return self::SUCCESS;
    }
}
