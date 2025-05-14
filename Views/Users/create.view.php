<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php'); ?>  

<div class="d-flex justify-content-center min-vh-100">
    <div class="w-100" style="max-width: 600px;">
        <h1>Create</h1>
        <form action="/users/create" method="POST">
            <div class="row">
                <div class="mb-3 col-12">
                    <label for="first_name" class="form-label">First name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="<?= $user['first_name'] ?? '' ?>">
                    <?php if (isset($errors['first_name'])) : ?>
                        <p class="text-danger small mt-1"><?= $errors['first_name'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="mb-3 col-12">
                    <label for="last_name" class="form-label">Last name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?= $user['last_name'] ?? '' ?>">
                    <?php if (isset($errors['last_name'])) : ?>
                        <p class="text-danger small mt-1"><?= $errors['last_name'] ?></p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?= $user['email'] ?? '' ?>">
                    <?php if (isset($errors['email'])) : ?>
                        <p class="text-danger small mt-1"><?= $errors['email'] ?></p>
                    <?php endif; ?>
                </div> 
            </div>

            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create</button>
            </div>
        </form>  
    </div>
</div>

<?php view('Layouts/footer.php'); ?>   