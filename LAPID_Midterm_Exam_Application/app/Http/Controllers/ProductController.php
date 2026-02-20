<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $theme = 'Books';

        $products = [
            [
                'title' => 'This Is How You Lose the Time War',
                'author' => 'Amal El-Mohtar & Max Gladstone',
                'year' => 2019,
                'description' => 'A lyrical time-traveling epistolary novella about two agents from opposing futures who fall in love.',
                'tags' => ['sapphic', 'novella', 'science fiction'],
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1759084233i/43352954.jpg',
                'link' => 'https://www.goodreads.com/book/show/43352954-this-is-how-you-lose-the-time-war'
            ],
            [
                'title' => 'The Miseducation of Cameron Post',
                'author' => 'Emily M. Danforth',
                'year' => 2012,
                'description' => 'A coming-of-age story about grief, identity, and first love between girls in 1990s America.',
                'tags' => ['sapphic', 'young adult', 'contemporary'],
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1531501951i/40801157.jpg',
                'link' => 'https://www.goodreads.com/book/show/16224505-the-miseducation-of-cameron-post'
            ],
            [
                'title' => 'The Priory of the Orange Tree',
                'author' => 'Samantha Shannon',
                'year' => 2019,
                'description' => 'A sweeping, stand-alone epic high fantasy novel that reimagines dragon lore across a divided world, featuring strong female leaders, queer romance, and a fight against an ancient, rising evil.',
                'tags' => ['sapphic', 'fantasy', 'dragon'],
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1700221964i/40275288.jpg',
                'link' => 'https://www.goodreads.com/book/show/40275288-the-priory-of-the-orange-tree'
            ],
            [
                'title' => 'The Seven Husbands of Evelyn Hugo',
                'author' => 'Taylor Jenkins Reid',
                'year' => 2017,
                'description' => 'A glamorous and poignant novel about the life of a legendary Hollywood actress, her seven marriages, and the secrets she keeps.',
                'tags' => ['sapphic', 'historical', 'literary fiction'],
                'cover' => 'https://d28hgpri8am2if.cloudfront.net/book_images/onix/cvr9781398542143/the-seven-husbands-of-evelyn-hugo-deluxe-edition-hardback-9781398542143_hr.jpg',
                'link' => 'https://www.goodreads.com/book/show/34426652-the-seven-husbands-of-evelyn-hugo'
            ],
            [
                'title' => 'The Price of Salt (Carol)',
                'author' => 'Patricia Highsmith',
                'year' => 1952,
                'description' => 'A groundbreaking novel about a forbidden love affair between two women in 1950s America.',
                'tags' => ['sapphic', 'historical', 'romance'],
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1628139806i/52258.jpg',
                'link' => 'https://www.goodreads.com/book/show/52258.The_Price_of_Salt'
            ],
            [
                'title' => 'Last Night at the Telegraph Club',
                'author' => 'Malinda Lo',
                'year' => 2014,
                'description' => 'A coming-of-age novel set in 1950s San Francisco, following a teenage girl who discovers a secret society of lesbians.',
                'tags' => ['sapphic', 'young adult', 'historical'],
                'cover' => 'https://images.squarespace-cdn.com/content/v1/58dd71ebebbd1a51648718d8/1668114353411-KUQ897BNUV6O7XS574N6/Brazil+LNATTC+Front+Cover.jpg',
                'link' => 'https://www.goodreads.com/book/show/35224992-last-night-at-the-telegraph-club'
            ],
            [
                'title' => 'Orlando',
                'author' => 'Virginia Woolf',
                'year' => 1928,
                'description' => 'A groundbreaking novel that follows the life of Orlando, an English nobleman who lives for centuries and changes gender along the way, exploring themes of identity, love, and the fluidity of gender.',
                'tags' => ['sapphic', 'literary fiction', 'gender fluidity'], 
                'cover' => 'https://images.randomhouse.com/cover/9780593685389',
                'link' => 'https://www.goodreads.com/book/show/4040.Orlando'
            ],
            [
                'title' =>'Summer of Salt',
                'author' => 'Katrina Leno',
                'year' => 2018,
                'description' => 'A magical realism novel set on a small island, following a teenage girl who discovers her family’s history of witchcraft and the secrets that come with it.',
                'tags' => ['sapphic', 'young adult', 'magical realism'],
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1507335581i/35230420.jpg',
                'link' => 'https://www.goodreads.com/book/show/35230420-summer-of-salt'
            ],
            [
                'title' => 'Crier\'s War',
                'author' => 'Nina Varela',
                'year' => 2019,
                'description' => 'A fantasy novel set in a world where humans and sentient androids coexist, following the story of a young woman who becomes embroiled in a conflict between the two groups and finds herself falling in love with an android.',
                'tags' => ['sapphic', 'fantasy', 'science fiction'],
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1553803423i/41951626.jpg',
                'link' => 'https://www.goodreads.com/book/show/41951626-crier-s-war'
            ],
            [
                'title' => 'Carmilla',
                'author' => 'Joseph Sheridan Le Fanu',
                'year' => 1872,
                'description' => 'A gothic novella about a young woman who is terrorized by a vampire named Carmilla.',
                'tags' => ['sapphic', 'gothic', 'horror'],
                'cover' => 'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1657795822i/48037.jpg',
                'link' => 'https://www.goodreads.com/book/show/48037.Carmilla'
            ],
            [
                'title'=>'Codename Villanelle',
                'author'=>'Luke Jennings',
                'year'=>2014,
                'description'=>'A spy thriller novel that follows the story of Villanelle, a skilled assassin, and Eve Polastri, the intelligence agent tasked with capturing her. The novel explores their complex relationship as they engage in a deadly game of cat and mouse across Europe.',
                'tags'=>['sapphic', 'thriller', 'spy fiction'],
                'cover'=>'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1512576839i/36546651.jpg',
                'link'=>'https://www.goodreads.com/book/show/36546651-villanelle'
            ],
            [
                'title'=>'The Henna Wars',
                'author'=>'Nayyirah Waheed & Adiba Jaigirdar',
                'year'=>2023,
                'description'=>'A novel about a young woman who discovers her family\'s secret history of henna artistry and the power it holds in her community.',
                'tags'=>['sapphic', 'contemporary fiction', 'family saga'],
                'cover'=>'https://m.media-amazon.com/images/S/compressed.photo.goodreads.com/books/1573648325i/44286258.jpg',
                'link'=>'https://www.goodreads.com/book/show/44286258-the-henna-wars'
            ]
                
        ];

        return view('products', compact('products', 'theme'));
    }
}
