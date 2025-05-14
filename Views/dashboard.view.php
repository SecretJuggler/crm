<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php'); ?>  

<main class="flex-shrink-0"> 
    <div class="container"> 
        <h1 class="mt-5">My dashboard</h1> 
        <div>
            <p>Welcome, <?= $user['first_name'] . ' ' . $user['last_name'] ?></p>
        </div>
    </div> 
</main>

<?php view('Layouts/footer.php'); ?>    