<?php

use Illuminate\Database\Seeder;

class NoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $notebooks = \App\Notebook::all();
        $numbers = ['One', 'Two', 'Three', 'Four', 'Five'];
        foreach ($notebooks as $notebook) {
            foreach ($numbers as $number) {
                \App\Note::create([
                    'notebook_id' => $notebook->id,
                    'title' => 'Note ' . $number,
                    'body' => '<p><strong>' . randString(random_int(4, 8)) . '</strong>&nbsp;<s>' . randString(random_int(4, 8)) . ' </s><em>' . randString(random_int(4, 8)) . '</em></p>

<table border="1" cellpadding="1" cellspacing="1" style="width:500px">
	<tbody>
		<tr>
			<td>' . randString(random_int(4, 6)) . '</td>
			<td>' . randString(random_int(3, 5)) . '</td>
		</tr>
		<tr>
			<td>' . randString(random_int(4, 6)) . '</td>
			<td>' . randString(random_int(3, 5)) . '</td>
		</tr>
		<tr>
			<td>' . randString(random_int(4, 6)) . '</td>
			<td>' . randString(random_int(3, 5)) . '</td>
		</tr>
	</tbody>
</table>

<p>&nbsp;</p>
'
                ]);
            }
        }
    }
}
