<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->command->info('Users table seeded');
        $this->call(RolesTableSeeder::class);
        $this->command->info('Roles table seeded');
        $this->call(PermissionsTableSeeder::class);
        $this->command->info('Permissions table seeded');
        $this->call(RolesUsersTableSeeder::class);
        $this->command->info('Role user table seeded');
        $this->call(UsersRolesPermissionsTableSeeder::class);
        $this->command->info('User role permissions table seeded');
    }
}
