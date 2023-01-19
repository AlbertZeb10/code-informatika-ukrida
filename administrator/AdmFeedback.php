<?php
    session_start();
    include('dbconnAdm.php');
?>

<!DOCTYPE html>
<html translate="no">
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>MusicGo</title>
    </head>
    <body class="bg-secondary">
        <?php include('admNavbar.php') ?>
        <div class="container">
            <h3 class="text-center mt-3">List Feedback</h3>
            <table class="table table-stripped">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody id="contact_us">
                <?php
                        $sql2   = "select * from contact_us order by id desc";
                        $q2     = mysqli_query($conn, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $name        = $r2['name'];
                            $email       = $r2['email'];
                            $message      = $r2['message'];
                            $phone        = $r2['phone'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $name?></td>
                                <td scope="row"><?php echo $email ?></td>
                                <td scope="row"><?php echo $message ?></td>
                                <td scope="row"><?php echo $phone ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                </tbody>
            </table>
        </div>

                    </div>
                </div>
            </div>
        </div>
    </body>
</html>