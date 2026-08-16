<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateAdminUser extends Command
{
    protected $signature = 'admin:create';

    protected $description = 'Create the first admin user';

    public function handle(): int
    {
        $name = $this->ask('Admin name');
        $email = $this->ask('Admin email');

        if (User::where('email', $email)->exists()) {
            $this->error('A user with this email already exists.');

            return self::FAILURE;
        }

        $password = $this->secret('Admin password');

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
            'role' => 'admin',
        ]);

        $this->newLine();
        $this->info('Admin account created successfully.');
        $this->line("Email: {$email}");
        $this->line('Password: [hidden]');

        return self::SUCCESS;
    }
}
