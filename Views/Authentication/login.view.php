<?php view('Layouts/header.php') ?> 

<main role="main" class="container"> 
    <div class="form-signin w-100 m-auto h-100"> 
        <form action="/auth/login" method="post">
            <img class="mb-4" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> 
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating"> 
                <input 
                    type="email" 
                    class="form-control" 
                    id="floatingInput" 
                    placeholder="name@example.com" 
                    name="email" 
                    value="<?= old('email') ?>"> 
                <label for="floatingInput">Email address</label> 

                <?php if (isset($errors['email'])) : ?>
                    <p class="text-danger small mt-1"><?= $errors['email'] ?></p>
                <?php endif; ?>
            </div> 
            
            <div class="form-floating"> 
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" value=""> 
                <label for="floatingPassword">Password</label> 
                
                <?php if (isset($errors['password'])) : ?>
                    <p class="text-danger small mt-1"><?= $errors['password'] ?></p>
                <?php endif; ?>
            </div>
            
            <div class="form-check text-start my-3"> 
                <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault"> 
                <label class="form-check-label" for="checkDefault">Remember me</label> 
            </div> 

            <button class="btn btn-primary w-100 py-2" type="submit">Log in</button> 

            <p class="mt-5 mb-3 text-body-secondary">©2025</p> 
        </form> 
    </div>
</main>

<?php view('Layouts/footer.php') ?>   
