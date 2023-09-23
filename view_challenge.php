<?php require("controller_challenge.php");
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Challenge</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="card mt-5">
            <div class="card-header">
                <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="view_employee.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_office.php">Office</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="view_challenge.php">Employee-Office</a>
                    </li>

                </ul>
            </div>
            <div class="card-body text-left">
                <h1>challenge</h1>
                <table class="table">
                    <thead>
                        <tr class="table-dark">
                            <th scope="col">#</th>
                            <th scope="col">Karyawan</th>
                            <th scope="col">Kantor</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 0;
                        $allchallenges = getallchallenges();
                        foreach ($allchallenges as $index => $challenge) {
                            $no++;
                        ?>
                            <tr>
                                <th scope="row"><?= $no ?></th>
                                <td><?= $challenge->karyawan ?></td>
                                <td><?= $challenge->kantor ?></td>

                                <td>
                                    <a href="controller_challenge.php?deleteID=<?= $index ?>">
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

                <h1>New challenge</h1>
                <form class="col-md-6" method="post" action="controller_challenge.php">
                    <div class="row ">
                        <div class="col-2">
                            <label for="inputkaryawan" class="form-label">Karyawan</label>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="inputkaryawan">
                                <option selected>Open this select employee</option>
                                <?php
                                $alloffices = getallemployees();
                                foreach ($alloffices as $idx => $office) {
                                ?>

                                    <option value="<?= $office->nama ?>"><?= $office->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-2">
                            <label for="inputoffice" class="form-label">Office</label>
                        </div>
                        <div class="col">
                            <select class="form-select" aria-label="Default select example" name="inputoffice">
                                <option selected>Open this select office</option>
                                <?php
                                $alloffices = getalloffices();
                                foreach ($alloffices as $idx => $office) {
                                ?>

                                    <option value="<?= $office->nama ?>"><?= $office->nama ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-12 mt-3">
                        <button name="btn_register" type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>



        </div>
    </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>