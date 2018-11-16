<p><?=$totalJokes?> jokes have been submitted to the Internet Joke Database.</p>

<ul>
    <?php foreach($jokes as $joke): ?>
        <li>
            <?=htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8')?>
                (by <a href="mailto:<?=htmlspecialchars($joke['email'], ENT_QUOTES, 'UTF-8')?>"><?=htmlspecialchars($joke['name'], ENT_QUOTES, 'UTF-8')?></a>)
            <a href="editjoke.php?id=<?=$joke['id']?>">Edit</a>
            <form action="deletejoke.php" method="post"><input type="hidden" name="id" value="<?=$joke['id']?>"><input type="submit" value="Delete"></form>
        </li>
    <?php endforeach; ?>
</ul>