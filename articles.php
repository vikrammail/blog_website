<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>articles</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="articles,articles of confederation,news articles,newsela articles,articles of confederation definition,scholarly articles,articles of incorporation,current event articles,education,education articles,knowledge articles,knowledge,project,student project,new project,project for student,art for student">
    <meta name="description" content="best articles provide in gadget.commonhelp.in">


    <meta name="robots" content="index, follow">
    <meta property="og:title" content="articles">
    <meta property="og:description" content=" best articles provide in gadget.commonhelp.in">
    <meta property="og:image" content="url-to-your-image.jpg">
    <meta property="og:url" content="https://www.gadget.commonhelp.in/articles">
    <link rel="canonical" href="https://www.gadget.commonhelp.in/articles">
    <!-- twitter card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="articles">
    <meta name="twitter:description" content="best articles provide in gadget.commonhelp.in">
    <meta name="twitter:image" content="gadget.png">



    <?php include 'com/conn.php';?>
    <?php include 'com/cdn.php';?>
</head>

<body class="bg-gray-100">
    <?php if($menu = "articles") include 'com/header.php';?>

    <h2 class="text-lg bg-black-800 text-center font-semibold mb-4">articles</h2>
    <?php
$query = "SELECT * FROM content ORDER BY index1 DESC ";
$data1 = mysqli_query($con, $query);

while ($result = mysqli_fetch_assoc($data1)) {
    ?>

        <div class="container mx-auto p-4">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-8">

                <!-- First Column -->
                <div class="p-4 shadow-md">

                    <a  class="text-[#2563eb]" href="/admin/feed?page=<?php echo $result['index1']; ?>"><?php echo $result['title']; ?></a>
                </div>



            </div>
        </div>
    
    <?php }?>
    <?php include 'com/footer.php';?>
</body>

</html>