// app/database/seeds/UserTableSeeder.php

<?php

class UserTableSeeder extends Seeder
{

public function run()
{
    DB::table('admins')->delete();
    User::create(array(
        'name'     => 'Hassan',
        'email'    => 'admin@admin.com',
        'password' => Hash::make('awesome'),
    ));
}

}