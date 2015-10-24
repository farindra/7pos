<?php
//use Illuminate\Database\Seeder;
//use Illuminate\Database\Eloquent\Model;

class PostTableSeeder extends Seeder {
 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('users')->delete();
 
        User::create(array(
 
            'first_name'    => 'Farindra',
            'last_name'     => 'Eka pg_untrace()',
            'email'         => 'ekaputra@farindra.com',
            'username'      => 'admin',
            'password'      => Hash::make('asd321'); 
 
        ));
 
    }
 
}