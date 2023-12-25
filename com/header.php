<?php
// uniq visitor 
include 'conn.php';
// mysqli_query($con,"update visit set reload_count=reload_count+1");
if(!isset($_COOKIE['visit'])){
	// setCookie('visit','yes',time()+(60*60*24*30));
    $cookie_name = "visit";
$cookie_value = "yes";
setcookie($cookie_name, $cookie_value, time() + (60*60*24*30), "/");
	mysqli_query($con,"update visit set total_count=total_count+1");
}
?>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
    />
    <!-- model style start -->
    <style>
      /* Add your custom styles here */
      .overlay {
          display: none;
          background: rgba(0, 0, 0, 0.5);
          position: fixed;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          align-items: center;
          justify-content: center;
          z-index: 1000;
      }

      .modal {
          background: white;
          padding: 20px;
          border-radius: 8px;
          max-width: 400px;
          text-align: center;
      }

      .close-btn {
          cursor: pointer;
          /* position: absolute; */
          
          right: 10px;
          width:10px;
          height:10px;
      }
  </style>
  <!-- model style end  -->
    <style>
      /* css for header style star */

      * {
  /* margin: 0;
  padding: 0;
  box-sizing: border-box; */
  list-style: none;
  /* font-family: "Poppins", sans-serif; */
}
.wrapper {
  padding: 10px;
  position: relative;
  max-width: 100%;
  /* chnage */
  
  /* background-color: #fff; */
  border-radius: 13px;
  overflow-x: hidden;
  overflow-y: hidden;
}

.wrapper .icon {
  position: absolute;
  top: 0;
  height: 100%;
  width: 100%px;
  display: flex;
  align-items: center;
  /* display: none; */
}

.wrapper .icon:first-child {
  left: 0;
  background: linear-gradient(90deg, #fff 70%, transparent);
  display: none;
}

.wrapper .icon:last-child {
  right: 0;
  background: linear-gradient(90deg, #fff 70%, transparent);
  justify-content: flex-end;
}

.wrapper .icon i {
  width: 55px;
  height: 55px;
  cursor: pointer;
  font-size: 1.12rem;
  text-align: center;
  line-height: 55px;
  border-radius: 50%;
  transition: all 0.3s ease;
}

.wrapper .icon:first-child i {
  margin-left: 15px;
}

.wrapper .icon:last-child i {
  margin-right: 15px;
}

.wrapper .icon i:hover {
  background-color: #efedfb;
}

.wrapper .tab-box {
  display: flex;
  float: right;
  gap: 6px;
  overflow-x: hidden;
  scroll-behavior: smooth;
}
.wrapper .tab-box.dragging {
  scroll-behavior: auto;
  cursor: grab;
}

.wrapper .tab-box .tab {
  cursor: pointer;
  font-size: 1rem;
  white-space: nowrap;
  background-color: #f5f4fd;
  padding: 6px 6px;
  border-radius: 30px;
  border: 1px solid #d8d4f2;
  transition: all 0.3s ease;
}

/* .wrapper .tab-box.dragging .tab {
  user-select: none;
  pointer-events: none;
} */

.wrapper .tab-box .tab:hover {
  /* background-color: #efedfb;s */
}

.wrapper .tab-box .tab.active {
  background-color: #4070f4;
  border-color: transparent;
  color: #fff;
}
@media only screen and (max-width: 600px) {
    .wrapper .tab-box .tab {
  cursor: pointer;
  font-size: 0.7rem;
  white-space: nowrap;
  background-color: #f5f4fd;
  padding: 6px 6px;
  border-radius: 15px;
  border: 1px solid #d8d4f2;
  transition: all 0.3s ease;
}
}
/* css header end  */
    </style>
  
    <!-- model start  -->
    <div class="overlay" id="modalOverlay">
      <div class="modal">
          <span class="close-btn" onclick="closeModal()">&times;</span>
          <p>Do you want to view the website in your language?</p>
          <span>
					    <div class="translate " id="google_translate_element"></div>

          			</span>
      </div>
  </div>
  <!-- model javascript -->
  <script>
//     document.addEventListener('DOMContentLoaded', function () {
//     if (!getCookie('modalShownn')) {
//         setTimeout(function () {
//             showModal();
//             setCookie('modalShownn', 'true', 1); // Set the cookie to expire in 1 day
//         }, 2000); // Adjust the timeout as needed (e.g., 2000 millisecondscond = 2 ses)
//     }
// });

// function showModal() {
//     document.getElementById('modalOverlay').style.display = 'flex';
// }

// function closeModal() {
//     document.getElementById('modalOverlay').style.display = 'none';
// }

// function setCookie(name, value, days) {
//     var expires = '';
//     if (days) {
//         var date = new Date();
//         date.setTime(date.getTime() + (days * 24 * 60 * 60*30));
//         expires = '; expires=' + date.toUTCString();
//     }
//     document.cookie = name + '=' + value + expires + '; path=/';
// }

// function getCookie(name) {
//     var nameEQ = name + '=';
//     var ca = document.cookie.split(';');
//     for (var i = 0; i < ca.length; i++) {
//         var c = ca[i];
//         while (c.charAt(0) === ' ') c = c.substring(1, c.length);
//         if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
//     }
//     return null;
// }
// model javascript end 
  </script>
  <!-- model end  -->
    <!-- sidebar -->
    <!-- <span
      class="text-[#7e22ce] text-4xl top-5 left-4 cursor-pointer"
      onclick="Openbar()"
    >
      <i class="bi bi-filter-left px-2 bg-[#a855f7] rounded-md"></i>
    </span> -->
    <!-- icon in header  -->
    <div
      class="sidebar fixed top-20 lg:top-0 bottom-0 lg:left-0 left-[-300px] duration-1000 p-2 w-[300px] overflow-y-auto text-center bg-gray-800 shadow h-screen"
    >
      <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center rounded-md">
          <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
          <h1 class="text-[15px] ml-3 text-xl text-white] font-bold">
            menu
          </h1>
          <i
            class="bi bi-x ml-20 cursor-pointer lg:hidden"
            onclick="Openbar()"
          ></i>
        </div>
        <hr class="my-2 text-gray-600" />

        <div>
          <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer bg-gray-700"
          >
            <i class="bi bi-search text-sm"></i>
            <input
              class="text-[15px] ml-4 w-full bg-transparent focus:outline-none"
              placeholder="Serach"
            />
          </div>

          <div
            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
            <i class="bi bi-house-door-fill"></i>
            <span class="text-[15px] ml-4 text-white]"><a href='/'>Home</a></span>
          </div>
          <div
            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
            <i class="bi bi-bookmark-fill"></i>
            <span class="text-[15px] ml-4 text-white]"><a href='/about'>about</a></span>
          </div>
          <hr class="my-4 text-gray-600" />
          <div
            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
            <i class="bi bi-envelope-fill"></i>
            <span class="text-[15px] ml-4 text-white]"><a href='/contact'>contact</a></span>
          </div>

          <div
            class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
            <i class="bi bi-chat-left-text-fill"></i>
            <div
              class="flex justify-between w-full items-center"
              onclick="dropDown()"
            >
              <span class="text-[15px] ml-4 text-white]">shayri</span>
              <span class="text-sm rotate-180" id="arrow">
                <i class="bi bi-chevron-down"></i>
              </span>
            </div>
          </div>
          <div
            class="leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto"
            id="submenu"
          >
            <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">
            <a href='/'>funny shayri</a>
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">
            <a href='/love_shayri'>love shayri</a>
            </h1>
            <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">
            <a href='/broken_shayri'>broken heart shayri</a>
            </h1>
          </div>
          <!-- <div
            class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600"
          >
            <i class="bi bi-box-arrow-in-right"></i>
            <span class="text-[15px] ml-4 text-white]">Logout</span>
          </div> -->
        </div>
      </div>
    </div>

    <script>
      // javascript for sidebar content
      function dropDown() {
        document.querySelector("#submenu").classList.toggle("hidden");
        document.querySelector("#arrow").classList.toggle("rotate-0");
      }
      dropDown();

      function Openbar() {
        document.querySelector(".sidebar").classList.toggle("left-[-300px]");
      }
    </script>

    <!-- sidebar end -->
 <!-- heade start  -->

 <div class="sm:ml-[300px] sticky top-0 backdrop-blur shadow-md">
      <div id="vk" class=" bg-gradient-to-r from-purple-500 to-blue-500 text-center md:font-bold text-2xl ">gadget</div>
    <div class="wrapper">
        <!-- <div class="flex">
            <p class=" md:hidden">menu icon</p>
        </div> -->
      <ul class="tab-box ">
        <li class="tab <?php if($menu == 'home'){echo 'active';} ?>"><a class="text-slate-900" href='/'>Home</a></li>
        <li class="tab <?php if($menu == 'articles'){echo 'active';} ?>"><a class="text-slate-900" href='/articles'>articles</a></li>
        <li class="tab <?php if($menu == 'shayri'){echo 'active';} ?>"><a class="text-slate-900" href='/shayri'>shayri</a></li>
        <li class="tab <?php if($menu == 'memes'){echo 'active';} ?>"><a class="text-slate-900" href='/memes'>memes</a></li>
        <div class="md:hidden"><span
          class="text-[#7e22ce] text-xl top-5 left-4 cursor-pointer"
          onclick="Openbar()"
        >
          <i class="bi bi-filter-left   rounded-sm"></i>
        </span></div>
      </ul>
    </div>
</div>
 <script>
        /* Created by Tivotal */

const tabBox = document.querySelector(".tab-box");
const tabs = document.querySelectorAll(".tab");
const icons = document.querySelectorAll(".icon i");

let isDragging = false;

tabs.forEach((tab) => {
  tab.addEventListener("click", () => {
    tabBox.querySelector(".active").classList.remove("active");
    tab.classList.add("active");
    const link = $('.active').val();
    window.location.assign("http://localhost/shayri"+link)
  });
});


    </script>

    <!-- header end  -->
    <!-- responsive div start  -->
    <div class="sm:ml-[305px] m-5">
    
  
