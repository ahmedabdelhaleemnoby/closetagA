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
                connect();
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
    <li><a class='dropdown-item' href='request.php?edit=$user[username]'>Edit</a></li>
    <li><a class='dropdown-item' href='#'>Delete</a></li>
    
  </ul>
</div>
                        </td>" .
                        "</tr>";
                    // $x++;
                }
                ?>
            </table>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>