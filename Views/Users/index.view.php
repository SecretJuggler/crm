<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php'); ?>  

<main class="flex-shrink-0"> 
    <div class="container"> 
        <h1 class="mt-5">Users</h1> 
        <div>
            <ul>
                <?php foreach ($users as $user) : ?>
                    <li>
                        <a class="text-info-emphasis hover-underline text-decoration-none" href="/users?id=<?= $user['id']?>">
                            <?= htmlspecialchars($user['first_name']) . ' ' . htmlspecialchars($user['last_name']) ?> 
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="mt-5">
                <a href="/users/create" class="btn btn-primary">Create user</a>
            </p>
        </div>
    </div> 
</main>

<?php view('Layouts/footer.php'); ?>    
