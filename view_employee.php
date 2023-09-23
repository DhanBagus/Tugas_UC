<?php require("controller_employee.php"); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link active" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_challenge.php">Employee-Office</a>
                    </li>

                </ul>
            </div>
            <div class="card-body text-left">
                <h1>Employee</h1>
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Umur</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        $allemployees = getallemployees();
                        foreach ($allemployees as $index => $employee) {
                            $no++;
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $employee->nama ?></td>
                                <td><?= $employee->jabatan ?></td>
                                <td><?= $employee->umur ?></td>
                                <td>

                                    <a href="controller_employee.php?deleteID=<?= $index ?>">
                                        <button class="btn btn-danger">Delete</button>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                <br>
                <hr>
                <br>

                <h1>New Employee</h1>
                <form class="col-md-6" method="post" action="controller_employee.php">
                    <div class="col-md">
                        <label for="inputnama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="inputnama">
                    </div>
                    <div class="col-md">
                        <label for="inputjabatan" class="form-label">Jabatan</label>
                        <input type="text" class="form-control" name="inputjabatan">
                    </div>
                    <div class="col-md">
                        <label for="inputumur" class="form-label">Umur</label>
                        <input type="text" class="form-control" name="inputumur">
                    </div>

                    <div class="col-12 mt-3">
                        <button name="btn_register" type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>