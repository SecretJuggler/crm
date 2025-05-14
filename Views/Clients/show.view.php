<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php') ?> 

<main class="flex-shrink-0"> 
    <div class="container"> 
        <h1 class="mt-5">Client</h1> 
        <div>
            <p><?= htmlspecialchars($client['name']) ?></p>
        </div>  
        <footer class="mt-6 d-flex gap-x-1">
            <a href="/client/edit?id=<?= $client['id'] ?>" class="btn btn-primary">Edit client</a>
            <form method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $client['id'] ?>">
                <button class="btn btn-danger">Delete client</button>
            </form>
        </footer>   
    </div> 
</main>

<?php view('Layouts/footer.php') ?>  
