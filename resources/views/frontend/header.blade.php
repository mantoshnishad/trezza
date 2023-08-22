<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Cedarville+Cursive&family=Comfortaa&family=Dancing+Script:wght@500&family=Edu+NSW+ACT+Foundation&family=Montserrat:ital,wght@1,300;1,400&family=Noto+Sans+Zanabazar+Square&family=Noto+Sans:wght@500&family=Nunito+Sans&family=Open+Sans&family=Pacifico&family=Poppins:ital@0;1&family=Raleway:ital@0;1&family=Roboto&family=Shantell+Sans:ital@1&family=Source+Sans+Pro&family=Zeyada&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/x-icon" href="image/logo/favicon.png" width="">
    <!-- ----------jquery--------- -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.css" rel="stylesheet" />
    <title><?php $Title ?></title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* font-family: 'Bacasime Antique', serif; */
        }

        .container-2 {
            width: 90%;
            margin: auto;
        }

        .nav-color {
            /* background-color: #b30000; */
            padding: 0 20px;

        }

        .menu:hover .Sub-Menu {
            display: block;
        }


        .menu:hover .sub-menu-it-services {
            display: block;
        }

        .menu:hover .sub-menu-web-services {
            display: block;
        }

        .menu a {
            position: relative;
        }

        .menu a:after {
            content: "";
            position: absolute;
            background-color: white;
            margin: -1.8px 0px;
            height: 2px;
            width: 0;
            left: 0;
            bottom: 0;
            transition: 0.3s;
        }

        .menu a:hover:after {
            width: 100%;
        }

        /* section{
            background-image:url("tailwin img/_backgroundscreeningservices.jpg") ;
           padding-top: 100px;
           padding-bottom: 50px;
           padding-left: 50px;
           padding-right: 50px;
            background-repeat: no-repeat;
            width: 100%;
            background-size: cover ;  
        } */
        .ham-icon {
            display: none;
        }

        @media only screen and (max-width:1100px) {
            #nav-menu {
                display: none;
                position: absolute;
                left: 0;
                top: 120px;
                width: 100%;
            }

            .ham-icon {
                display: block;
            }

            .menu-item {
                background-color: rgb(8, 47, 73);
                flex-direction: column;
                width: 100%;
            }

            .menu a:after {
                bottom: 0px;
            }

            .menu-item li {
                padding: 4px 0;
            }

            .menu-item li a {
                padding: 0;

            }

            .menu .sub-menu-it-services {
                top: 30px;
                left: 0;
                z-index: 1100;

            }

            .menu .Sub-Menu {
                top: 30px;
                left: 0;
                z-index: 5;
            }

            .menu .sub-menu-web-services {
                top: 30px;
                left: 0;
                z-index: 5;
            }
        }

        /* ...........blog-btn................ */
        .blogbtn {
            color: #f8f5f5;

        }

        .blogbtn::after {
            border: 2px solid #fbf9f9;
            content: "";
            position: absolute;
            right: 14px;
            width: calc(100% - -8px);
            height: calc(100% - -10px);
            z-index: 1;
            transition: transform 0.3s ease;
        }

        /* .blogbtn:hover::after{
            transform: translate(-5px, -5px);
        } */
        .blogbtn::after {
            transform: translate(6px, -20px);
        }

        .blogbtn:hover::after {
            transform: translate(18px, -11px);
        }

        /* ...........blog-btn................ */

        .active2 {
            /* background-color: #fbf9f9; */
            color: rgb(133,31,68);
            /* bg-[rgb(133,31,68)] */
        }
    </style>
</head>

<body>
    <div class="flex justify-between items-center px-8 py-1 bg-[rgb(209,96,20)] text-sm ">
        <div class="flex items-center text-white">
        <div class="ham-icon self-center text-2xl ">
            <button type="button" data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation"><i class="fa fa-bars"></i></button>
        </div>
        <div><a href="{{asset('/')}}"><img src="{{asset('image/logo/trezzajewelslogo-removebg-preview.png')}}" alt=" " class="w-20"></a></div>
        </div>
        <div class="lg:block hidden self-center">
            <div class="flex items-center w-full bg-red self-center text-lg gap-5 text-white">
                <div>
                    <p><a href=""><span class="mr-4"><i class="fa-solid fa-phone-volume"></i></span>+91 2269521111</a></p>
                </div>
                <div>
                    <p><a href=""><span class="mr-4"><i class="fa-solid fa-mobile"></i></span>Mobile App</a></p>
                </div>
                <div>
                    <button data-modal-target="medium-modal" data-modal-toggle="medium-modal" type="button"><span class="mr-4"><i class="fa-sharp fa-solid fa-money-bill"></i></span>Metal Prices</button>
                </div>
                @auth
                @php
                    $roles =App\Models\User::find(Auth::user()->id)->roles->pluck('id');
                    $role_user_id=0;
                    if(count($roles)>0)
                    {
                        $role_user_id =$roles[0];
                    }
                @endphp
                @if($role_user_id==2)
                <div>
                    <p><a href="{{asset('add-project')}}"><span class="mr-4"><i class="fa-solid fa-plus"></i></span>Add Project</a></p>
                </div>
                @endif
                <div>
                    <p><a target="_blank" href="{{asset('auth')}}"><span class="mr-4"><i class="fa-solid fa-plus"></i></span>Dashboard</a></p>
                </div>
                <div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                        <button title="{{Auth::user()->name }}">Logout</button>
                    </form>
                </div>
                @endauth
                @guest
                <div>
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"><span class="mr-4"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>Login</button>
                </div>
                <div>
                    <p><a href="{{asset('frontend-register')}}"><span class="mr-4"><i class="fa-solid fa-user"></i></span>Register</a></p>
                </div>
                @endguest
            </div>
        </div>
        <div class="lg:hidden block text-xl text-white">
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button"><span class="mr-4"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>Login</button>
        </div>
    </div>
    <div id="navbar" class="nav-color lg:block hidden  w-full bg-[rgb(209,96,20)] border border-t-black z-30 py-2.5">


        <div id="nav-menu">
            <ul class="nav flex text-md justify-around menu-item font-base text-white">
                <li class="menu relative "><a href="{{asset('custom-made-jewelry')}}" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "custom_made_jewellery.php" ? "" : "") ?>">Custom Made Jewellery</a></li>

                <!-- <li class="menu relative "><a href="services.php" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "services.php" ? "active2" : "") ?>">Our Services</a>
        </li> -->
                <li class="menu relative "><a href="{{asset('our-services')}}" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "our_service.php" ? "" : "") ?>">Our Services</a>
                    <div class="sub-menu-it-services absolute hidden text-left top-[32px] left-4 bg-white px-2 py-3 text-black border border-gray-300 text-sm z-50 w-48">
                        <ul>
                            <li class="mb-2 py-2"> <a href="{{asset('casting')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "casting.php" ? "active2" : "") ?>">Casting</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('clean-scrap-service')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "clean_scrap_service.php" ? "active2" : "") ?>">Clean Scrap Service</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('diamonds-gemstones')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "diamonds_gemstones.php" ? "active2" : "") ?>" >Diamonds & Gemstones</a> </li>
                            <li class="mb-2 py-2"><a href="{{asset('repairs-services')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "repair_services.php" ? "active2" : "") ?>">Repairs Services</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('loose-diamonds')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "loose_diamonds.php" ? "active2" : "") ?>" >Loose Diamonds</a> </li>

                        </ul>
                    </div>
                </li>
                <li class=" menu relative  "><a href="{{asset('cad-printing-service-and-design')}}" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "cad_printing_services_and_design.php" ? "" : "") ?>">CAD Printing And Design</i></a>
                    <div class="Sub-Menu absolute hidden text-left top-[32px] left-4 bg-white px-2 py-2 text-sm text-black border border-gray-300 z-50 w-40">
                        <ul>
                        <li class="mb-2 py-2"><a href="{{asset('3d-printing')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "3d_printing.php" ? "active2" : "") ?>">3D Printing</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('molds')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "molds.php" ? "active2" : "") ?>">Molds</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('stone-setting')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "stone_setting.php" ? "active2" : "") ?>">Stone Setting</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('cad-cam')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "cad_cam.php" ? "active2" : "") ?>">CAD CAM</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('line-developing')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "line_developing.php" ? "active2" : "") ?>">Line Developing</a></li>
                            <li class="mb-2 py-2"><a href="{{asset('gallery')}}" class=" <?php echo (basename($_SERVER['PHP_SELF']) == "gallery.php" ? "active2" : "") ?>">Gallery</a></li>
                        </ul>
                    </div>
                </li>

                <li class="menu relative">
                <a href="{{asset('upcoming-shows')}}" class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "upcoming_shows.php" ? "" : "") ?>">Upcoming Shows</i></a>
                    <!-- <div class="sub-menu-web-services absolute hidden text-left top-[58px] left-5 bg-slate-50 text-black px-2 py-2 text-lg  w-48">
                    <ul>
                         <li class="mb-2"><a  href="">WEB DEVELOPMENT</a></li> 
                        <li class="mb-2"><a  href="">CREATIVE SERVICES</a> </li>
                        <li class="mb-2"><a  href="">APP DEVELOPMENT</a> </li>
                         <li class="mb-2"><a  href="">MOBILE APP DEV</a></li>
                        <li class="mb-2"> <a   href="">SUPPORT & MAINTENANCE</a></li> 
                        <li class="mb-2"><a  href="">DIGITAL MARKETING</a></li> 
                        <li class="mb-2"><a  href="">BULK SMS SERVICES</a></li> 
                    </ul>
                </div> -->
                </li>
                <!-- <li class="menu relative "><a href="contactus.php"  class="py-2 mx-4 <?php echo (basename($_SERVER['PHP_SELF']) == "contactus.php" ? "active2" : "") ?>">Contact Us</a></li> -->
            </ul>
        </div>


        <!-- <div class="flex text-lg">
            <form action="" class="px-6">
            <input class="px-2 outline-none border" type="text" placeholder="search"> 
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
            <button >Login</button>
        </div> -->

    </div>





    <!-- drawer component for mobile menu -->
    <div id="drawer-navigation" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-navigation-label">
     <div class="relative ">
        <img src="{{asset('image/logo/register.avif')}}" alt="" class="">
        <div class="absolute top-10 w-full px-5">
            <img src="{{asset('image/logo/trezzajewelslogo-removebg-preview')}}" alt="" class="w-24 ml-5">
            <div class="flex justify-between mt-5 ">
            <div>
                    <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" type="button" class="px-2 py-1 bg-[rgb(209,96,20)]"><span class="mr-4"><i class="fa-solid fa-arrow-right-to-bracket"></i></span>Login</button>
                </div>
                <div>
                    <p class="px-2 py-1 bg-[rgb(209,96,20)]"><a href=""><span class="mr-4"><i class="fa-solid fa-user"></i></span>Register</a></p>
                </div>
            </div>
        </div>
     </div>   
    
    <h5 id="drawer-navigation-label" class="text-base font-semibold mt-5 text-gray-500 uppercase dark:text-gray-400">Menu</h5>
        <button type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>
        <div class="py-4 overflow-y-auto">
            <ul class="space-y-2 font-medium ">
                <li class="">
                    <a href="#" class="w-full items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                        <span class="ml-3">Custom Made Jewellery</span>
                    </a>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                        </svg> -->
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">Our service</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Casting</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Clean Service</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Diamonds & Gemstones</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Repairs Services</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Loose Diamonds</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <button type="button" class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <!-- <svg aria-hidden="true" class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 group-hover:text-gray-900 dark:text-gray-400 dark:group-hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z" clip-rule="evenodd"></path>
                        </svg> -->
                        <span class="flex-1 ml-3 text-left whitespace-nowrap">CAD Printing And Design</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </button>
                    <ul id="dropdown-example" class="hidden py-2 space-y-2">
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">3D Printing</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Molds</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Stone Setting</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">CAD CAM</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Line Developing</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Gallery</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-phone-volume"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">(312)332-4434</span>
                       
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-solid fa-mobile"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Mobile App</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                    <i class="fa-sharp fa-solid fa-money-bill"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Metal Prices</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>






    <!-- Main modal  Login for user-->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full" >
        <div class="relative w-full max-w-md max-h-full" style="background-color:red; width:100vw">
            <!-- Modal content -->
            <div class="relative  bg-[rgb(209,96,20)] rounded-lg shadow dark:bg-gray-700" >
                <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <div class="text-white font-semibold pt-5">
                        <h1 class="text-center font-medium">Welcome Back</h1>
                        <h3 class="text-5xl  text-center font-medium">Login</h3>
                        <div class="relative w-32 bg-white h-0.5 mx-auto mt-7 mb-5">
                            <span class="absolute -top-4 left-[50px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
                        </div>
                    </div>
                    <!-- <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3> -->
                    <form class="space-y-6"   id="loginForm">
                        @csrf
                        <div class="relative">
                            <input required type="email" name="email" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700  border-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white peer" placeholder="Email Address" />
                            {{-- <label for="floating_filled" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Email Address</label> --}}
                        </div>
                        <!-- <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                        </div> -->
                        <div class="relative">
                            <input required type="password" name="password" id="floating_filled" class="block rounded-lg px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-gray-50 dark:bg-gray-700  border-2 border-black appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white peer" placeholder="Your password" />
                            {{-- <label for="floating_filled" class=" text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Your password</label> --}}
                        </div>
                        <div class="flex justify-between">
                            <div class="">
                            <a href="#" class="text-sm text-white hover:underline dark:text-black">Forgot your username?</a>
                            </div>
                            <a href="#" class="text-sm text-white hover:underline dark:text-black">Forgot your password?</a>
                        </div>
                        <button type="submit" class="w-full text-black bg-white focus:ring-4 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
                        <div class="text-sm font-medium text-white dark:text-white">
                       <p>By continuing, you agree to our <a href="#" class="text-white underline dark:text-white">Terms of Use </a>and <a href="#" class="text-white underline dark:text-white">Privacy Policy.</a></p> 
                        </div>
                    </form>
                </div>
                <div class="px-6 py-3 lg:px-8  text-white dark:text-white border-t border-white">
                       <p class="text-md font-medium">New on Master Casting and Cad?<a href="#" class="text-xs font-extralight text-white underline dark:text-white"> Create an account</a></p> 
                    </div>
            </div>
        </div>
    </div>




    <!-- Default Modal Metal Prices for -->
    <div id="medium-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative  bg-[rgb(209,96,20)] rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-3  rounded-t     ">
                    <!-- <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                    Default modal
                </h3> -->
                    <button type="button" class="text-black bg-transparent  hover:text-gray-800 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center  dark:hover:text-white" data-modal-hide="medium-modal">
                        <svg aria-hidden="true" class="w-7 h-7" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="py-2 px-6">
                    <div class="text-white font-semibold">
                        <h3 class="text-5xl  text-center font-medium">Metal Prices</h3>
                        <div class="relative w-72 bg-white h-0.5 mx-auto my-5">
                            <span class="absolute -top-4 left-[128px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
                        </div>
                        <div class="mb-5 mt-10">
                            <table class="">
                                <tbody class="border border-white text-center ">
                                    <tr class="py-3 border border-white">
                                        <td class="py-3 border border-white w-60">Gold</td>
                                        <td class="py-3 border border-white w-60">$ 1918.29 USD</td>
                                    </tr>
                                    <tr>
                                        <td class="py-3 border border-white ">Platinum</td>
                                        <td class="py-3 border border-white ">$ 903.533 USD</td>
                                    </tr>
                                    <tr class="py-3 border border-white ">
                                        <td class="py-3 border border-white ">Silver</td>
                                        <td class="py-3 border border-white ">$ 22.753 USD</td>
                                    </tr>
                                    <tr class="py-3 border border-white ">
                                        <td class="py-3 border border-white ">Palladium</td>
                                        <td class="py-3 border border-white ">$ 1227.37 USD</td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="w-full">
                                <tbody>
                                    <tr class="py-3 border border-white ">
                                        <td class="text-center border border-white py-3"><span>Last Update : </span>03 Jul 04:49 AM Central Time</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>







    <!-- <script>
        function myFunction() {
          var x = document.getElementById("nav-menu");
          if (x.style.display === "block") {
            x.style.display = "none";
          } else {
            x.style.display = "block";
          }
        }
        </script> -->
    <script>
        // When the user scrolls down 20px from the top of the document, slide down the navbar
        window.onscroll = function() {
            scrollFunction()
        };

        function scrollFunction() {
            if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {
                document.getElementById("navbar").style.top = "0";
            } else {
                document.getElementById("navbar").style.top = "-10px";
            }
        }

    </script>

    <script>
$(document).ready(function () {
        $('#loginForm').on('submit', function (e) {
            e.preventDefault();

            $.ajax({
    type: 'POST',
    url: '{{ route('login.custom') }}',
    data: $(this).serialize(),
    success: function (response) {
        if (response.success) {
            alert('Login successful');
            window.location.href = 'auth';
        } else {
            alert(response.message);
        }
    },
    error: function (xhr) {
        if (xhr.status === 422) {
            var errors = xhr.responseJSON.errors;
            var errorMessage = '';
            for (var key in errors) {
                errorMessage += errors[key][0] + '\n';
            }
            alert('Login failed:\n' + errorMessage);
        } else {
            alert('Invalid credentials');
        }
    }
});
        });
    });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.6/flowbite.min.js"></script>
</body>

</html>