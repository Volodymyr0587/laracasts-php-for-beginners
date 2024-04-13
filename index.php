<?php

$books = [
    [
        "name" => "The Knight of the Swords",
        "author" => "Michael Moorcock",
        "releaseYear" => 1971,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "The Queen of the Swords",
        "author" => "Michael Moorcock",
        "releaseYear" => 1971,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "The King of the Swords",
        "author" => "Michael Moorcock",
        "releaseYear" => 1971,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "The Time Machine",
        "author" => "H. G. Wells",
        "releaseYear" => 1895,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "The Invisible Man",
        "author" => "H. G. Wells",
        "releaseYear" => 1897,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "The War of the Worlds",
        "author" => "H. G. Wells",
        "releaseYear" => 1898,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "The Shining",
        "author" => "Stephen King",
        "releaseYear" => 1977,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "Pet Sematary",
        "author" => "Stephen King",
        "releaseYear" => 1983,
        "purchaseUrl" => 'http://example.com',
    ],
    [
        "name" => "The Green Mile",
        "author" => "Stephen King",
        "releaseYear" => 1996,
        "purchaseUrl" => 'http://example.com',
    ]
];


$filteredBooks = array_filter($books, function ($book) {
    return $book['author'] === 'Stephen King';
});

require "index.view.php";