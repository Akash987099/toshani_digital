<?php
     require "header.php";
?>


    <!-- Header -->
    <header id="header" class="py-28 text-center lg:text-left">
      <div
        class="max-w-screen-lg mx-auto px-4 flex flex-col justify-center items-center sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8"
      >
        <div class="xl:text-right">
          <img class="inline" src="inag/new-ab.jpg" alt="alternative" />
        </div>

        <div class="xl:mr-12">
          <p class="p-title">BEST COMPANY</p>
          <h1 class="h1-large mb-5"><strong>About Us</strong></h1>
          <p class="p-large mb-8">
          Aws Nextstep Pvt.ltd was established in 2020 as a Technology company. Within a decade it has grown to become a flagship distribution organization in Digital financial Inclusion of “Bharat”. Aws Nextstep offers smart and sustainable technology solutions that are easily applicable and adaptable across industries. We welcome fresh ideas into our organization for growth of Aws Nextstep. We adopt an integral approach toward solutions and use the simplest knowledge-sharing methodologies to nature an environment of growth
          </p>
        </div>
      </div>
      <!-- end of container -->

      <section class="bg-white py-12">
        <div
          class="container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8"
        >
          <!-- Happy Customers -->
          <div class="text-center p-4 shadow-lg rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-users text-blue-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span
                id="counter-happy-customers"
                class="text-4xl font-bold text-gray-800"
                >0</span
              >
            </div>
            <p class="mt-2 text-gray-600">Happy Customers</p>
          </div>
          <!-- Enthusiastic Employees -->
          <div class="text-center p-4 shadow-lg rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-users-cog text-green-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span
                id="counter-employees"
                class="text-4xl font-bold text-gray-800"
                >0</span
              >
            </div>
            <p class="mt-2 text-gray-600">Enthusiastic Employees</p>
          </div>
          <!-- KIOSK Centers -->
          <div class="text-center p-4 shadow-lg rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-university text-purple-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span id="counter-kiosk" class="text-4xl font-bold text-gray-800"
                >0</span
              ><span class="text-2xl font-bold text-gray-800">+</span>
            </div>
            <p class="mt-2 text-gray-600">KIOSK Centers</p>
          </div>
          <!-- Digital Centers -->
          <div class="text-center p-4 shadow-lg rounded-lg">
            <div class="flex justify-center items-center mb-4">
              <div class="bg-gray-100 p-4 rounded-full">
                <i class="fas fa-server text-red-500 text-4xl"></i>
              </div>
            </div>
            <div>
              <span
                id="counter-digital-centers"
                class="text-4xl font-bold text-gray-800"
                >0</span
              ><span class="text-2xl font-bold text-gray-800">+</span>
            </div>
            <p class="mt-2 text-gray-600">Digital Centers</p>
          </div>
        </div>
      </section>
    </header>

    <!-- end of header -->
    <section class="w-full bg-white relative">
      <div class="w-full max-w-screen-xl mx-auto flex flex-col">
        <h1
          class="text-center text-xl font-bold text-red-600 tracking-wide uppercase"
        >
          Our Aim & Purpose
        </h1>
        <h2 class="text-center text-3xl font-bold text-blue-900 mt-2">
          Vision & Mission
        </h2>
        <div class="mt-6">
          <!-- Mission Section -->
          <div class="bg-white rounded-lg shadow-md p-6 mb-6">
            <h3 class="text-red-600 text-lg font-bold mb-4">Mission</h3>
            <p class="text-gray-700 mb-2">
              To emerge as a platform for small businesses to expand sources of
              their income at a minimal cost of investment.
            </p>
            <p class="text-gray-700 mb-2">
              To transform the scope of financial services using technology.
            </p>
            <p class="text-gray-700">
              Our mission is our motto and the underlying spirit behind our
              operations.
            </p>
          </div>
          <!-- Vision Section -->
          <div class="bg-white rounded-lg shadow-md p-6">
            <h3 class="text-red-600 text-lg font-bold mb-4">Vision</h3>
            <p class="text-gray-700">
              We aim at becoming a high tensile financial support to the
              businesses by providing a comprehensive range of trustworthy
              financial services with the use of technology all over the world.
            </p>
          </div>
        </div>
      </div>
    </section>
    <br />
    <!-- end of copyright -->
   
   <?php
      require "footer.php";
   ?>