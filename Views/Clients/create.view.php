<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php'); ?>  

<main class="flex-shrink-0"> 
    <div class="container bg-dark-subtle p-4"> 
        <h1 class="mt-5">Create a client</h1> 
        <div>
            <form method="post">
                <div class="form-group">
                    <label for="client-name">Client name</label>
                    <input type="text" class="form-control" id="client-name" placeholder="Enter client name" name="name" value="<?= $_POST['name'] ?? '' ?>">
                    
                    <?php if (isset($errors['name'])) : ?>
                        <p class="text-danger small mt-1"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>      
</main>

<?php view('Layouts/footer.php') ?> 
