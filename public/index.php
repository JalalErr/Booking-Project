<!DOCTYPE html>
<html class="h-full bg-white">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="./output.css" rel="stylesheet" />
  </head>
  <body class="h-full">
    <header>
      <nav
        class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-green-950"
      >
        <div
          class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl"
        >
          <a href="#" class="flex items-center">
            <img src="../img/logo.png" alt="" title="site logo" />
            <span
              class="self-center text-xl font-semibold whitespace-nowrap dark:text-white"
              >Arkadaslar</span
            >
          </a>
          <div class="flex items-center lg:order-2">
            <a
              href="./loge_in.php"
              class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800"
              >Log in</a
            >
            <a
              href="sign-up.php"
              class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800"
              >Sign Up</a
            >
            <button
              data-collapse-toggle="mobile-menu-2"
              type="button"
              class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg lg:hidden hover:bg-green-300 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
              aria-controls="mobile-menu-2"
              aria-expanded="false"
            >
              <span class="sr-only">Open main menu</span>
              <svg
                class="w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
              <svg
                class="hidden w-6 h-6"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
          </div>
          <div
            class="hidden justify-between items-center w-full lg:flex lg:w-auto lg:order-1"
            id="mobile-menu-2"
          >
            <ul
              class="flex flex-col mt-4 font-medium lg:flex-row lg:space-x-8 lg:mt-0"
            >
              <li>
                <a
                  href="#"
                  class="block py-2 pr-4 pl-3 text-white rounded bg-primary-700 lg:bg-transparent lg:text-primary-700 lg:p-0 dark:text-white"
                  aria-current="page"
                  >Home</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                  >Reservation</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                  >About Us</a
                >
              </li>
              <li>
                <a
                  href="#"
                  class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 lg:hover:bg-transparent lg:border-0 lg:hover:text-primary-700 lg:p-0 dark:text-gray-400 lg:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white lg:dark:hover:bg-transparent dark:border-gray-700"
                  >Contact</a
                >
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <div class="w-screen">
      <div
        class="relative mx-auto mt-20 mb-20 max-w-screen-lg overflow-hidden rounded-t-xl bg-emerald-400/60 py-32 text-center shadow-xl shadow-gray-300"
      >
        <h1
          id="Book"
          class="mt-2 px-8 text-3xl font-bold text-white md:text-5xl"
        >
          Book an appointment
        </h1>
        <p class="mt-6 text-lg text-white">
          Get an appointment with our experienced accountants
        </p>
        <img
          class="absolute top-0 left-0 -z-10 h-full w-full object-cover"
          src="https://images.unsplash.com/photo-1504672281656-e4981d70414b?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
          alt=""
        />
      </div>

      <div class="mx-auto grid max-w-screen-lg px-6 pb-20">
        <div class="">
          <p class="font-serif text-xl font-bold text-blue-900">
            Select a service
          </p>
          <div
            class="mt-4 grid max-w-3xl gap-x-4 gap-y-3 sm:grid-cols-2 md:grid-cols-3"
          >
            <div class="relative">
              <input
                class="peer hidden"
                id="radio_1"
                type="radio"
                name="radio"
                checked
              />
              <span
                class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"
              ></span>
              <label
                class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white"
                for="radio_1"
              >
                <span class="mt-2- font-medium">Financial Planning</span>
                <span class="text-xs uppercase">1 Hour</span>
              </label>
            </div>
            <div class="relative">
              <input
                class="peer hidden"
                id="radio_2"
                type="radio"
                name="radio"
              />
              <span
                class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"
              ></span>

              <label
                class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white"
                for="radio_2"
              >
                <span class="mt-2 font-medium">Retirement Planning</span>
                <span class="text-xs uppercase">1 Hour</span>
              </label>
            </div>
            <div class="relative">
              <input
                class="peer hidden"
                id="radio_3"
                type="radio"
                name="radio"
              />
              <span
                class="absolute right-4 top-1/2 box-content block h-3 w-3 -translate-y-1/2 rounded-full border-8 border-gray-300 bg-white peer-checked:border-emerald-400"
              ></span>

              <label
                class="flex h-full cursor-pointer flex-col rounded-lg p-4 shadow-lg shadow-slate-100 peer-checked:bg-emerald-600 peer-checked:text-white"
                for="radio_3"
              >
                <span class="mt-2 font-medium">Investment Advice</span>
                <span class="text-xs uppercase">1 Hour</span>
              </label>
            </div>
          </div>
        </div>

        <div class="">
          <p class="mt-8 font-serif text-xl font-bold text-blue-900">
            Select a date
          </p>
          <div class="relative mt-4 w-56">
            <div
              class="pointer-events-none absolute inset-y-0 left-0 flex items-center pl-3"
            >
              <svg
                aria-hidden="true"
                class="h-5 w-5 text-gray-500"
                fill="currentColor"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </div>
            <input
              datepicker=""
              datepicker-orientation="bottom"
              autofocus="autofocus"
              type="text"
              class="datepicker-input block w-full rounded-lg border border-emerald-300 bg-emerald-50 p-2.5 pl-10 text-emerald-800 outline-none ring-opacity-30 placeholder:text-emerald-800 focus:ring focus:ring-emerald-300 sm:text-sm"
              placeholder="Select date"
            />
          </div>
        </div>

        <div class="">
          <p class="mt-8 font-serif text-xl font-bold text-blue-900">
            Select a time
          </p>
          <div class="mt-4 grid grid-cols-4 gap-2 lg:max-w-xl">
            <button
              class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95"
            >
              12:00
            </button>
            <button
              class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95"
            >
              14:00
            </button>
            <button
              class="rounded-lg bg-emerald-700 px-4 py-2 font-medium text-white active:scale-95"
            >
              09:00
            </button>
            <button
              class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95"
            >
              12:00
            </button>
            <button
              class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95"
            >
              15:00
            </button>
            <button
              class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95"
            >
              12:00
            </button>
            <button
              class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95"
            >
              14:00
            </button>
            <button
              class="rounded-lg bg-emerald-100 px-4 py-2 font-medium text-emerald-900 active:scale-95"
            >
              12:00
            </button>
          </div>
        </div>

        <button
          class="mt-8 w-56 rounded-full border-8 border-emerald-500 bg-emerald-600 px-10 py-4 text-lg font-bold text-white transition hover:translate-y-1"
        >
          Book Now
        </button>
      </div>
    </div>

    
    <footer>
      <div class="bg-green-300">
        <div
          class="max-w-screen-lg px-4 sm:px-6 text-gray-800 sm:grid md:grid-cols-4 sm:grid-cols-2 mx-auto"
        >
          <div class="p-5">
            <h3 class="font-bold text-xl text-green-950">Arkadaslar</h3>
          </div>
          <div class="p-5">
            <div class="text-sm uppercase text-green-950 font-bold">
              Resources
            </div>
            <a class="my-3 block" href="/#"
              >Documentation <span class="text-teal-600 text-xs p-1"></span></a
            ><a class="my-3 block" href="/#"
              >Tutorials <span class="text-teal-600 text-xs p-1"></span></a
            ><a class="my-3 block" href="/#"
              >Support <span class="text-teal-600 text-xs p-1">New</span></a
            >
          </div>
          <div class="p-5">
            <div class="text-sm uppercase text-green-950 font-bold">
              Contact us
            </div>
            <a class="my-3 block" href="/#"
              >Queiliz , blv mohamed V, MARRAKECH
              <span class="text-teal-600 text-xs p-1"></span></a
            ><a class="my-3 block" href="/#"
              >contact@company.com
              <span class="text-teal-600 text-xs p-1"></span
            ></a>
          </div>
          <div>
            <a
              class="mt-8 xl:mt-12 px-12 py-5 text-lg font-medium leading-tight inline-block bg-green-800 rounded-full shadow-xl border border-transparent hover:bg-emerald-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-sky-999 focus:ring-sky-500"
              href="#Book"
              >Get started</a
            >
          </div>
        </div>
      </div>

      <div class="bg-green-300 pt-2">
        <div
          class="flex pb-5 px-3 m-auto pt-5 border-t text-gray-800 text-sm flex-col max-w-screen-lg items-center"
        >
          <div class="md:flex-auto md:flex-row-reverse mt-2 flex-row flex">
            <a href="/#" class="w-6 mx-1">
              <svg
                class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600"
                width="100%"
                height="100%"
                viewBox="0 0 24 24"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xml:space="preserve"
                xmlns:serif="http://www.serif.com/"
                style="
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  stroke-linejoin: round;
                  stroke-miterlimit: 2;
                "
              >
                <path
                  id="Twitter"
                  d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                    5.373,-12 12,-12c6.627,0 12,5.373 12,12Zm-6.465,-3.192c-0.379,0.168
                    -0.786,0.281 -1.213,0.333c0.436,-0.262 0.771,-0.676
                    0.929,-1.169c-0.408,0.242 -0.86,0.418 -1.341,0.513c-0.385,-0.411
                    -0.934,-0.667 -1.541,-0.667c-1.167,0 -2.112,0.945 -2.112,2.111c0,0.166
                    0.018,0.327 0.054,0.482c-1.754,-0.088 -3.31,-0.929
                    -4.352,-2.206c-0.181,0.311 -0.286,0.674 -0.286,1.061c0,0.733 0.373,1.379
                    0.94,1.757c-0.346,-0.01 -0.672,-0.106 -0.956,-0.264c-0.001,0.009
                    -0.001,0.018 -0.001,0.027c0,1.023 0.728,1.877 1.694,2.07c-0.177,0.049
                    -0.364,0.075 -0.556,0.075c-0.137,0 -0.269,-0.014 -0.397,-0.038c0.268,0.838
                    1.048,1.449 1.972,1.466c-0.723,0.566 -1.633,0.904 -2.622,0.904c-0.171,0
                    -0.339,-0.01 -0.504,-0.03c0.934,0.599 2.044,0.949 3.237,0.949c3.883,0
                    6.007,-3.217 6.007,-6.008c0,-0.091 -0.002,-0.183 -0.006,-0.273c0.413,-0.298
                    0.771,-0.67 1.054,-1.093Z"
                ></path>
              </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
              <svg
                class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600"
                width="100%"
                height="100%"
                viewBox="0 0 24 24"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xml:space="preserve"
                xmlns:serif="http://www.serif.com/"
                style="
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  stroke-linejoin: round;
                  stroke-miterlimit: 2;
                "
              >
                <path
                  id="Facebook"
                  d="M24,12c0,6.627 -5.373,12 -12,12c-6.627,0 -12,-5.373 -12,-12c0,-6.627
                    5.373,-12 12,-12c6.627,0 12,5.373
                    12,12Zm-11.278,0l1.294,0l0.172,-1.617l-1.466,0l0.002,-0.808c0,-0.422
                    0.04,-0.648 0.646,-0.648l0.809,0l0,-1.616l-1.295,0c-1.555,0 -2.103,0.784
                    -2.103,2.102l0,0.97l-0.969,0l0,1.617l0.969,0l0,4.689l1.941,0l0,-4.689Z"
                ></path>
              </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
              <svg
                class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600"
                width="100%"
                height="100%"
                viewBox="0 0 24 24"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xml:space="preserve"
                xmlns:serif="http://www.serif.com/"
                style="
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  stroke-linejoin: round;
                  stroke-miterlimit: 2;
                "
              >
                <g id="Layer_1">
                  <circle id="Oval" cx="12" cy="12" r="12"></circle>
                  <path
                    id="Shape"
                    d="M19.05,8.362c0,-0.062 0,-0.125 -0.063,-0.187l0,-0.063c-0.187,-0.562
                       -0.687,-0.937 -1.312,-0.937l0.125,0c0,0 -2.438,-0.375 -5.75,-0.375c-3.25,0
                       -5.75,0.375 -5.75,0.375l0.125,0c-0.625,0 -1.125,0.375
                       -1.313,0.937l0,0.063c0,0.062 0,0.125 -0.062,0.187c-0.063,0.625 -0.25,1.938
                       -0.25,3.438c0,1.5 0.187,2.812 0.25,3.437c0,0.063 0,0.125
                       0.062,0.188l0,0.062c0.188,0.563 0.688,0.938 1.313,0.938l-0.125,0c0,0
                       2.437,0.375 5.75,0.375c3.25,0 5.75,-0.375 5.75,-0.375l-0.125,0c0.625,0
                       1.125,-0.375 1.312,-0.938l0,-0.062c0,-0.063 0,-0.125
                       0.063,-0.188c0.062,-0.625 0.25,-1.937 0.25,-3.437c0,-1.5 -0.125,-2.813
                       -0.25,-3.438Zm-4.634,3.927l-3.201,2.315c-0.068,0.068 -0.137,0.068
                       -0.205,0.068c-0.068,0 -0.136,0 -0.204,-0.068c-0.136,-0.068 -0.204,-0.204
                       -0.204,-0.34l0,-4.631c0,-0.136 0.068,-0.273 0.204,-0.341c0.136,-0.068
                       0.272,-0.068 0.409,0l3.201,2.316c0.068,0.068 0.136,0.204
                       0.136,0.34c0.068,0.136 0,0.273 -0.136,0.341Z"
                    style="fill: rgb(255, 255, 255)"
                  ></path>
                </g>
              </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
              <svg
                class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600"
                width="100%"
                height="100%"
                viewBox="0 0 24 24"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xml:space="preserve"
                xmlns:serif="http://www.serif.com/"
                style="
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  stroke-linejoin: round;
                  stroke-miterlimit: 2;
                "
              >
                <path
                  id="Shape"
                  d="M7.3,0.9c1.5,-0.6 3.1,-0.9 4.7,-0.9c1.6,0 3.2,0.3 4.7,0.9c1.5,0.6 2.8,1.5
                    3.8,2.6c1,1.1 1.9,2.3 2.6,3.8c0.7,1.5 0.9,3 0.9,4.7c0,1.7 -0.3,3.2
                    -0.9,4.7c-0.6,1.5 -1.5,2.8 -2.6,3.8c-1.1,1 -2.3,1.9 -3.8,2.6c-1.5,0.7
                    -3.1,0.9 -4.7,0.9c-1.6,0 -3.2,-0.3 -4.7,-0.9c-1.5,-0.6 -2.8,-1.5
                    -3.8,-2.6c-1,-1.1 -1.9,-2.3 -2.6,-3.8c-0.7,-1.5 -0.9,-3.1 -0.9,-4.7c0,-1.6
                    0.3,-3.2 0.9,-4.7c0.6,-1.5 1.5,-2.8 2.6,-3.8c1.1,-1 2.3,-1.9
                    3.8,-2.6Zm-0.3,7.1c0.6,0 1.1,-0.2 1.5,-0.5c0.4,-0.3 0.5,-0.8 0.5,-1.3c0,-0.5
                    -0.2,-0.9 -0.6,-1.2c-0.4,-0.3 -0.8,-0.5 -1.4,-0.5c-0.6,0 -1.1,0.2
                    -1.4,0.5c-0.3,0.3 -0.6,0.7 -0.6,1.2c0,0.5 0.2,0.9 0.5,1.3c0.3,0.4 0.9,0.5
                    1.5,0.5Zm1.5,10l0,-8.5l-3,0l0,8.5l3,0Zm11,0l0,-4.5c0,-1.4 -0.3,-2.5
                    -0.9,-3.3c-0.6,-0.8 -1.5,-1.2 -2.6,-1.2c-0.6,0 -1.1,0.2 -1.5,0.5c-0.4,0.3
                    -0.8,0.8 -0.9,1.3l-0.1,-1.3l-3,0l0.1,2l0,6.5l3,0l0,-4.5c0,-0.6 0.1,-1.1
                    0.4,-1.5c0.3,-0.4 0.6,-0.5 1.1,-0.5c0.5,0 0.9,0.2 1.1,0.5c0.2,0.3 0.4,0.8
                    0.4,1.5l0,4.5l2.9,0Z"
                ></path>
              </svg>
            </a>
            <a href="/#" class="w-6 mx-1">
              <svg
                class="fill-current cursor-pointer text-gray-500 hover:text-indigo-600"
                width="100%"
                height="100%"
                viewBox="0 0 24 24"
                version="1.1"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xml:space="preserve"
                xmlns:serif="http://www.serif.com/"
                style="
                  fill-rule: evenodd;
                  clip-rule: evenodd;
                  stroke-linejoin: round;
                  stroke-miterlimit: 2;
                "
              >
                <path
                  id="Combined-Shape"
                  d="M12,24c6.627,0 12,-5.373 12,-12c0,-6.627 -5.373,-12 -12,-12c-6.627,0
                    -12,5.373 -12,12c0,6.627 5.373,12 12,12Zm6.591,-15.556l-0.722,0c-0.189,0
                    -0.681,0.208 -0.681,0.385l0,6.422c0,0.178 0.492,0.323
                    0.681,0.323l0.722,0l0,1.426l-4.675,0l0,-1.426l0.935,0l0,-6.655l-0.163,0l-2.251,8.081l-1.742,0l-2.222,-8.081l-0.168,0l0,6.655l0.935,0l0,1.426l-3.74,0l0,-1.426l0.519,0c0.203,0
                    0.416,-0.145 0.416,-0.323l0,-6.422c0,-0.177 -0.213,-0.385
                    -0.416,-0.385l-0.519,0l0,-1.426l4.847,0l1.583,5.704l0.042,0l1.598,-5.704l5.021,0l0,1.426Z"
                ></path>
              </svg>
            </a>
          </div>
          <div class="my-5">© Copyright 2020. All Rights Reserved.</div>
        </div>
      </div>
    </footer>

    <!-- Credit: Componentity.com -->
  </body>
</html>
