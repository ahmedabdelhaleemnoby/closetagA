<!DOCTYPE html>
<html lang="en">
<?php
include('connect.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
    <title>list_user</title>
</head>

<body>
    <div class="container mt-4">
        <?php
        connect();

        if (isset($_GET['edit'])) {

            $username = $_GET['edit'];


            if (isset($_POST['email'])) {
                $fname = strtolower($_POST['fname']);
                $lname = strtolower($_POST['lname']);
                $uname = strtolower($_POST['uname']);
                $mail = strtolower($_POST['email']);
                $update = mysqli_query($con, "UPDATE users SET fname='$fname' , lname='$lname' WHERE username='$username' ");
                if ($update) {
        ?>
                    <div class="row">
                        <div class="alert col-md-12 alert-success">User Updated Successfully</div>
                    </div>
            <?php
                }
            }
            $select_user = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
            $user = mysqli_fetch_array($select_user);
            ?>


            <h1>Edit <?php echo $_GET['edit']; ?></h1>
            <form action="" method="post">
                <input type="text" class="form-control mb-2" name="fname" placeholder="FName" value="<?php echo $user['fname']; ?>">
                <input type="text" class="form-control mb-2" name="lname" placeholder="LName" value="<?php echo $user['lname']; ?>">
                <input type="text" class="form-control mb-2" name="uname" placeholder="Username" value="<?php echo $user['username']; ?>">
                <input type="email " class=" form-control mb-2" name="email" placeholder="email" value="<?php echo $user['email']; ?>">
                <select name="gender" class="form-control mb-2">
                    <option value="1" <?php if ($user['gender'] == 1) {
                                            echo 'selected';
                                        }  ?>>Male</option>
                    <option value="2" <?php if ($user['gender'] == 2) {
                                            echo 'selected';
                                        }  ?>>Female</option>
                </select>

                <button type="submit" class=" form-control ">Save</button>

            </form>
        <?php
        } else {
        ?>
            <div class="row">
                <table class="table table-dark table-striped col-md-12">
                    <tr>
                        <th>#</th>
                        <!-- <th>Order</th> -->
                        <th>First name</th>
                        <th>last name</th>
                        <th>user name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    <?php

                    // $select = mysqli_query($con, "SELECT * FROM users ORDER BY username DESC,email ASC");
                    // $select = mysqli_query($con, "SELECT * FROM users WHERE username LIKE 'ahmed%'");
                    // $select = mysqli_query($con, "SELECT * FROM users WHERE username = 'ahmed'");
                    $select = mysqli_query($con, "SELECT * FROM users");
                    // $select = mysqli_query($con, "SELECT * FROM users LIMIT 5,5");
                    // $select = mysqli_query($con, "SELECT * FROM users WHERE id NOT IN (5,8)");
                    // $x = 1;
                    while ($user = mysqli_fetch_array($select)) {
                        echo
                        "<tr>" .
                            "<td>" . $user['id'] . "</td>" .
                            // "<td>" . $x . "</td>" .
                            "<td>" . $user['fname'] . "</td>" .
                            "<td>" . $user['lname'] . "</td>" .
                            "<td>" . $user['username'] . "</td>" .
                            "<td>" . $user['email'] . "</td>" .
                            "<td>
                        <div class='dropdown'>
  <a class='btn btn-secondary dropdown-toggle' href='#' role='button' id='dropdownMenuLink' data-bs-toggle='dropdown' aria-expanded='false'>
  <i class='fa-solid fa-gear'></i>
  </a>

  <ul class='dropdown-menu' aria-labelledby='dropdownMenuLink'>
    <li><a class='dropdown-item' href='?edit=$user[username]'>Edit</a></li>
    <li><a class='dropdown-item' href='delete.php?user=$user[username]'>Delete</a></li>
    
  </ul>
</div>
                        </td>" .
                            "</tr>";
                        // $x++;
                    }
                    ?>
                </table>
            </div>
        <?php
        }
        ?>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>