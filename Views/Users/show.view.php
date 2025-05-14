<?php view('Layouts/header.php') ?> 
<?php view('Layouts/nav.php') ?> 

<main class="flex-shrink-0"> 
    <div class="container"> 
        <h1 class="mt-5">User</h1> 
        <div>
            <p><?= htmlspecialchars($user['first_name']) . ' ' . htmlspecialchars($user['last_name']) ?></p>
        </div>  
        <footer class="mt-6 d-flex gap-x-1">
            <a href="/user/edit?id=<?= $user['id'] ?>" class="btn btn-primary">Edit user</a>
            <form method="POST">
                <input type="hidden" name="_method" value="DELETE">
                <input type="hidden" name="id" value="<?= $user['id'] ?>">
                <button class="btn btn-danger">Delete user</button>
            </form>
        </footer>  
    </div> 
</main>

<?php view('Layouts/footer.php') ?>  
