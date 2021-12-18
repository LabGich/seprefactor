<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">

<?php include 'head.php' ?>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<head>
    <style>
        body {
            margin: 0;
            font-family: "Lato", sans-serif;
        }

        .sidebar {
            margin: 0;
            padding: 0;
            width: 250px;
            background-color: #f1f1f1;
            position: fixed;
            height: 100%;
            overflow: auto;
        }

        .sidebar a {
            text-decoration: none;
            display: block;
            color: black;
            padding: 16px;
            text-decoration: none;
        }

        .sidebar a.active {
            text-decoration: none;
            background-color: #04AA6D;
            color: white;
        }

        .sidebar a:hover:not(.active) {
            text-decoration: none;
            background-color: #555;
            color: white;
        }

        div.content {
            margin-left: 200px;
            padding: 1px 16px;
            height: 1000px;
        }

        @media screen and (max-width: 700px) {
            .sidebar {
                width: 100%;
                height: auto;
                position: relative;
            }

            .sidebar a {
                text-decoration: none;
                float: left;
            }

            div.content {
                margin-left: 0;
            }
        }

        @media screen and (max-width: 400px) {
            .sidebar a {
                text-decoration: none;
                text-align: center;
                float: none;
            }
        }
    </style>
    <title>Manage Blog</title>
    <link href="https://cdn.datatables.net/buttons/2.1.0/css/buttons.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body>
    <div class="sidebar">
        <span>Welcome <?= $_SESSION['username'] ?></span>
        <a href="/Home/Blogmanage">New Blog</a>
        <a class="active" href="/Home/ViewBlog">View Blogs</a>
        <a href="/Home">Main Site</a>
    </div>
    <div class="content">
        <div class="container mt-3 p-3">
            <table id="blogslist" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Username</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($dataresult as $value) { ?>
                        <tr>
                            <td><?= $value->title ?></td>
                            <td><?= $value->username ?></td>
                            <td><?= $value->date ?></td>
                            <td class="text-danger"><a href="javascript:" id="delete_btn" role='<?php echo $value->id; ?>' class="fa fa-times" style="text-decoration:none; padding: 10px;">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>


</body>
<script>
    $(document).ready(function() {
        $('#blogslist').DataTable();
    });
    $(document).on('click', "#delete_btn", function(e) {
      e.preventDefault();
      var id = $(this).attr("role");
      deleteuser(id);
    });
    function deleteuser(id) {
      // alert ();

      if (confirm("Are you sure you want to delete blog ?")) {
        $.ajax({
          url: '/Home/Deleteblog',
          type: 'get',
          data: {
            id: id
          },
          success: function() {
            alert('Deleted Successfully');
            window.location.reload();
            // window.location = '/Members';

          },
          error: function() {
            alert('failed');
          }
        });
      }
    }
</script>

</html>