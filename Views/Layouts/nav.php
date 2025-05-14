<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark"> 
    <div class="container-fluid"> 
        <a class="navbar-brand" href="#">Fixed navbar</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> 
            <span class="navbar-toggler-icon"></span>
        </button> 
        <div class="collapse navbar-collapse" id="navbarCollapse"> 
            <ul class="navbar-nav me-auto mb-2 mb-md-0"> 
                <li class="nav-item"> 
                    <a href="/" class="nav-link <?php echo urlIs('/') ? 'text-white text-decoration-underline' : 'text-gray' ?>">Home </a>
                </li> 
                <li class="nav-item"> 
                    <a href="/users" class="nav-link <?php echo urlIs('/users') ? 'text-white text-decoration-underline' : 'text-gray' ?>">Users</a>
                </li> 
                <li class="nav-item"> 
                    <a href="/clients" class="nav-link <?php echo urlIs('/clients') ? 'text-white text-decoration-underline' : 'text-gray' ?>">Clients</a>
                </li> 
            </ul>
            <?php if ($_SESSION['user'] ?? false) : ?> 
                <div class="d-flex justify-content-center gap-x-1">
                    <?= $_SESSION['user']['first_name'] . ' ' . $_SESSION['user']['last_name'] ?>
                    <form method="POST" action="/logout">
                        <input type="hidden" name="_method" value="DELETE">
                        <button class="btn btn-link logout-btn">Log Out</button>
                    </form>
                </div>
                    
            <?php endif; ?>
            <div class="d-flex">
                
            </div>
        </div> 
    </div> 
</nav>