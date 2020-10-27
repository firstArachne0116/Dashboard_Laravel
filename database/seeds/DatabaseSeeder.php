<?php

use Illuminate\Database\Seeder;

use App\Permission;
use App\Role;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Confirmation to install fresh copy of database
        if ($this->command->confirm('Do you want to install fresh Database before Seeding, it will drop previous database schema as well as data ?')) {
            $this->command->call('migrate:fresh');
            $this->command->warn("All tables Droped, starting from fresh database.");
        }

        // Here we are seeding default permissions.
        $permissions = Permission::defaultPermissions();
        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }

        $this->command->info('Default Permissions Successfully Added!');

        // Here we are seeding default permissions.
        $rolesArray = Role::defaultRoles();

        foreach ($rolesArray as $role) {
            $role = Role::firstOrCreate(['name' => trim($role)]);

            if ($role->name == 'Administrator') {
                // Assign all permissions to admin role
                $role->permissions()->sync(Permission::all());
            }

        }

        $this->command->info('Default Roles Successfully Added!');

        // Create default admin account
        $user = new User;
        $user->name = 'admin';
        $user->email = 'admin@laravelstrap.com';
        $user->password = bcrypt('password');
        $user->email_verified_at = now();

        $user->save();
        $user->assignRole('Administrator');

        $this->command->info('Default admin login details:');
        $this->command->warn('Username : ' . $user->email);
        $this->command->warn('Password : password');

        // create dummy users.
        if ($this->command->confirm('Do you want to create dummy users? this will create 1000 fake user accounts')) {
            $users = factory(App\User::class, 1000)->create();
        }


    }
}
