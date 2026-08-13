<?php
session_start();
include 'db.php';


if ($_SERVER["REQUEST_METHOD"]==='POST') {
    $item_name=$_POST["item_name"];
    $description=$_POST["description"];
    $price=$_POST["price"];
    $category=$_FILES["category"];
    $food_image = $_FILES["image"]["name"];
    $image_tmp = $_FILES["image"]["tmp_name"];

    $upload_path = "uploads/" . $food_image;

    move_uploaded_file($image_tmp, $upload_path);

    $sql = $conn->prepare("INSERT INTO menu_items(item_name, description, price, category, image) VALUES (?, ?, ?, ?, ?)");
    $sql->bind_param("sssss",$item_name,$description,$price,$category,$upload_path);


    if ($sql->execute()) {
        header("location:viewmenu.php");
    }
}
?>
<!doctype html>
<html lang="en" data-bs-theme="dark">
    <head>
        <title>Add Item</title>
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

.register-card {
    width: 450px;
    max-width: 95%;
    border: none;
    border-radius: 16px;
    transition: 0.3s;
}

.register-card:hover {
    box-shadow: 0 10px 30px rgba(0,0,0,0.5) !important;
}

.register-title {
    font-weight: 600;
}

.form-control {
    padding: 12px;
    border-radius: 8px;
}

.form-control:focus {
    box-shadow: 0 0 0 3px rgba(13, 110, 253, 0.15);
}

.register-btn {
    padding: 12px;
    border-radius: 8px;
    font-weight: 500;
}

.nav-link.bg-dark {
    box-shadow: 0 -10px 0 #212529, 0 10px 0 #212529;
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
                                <a class="nav-link bg-dark" style="color:bisque" href="addmenu.php">Add Menu Item</a>
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
       <main class="min-vh-100 d-flex align-items-center justify-content-center">

    <form class="register-card shadow-lg p-4 p-md-5" style="background-color:bisque" method="POST"enctype="multipart/form-data">

        <div class="text-center mb-2  text-black">
            <h1 class="register-title mb-2">Add Food Item</h1>
           
        </div>

        <div class="mb-3">
            <label  class="form-label text-black">
                Item Name:
            </label>

            <input
                type="text"
                class="form-control"
                name="item_name"
                id=""
                placeholder="Enter your Item Name"
                required
            >
        </div>
<div class="mb-3">
            <label  class="form-label text-black">
                Description:
            </label>

            <input
                type="text"
                class="form-control"
                name="description"
                id=""
                placeholder="Enter your Description"
                required
            >
        </div>

        <div class="mb-3">
            <label class="form-label text-black">
                Price:
            </label>

            <input
                type="text"
                class="form-control"
                name="price"
                id=""
                placeholder="Enter Price"
            >
        </div>
        <div class="mb-3">
            <label class="form-label text-black">
                Category:
            </label>

            <input
                type="text"
                class="form-control"
                name="category"
                id=""
                placeholder="Enter Category"
            >
        </div>
        <div class="mb-3">
            <label class="form-label text-black">
                Food Image:
            </label>

            <input
                type="file"
                class="form-control"
                name="image"
                id=""
                placeholder=""
            >
        </div>


        <button
            type="submit"
            class="btn btn-success w-100 register-btn"
            
        >
         Add
        </button>
        
    </form>

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
