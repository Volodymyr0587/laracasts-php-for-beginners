<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Demo</title>
        <!-- <style>
            body {
                display: grid;
                place-items: center;
                height: 100vh;
                margin: 0;
                font-family: sans-serif;
            }
            
        </style> -->
    </head>

    <body>
        <h1>Recomended Books</h1>

        <?php
            $books = [
                [
                    "name" => "The Knight of the Swords", 
                    "author" => "Michael Moorcock", 
                    "year" => 1971,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "The Queen of the Swords", 
                    "author" => "Michael Moorcock", 
                    "year" => 1971,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "The King of the Swords", 
                    "author" => "Michael Moorcock", 
                    "year" => 1971,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "The Time Machine", 
                    "author" => "H. G. Wells", 
                    "year" => 1895,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "The Invisible Man", 
                    "author" => "H. G. Wells", 
                    "year" => 1897,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "The War of the Worlds", 
                    "author" => "H. G. Wells", 
                    "year" => 1898,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "The Shining", 
                    "author" => "Stephen King", 
                    "year" => 1977,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "Pet Sematary", 
                    "author" => "Stephen King", 
                    "year" => 1983,
                    "purchaseUrl" => 'http://example.com',
                ],
                [
                    "name" => "The Green Mile", 
                    "author" => "Stephen King", 
                    "year" => 1996,
                    "purchaseUrl" => 'http://example.com',
                ]
            ];
        ?>

        <ul>
            <?php foreach ($books as $book): ?>
                <li>
                    <a href="<?= $book['purchaseUrl']; ?>">
                        <?= $book['name']; ?>
                    </a>
                    <span><?= $book['year']; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </body>

</html>