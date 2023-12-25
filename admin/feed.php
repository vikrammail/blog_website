<?php include '../com/conn.php';?>
<?php
$pag;
if (isset($_GET['page'])) {
    $pag = $_GET['page'];

}else{$pag = 1;}
$query = "SELECT * FROM content WHERE index1='$pag' ";
$data1 = mysqli_query($con, $query);

while ($result = mysqli_fetch_assoc($data1)) {
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="<?php echo $result['keyword']; ?>">
    <meta name="description" content="<?php echo $result['description']; ?>">
    <title><?php echo $result['title']; ?></title>
    <meta name="robots" content="index, follow">
    <meta property="og:title" content="<?php echo $result['title']; ?>">
<meta property="og:description" content="<?php echo $result['description']; ?>">
<meta property="og:image" content="photo/<?php echo $result['image']; ?>">
<meta property="og:url" content="https://www.gadget.commonhelp.in/admin/feed">
<link rel="canonical" href="https://www.gadget.commonhelp.in/admin/feed">
 <!-- twitter card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="<?php echo $result['title']; ?>">
<meta name="twitter:description" content="<?php echo $result['description']; ?>">
<meta name="twitter:image" content="photo/<?php echo $result['image']; ?>">

    <?php include '../com/cdn.php';?>
    <style>
table, th, td {
  border:1px solid black;
  margin:2px;   
}
table{
 margin:2px;   
width:100%;
}
#vk a{
    /* background-color:blue; */
    color:blue;
}
#vk h2{
    font-size:25px;
}
#vk h1{
    font-size:30px;
}
#vk h3{
    font-size:25px;
}
</style>
    
</head>

<body class="">

    <?php include '../com/header.php';?>
    <!-- Main Content Section -->
    <div class="container lg:w-1/2 mx-auto my-8 p-3">
        <div class="justify-center">
            <?php if($result['image'] == 'error'){}else{ ?>
        <div class="w-full h-full border border-gray-300 overflow-hidden">
        <img class="w-full h-full object-cover" src="photo/<?php echo $result['image']; ?>" alt="Image Preview">
    </div>
    <?php } ?>
            <!-- Content Card 1 -->
            <div id="vk" class="md:bg-white p-6 rounded-lg md:shadow-md">
                 <?php echo $result['content']; ?>
                </div>



        </div>
    </div>
    
    <!-- Footer -->
    <?php include '../com/footer.php';?>

</body>

</html>
<?php }?>