<?php include '../com/isadminuser.php';
?>
<html>

<head>
    <title>addpost</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
</head>
<style>
.ck-editor__editable[role="textbox"] {
    /* editing area */
    min-height: 300px;
}

.error {
    color: red;
}

.image-preview {
    width: 400px;
    height: 400px;
    border: 1px solid #e2e8f0;
    overflow: hidden;
    display: flex;
    justify-content: center;
    align-items: center;
}

.image-preview img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
</style>
<?php 
  if(isset($_REQUEST['submit']))
  {
    include('../com/conn.php');
    if(!$_REQUEST['content']){$content = 'error';
      echo '<script> alert("please enter memes or shayri");  </script>';
    }else{ $content = $_REQUEST['content'];
   $index1 = '';
   $date = date('Y-m-d H:i:s');
   $email = $_SESSION['email'];
    $name = $_SESSION['name'];
    $catagory = $_REQUEST['catagory'];
    $likes = '';
    if ($_FILES['file']['name']) {$image = upload();
    } else { $image = 'error';
    }
    $query = "INSERT INTO memes  VALUES('$index1','$content','$image','$likes','$date','$email','$name','$catagory')";
        $data = mysqli_query($con, $query);
        echo '<script> alert("sent successfully");  </script>';
  }
  }

  function upload()
{
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp_loc = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];

    // $ext = array('jpeg',"jpg","png","gif","JPG","jfif");
    // $ex = pathinfo($file_name, PATHINFO_EXTENSION);
    // $ran = rand(1, 1000);
    // if($ex == 'jpeg' or $ex == 'jpg' or $ex == 'JPG'){
    //   $out = 'photo/'.date('H:i:s').'output4.jpg';
    //   $img = imagecreatefromjpeg($file_tmp_loc);
    // //   imagejpeg($img, $out,0.1);
    //   move_uploaded_file($file_tmp_loc, "photo/".$file_name);
    // }
    // elseif($ex == 'png'){
    //     $out = 'photo/'.date('H:i:s').'output4.png';
    //     $img = imagecreatefrompng($file_tmp_loc);
    // //   imagepng($img, $out,2);
    //   move_uploaded_file($file_tmp_loc, "photo/".$file_name);
    //   }
    list($width, $height) = getimagesize($file_tmp_loc);
    // $newwidth = 400;
    // $newheight = 400;
    $newimage = imagecreatetruecolor($width, $height);
    $source = imagecreatefromjpeg($file_tmp_loc);
    imagecopyresized($newimage, $source, 0, 0, 0, 0, $width, $height, $width, $height);
    $filename = time() . '.jpg';
    imagejpeg($newimage, 'photo/' . $filename);
    $image = $filename;
    return $image;
}
  ?>

<body>

    <div class="container">
        <h3 align="center">Hello <?php echo $_SESSION['name']; ?></h3>
        <br>
        <div class="box">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    select catagory<select name="catagory" class="form-select">
                        <option value="memes">memes</option>
                        <option value="shayri">shayri</option>
                        <option value="funny_shayri">funny shayri</option>
                        <option value="love_shayri">love shayri</option>
                        <option value="broken_shayri">broken shayri</option>
                        <option value="other">other</option>
                    </select>
                    </br>
                    choose memes and shayri image(only jpeg or jpg format):
                    <input type="file" name="file" id="imageInput" accept="image/*" value="#CCCCCC">
                    <div class="image-preview" id="imagePreview">
                        <img src="#" alt="Image Preview">
                    </div>
                    </br>
                    enter memes and shayri in english and hindi [hindi not compulsory] :

                    <div class="form-group">
                        <textarea id="content" name="content" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Save" class="btn btn-primary">
                    </div>
            </form>
            <div class="error"><?php if(!empty($msg)){ echo $msg; } ?></div>
        </div>
    </div>
</body>

</html>
<script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#content'), {
        ckfinder: {
            uploadUrl: 'fileupload.php'
        }
    })
    .then(editor => {
        console.log(editor);
    })
    .catch(error => {
        console.error(error);
    });

document.getElementById('imageInput').addEventListener('change', function(event) {
    const input = event.target;
    const preview = document.getElementById('imagePreview');
    const img = preview.querySelector('img');

    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.addEventListener('load', function() {
            img.src = reader.result;
        });

        reader.readAsDataURL(file);
    } else {
        img.src = '#'; // Reset image source if no file is selected
    }
});
</script>