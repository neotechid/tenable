Form Login Default
<?php
    if (isset($_POST['Upload'])) {

            $target_path = DVWA_WEB_PAGE_TO_ROOT."hackable/uploads/";
            $target_path = $target_path . basename( $_FILES['uploaded']['name']);

            if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
                
                echo '<pre>';
                echo 'Your image was not uploaded.';
                echo '</pre>';
                
              } else {
            
                echo '<pre>';
                echo $target_path . ' succesfully uploaded!';
                echo '</pre>';
                
            }

        }
?>

Form Login Spesifik type file image/jpg

<?php
    if (isset($_POST['Upload'])) {

            $target_path = DVWA_WEB_PAGE_TO_ROOT."hackable/uploads/";
            $target_path = $target_path . basename($_FILES['uploaded']['name']);
            $uploaded_name = $_FILES['uploaded']['name'];
            $uploaded_type = $_FILES['uploaded']['type'];
            $uploaded_size = $_FILES['uploaded']['size'];

            if (($uploaded_type == "image/jpeg") && ($uploaded_size < 100000)){


                if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
                
                    echo '<pre>';
                    echo 'Your image was not uploaded.';
                    echo '</pre>';
                    
                  } else {
                
                    echo '<pre>';
                    echo $target_path . ' succesfully uploaded!';
                    echo '</pre>';
                    
                    }
            }
            else{
                echo '<pre>Your image was not uploaded.</pre>';
            }
        }
?>

Form Login Spesifik extensi file & size


<?php
if (isset($_POST['Upload'])) {

            $target_path = DVWA_WEB_PAGE_TO_ROOT."hackable/uploads/";
            $target_path = $target_path . basename($_FILES['uploaded']['name']);
            $uploaded_name = $_FILES['uploaded']['name'];
            $uploaded_ext = substr($uploaded_name, strrpos($uploaded_name, '.') + 1);
            $uploaded_size = $_FILES['uploaded']['size'];

            if (($uploaded_ext == "jpg" || $uploaded_ext == "JPG" || $uploaded_ext == "jpeg" || $uploaded_ext == "JPEG") && ($uploaded_size < 100000)){


                if(!move_uploaded_file($_FILES['uploaded']['tmp_name'], $target_path)) {
                    
                    echo '<pre>';
                    echo 'Your image was not uploaded.';
                    echo '</pre>';
                
                  } else {
                
                    echo '<pre>';
                    echo $target_path . ' succesfully uploaded!';
                    echo '</pre>';
                    
                    }
            }
            
            else{
                
                echo '<pre>';
                echo 'Your image was not uploaded.';
                echo '</pre>';

            }
        }

?>