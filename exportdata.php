<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Add Items</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
                <style>

body {
    background-color: #212529;
}

.nav-link.bg-dark {
    box-shadow: 0 -10px 0 #212529, 0 10px 0 #212529;
}

main {
    min-height: 80vh;
}

main a > div {
    border-radius: 15px;
    transition: 0.3s;
    box-shadow: 0 5px 15px rgba(0,0,0,0.3);
}

main a > div:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.5);
}

main a {
    text-decoration: none;
}

</style>
    </head>

    <body>
        <header>
                      <nav
                class="navbar navbar-expand-sm navbar-light bg-dark-subtle"
            >
                <div class="container">
               
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                                <a class="nav-link" style="color:bisque" href="dashboard.php">Home</a>
                            </li>    
                        <li class="nav-item">
                                <a class="nav-link" style="color:bisque" href="addmenu.php">Add Menu Items</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" style="color:bisque" href="viewmenu.php">View Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link bg-dark" style="color:bisque" href="exportdata.php">Export Data</a>
                            </li>
                            
                            </ul>
                        <form class="d-flex my-2 my-lg-0">
                            
                            <button
                                class="btn btn-outline-light  my-2 my-sm-0"
                                type="submit"
                                style="background-color:bisque"
                            >
                                <a class="text-dark" style="text-decoration:none" href="logout.php">Logout</a>
                            </button>
                        </form>
                    </div>
                </div>
            </nav> 
        </header>
        <main>
            <div class="d-flex"><a href="pdf.php"><div class="" style="background-color:bisque; height:300px; width:200px;margin-left:300px; margin-top:100px">
                <div class="text-center" style="color:black;"><h2><b>PDF</b></h2>
            <h5 style="margin-top:100px">Download pdf</h5>
            </div>
            </div></a>
            <a href="pdf.php"><div class="" style="background-color:bisque; height:300px; width:200px;margin-left:300px; margin-top:100px">
                <div class="text-center" style="color:black;"><h2><b>EXCEL</b></h2>
            <h5 style="margin-top:100px">Download excel</h5>
            </div>
            </div></a></div>
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
