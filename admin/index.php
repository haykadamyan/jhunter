<?php

    include "../includes/db_connect.php";

    session_start();

    if(!$_SESSION['login']){
        header("Location: login.php");
    }

    if(isset($_GET['add_post'])){
        global $con;
        $title = $_POST['title'];
        $content = $_POST['content'];

        $query = "INSERT INTO `post` (title,content) VALUES ('$title', '$content')";
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

        <form>

            <input type="text" class="post_title" placeholder="Post title"><br>

            <textarea id="editable"></textarea>
            <button id="submit">Submit</button>


        </form>

        <hr style="clear: both;margin-top: 80px;">

        <table class="fixed_headers">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $query = "SELECT * FROM `post`";
                    $send_query = mysqli_query($con,$query);

                    while($res = mysqli_fetch_assoc($send_query)){?>
                        <tr>
                            <td><?=$res['id']?></td>
                            <td><?=$res['title']?></td>
                            <td><?=$res['content']?></td>
                            <td><a href="?edit_post=<?=$res['id']?>">Edit</a></td>
                            <td><a href="?delete_post=<?=$res['id']?>">Delete</a></td>
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


        $("#submit").click(function (e) {
            e.preventDefault();
            $("#submit").addClass("pro").html("");
            $.ajax({
                url: "?add_post",
                method: "POST",
                data: {title: $(".post_title").val(), content: $("#editable").next("div").html()},
                success: function(){
                    $(".post_title").val("");
                    $("#editable").next("div").html("<p></p>");
                    $('#submit').addClass("finish");
                    setTimeout(function(data){
                        $("#submit").removeClass("finish");
                        $("#submit").removeClass("pro");
                        $("#submit").html("Submit");
                        console.log(data);
                    },1500);
                }
            })
        });

    });


</script>
</body>
</html>
