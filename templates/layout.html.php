<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="style.css">
    <title><?=$title?></title>
</head>
<body>
    <header>
        <h1>Internet Joke Database</h1>
    </header>
    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="jokes.php">Jokes List</a></li>
            <li><a href="addjoke.php">Add a new Joke</a></li>
        </ul>
    </nav>
    <main>
        <?=$output?>
    </main>
    <footer>
        &copy; IJDB 2018
    </footer>
</body>
</html>