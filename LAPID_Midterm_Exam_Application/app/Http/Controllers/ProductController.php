<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a list of products for the selected theme.
     * Theme: Books (sapphic / women-loving-women)
     */
    public function index()
    {
        $theme = 'Books (Sapphic / Women-loving-women)';

        $products = [
            [
                'title' => 'This Is How You Lose the Time War',
                'author' => 'Amal El-Mohtar & Max Gladstone',
                'year' => 2019,
                'description' => 'A lyrical time-traveling epistolary novella about two agents from opposing futures who fall in love.',
                'tags' => ['sapphic', 'novella', 'science fiction']
            ],
            [
                'title' => 'The Night Watch',
                'author' => 'Sarah Waters',
                'year' => 2006,
                'description' => 'A sweeping historical novel following the lives and loves of several women in 1940s London.',
                'tags' => ['sapphic', 'historical', 'literary fiction']
            ],
            [
                'title' => 'Annie on My Mind',
                'author' => 'Nancy Garden',
                'year' => 1982,
                'description' => 'A classic YA novel about two teenage girls who fall in love and face prejudice.',
                'tags' => ['sapphic', 'young adult', 'coming of age']
            ],
            [
                'title' => 'The Miseducation of Cameron Post',
                'author' => 'Emily M. Danforth',
                'year' => 2012,
                'description' => 'A coming-of-age story about grief, identity, and first love between girls in 1990s America.',
                'tags' => ['sapphic', 'young adult', 'contemporary']
            ],
            [
                'title' => 'The Priory of the Orange Tree',
                'author' => 'Samantha Shannon',
                'year' => 2019,
                'description' => 'A sweeping, stand-alone epic high fantasy novel that reimagines dragon lore across a divided world, featuring strong female leaders, queer romance, and a fight against an ancient, rising evil.',
                'tags' => ['sapphic', 'fantasy', 'dragon']
            ],
            [
                    'title' => 'The Seven Husbands of Evelyn Hugo',
                    'author' => 'Taylor Jenkins Reid',
                    'year' => 2017,
                    'description' => 'A glamorous and poignant novel about the life of a legendary Hollywood actress, her seven marriages, and the secrets she keeps.',
                    'tags' => ['sapphic', 'historical', 'literary fiction']
            ],
            [
                    'title' => 'The Price of Salt (Carol)',
                    'author' => 'Patricia Highsmith',
                    'year' => 1952,
                    'description' => 'A groundbreaking novel about a forbidden love affair between two women in 1950s America.',
                    'tags' => ['sapphic', 'historical', 'romance']
            ],
            [
                    'title' => 'Last Night at the Telegraph Club',
                    'author' => 'Malinda Lo',
                    'year' => 2014,
                    'description' => 'A coming-of-age novel set in 1950s San Francisco, following a teenage girl who discovers a secret society of lesbians.',
                    'tags' => ['sapphic', 'young adult', 'historical']
            ],
            [
                    'title' => 'Orlando',
                    'author' => 'Virginia Woolf',
                    'year' => 1928,
                    'description' => 'A groundbreaking novel that follows the life of Orlando, an English nobleman who lives for centuries and changes gender along the way, exploring themes of identity, love, and the fluidity of gender.',
                    'tags' => ['sapphic', 'literary fiction', 'gender fluidity']    
            ],
            [
                    'title' =>'Summer of Salt',
                    'author' => 'Katrina Leno',
                    'year' => 2018,
                    'description' => 'A magical realism novel set on a small island, following a teenage girl who discovers her family’s history of witchcraft and the secrets that come with it.',
                    'tags' => ['sapphic', 'young adult', 'magical realism']     
            ],
            [
                    'title' => 'Crier\'s War',
                    'author' => 'Nina Varela',
                    'year' => 2019,
                    'description' => 'A fantasy novel set in a world where humans and sentient androids coexist, following the story of a young woman who becomes embroiled in a conflict between the two groups and finds herself falling in love with an android.',
                    'tags' => ['sapphic', 'fantasy', 'science fiction']
            ],
                
        ];

        return view('products', compact('products', 'theme'));
    }
}
