<?php

use App\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    protected $admins = 
    [
        'admin@app.com' => [
            'name' => 'Admin Admin',
        ],
        'admin@test.nl' => [
            'name' => 'Admin Test',
        ],
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::updateOrCreate(['name' => 'superadmin']);
        foreach ($this->admins as $email => $admin) {
            $name = explode(' ', $admin['name']);
            $user = User::firstOrNew([
                'email' => $email,
            ], [
                'firstname' => $name[0],
                'lastname'  => $name[1],
            ]);
            if (is_null($user->password)) {
                $user->password = '';
            }
            $user->save();
            $user->assignRole($role);
        }
    }
}