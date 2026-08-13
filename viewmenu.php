<?php
include 'db.php';

$result = $conn->query("SELECT * FROM menu_items");
?>

<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>

    <title>View Menu</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <style>

.nav-link.bg-dark {
    box-shadow: 0 -10px 0 #212529, 0 10px 0 #212529;
}

.course-card {
    width: 270px;
    border-radius: 15px;
    overflow: hidden;
    transition: 0.3s;
}

.course-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.5) !important;
}

.course-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}



.table-container {
    width: 100%;
    overflow-x: auto;
    margin-top: 30px;
    border-radius: 12px;
}

.course-table {
    width: 100%;
    border-collapse: collapse;

    background: linear-gradient(
        90deg,
        #212529,
        #6f42c1,
        #0d6efd,
        #212529
    );

    background-size: 300% 300%;
    animation: gradient 6s infinite;
}

@keyframes gradient {

    0% {
        background-position: 0% 50%;
    }

    50% {
        background-position: 100% 50%;
    }

    100% {
        background-position: 0% 50%;
    }

}

.course-table th {
    padding: 12px;
    background: #212529;
    color: bisque;
    text-align: center;
}

.course-table td {
    padding: 12px;
    color: white;
    text-align: center;
}

.course-table tbody tr {
    transition: 0.3s;
}

.course-table tbody tr:hover {
    background: rgba(255,255,255,0.2);
    transform: scale(1.01);
}

@media (max-width: 768px) {

    .course-table {
        min-width: 600px;
    }

    .course-table th,
    .course-table td {
        padding: 8px;
        font-size: 14px;
    }

}

</style>
</head>

<body>

<header>

    <nav class="navbar navbar-expand-sm navbar-light bg-dark-subtle">

        <div class="container">

            <div class="collapse navbar-collapse" id="collapsibleNavId">

                <ul class="navbar-nav me-auto mt-2 mt-lg-0">

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            style="color:bisque"
                            href="dashboard.php"
                        >
                            Home
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            style="color:bisque"
                            href="addmenu.php"
                        >
                            Add Menu Item
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link bg-dark"
                            style="color:bisque"
                            href="viewmenu.php"
                        >
                            View Menu
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            style="color:bisque"
                            href="exportdata.php"
                        >
                            Export Data
                        </a>
                    </li>

                </ul>

                <form class="d-flex my-2 my-lg-0">

                    <button
                        class="btn btn-outline-light my-2 my-sm-0"
                        type="button"
                        style="background-color:bisque"
                    >
                        <a
                            class="text-dark"
                            style="text-decoration:none"
                            href="logout.php"
                        >
                            Logout
                        </a>
                    </button>

                </form>

            </div>

        </div>

    </nav>

</header>


<main class="py-5">

    <div class="container">


        <div class="row g-4">

            <?php while ($row = $result->fetch_assoc()) { ?>

                <div class="col-md-4">

                    <div class="card course-card shadow" style="background-color:bisque">

                        <img
                            src="<?php echo $row['image']; ?>"
                            class="card-img-top"
                            style="width:200px"
                            alt="Course Image"
                        >

                        <div class="card-body">

                            <h4 class="card-title text-dark">
                                <?php echo $row['item_name']; ?>
                            </h4>

                            <p class="card-text text-dark">
                                <?php echo $row['description']; ?>
                            </p>

                            <a
                                class="bg-success text-dark"
                                style="text-decoration:none"
                                href="edit.php?id=<?= $row["id"]?>"
                            >
                                Edit
                            </a>

                            <a
                                class="bg-danger text-dark"
                                style="text-decoration:none"
                                href="delete.php?id=<?= $row["id"]?>"
                            >
                                Delete
                            </a>

                        </div>

                    </div>

                </div>

            <?php } ?>

        </div>


      

        <h2 class="text-center mt-5 mb-4">
            Menu Items Details
        </h2>

        <div class="table-container">

            <table class="course-table">

                <thead>

                    <tr>
                        <th>ID</th>
                        <th>Menu Items</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>

                </thead>

                <tbody>

                    <?php

                    

                    $table_result = $conn->query("SELECT * FROM menu_items");

                    while ($table_row = $table_result->fetch_assoc()) {

                    ?>

                        <tr>

                            <td>
                                <?php echo $table_row['id']; ?>
                            </td>

                            <td>
                                <?php echo $table_row['item_name']; ?>
                            </td>

                            <td>
                                <?php echo $table_row['description']; ?>
                            </td>

                            <td>
                                <?php echo $table_row['price']; ?>
                            </td>

                        </tr>

                    <?php } ?>

                </tbody>

            </table>

        </div>

    </div>

</main>


<footer>
</footer>


<!-- Bootstrap JavaScript -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
></script>

</body>

</html>