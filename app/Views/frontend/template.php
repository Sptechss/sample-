<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/all.min.css">

    <!-- Bootstrap CSS -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?=lang("Text.page_title")?></title>


</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background-color:#4b5669 ;">
        <div class="container">
            <a class="navbar-brand font-weight-bold text-capitalize" href="#"><?= lang("Text.navbar-brand")?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active " aria-current="page" href="#"><i class="fa-sharp fa-solid fa-house"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="<?= base_url('lang/es'); ?>">ephonal</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active " href="<?= base_url('lang/en'); ?>">Englishs</i></a>
                    </li>
                    <li class="nav-item">
                        <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" class="nav-link"><?= lang("Text.link1") ?></a>
                    </li>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-sm-auto" id="exampleModalLabel"><i class="fa-sharp fa-solid fa-s"></i>chool Result Management <i class="fa-sharp fa-solid fa-s"></i>ystem</h5>
                                </div>
                                <div class="modal-body">
                                    <form class="p-4">
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label font-weight-bolder"><i class="fa-sharp fa-solid fa-e"></i>nter Your Roll Id</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label font-weight-bolder"><i class="fa-sharp fa-solid fa-c"></i>lass</label>
                                            <select class="form-control"><i class="fa-sharp fa-solid fa-sort-down"></i>
                                                <option>select class</option>
                                                <option>1st</option>
                                                <option>2nd</option>
                                                <option>3rd</option>
                                            </select>
                                        </div>
                                        <div class="mb-3 mt-4 ">
                                            <button type="submit" class="btn  btn-success ms-auto"><i class="fa-sharp fa-solid fa-s"></i>earch <i class="fa-solid fa-caret-left"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <li class="nav-item">
                        <a href="" data-bs-toggle="modal" data-bs-target="#adminModel" class="nav-link"><?= lang("Text.link2") ?></a>

                    </li>
                    <div class="modal fade" id="adminModel" tabindex="-1" aria-labelledby="adminModelLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title m-sm-auto" id="adminModelLabel"><i class="fa-sharp fa-solid fa-a"></i>dmin panel</h5>
                                </div>
                                <div class="modal-body">
                                    <form class="p-4">
                                        <div class="mb-3">
                                            <label for="adminInputEmail1" class="form-label font-weight-bolder"><i class="fa-sharp fa-solid fa-u"></i>sername</label>
                                            <input type="email" class="form-control" id="adminInputEmail1">
                                        </div>
                                        <div class="mb-3">
                                            <label for="adminInputpassword" class="form-label font-weight-bolder"><i class="fa-sharp fa-solid fa-p"></i>asasword</label>
                                            <input type="email" class="form-control" id="adminInputpassword">

                                        </div>
                                        <div class="mb-3 mt-4 ">
                                            <a href="/admin/dashboard" type="submit" class="btn btn-success ms-auto"><i class="fa-sharp fa-solid fa-l"></i>ogin</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                </ul>
            </div>
        </div>
    </nav>



    <?= $page ?>

    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ajaxy/1.6.1/scripts/jquery.ajaxy.js" integrity="sha512-4WpSQe8XU6Djt8IPJMGD9Xx9KuYsVCEeitZfMhPi8xdYlVA5hzRitm0Nt1g2AZFS136s29Nq4E4NVvouVAVrBw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>