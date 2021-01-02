<?php

use Illuminate\Database\Seeder;

class NoteBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\User::all();
        $numbers = ['One', 'Two', 'Three', 'Four', 'Five', 'Six'];
        foreach ($users as $user) {
            foreach ($numbers as $number) {
                \App\Notebook::create([
                    'user_id' => $user->id,
                    'name' => 'NoteBook ' . $number,
                ]);
            }
        }
    }
}
