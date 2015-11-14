<?php

    include "../includes/db_connect.php";

    session_start();

    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    if(!$_SESSION['login']){
        header("Location: login.php");
    }

    if(isset($_GET['add_post'])){
        global $con;
        $title = $_POST['title'];
        $content = $_POST['content'];

        $new_file_name = generateRandomString(20).".png";
        move_uploaded_file($_FILES['photo']['tmp_name'], '../img/uploads/'.$new_file_name) or die("Can't upload the file");

        $query = "INSERT INTO `post` (title,content,img) VALUES ('$title', '$content', 'img/uploads/$new_file_name')";
        mysqli_query($con, $query);
    }

    if(isset($_GET['delete_post'])){
        $id = $_GET['delete_post'];
        $query = "DELETE FROM `post` WHERE `id`='$id'";
        mysqli_query($con,$query);
    }

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="alloy-editor-0.6.0/alloy-editor/assets/alloy-editor-ocean-min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/admin.css" type="text/css">
</head>
<body>

    <div class="container">


        <form action="?add_post" method="post" enctype="multipart/form-data">

            <input type="text" class="post_title" name="title" placeholder="Post title"><br>

            <textarea id="editable" name="content"></textarea>

            <div class="file-upload">
                <div class="file-select">
                    <div class="file-select-button" id="fileName">Choose File</div>
                    <div class="file-select-name" id="noFile">No file chosen...</div>
                    <input type="file" name="photo" id="chooseFile">
                </div>
            </div>

            <button id="submit">Submit</button>


        </form>

        <hr style="clear: both;margin-top: 80px;">

        <table class="fixed_headers">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Img</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM `post` ORDER BY id DESC ";
                    $send_query = mysqli_query($con,$query);

                    while($res = mysqli_fetch_assoc($send_query)){?>
                        <tr>
                            <td><?=$res['id']?></td>
                            <td><?=$res['title']?></td>
                            <td><?=$res['content']?></td>
                            <td><img src="../<?=$res['img']?>" style="max-width: 100px;"></td>
                            <td><a href="?edit_post=<?=$res['id']?>">Edit</a>
                            <a href="?delete_post=<?=$res['id']?>">Delete</a></td>
                        </tr>

                    <?}

                ?>

            </tbody>
        </table>


    </div>

<script src="js/jquery.js"></script>
<script src="alloy-editor-0.6.0/alloy-editor/alloy-editor-all-min.js"></script>
<script>
    var editor = AlloyEditor.editable('editable',{
        toolbars:{
            add:{
                buttons: ['hline', 'table']
            },
            styles: {
                selections: AlloyEditor.Selections,
                tabIndex: 1
            }
        }
    });

    editor.get('nativeEditor').on('imageAdd', function(event) {
        console.log(event);
        x = event;
    });

    $(document).ready(function() {
        $("#editable").next().bind("DOMSubtreeModified", function () {

            if ($("#editable").next("div").children("p").html() == "<br>")
                $("#editable").next("div").children("p").html("");

        });

//
//        $("#submit").click(function (e) {
//            e.preventDefault();
//            $("#submit").addClass("pro").html("");
//            $.ajax({
//                url: "?add_post",
//                method: "POST",
//                data: {title: $(".post_title").val(), content: $("#editable").next("div").html()},
//                success: function(){
//                    $(".post_title").val("");
//                    $("#editable").next("div").html("<p></p>");
//                    $('#submit').addClass("finish");
//                    setTimeout(function(data){
//                        $("#submit").removeClass("finish");
//                        $("#submit").removeClass("pro");
//                        $("#submit").html("Submit");
//                        console.log(data);
//                    },1500);
//                }
//            })
//        });

        $('#chooseFile').bind('change', function () {
            var filename = $("#chooseFile").val();
            if (/^\s*$/.test(filename)) {
                $(".file-upload").removeClass('active');
                $("#noFile").text("No file chosen...");
            }
            else {
                $(".file-upload").addClass('active');
                $("#noFile").text(filename.replace("C:\\fakepath\\", ""));
            }
        });


    });


</script>
</body>
</html>
