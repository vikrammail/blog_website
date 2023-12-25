<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Home - gadget.commonhelp.in</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Home,shayri,memes,articles,online articles,Thought-provioking content,informative articles,trending topics,lifestyle blogs,Health and wellness articles,Technology trends,Creative writing,Travel stories,Business insights,Science and innovation,Personal development,Relationship advice ,Parenting tips,food and recipes,Book reviews">
    <meta name="description" content="1000+ articles, memes, shayri and stories">


    <meta name="robots" content="index, follow">
    <meta property="og:title" content="Home">
<meta property="og:description" content="1000+ articles, memes, shayri and stories">
<meta property="og:image" content="gadget.png">
<meta property="og:url" content="https://www.gadget.commonhelp.in/">
<link rel="canonical" href="https://www.gadget.commonhelp.in/">
 <!-- twitter card -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Home">
<meta name="twitter:description" content="1000+ articles, memes, shayri and stories">
<meta name="twitter:image" content="gadget.png">
    <?php include 'com/cdn.php'; ?>
    <style>

    </style>


</head>

<body>
    <?php if($menu = "shayri") include 'com/header.php'; 
    include 'com/conn.php'; ?>
    <div id="data-container"></div>

    <!-- Placeholder for the loading indicator -->
    <div id="loading-indicator" style="display: none;">
        <!-- loading animation  -->
        <div class="shadow rounded-md p-4 max-w-sm  mx-auto">
            <div class="animate-pulse flex space-x-10">
                <div class="rounded-full bg-[#3b82f6] h-10 w-100"></div>
                <div class="flex-1 space-y-6 py-1">
                    <div class="h-2 bg-[#3b82f6] rounded"></div>
                    <div class="space-y-3">
                        <div class="grid grid-cols-3 gap-4">
                            <div class="h-2 bg-[#3b82f6] rounded col-span-2"></div>
                            <div class="h-2 bg-[#3b82f6] rounded col-span-1"></div>
                        </div>
                        <div class="h-2 bg-[#3b82f6] rounded"></div>
                        <div class="h-2 bg-[#3b82f6] rounded"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
    let page = 1; // Initial page number

    // Function to fetch and load more data
    function loadMoreData() {
        const loadingIndicator = $('#loading-indicator');
        loadingIndicator.show();
      var catagory = 'shayri';
        // Simulating an asynchronous request (replace this with your actual AJAX call)
        setTimeout(() => {
            $.ajax({
                url: 'com/getmemes.php',
                type: "post",
                data: {
                    bb: page,cat:catagory
                },
                success: function(data) {
                    $('#data-container').append(data);
                    // Increment the page number for the next request
                    page++;

                    // Hide the loading indicator
                    loadingIndicator.hide();
                },
                error: function(error) {
                    console.error('Error fetching data:', error);
                    loadingIndicator.hide();
                }
            });
        }, 1000); // Simulated delay for better visualization
    }

    // Event listener for scrolling
    $(window).scroll(function() {
        // Check if the user has scrolled to the bottom of the page
        if ($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            loadMoreData();
        }
    });

    // Initial load
    loadMoreData();
    </script>

    <input class="user" value="<?php if($_SESSION){echo $result['email']; }?>" type="hidden">
    <script>
    // function vikram(id){
    $(".likeButton").click(function() {
        this.classList.toggle('text-red-500');
        //               var vk = $(".likeButton").val();
        //               var user = $(".user").val();
        // // ajax code 
        // $.ajax({
        // url: "likes.php",
        // type: "post",
        // data: {bb:id,user},
        // success: function(data){
        //     // $('#form').html(data);
        // }

    });
    // });
    // }
    </script>

    <?php include 'com/footer.php'; ?>
</body>

</html>