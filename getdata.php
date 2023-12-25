<?php

    include 'com/conn.php';

    if(isset($_POST['bb'])??1){


        $page = $_POST['bb'];
        $limit = 5;
        $startfrom = ($page-1)*$limit;
        

    $query = "SELECT * FROM memes ORDER BY index1 DESC limit $startfrom,$limit";
    $data1 = mysqli_query($con, $query);
    
    while ($result = mysqli_fetch_assoc($data1)) {
        ?>
        <div
            class="flex flex-col rounded-lg bg-white mt-2 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:max-w-[200] md:flex-row">
            <?php if($result['image'] == 'error'){}else{ ?><img class="h-96 md:w-1/2 rounded-t-lg object-cover md:h-auto md:!rounded-none md:!rounded-l-lg"
                src="admin/photo/<?php echo $result['image']; ?>" alt="vikram" /><?php } ?>
            <div class="flex flex-col justify-start p-6">
                
                <!-- <h5 class="mb-2 text-xl font-medium text-neutral-800 dark:text-neutral-50">
                    Card title
                </h5> -->
                <div class="mb-4 text-base text-xs text-neutral-600 dark:text-neutral-200">
                <?php if($result['content'] == 'error'){}else{ echo $result['content']; } ?>
                </div>
                <div>
                    <span class="inline-block w-[90px] bg-blue-500 text-black px-2 py-1 m-2 rounded-full text-xs font-semibold">
                    <?php echo $result['catagory']; ?>
                    </span>
                    <?php if($result['image'] == 'error'){}else{ ?><a href="/admin/photo/<?php echo $result['image']; ?>" download><span class=" text-white"><i class="fa-solid fa-download"></i></span></a><?php } ?>
                    <!-- <button id="likeButton" value="<?php echo $result['index1']; ?>"  class="likeButton">
                        <i class="fa-solid fa-heart"></i>
                    </button> -->
                </div>
                <p class="text-xs text-neutral-500 dark:text-neutral-300">
                <?php echo $result['date']; ?>
                </p>
                
    
            </div>
        </div>
        <?php } }?>
        <script>
            $(".likeButton").click(function(){
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
            </script>
