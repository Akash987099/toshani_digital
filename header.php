<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <!-- SEO Meta Tags -->
    <meta
      name="description"
      content="Pavo is a mobile app Tailwind CSS HTML template created to help you present benefits, features and information about mobile apps in order to convince visitors to download them"
    />
    <meta name="author" content="Your name" />
    <!-- OG Meta Tags to improve the way the post looks when you share the page on Facebook, Twitter, LinkedIn -->
    <meta property="og:site_name" content="" />
    <!-- website name -->
    <meta property="og:site" content="" />
    <!-- website link -->
    <meta property="og:title" content="" />
    <!-- title shown in the actual shared post -->
    <meta property="og:description" content="" />
    <!-- description shown in the actual shared post -->
    <meta property="og:image" content="" />
    <!-- image link, make sure it's jpg -->
    <meta property="og:url" content="" />
    <!-- where do you want your post to link to -->
    <meta name="twitter:card" content="summary_large_image" />
    <!-- to have large image post format in Twitter -->

    <!-- Webpage Title -->
    <title>AWS Connect</title>

    <!-- Styles -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&display=swap"
      rel="stylesheet"
    />
    <link href="css/fontawesome-all.css" rel="stylesheet" />
    <link
      href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"
      rel="stylesheet"
    />

    <link href="css/swiper.css" rel="stylesheet" />
    <link href="css/magnific-popup.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/flip-card.css" rel="stylesheet" />

    <!-- Favicon  -->
    <!-- <link rel="icon" href="images/favicon.png" /> -->
  </head>
  <body data-spy="scroll" data-target=".fixed-top">

  <?php
// Current website URL ka base path le lo
$baseUrl = "http://" . $_SERVER['HTTP_HOST'];?>

    <!-- Navigation -->
    <nav class="fixed-top">
      <div
        class="sm:px-4 lg:px-8 py-5 flex flex-wrap bg-white items-center justify-between lg:flex-nowrap shadow-lg"
      >
        <!-- Text Logo - Use this if you don't have a graphic logo -->
        <!-- <a class="text-gray-800 font-semibold text-3xl leading-4 no-underline page-scroll" href="index.php">Pavo</a> -->
        <!-- Image Logo -->
         <!-- fkhbgjr -->
        <a
          class="inline-block mr-4 py-0.5 text-xl whitespace-nowrap hover:no-underline focus:no-underline"
          href="index.php"
        >
          <img src="<?php echo $baseUrl ?>/inag/LOGO.png" alt="alternative" class="h-12" />
        </a>

        <button
          class="background-transparent border border-solid p-1 border-red-700 rounded text-xl leading-none hover:no-underline focus:no-underline lg:hidden lg:text-gray-500"
          type="button"
          data-toggle="offcanvas"
        >
          <span
            class="navbar-toggler-icon inline-block w-8 h-8 align-middle"
          ></span>
        </button>

        <div
          class="navbar-collapse offcanvas-collapse lg:flex lg:flex-grow lg:items-center"
          id="navbarsExampleDefault"
        >
          <ul
            class="pl-0 mt-3 mb-2 ml-auto flex text-sm flex-col list-none lg:mt-0 lg:mb-0 lg:flex-row"
          >
            <li>
              <a class="nav-link page-scroll active" href="index.php"
                >Home <span class="sr-only">(current)</span></a
              >
            </li>
            <li>
              <a class="nav-link page-scroll" href="/about.php">About Us</a>
            </li>
            <li>
              <a class="nav-link page-scroll" href="service.php">services</a>
            </li>

            <li class="dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="dropdown01"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >B2B API Services</a
              >
              <div class="dropdown-menu shadow-lg" aria-labelledby="dropdown01">
                <section class="flex flex-col gap-y-2">
                  <div class="elementor-widget-container">
                    <ul class="elementor-icon-list-items">
                      <li class="nav-large-link">
                        <a href="/products/">
                          <span class="elementor-icon-list-text">Products</span>
                        </a>
                      </li>
                    </ul>
                  </div>
                  <div class="flex gap-8">
                    <div
                      class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b19525e"
                      data-id="b19525e"
                      data-element_type="column"
                    >
                      <div
                        class="elementor-widget-wrap elementor-element-populated"
                      >
                        <div
                          class="elementor-element elementor-element-494d2b5 elementor-widget elementor-widget-elementskit-heading"
                          data-id="494d2b5"
                          data-element_type="widget"
                          data-widget_type="elementskit-heading.default"
                        >
                          <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                              <div
                                class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-"
                              >
                                <h4
                                  class="ekit-heading--subtitle elementskit-section-subtitle"
                                >
                                  Financial APIs
                                </h4>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-1b9c4a0 elementor-widget elementor-widget-elementskit-page-list"
                          data-id="1b9c4a0"
                          data-element_type="widget"
                          data-widget_type="elementskit-page-list.default"
                        >

                       

                          <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                              <div class="elementor-icon-list-items">
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-18cb473 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#1"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >DMT</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-3b0de6f ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#2"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >AePS (2FA API &amp; SDK)
                                        </span>
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-2517b40 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#3"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >AADHAR PAY</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-195fca0 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#4"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >mATM SDK</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-7a6493b ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#5"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Electricity / LPG / Water Bill
                                          Offline</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-794238a ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#6"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Electricity / LPG / Water Bill
                                          Online</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-eb227c5 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#7"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >LIC</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-dd24844 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#8"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Payout</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-c61ff1e ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#9"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Prepaid Recharge</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-a745937 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#10"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Mobile Postpaid</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-01661ec ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#11"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >DTH Recharge</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-ec5e109 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#12"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >FASTAG</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-987f04e ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#13"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >PAN Card - NSDL</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-13302ec ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#14"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >UPI Lite</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-115c373 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#15"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Virtual Collection</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-046db40 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/Financial-APIs/#16"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Credit Card Bill</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div
                      class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-626f1c6"
                      data-id="626f1c6"
                      data-element_type="column"
                    >
                      <div
                        class="elementor-widget-wrap elementor-element-populated"
                      >
                        <div
                          class="elementor-element elementor-element-73ffc35 elementor-widget elementor-widget-spacer"
                          data-id="73ffc35"
                          data-element_type="widget"
                          data-widget_type="spacer.default"
                        >
                          <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                              <div class="elementor-spacer-inner"></div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-15cb019 elementor-widget elementor-widget-elementskit-heading"
                          data-id="15cb019"
                          data-element_type="widget"
                          data-widget_type="elementskit-heading.default"
                        >
                          <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                              <div
                                class="ekit-heading elementskit-section-title-wraper text_left ekit_heading_tablet- ekit_heading_mobile-"
                              >
                                <h2
                                  class="ekit-heading--subtitle elementskit-section-subtitle"
                                >
                                  Verification APIs
                                </h2>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div
                          class="elementor-element elementor-element-182fb16 elementor-widget elementor-widget-elementskit-page-list"
                          data-id="182fb16"
                          data-element_type="widget"
                          data-widget_type="elementskit-page-list.default"
                        >
                          <div class="elementor-widget-container">
                            <div class="ekit-wid-con">
                              <div class="elementor-icon-list-items">
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-18cb473 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/verification-apis/#1"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Aadhar Verification API</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-8190a32 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/verification-apis/#2"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >PAN Verification API</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-1d27f93 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/verification-apis/#3"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Account Verification API</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-8a6d7c2 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/verification-apis/#4"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Voter ID Verification API</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-3601434 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/verification-apis/#5"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >RC Verification API</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-681ff9a ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/verification-apis/#6"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >Driving License Verification
                                          API</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div class="elementor-icon-list-item">
                                  <a
                                    class="elementor-repeater-item-4e24402 ekit_badge_left"
                                    href="<?php echo $baseUrl; ?>/verification-apis/#7"
                                  >
                                    <div class="ekit_page_list_content">
                                      <span class="elementor-icon-list-text">
                                        <span class="ekit_page_list_title_title"
                                          >ROC Verification API</span
                                        >
                                      </span>
                                    </div>
                                  </a>
                                </div>
                                <div
                                  class="elementor-element elementor-element-385be89 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                                  data-id="385be89"
                                  data-element_type="widget"
                                  data-widget_type="image.default"
                                >
                                  <div class="elementor-widget-container">
                                    <img
                                      width="250"
                                      height="250"
                                      src="./images/DMT_1.png"
                                      class="attachment-large size-large wp-image-4115"
                                      alt="DMT"
                                      srcset="
                                        https://toshanidigital.com/wp-content/uploads/2023/11/DMT_1.png         600w,
                                        https://toshanidigital.com/wp-content/uploads/2023/11/DMT_1-300x300.png 300w,
                                        https://toshanidigital.com/wp-content/uploads/2023/11/DMT_1-150x150.png 150w
                                      "
                                      sizes="(max-width: 600px) 100vw, 600px"
                                    />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </li>
           
            <li class="dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="dropdown01"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
                >Channel Partner</a
              >
              <div class="dropdown-menu shadow-lg" aria-labelledby="dropdown01">
                  <section class="flex flex-col gap-y-2">
                    <div class="elementor-widget-container">
                      <ul class="elementor-icon-list-items">
                        <li class="text-lg font-semibold">
                          <a href="#">
                            <span class="elementor-icon-list-text uppercase">Channel Partner</span>
                          </a>
                        </li>
                      </ul>
                    </div>
                    <div class="flex gap-8">
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b19525e"
                        data-id="b19525e"
                        data-element_type="column"
                      >
                        <div
                          class="elementor-widget-wrap elementor-element-populated"
                        >
                          
                          <div
                            class="elementor-element elementor-element-1b9c4a0 elementor-widget elementor-widget-elementskit-page-list"
                            data-id="1b9c4a0"
                            data-element_type="widget"
                            data-widget_type="elementskit-page-list.default"
                          >
                            <div class="elementor-widget-container">
                              <div class="ekit-wid-con">
                                <div class="elementor-icon-list-items">
                                  
                                  <div class="elementor-icon-list-item">
                                    <a
                                      class="elementor-repeater-item-987f04e page-scroll ekit_badge_left"
                                      href="<?php echo $baseUrl; ?>/verification-apis/#13"
                                    >
                                      <div class="ekit_page_list_content">
                                        <span class="elementor-icon-list-text">
                                          <span class="ekit_page_list_title_title"
                                            >Why AWS Connect Partner</span
                                          >
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  
                                  <div class="elementor-icon-list-item">
                                    <a
                                      class="elementor-repeater-item-987f04e page-scroll ekit_badge_left"
                                      href="<?php echo $baseUrl; ?>/verification-apis/#13"
                                    >
                                      <div class="ekit_page_list_content">
                                        <span class="elementor-icon-list-text">
                                          <span class="ekit_page_list_title_title"
                                            >Apply for AWS Connect Partner</span
                                          >
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="elementor-icon-list-item">
                                    <a
                                      class="elementor-repeater-item-13302ec page-scroll ekit_badge_left"
                                      href="#14"
                                    >
                                      <div class="ekit_page_list_content">
                                        <span class="elementor-icon-list-text">
                                          <span class="ekit_page_list_title_title"
                                            >Channel Partner Application process</span
                                          >
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                  <div class="elementor-icon-list-item">
                                    <a
                                      class="elementor-repeater-item-115c373 page-scroll ekit_badge_left"
                                      href="<?php echo $baseUrl; ?>/verification-apis/#15"
                                    >
                                      <div class="ekit_page_list_content">
                                        <span class="elementor-icon-list-text">
                                          <span class="ekit_page_list_title_title"
                                            >Channel Partner Support</span
                                          >
                                        </span>
                                      </div>
                                    </a>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-626f1c6"
                        data-id="626f1c6"
                        data-element_type="column"
                      >
                        <div
                          class="elementor-widget-wrap elementor-element-populated"
                        >
                         
                         
                          <div
                            class="elementor-element elementor-element-182fb16 elementor-widget elementor-widget-elementskit-page-list"
                            data-id="182fb16"
                            data-element_type="widget"
                            data-widget_type="elementskit-page-list.default"
                          >
                            <div class="elementor-widget-container">
                              <div class="ekit-wid-con">
                                <div class="elementor-icon-list-items">
                                  
                                  
                                 
                                  
                                 
                                  
                                 
                                  <div
                                    class="elementor-element elementor-element-385be89 elementor-hidden-tablet elementor-hidden-mobile elementor-widget elementor-widget-image"
                                    data-id="385be89"
                                    data-element_type="widget"
                                    data-widget_type="image.default"
                                  >
                                    <div class="elementor-widget-container">
                                      <img
                                        width="400"
                                        height="400"
                                        src="../images/1.jpg"
                                        class="attachment-large size-large wp-image-4115"
                                        alt="DMT"
                                        srcset="
                                          https://toshanidigital.com/wp-content/uploads/2023/11/DMT_1.png         600w,
                                          https://toshanidigital.com/wp-content/uploads/2023/11/DMT_1-300x300.png 300w,
                                          https://toshanidigital.com/wp-content/uploads/2023/11/DMT_1-150x150.png 150w
                                        "
                                        sizes="(max-width: 600px) 100vw, 600px"
                                      />
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
               
              </div>
            </li>

            <li>
              <a class="nav-link page-scroll" href="career.php">Careers</a>
            </li>
            <li>
              <a class="nav-link page-scroll" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
        <!-- end of navbar-collapse -->
      </div>
      <!-- end of container -->
    </nav>
    <!-- end of navbar -->
    <!-- end of navigation -->
