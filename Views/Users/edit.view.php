<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php'); ?>  

<main class="flex-shrink-0"> 
    <div class="container bg-dark-subtle p-4"> 
        <h1 class="mt-5">Edit user</h1>
        <form action="/user" method="POST">
            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $user['id']?>">

            <div class="form-group">
                <label for="first_name" class="form-label">First name</label>
                <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $user['first_name'] ?? '' ?>">
                <?php if (isset($errors['first_name'])) : ?>
                    <p class="text-danger small mt-1"><?= $errors['first_name'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="last_name" class="form-label">Last name</label>
                <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $user['last_name'] ?? '' ?>">
                <?php if (isset($errors['last_name'])) : ?>
                    <p class="text-danger small mt-1"><?= $errors['last_name'] ?></p>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?? '' ?>">
                <?php if (isset($errors['email'])) : ?>
                    <p class="text-danger small mt-1"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div>

            <div class="mt-3 d-flex gap-x-1 justify-end">
                <a href="/users" class="btn btn-secondary">Cancel</a>
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>  
    </div>
</main>

<?php view('Layouts/footer.php'); ?>   