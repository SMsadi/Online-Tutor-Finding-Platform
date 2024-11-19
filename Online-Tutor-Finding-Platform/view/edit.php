<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
  <title>Notebook</title>
</head>

<body>
  <h1>Update Notebook</h1>

  <?php
                include 'database.php';
                $id=$_GET['id'];
                $sql="SELECT * FROM todos WHERE id=".$id;

                $result = mysqli_query($conn, $sql);

                if($result){   
                    $row=mysqli_fetch_assoc($result);
                    $title=$row['Title'];


                }

            ?>
 
    <form action="editaction.php" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" value="<?php global $title; echo $title ?>" placeholder="Notebook"
          Required>
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
      <br>
      <button>Update Your Notebook</button>
    </form>
  </div>
</body>

</html>