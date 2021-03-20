<?php

session_start();
if(isset($_SESSION['administrator'])){
    
    include 'init.php';
    $go = isset($_GET['go']) ? $_GET['go'] : 'Manage';

    if($go == 'Manage'){
        $stmt = $con->prepare('SELECT * FROM categories');
        $stmt->execute();
        $allCat = $stmt->fetchAll();
        $a = 1;
        if( ! empty($allCat)){ ?>
            <section class='manage'>
                <div class='container'>            
                    <h1 class="text-center">ادارة المنتجات</h1>
                    <table>
                        <tr>
                            <th>الرقم</th>
                            <th>الاسم</th>
                            <th>السعر</th>
                            <th>التفعيل</th>
                            <th>الصورة</th>
                            <th>التحكم</th>
                        </tr>
                        <?php

                        
                                foreach($allCat as $cat){ 
                                    echo "<tr>";
                                        echo "<td>" . $cat['ID'] . "</td>";
                                        echo "<td>" . $cat['Name'] . "</td>";
                                        echo "<td>" . $cat['Price'] . " ر.س </td>";
                                        echo "<td>" . $cat['Status'] . "</td>";
                                        echo "<td>" . "1" . "</td>";
                                        echo "<td>";
                                            echo"<a  class= 'btn btn-danger' href='categories.php?go=Delete&catid=". $cat['ID']. "' >" . "  حذف </a>" ;
                                            echo"<a  class= 'btn btn-primary ButtEdit' href='categories.php?go=Edit&catid=". $cat['ID']. "' >" . "  تعديل </a>" ;
                                        echo"</td>";
                                    echo "</tr>";
                                }
                        
                        ?>
                    </table>
                </div>
            </section>
            
<?php
        }else{
            echo "<div class='text-center alert alert-danger>". "لايوجد منجات لديك" . "</div>";
        }

    }

    if($go == 'Add'){ ?>

        <section class='add'>
            <div class='container'>
                <h1 class='text-center'> اضافة منتج جديد </h1>
                <form action="categories.php?go=Insert" METHOD='POST' enctype='multipart/form-data'>
                    <div class='row form-group'>
                        <label class='col-sm-2'>اسم المنتج</label>
                        <input class='form-control col-sm-8' type='text' name='name' required />
                    </div>
                    <div class='row form-group'>
                        <label class='col-sm-2'>السعر</label>
                        <input class='form-control col-sm-8' type='text' name='price' required />
                    </div>
                    <div class='row form-group'>
                        <label class='col-sm-2'>حالة العرض</label>
                        <select class='form-control col-sm-8 ' name='status' >
                            <option value='1' >عرض المنتج</option>
                            <option value='0' > عدم عرض المنتج</option>
                        </select>
                        
                    </div>
                    <div class='row form-group'>
                        <label class='col-sm-2'>صورة المنتج</label>
                        <label class='upload'>
                            <span>
                                 اضافة صورة
                                 <i class="fas fa-upload"></i>
                            </span>
                            <input  class='form-control col-sm-8 image' type='file' name='image' required />
                        </label>
                        <i class="fas fa-check "></i>
                    </div>

                    <div class='row form-group'>
                        <input  type='submit' class='btn btn-primary col-sm-8' name='submit' value='اضافة' required />
                    </div>
                </form>
            </div>
    </section>

    <?php 
     
    }

    if($go == 'Insert'){

        if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])){
    
            echo '<h1 class="text-center">اضافة صنف </h1>';
            echo "<div class='container'>";


                
            $catName=filter_var($_POST['name'],FILTER_SANITIZE_STRING);
            $catPrice=filter_var($_POST['price'],FILTER_SANITIZE_NUMBER_INT);
            $catStatus = $_POST['status'];
    
                // Upload Image (This Is Array)
            
                $imageName = $_FILES['image']['name'];
                $imageSize = $_FILES['image']['size'];
                $imageTmp  = $_FILES['image']['tmp_name'];
                $imageType = $_FILES['image']['type'];
    
                // List Of Allowed File Type To Upload
    
                $imageAllowedExtention = array("jpeg" , "jpg" , "png" , "gif");
    
                // Get Image Extention 
                $imageExtention = strtolower(end( explode("." , $imageName) ));
                

                $formErrors=array();

                if(strlen($catName) < 3){

                    $formErrors[] = "Sorry This Name Is Wrong !";

                }
                if(! empty($imageName) && ! in_array($imageExtention , $imageAllowedExtention )){
                
                    $formErrors []= ' This Extention Is Not Allowed';
                }
                if(empty($imageName)){
                    
                    $formErrors []= ' Image Is Required';
                }
                if($imageSize > 6194304){
                    
                    $FormErrors []= ' Image Cant Be Larger Than <strong>  6 MB </strong>';
                }
                
                if(empty($formErrors)){

                    $catImage = rand(0 , 100000000) . "_" . $imageName ;
                    // Save Image Into Local
                    move_uploaded_file($imageTmp , "layout\images\uploads\\" . $catImage );

                    $stmt =$con->prepare("SELECT * FROM categories WHERE Name = ?");
                    $stmt->execute(array($catName));
                    $count = $stmt->rowCount();
                    if($count == 1){
                        echo " <div class='alert alert-danger'>Sorry This User Is Exist</div>";
                        header("refresh: 5; categories.php?go=Add");

                    }else{

                        $stmt = $con->prepare("INSERT INTO categories(Name,Price,Status,Image,Date)
                                                VALUES( :zname , :zprice , :zstatus ,:zimage,now())");
                        $stmt->execute(array(
                             'zname'   => $catName,
                             'zprice'  => $catPrice ,
                             'zstatus' => $catStatus ,
                             'zimage'  => $catImage  
                        ));

                        echo '<div class="container">';

                        echo "<div class=' text-center alert alert-success'>" . " تم الاضافة بنجاح </div>";
                        header("refresh: 3; categories.php?go=Add");
        
                        echo '</div">';
                    }
                }else{

                    foreach($formErrors as $error){
                        echo "<div class='alert alert-danger'>" . $error . "</div>";
                        header("refresh: 5; categories.php?go=Add");
                    }
                }          

        }
    }

    if($go == 'Edit'){

        $catid = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0 ;
        
        $stmt = $con->prepare("SELECT * FROM categories WHERE ID = ?");
        $stmt -> execute(array($catid));
        $cat = $stmt->fetch();
        $count = $stmt->rowCount();
        if ($count = 1){ ?>
            <div class='edit'>
            
                <h1 class='text-center'> تعديل الصنف </h1>
                <div class='container'>
                    <form action='categories.php?go=Update' method='POST' enctype='multipart/form-data' >
                    <input type='hidden' name='id' value=<?php echo $cat['ID'];?>>

                        <div class='row form-group'>
                            <label class='col-sm-2'>اسم المنتج</label>
                            <input class='form-control col-sm-8' type='text' value='<?php echo $cat['Name']; ?>' name='name' required />
                        </div>
                        <div class='row form-group'>
                            <label class='col-sm-2'>السعر</label>
                            <input class='form-control col-sm-8' type='text' value='<?php echo $cat['Price']; ?>' name='price' required />
                        </div>
                        <div class='row form-group'>
                            <label class='col-sm-2'>حالة العرض</label>
                            <select class='form-control col-sm-8 ' name='status' >
                                <option value='1' <?php if($cat['Status'] == 1){echo 'checked' ;} ?> >عرض المنتج</option>
                                <option value='0' <?php if($cat['Status'] == 0){echo 'checked' ;} ?> > عدم عرض المنتج</option>
                            </select>
                            
                        </div>
                        <div class='row form-group'>
                            <label class='col-sm-2'>صورة المنتج</label>
                            <img class=' offset-sm-2 col-sm-8' src = '<?php echo "layout/images/uploads/" . $cat['Image']  ;?>'>
                            <label class='upload'>
                                <label for='imgs'>
                                   <span>اضافة صورة جديدة</span> 
                                </label> 
                            <input  type='file' id='imgs' class='form-control image'  name='image'/>
                        </label>
                        </div>
                        <div class='row form-group'>
                            <input  type='submit' class='btn btn-primary' name='submit' value='تعديل' required />
                        </div> 
                        
                    </form>
                </div>
            </div>
    <?php


        }


    }

    if($go == 'Update'){
         
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            
            echo "<h1 class='text-center'>تحديث الصنف</h1>";
            echo "<div class='container'>";
 
                 $id      = $_POST['id'];
                 $catName    = $_POST['name'];
                 $price    = $_POST['price'];
                 $status   = $_POST['status'];

                 $imageName = $_FILES['image']['name'];
                 $imageSize = $_FILES['image']['size'];
                 $imageTmp  = $_FILES['image']['tmp_name'];
                 $imageType = $_FILES['image']['type'];
     
                 // List Of Allowed File Type To Upload
     
                 $imageAllowedExtention = array("jpeg" , "jpg" , "png" , "gif");
     
                 // Get Image Extention 
                 $imageExtention = strtolower(end( explode("." , $imageName) ));
                 
                 $catimage = rand(0 , 100000000) . "_" . $imageName ;
                // Save Image Into Local
                move_uploaded_file($imageTmp , "layout\images\uploads\\" . $catimage );
               
                $formErrors=array();

                if(strlen($catName) < 3){

                    $formErrors[] = "Sorry This Name Is Wrong !";

                }
                if(! empty($imageName) && ! in_array($imageExtention , $imageAllowedExtention )){
                
                    $formErrors []= ' This Extention Is Not Allowed';
                }
                if($imageSize > 6194304){
                    
                    $FormErrors []= ' Image Cant Be Larger Than <strong>  6 MB </strong>';
                }
                
                if(empty($formErrors)){

                    $stmt = $con->prepare('UPDATE
                                            categories
                                            SET
                                            Name = ? ,
                                            Price = ? ,
                                            Status = ? ,
                                            Image = ? 
                                            WHERE
                                            ID = ?');
                    $stmt->execute(array($catName, $price, $status, $catimage, $id));
                    echo "<div class=' text-center alert alert-success'>" . " تم تحديث العنصر" . "</div>";
                    header("refresh: 3; categories.php?go=Manage");
                }else{

                    foreach($formErrors as $error){
                        echo "<div class='alert alert-danger'>" . $error . "</div>";
                        header("refresh: 5; categories.php?go=Manage");
                    }
                }
            echo "</div>";
 
        }   
    }
    if($go == 'Delete'){

        echo "<h1 class='text-center'> حذف العنصر </h1>";
        echo"<div class='container'>";
            $catid = isset($_GET['catid']) && is_numeric($_GET['catid']) ? intval($_GET['catid']) : 0 ;
            $stmt = $con->prepare(" DELETE FROM categories WHERE ID = ?");
            $stmt->execute(array($catid));
    
            $check = checkItem("ID" , "categories" , $catid);
            if($check > 0){
    
                echo "<div class=' text-center alert alert-success'>" . "  تم حذف العنصر بنجاح " . "</div>";
            }else{
    
                echo "<div class='alert alert-danger text-center'>" ."This ID Is Not Exist" . "</div>";
    
            }
        echo "</div>";
    
    }
}else{
    echo "<div>" . "Sorry, you do not have permission to access this page" . "</div>";
    header("refresh:3; ../index.php");
}