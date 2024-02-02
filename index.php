<?php

require_once "./config/controller.php";

$plants = $BurmeseAgriculture->connect();

$pageData = $BurmeseAgriculture->paginate();

$totalPages = $BurmeseAgriculture->link();

$imageFolder = './img/';

// echo "<pre>";   

// die(var_dump($plants));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Burmese Agriculture</title>
  <link rel="stylesheet" href="./src/output.css">
  <link rel="stylesheet" href="./src/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-lime-200">

<header class='bg-green-600 font-[sans-serif] min-h-[60px]'>
    <div class='sm:flex sm:flex-wrap sm:items-center sm:justify-between sm:gap-y-4 sm:gap-x-4 px-10 py-3 relative'>
      <div class="sm:flex sm:items-center">
      <div class="flex w-full text-white">

<i class="fa-brands fa-pagelines  text-3xl me-3"></i>

<h1 class="text-3xl font-bold">Burmese Agriculture</h1>

<i class="fa-brands fa-pagelines  text-3xl ms-3"></i>

</div>
      
        <div class="bg-white flex px-4 rounded h-10 sm:ml-16 lg:w-80 max-sm:mt-6">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"
            class="fill-gray-400 mr-3 rotate-90">
            <path
              d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z">
            </path>
          </svg>
          <input type='email' placeholder='Search...' class="w-full outline-none bg-transparent text-[#333] text-sm" />
        </div>
      </div>
      <div class='flex items-center space-x-10 ml-auto max-sm:mt-6'>
        <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer shrink-0 fill-[#fff] hover:fill-[#bfc2ff]"
          viewBox="0 0 511 511.999">
          <path
            d="M498.7 222.695c-.016-.011-.028-.027-.04-.039L289.805 13.81C280.902 4.902 269.066 0 256.477 0c-12.59 0-24.426 4.902-33.332 13.809L14.398 222.55c-.07.07-.144.144-.21.215-18.282 18.386-18.25 48.218.09 66.558 8.378 8.383 19.44 13.235 31.273 13.746.484.047.969.07 1.457.07h8.32v153.696c0 30.418 24.75 55.164 55.168 55.164h81.711c8.285 0 15-6.719 15-15V376.5c0-13.879 11.293-25.168 25.172-25.168h48.195c13.88 0 25.168 11.29 25.168 25.168V497c0 8.281 6.715 15 15 15h81.711c30.422 0 55.168-24.746 55.168-55.164V303.14h7.719c12.586 0 24.422-4.903 33.332-13.813 18.36-18.367 18.367-48.254.027-66.633zm-21.243 45.422a17.03 17.03 0 0 1-12.117 5.024h-22.72c-8.285 0-15 6.714-15 15v168.695c0 13.875-11.289 25.164-25.168 25.164h-66.71V376.5c0-30.418-24.747-55.168-55.169-55.168H232.38c-30.422 0-55.172 24.75-55.172 55.168V482h-66.71c-13.876 0-25.169-11.29-25.169-25.164V288.14c0-8.286-6.715-15-15-15H48a13.9 13.9 0 0 0-.703-.032c-4.469-.078-8.66-1.851-11.8-4.996-6.68-6.68-6.68-17.55 0-24.234.003 0 .003-.004.007-.008l.012-.012L244.363 35.02A17.003 17.003 0 0 1 256.477 30c4.574 0 8.875 1.781 12.113 5.02l208.8 208.796.098.094c6.645 6.692 6.633 17.54-.031 24.207zm0 0"
            data-original="#000000" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer shrink-0 fill-[#fff] hover:fill-[#bfc2ff]"
          viewBox="0 0 64 64">
          <path
            d="M45.5 4A18.53 18.53 0 0 0 32 9.86 18.5 18.5 0 0 0 0 22.5C0 40.92 29.71 59 31 59.71a2 2 0 0 0 2.06 0C34.29 59 64 40.92 64 22.5A18.52 18.52 0 0 0 45.5 4ZM32 55.64C26.83 52.34 4 36.92 4 22.5a14.5 14.5 0 0 1 26.36-8.33 2 2 0 0 0 3.27 0A14.5 14.5 0 0 1 60 22.5c0 14.41-22.83 29.83-28 33.14Z"
            data-original="#000000" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer shrink-0 fill-[#fff] hover:fill-[#bfc2ff]"
          viewBox="0 0 371.263 371.263">
          <path
            d="M305.402 234.794v-70.54c0-52.396-33.533-98.085-79.702-115.151.539-2.695.838-5.449.838-8.204C226.539 18.324 208.215 0 185.64 0s-40.899 18.324-40.899 40.899c0 2.695.299 5.389.778 7.964-15.868 5.629-30.539 14.551-43.054 26.647-23.593 22.755-36.587 53.354-36.587 86.169v73.115c0 2.575-2.096 4.731-4.731 4.731-22.096 0-40.959 16.647-42.995 37.845-1.138 11.797 2.755 23.533 10.719 32.276 7.904 8.683 19.222 13.713 31.018 13.713h72.217c2.994 26.887 25.869 47.905 53.534 47.905s50.54-21.018 53.534-47.905h72.217c11.797 0 23.114-5.03 31.018-13.713 7.904-8.743 11.797-20.479 10.719-32.276-2.036-21.198-20.958-37.845-42.995-37.845a4.704 4.704 0 0 1-4.731-4.731zM185.64 23.952c9.341 0 16.946 7.605 16.946 16.946 0 .778-.12 1.497-.24 2.275-4.072-.599-8.204-1.018-12.336-1.138-7.126-.24-14.132.24-21.078 1.198-.12-.778-.24-1.497-.24-2.275.002-9.401 7.607-17.006 16.948-17.006zm0 323.358c-14.431 0-26.527-10.3-29.342-23.952h58.683c-2.813 13.653-14.909 23.952-29.341 23.952zm143.655-67.665c.479 5.15-1.138 10.12-4.551 13.892-3.533 3.773-8.204 5.868-13.353 5.868H59.89c-5.15 0-9.82-2.096-13.294-5.868-3.473-3.772-5.09-8.743-4.611-13.892.838-9.042 9.282-16.168 19.162-16.168 15.809 0 28.683-12.874 28.683-28.683v-73.115c0-26.228 10.419-50.719 29.282-68.923 18.024-17.425 41.498-26.887 66.528-26.887 1.198 0 2.335 0 3.533.06 50.839 1.796 92.277 45.929 92.277 98.325v70.54c0 15.809 12.874 28.683 28.683 28.683 9.88 0 18.264 7.126 19.162 16.168z"
            data-original="#000000" />
        </svg>
        <svg xmlns="http://www.w3.org/2000/svg" width="20px" class="cursor-pointer shrink-0 fill-[#fff] hover:fill-[#bfc2ff]"
          viewBox="0 0 512 512">
          <path
            d="M337.711 241.3a16 16 0 0 0-11.461 3.988c-18.739 16.561-43.688 25.682-70.25 25.682s-51.511-9.121-70.25-25.683a16.007 16.007 0 0 0-11.461-3.988c-78.926 4.274-140.752 63.672-140.752 135.224v107.152C33.537 499.293 46.9 512 63.332 512h385.336c16.429 0 29.8-12.707 29.8-28.325V376.523c-.005-71.552-61.831-130.95-140.757-135.223zM446.463 480H65.537V376.523c0-52.739 45.359-96.888 104.351-102.8C193.75 292.63 224.055 302.97 256 302.97s62.25-10.34 86.112-29.245c58.992 5.91 104.351 50.059 104.351 102.8zM256 234.375a117.188 117.188 0 1 0-117.188-117.187A117.32 117.32 0 0 0 256 234.375zM256 32a85.188 85.188 0 1 1-85.188 85.188A85.284 85.284 0 0 1 256 32z"
            data-original="#000000" />
        </svg>
      </div>
    </div>
  </header>

 
  <div class="container w-full mx-auto p-5">

    <!-- <div class="flex w-full ">

      <i class="fa-brands fa-pagelines  text-3xl me-3"></i>

      <h1 class="text-3xl font-bold">Burmese Agriculture</h1>

      <i class="fa-brands fa-pagelines  text-3xl ms-3"></i>

    </div> -->

 
<div class="flex justify-center mt-3 ">
<?php
  for ($i = 1; $i <= $totalPages; $i++) {

      echo "<div><h1> <a style='color:green; margin:10px ; font-size:25px;' href='?page=$i'>$i</a></h1></div>";
  }
  ?>

</div>

    <div class="flex flex-wrap justify-around mt-16">
  


      <?php foreach ($pageData as $plant) : ?>


        <div class="w-full lg:w-2/5 p-3 mt-4 bg-white rounded-xl mb-14 h-52">
          <div class="flex flex-col lg:flex-row-reverse rounded    h-40 lg:h-32  ">
            <img class="block h-auto w-full lg:w-48 flex-none bg-cover rounded-xl mt-8" src="<?php echo $imageFolder . $plant['Id'] . '.jpg'; ?>">
            <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
              <div class="text-black   mb-2 leading-tight">
                <h1 class="font-bold text-xl"> <?php echo $plant['Title'] ?></h1>
                <p class="mt-4">By : <?php echo $plant['Author'] ?></p>
                
              </div>

              <a href="description.php?Id=<?php echo $plant['Id']; ?>">
              <p class="text-grey-darker  font-bold text-xl">Read more>></p>
              </a>
             
            </div>
          </div>
        </div>


      <?php endforeach; ?>

    </div>


  </div>

  <div class="relative bg-green-600">
      <div class="absolute inset-x-0 bottom-0">
          <svg viewBox="0 0 224 12" fill="currentColor" class="w-full -mb-1 text-white" preserveAspectRatio="none">
              <path
                  d="M0,0 C48.8902582,6.27314026 86.2235915,9.40971039 112,9.40971039 C137.776408,9.40971039 175.109742,6.27314026 224,0 L224,12.0441132 L0,12.0441132 L0,0 Z">
              </path>
          </svg>
      </div>
      <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
          <div class="relative max-w-2xl sm:mx-auto sm:max-w-xl md:max-w-2xl sm:text-center">
              <h2 class="mb-6 font-sans text-3xl text-center font-bold tracking-tight text-white sm:text-4xl sm:leading-none">
                Subscribe to our newsletter
              </h2>
              <p class="mb-6 text-base text-indigo-200 md:text-lg">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                  rem aperiam, eaque ipsa quae. explicabo. Sed ut perspiciatis unde omnis.
              </p>
              <form class="flex flex-col items-center w-full mb-4 md:flex-row md:px-16">
                  <input
            placeholder="Email"
            required=""
            type="text"
            class="flex-grow w-full h-12 px-4 mb-3 text-white transition duration-200 border-2 border-transparent rounded appearance-none md:mr-2 md:mb-0 bg-deep-purple-900 focus:border-teal-accent-700 focus:outline-none focus:shadow-outline"
          />
                  <a href="/"
                      class="inline-flex items-center justify-center w-full h-12 px-6 font-semibold tracking-wide text-gray-200 transition duration-200 rounded shadow-md md:w-auto hover:text-deep-purple-900 bg-teal-accent-400 hover:bg-teal-accent-700 focus:shadow-outline focus:outline-none">
                      Subscribe
                  </a>
              </form>
              <p class="max-w-md mb-10 text-xs tracking-wide text-indigo-100 sm:text-sm sm:mx-auto md:mb-16">
                  Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.
              </p>
              <a href="/" aria-label="Scroll down"
                  class="flex items-center justify-center w-10 h-10 mx-auto text-white duration-300 transform border border-gray-400 rounded-full hover:text-teal-accent-400 hover:border-teal-accent-400 hover:shadow hover:scale-110">
                  <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="currentColor">
                      <path
                          d="M10.293,3.293,6,7.586,1.707,3.293A1,1,0,0,0,.293,4.707l5,5a1,1,0,0,0,1.414,0l5-5a1,1,0,1,0-1.414-1.414Z">
                      </path>
                  </svg>
              </a>
          </div>
      </div>
  </div>
</body>

</html>