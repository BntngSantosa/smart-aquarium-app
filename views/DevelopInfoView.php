<?php

session_start();

// Periksa apakah pengguna sudah login
if (!isset($_SESSION['AdminID']) || empty($_SESSION['AdminID'])) {
    // Jika tidak login, arahkan ke halaman login
    header("Location: ../");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en" class="">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>iot-app</title>
    <link rel="icon" type="image/png" href="../assets/images/logo.png">
    <link rel="stylesheet" href="../dist/output.css" />

    <script src="https://kit.fontawesome.com/76e513ada2.js" crossorigin="anonymous"></script>
  </head>
  <body class="font-Poppins bg-color-bg lg:flex dark:bg-dark-scondary transition-all duration-150 ease-in-out">

    <!-- sidebar start -->
    <aside id="sidebar" class="w-56 h-screen bg-primary fixed top-[113px] sm:top-[127px] -right-[250px] dark:bg-dark-five lg:block lg:left-0 lg:top-0 transition-all duration-150 ease-in-out">
      <div class="w-full lg:flex lg:items-center lg:px-[40px] lg:py-[20px] hidden">
        <img src="../assets/images/logo.png" alt="logo" class="mr-[10px] w-[40px] h-[25px] sm:w-[40px] sm:h-[35px]"/>
        <p class="text-md text-white font-normal sm:text-lg">ocean<span class="font-bold text-logo-color">Sage</span></p>
      </div>
      <div class="w-full h-3/4 flex flex-col justify-between px-[20px] sm:h-[75%] lg:h-[80%]">
        <ul class="w-full mt-5 grid grid-cols-1 gap-5">
          <li class="">
            <a href="DashboardView.php" class="flex items-center gap-[20px] text-[14px] font-normal text-secondary hover:text-white px-3 transition-all duration-100">
              <i class="fa-solid fa-house-chimney"></i>
              <span>Dashboard</span>
            </a>
          </li>
          <li class="">
            <a href="MonitoringView.php" class="flex items-center gap-[20px] text-[14px] font-normal text-secondary hover:text-white px-3 transition-all duration-100">
              <i class="fa-solid fa-desktop"></i>
              <span>Monitoring</span>
            </a>
          </li>
          <li class="">
            <a href="../views/ControllerView.php" class="flex items-center gap-[20px] text-[14px] font-normal text-secondary hover:text-white px-3 transition-all duration-100">
              <i class="fa-solid fa-gears"></i>
              <span>Controller</span>
            </a>
          </li>
          <li class="w-full bg-color-hover rounded-[4px] dark:bg-color-hover">
            <a href="DevelopInfoView.php" class="flex items-center gap-[20px] text-[14px] font-normal text-white px-3 py-2">
              <i class="fa-solid fa-laptop-code"></i>
              <span>Dev info</span>
            </a>
          </li>
        </ul>
        <div class="">
          <a id="logOut" href="../controllers/LoginController.php?action=logout" class="flex items-center gap-[20px] text-[14px] font-normal text-secondary hover:text-white px-3 transition-all duration-100">
            <i class="fa-solid fa-right-from-bracket transform rotate-180"></i>
            <span>Logout</span>
          </a>
        </div>
      </div>
    </aside>
    <!-- sidebar end -->

    <!-- main start -->
    <main class="flex-1 lg:pl-[224px]">
      <!-- header start -->
      <header class="flex w-full items-center justify-between px-[40px] py-[10px] fixed bg-white shadow-sm dark:bg-dark-primary lg:relative transition-all duration-150 ease-in-out">
        <div class="w-[175px] sm:w-[260px]">
          <h1 class="font-semibold text-2xl text-primary sm:text-3xl lg:text-4xl dark:text-slate-200">Dev info</h1>
          <p class="font-normal text-[12px] text-primary sm:text-md lg:text-[14px] dark:text-dark-fourth">Information about me.</p>
        </div>
        <div class="">
          <a href="https://www.itenas.ac.id" target="_blank">
            <img id="logoItenas" src="../assets/images/itenas-logo-full.png" alt="itenas logo" class="w-[80px] sm:w-[100px] block"/>
          </a>
        </div>
      </header>
      <!-- header end -->

      <!-- navbar start -->
      <nav class="w-full flex items-center justify-between px-[40px] py-[10px] bg-primary fixed mt-[67px] dark:bg-dark-five lg:hidden">
        <div class="flex items-center">
          <a href="#">
            <img src="../assets/images/logo.png" alt="logo" class="mr-[10px] w-[25px] h-[25px] sm:w-[40px] sm:h-[40px]"/>
          </a>
          <p class="text-md text-white font-normal sm:text-lg">ocean<span class="font-bold text-logo-color">Sage</span></p>
        </div>
        <div class="">
          <i id="hamburger" class="fa-solid fa-bars font-bold text-2xl text-white cursor-pointer"></i>
        </div>
      </nav>
      <!-- navbar end -->

      <!-- section content start -->
      <section class="px-[40px] pb-5 pt-[132px] sm:pt-[142px] lg:py-[20px]">
        <!-- hero start -->
        <div class="w-full h-full p-10 mb-5 bg-white rounded-[8px] border-b-4 border-primary dark:bg-dark-primary dark:border-logo-color">
          <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 ">
            <div class="w-full flex flex-col justify-between gap-2 lg:gap-5 sm:justify-center">
              <h1 class="font-bold text-xl text-primary sm:text-2xl md:text-4xl lg:text-5xl dark:text-slate-200">Halo🌟I am</h1>
              <p class="font-bold text-2xl text-primary sm:text-2xl md:text-5xl dark:text-slate-200">Bintang <span class="text-logo-color">Santosa</span> </p>
              <p class="font-medium text-sm text-primary sm:text-md md:text-xl dark:text-dark-fourth">I am a Frontend developer and Backend developer</p>
              <div class="flex items-center gap-5">
                <a href="https://wa.me/089630675999" target="_blank" class="text-[32px] text-green-500">
                  <i class="fa-brands fa-square-whatsapp "></i>
                </a>
                <a href="https://www.instagram.com/bntngsnts_?igsh=OGQ5ZDc2ODk2ZA==" target="_blank" class="text-[32px] bg-gradient-to-br from-purple-500 via-pink-500 to-red-500 text-transparent bg-clip-text">
                  <i class="fa-brands fa-square-instagram "></i>
                </a>
                <a href="#" target="_blank" class="text-[32px] text-logo-color ">
                  <i class="fa-brands fa-square-facebook"></i>
                </a>
                <a href="https://github.com/BntngSantosa" target="_blank" class="text-[32px] text-primary dark:text-slate-200">
                  <i class="fa-brands fa-square-github "></i>
                </a>
              </div>
              <a href="https://wa.me/089630675999" target="_blank" class="self-start px-7 py-2 bg-primary text-white text-sm font-bold rounded-[8px] hover:bg-logo-color sm:px-10 sm:py-2 sm:text-lg dark:bg-logo-color dark:hover:bg-color-hover">Contact</a>
            </div>
            <div class="w-full flex items-center justify-center sm:justify-end ">
              <img class="rounded-full sm:W-[80%]" src="../assets/images/pas-poto.png" alt="poto bintang">
            </div>
          </div>
        </div>
        <!-- hero end -->
        
        <!-- skills start -->
        <div class="w-full p-10 bg-primary border-b-4 border-light-yellow rounded-[8px] grid grid-cols-1 gap-5 dark:bg-dark-five">
          <div class="">
            <h1 class="font-bold text-white mb-5 sm:text-lg px-4 py-3 bg-logo-color text-center rounded-[8px]">Programming Language</h1>
            <div class="">
              <div class="w-full grid grid-cols-2 gap-2 sm:gap-5">
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">HTML</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">CSS</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">Javascript</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">Java</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">C++</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">Python</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">PHP</p>
              </div>
            </div>
          </div>
          <div class="">
            <h1 class="font-bold mb-5 sm:text-lg px-4 py-3 bg-logo-color text-center text-white rounded-[8px]">Framework</h1>
            <div class="">
              <div class="w-full grid grid-cols-2 gap-2 sm:gap-5">
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">Laravel</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">Bootstrap</p>
                <p class="font-semibold text-white text-center px-3 py-2 rounded-[8px] hover:bg-color-hover sm:text-xl sm:px-5 sm:py-4">Tailwind Css</p>
              </div>
            </div>
          </div>
        </div>
        <!-- skills end -->
        
        <!-- contact start -->
        <!-- <div class="w-full h-full p-10 bg-white rounded-[8px] border-b-4 border-light-red dark:bg-dark-primary">
          <div class="w-full h-full flex items-center justify-evenly gap-5">
            <a href="https://wa.me/089630675999" target="_blank" class="text-5xl text-green-500">
              <i class="fa-brands fa-square-whatsapp "></i>
            </a>
            <a href="https://www.instagram.com/bntngsnts_?igsh=OGQ5ZDc2ODk2ZA==" target="_blank">
              <i class="fa-brands fa-square-instagram text-5xl bg-gradient-to-br from-purple-500 via-pink-500 to-red-500 text-transparent bg-clip-text "></i>
            </a>
            <a href="#" target="_blank">
              <i class="fa-brands fa-square-facebook text-5xl text-logo-color "></i>
            </a>
            <a href="https://github.com/BntngSantosa" target="_blank" class="text-5xl text-primary dark:text-slate-200">
              <i class="fa-brands fa-square-github "></i>
            </a>
          </div>
        </div> -->
        <!-- contact end -->

      </section>
      <!-- section content end -->
    </main>
    <!-- main end -->

    <!-- button dark mode start -->
    <div id="btnDarkMode" class="w-[35px] h-[35px] bg-dark-primary flex items-center justify-center rounded-l-[50px] fixed right-0 bottom-5 cursor-pointer ">
      <i id="iconDarkMode" class="fa-solid fa-moon text-white text-lg transition-all ease-in-out duration-150"></i>
    </div>
    <!-- button dark mode end -->

    <script src="../assets/js/script.js"></script>
    <script src="../assets/js/mqttws31.js"></script>
    <script src="../assets/js/mqtt-subs.js"></script>
  </body>
</html>
