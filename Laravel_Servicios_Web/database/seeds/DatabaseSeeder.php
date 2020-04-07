<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        self::seedUsers();
        $this->command->info('Tabla usuarios inicializada con datos!');
    }
    private function seedUsers(){

        DB::table('users')->delete();

        foreach($this->array_users_default as $user){

            $u = new User;
            $u->name = $user['name'];
            $u->email = $user['email'];
            $u->password = bcrypt($user['password']);
            $u->save();

        }

    }
}
