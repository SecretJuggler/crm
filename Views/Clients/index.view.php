<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php'); ?>  

<main class="flex-shrink-0"> 
    <div class="container"> 
        <h1 class="mt-5">Clients</h1> 
        <div>
            <ul>
                <?php foreach ($clients as $client) : ?>
                    <li>
                        <a class="text-info-emphasis hover-underline text-decoration-none" href="/client?id=<?= $client['id']?>">
                            <?= htmlspecialchars($client['name']) ?> 
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
            <p class="mt-5">
                <a href="/clients/create" class="btn btn-primary">Create client</a>
            </p>
        </div>
    </div> 
</main>

<?php view('Layouts/footer.php'); ?>    
