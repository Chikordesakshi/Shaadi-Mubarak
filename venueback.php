<?php
session_start();
function check()
{
    if(empty($_SESSION))
    {
        echo "<script>
        alert('Signin To Start Booking!');
        window.location.href='destinations.php';
        </script>";
return false;
    }
    else
    {
        return true; 
    }
}
if(isset($_POST["select"]))
{
    if(check()){
        include("connection.php");
        $user=$_SESSION["user_id"];
        $item=$_POST["venue"];
        //check venue is selected or not if no : redirect with alert if yes: fetch from master_list
        $sql1="SELECT * FROM ongoing_orders WHERE user_id='$user' AND category='venues'";
        $result1=mysqli_query($conn,$sql1);
        $cnt = mysqli_num_rows($result1);
        if($cnt>=1){
            echo "<script>
        alert('Venue already selected, check in cart!');
     
        window.location.href='destinations.php';
        </script>";
        
        }else{
            $sql="SELECT * FROM master_list WHERE item_id='$item'";
            $result=mysqli_query($conn,$sql);
            $row=mysqli_fetch_array($result, MYSQLI_ASSOC);
            $category=$row["item_category"];
            $name=$row["item_name"];
            $price=$row["price"];
            //insert into ongoing_order table
            $sql="INSERT INTO ongoing_orders(user_id,item_id,category,name,price) VALUES('$user','$item','$category','$name','$price')";
            $result=mysqli_query($conn,$sql);
            if($result)
            {
                header("Location:food.php");
            }
            
            
            //check counter
    
            //if 0 :redirect to next page
            //if 1: go to cart
    
        }
        
        
    }
}

?>