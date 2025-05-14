<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php'); ?>  

<main class="flex-shrink-0"> 
    <div class="container bg-dark-subtle p-4"> 
        <h1 class="mt-5">Edit a client</h1> 
        <div>
            <form method="POST" action="/client">
                <input type="hidden" name="_method" value="PATCH">
                <input type="hidden" name="id" value="<?= $client['id'] ?>">

                <div class="form-group">
                    <label for="client-name">Client name</label>
                    <input type="text" class="form-control" id="client-name" placeholder="Enter client name" name="name" value="<?= $client['name'] ?? '' ?>">
                    
                    <?php if (isset($errors['name'])) : ?>
                        <p class="text-danger small mt-1"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                </div>
                
                <div class="mt-3 d-flex gap-x-1 justify-end">
                    <a href="/clients" class="btn btn-secondary">Cancel</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>      
</main>

<?php view('Layouts/footer.php') ?> 
