<?php
use App\Note;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NoteExerciseTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_notes_summary_and_notes_details()
    {
        $text = 'Begin of the note. Unde eius rerum minus facere nihil tempora aliquam. Odio qui eveniet expedita. Repudiandae et nulla quaerat in et ut voluptatem. Fugiat enim voluptates consectetur vero. Unde velit consectetur esse deleniti. ';
        $text .= 'End of the note';
        $note = Note::create(['note' => $text]);

        $this->visit('notes')
            ->see('Begin of the note')
            ->seeInElement('.label', 'Others')
            ->dontSee('End of the note')
            ->seeLink('View note')
            ->click('View note')
            ->see($text)
            ->seeLink('View all notes', 'notes');
    }
}
