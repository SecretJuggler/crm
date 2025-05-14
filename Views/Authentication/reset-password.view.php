<?php view('Layouts/header.php') ?> 

<main class="container mt-5"> 
    <div class="row d-flex justify-content-center align-items-center bg-secondary-subtle"> 
        <div class="col-md-8 p-4">
            <h1>Reset your password</h1> 
            <div>
                <h6>We require you to reset your password.. don't worry this won't be asked again.</h6>
                <form method="POST" action="/reset-password">
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" value="" placeholder="New password...">
                    </div>
                    <button type="submit" class="btn btn-primary mt-3">Change password</button>
                </form>
            </div>
        </div>
        
    </div> 
</main>

<?php view('Layouts/footer.php'); ?>    