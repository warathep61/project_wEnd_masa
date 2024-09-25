<?php

namespace Database\Seeders;

use App\Models\Music;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MusicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Music::insert([
            [
                'title' => 'Shape of You',
                'artist' => 'Ed Sheeran',
                'album' => '÷ (Divide)',
                'genre' => 'Pop',
                'release_year' => 2017,
                'track_number' => 1,
                'label' => 'Asylum Records',
                'duration' => '3:53',
                'composer' => 'Ed Sheeran, Steve Mac, John McDaid',
                'producer' => 'Steve Mac',
                'explicit_content' => false,
                'language' => 'English',
                'cover_image' => 'link_to_cover_image_1.jpg',
                'file_path' => 'path_to_audio_file_1.mp3',
                'plays' => 0,
            ],
            [
                'title' => 'Blinding Lights',
                'artist' => 'The Weeknd',
                'album' => 'After Hours',
                'genre' => 'Synthwave',
                'release_year' => 2020,
                'track_number' => 1,
                'label' => 'XO, Republic Records',
                'duration' => '3:20',
                'composer' => 'The Weeknd, Ahmad Balshe, Jason Quenneville, Max Martin',
                'producer' => 'Max Martin, Oscar Holter',
                'explicit_content' => false,
                'language' => 'English',
                'cover_image' => 'link_to_cover_image_2.jpg',
                'file_path' => 'path_to_audio_file_2.mp3',
                'plays' => 0,
            ],
            [
                'title' => 'Levitating',
                'artist' => 'Dua Lipa',
                'album' => 'Future Nostalgia',
                'genre' => 'Disco',
                'release_year' => 2020,
                'track_number' => 6,
                'label' => 'Warner Records',
                'duration' => '3:23',
                'composer' => 'Dua Lipa, Sarah Hudson, Clarence Coffee Jr.',
                'producer' => 'Daniel Nigro',
                'explicit_content' => false,
                'language' => 'English',
                'cover_image' => 'link_to_cover_image_3.jpg',
                'file_path' => 'path_to_audio_file_3.mp3',
                'plays' => 0,
            ],
        ]);
    }
}
