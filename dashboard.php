<?php
session_start();
include 'db.php';

?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Title</title>
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
    background: #212529;
}

.nav-link.bg-dark {
    box-shadow: 0 -10px 0 #212529, 0 10px 0 #212529;
}

.carousel-inner {
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

.carousel-item img {
    height: 400px;
    object-fit: cover;
}

.carousel-item h4 {
    color: bisque;
    font-weight: 600;
}

.carousel-item {
    transition: transform 0.8s ease-in-out;
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
                                <a class="nav-link bg-dark" style="color:bisque" href="dashboard.php">Home</a>
                            </li>    
                        <li class="nav-item">
                                <a class="nav-link" style="color:bisque" href="addmenu.php">Add Menu Item</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" style="color:bisque" href="viewmenu.php">View Menu</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" style="color:bisque" href="exportdata.php">Export Data</a>
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
            <div class="text-center mt-4"><h3>Welcome <?php echo $_SESSION["name"]; ?>!!!</h3></div>

        <div id="carouselId" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="First slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="1"
                    aria-label="Second slide"
                ></li>
                <li
                    data-bs-target="#carouselId"
                    data-bs-slide-to="2"
                    aria-label="Third slide"
                ></li>
            </ol>
            <div class="carousel-inner" role="listbox" style="margin-top:25px; margin-left:350px; height:700px; width:700px">
                <div class="carousel-item active">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSQtrBNGACn0mK60Vnw6sHuKQFUflpESLXPstsmVD6kBQ&s=10"
                        class="w-100 d-block"
                        alt="First slide"
                    />
                    <div class="text-center mt-4"><h4>Image</h4></div>
                </div>
                <div class="carousel-item">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7AciR0_8DqIPX0FYx_51OST_kYRnQ7GZJN9_yDF6EsQ&s=10"
                        class="w-100 d-block"
                        alt="Second slide"
                    />
                    <div class="text-center mt-4"><h4>Samosa</h4></div>

                </div>
                <div class="carousel-item">
                    <img
                        src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnMmTQKP3Muuxz9OyxVIvWh4rmbPVib4jLSX_q95ssog&s=10"
                        class="w-100 d-block"
                        alt="Third slide"
                    />
                    <div class="text-center mt-4"><h4>Multiple Food List</h4></div>

                </div>
            </div>
            <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="prev"
            >
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselId"
                data-bs-slide="next"
            >
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        
            
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
