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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</head>

<body>
    <div class="sidebar">
        <span>Welcome <?= $_SESSION['username'] ?></span>
        <a class="active" href="/Home/Blogmanage">New Blog</a>
        <a href="/Home/ViewBlog">View Blogs</a>        
        <a href="/Home">Main Site</a>
    </div>

    <div class="content">
        <div class="container mt-3 p-3">

            <form id="blogpost" class="php-email-form mt-3">
                <div class="row">
                    <div class="col-md-12 form-group">
                        <input type="text" name="title" class="form-control" id="title" placeholder="Your Title" required>
                    </div>                   
                </div>
                <div id="summernote"></div>
                <div class="text-center "><input type="button" id="submitbtn" class="btn btn-lg col-12 btn-success p-2 mt-2" style="border-radius: 24px;" value="Save Blog" /></div>
            </form>
        </div>
    </div>
    <script>
        $('#summernote').summernote({
            placeholder: 'Paste your blog here ... ',
            tabsize: 2,
            height: 650,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
        $(document).ready(function() {
            // $("#submitbtn").click(function (event) {
            $('#submitbtn').on('click', function(event) {
                event.preventDefault();
                event.stopImmediatePropagation();
                var formData = {
                    title: $("#title").val(),
                    blogcontent:  $('#summernote').summernote('code'),
                };

                // var formValues = $("#contactform").serialize();
                $.ajax({
                    type: "POST",
                    url: "/Home/saveblog",
                    data: formData,
                    dataType: "json",
                    encode: true,
                    success: function(response) {
                        alert(response);

                        
                    },
                });
                // alert('Blog Saved !');
                window.location = '/Home/ViewBlog';                
            });
        });

    </script>
</body>

</html>