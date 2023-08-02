
    <div class="">
        <div class="grid lg:grid-cols-4 gap-1 w-full  ">
            <div class="bg-gray-200 px-10 py-10">
                <h3 class="text-3xl text-center font-semibold">Useful Links</h3>
                <ul class="my-5 lg:w-full w-52 mx-auto leading-8">
                    <li><a href="custom_made_jewellery.php">Custom Made Jewelry</a></li>
                    <li><a href="casting.php">Casting</a></li>
                    <li><a href="clean_scrap_service.php">Clean Scrap Service</a></li>
                    <li><a href="cad_printing_services_and_design.php">Cad Printing And Design</a></li>
                    <li><a href="gallery.php">Gallery</a></li>
                    <li><a href="diamonds_gemstones.php">Diamonds & Gemstones</a></li>
                    <li><a href="repair_services.php">Repair Services</a></li>
                </ul>
            </div>
            <div class=" bg-gray-200  px-10 py-10">
            <h3 class="text-3xl font-semibold text-center">Useful Links</h3>
                <ul class="my-5 lg:w-full  w-52 mx-auto leading-8">
                    <li><a href="about_us.php">About Us</a></li>
                    <li><button data-modal-target="authentication-modal4" data-modal-toggle="authentication-modal4" type="button">Contact Us</button></li>
                    <li><a href="">Terms & Conditions</a></li>
                    <li><a href="">Privacy Notice</a></li>
                </ul>
            </div>
            <div class="  bg-gray-200 px-10 py-10">
            <h3 class="text-3xl text-center font-semibold">Follow us</h3>
            <div class="flex gap-5 justify-center text-2xl my-5">
            <a class="facebook" ><span class=""><i class="fa-brands fa-facebook-f" ></i></span></a>
            <a class="twitter" href="#"><span class=""><i class="fa-brands fa-twitter" > </i></span></a>
            <a class="linkedin" href="#"><span class=""><i class="fa-brands fa-linkedin" ></i></span></a>
            <a class="pinterest" href=""><span class=""><i class="fa-brands fa-square-pinterest"></i></span></a>
        </div>
            <div class="grid  bg-gray-200 place-content-center">
            <img src="{{asset('image/logo/md-chicago.png')}}" alt="">
            </div>
            </div>
            <div class="bg-gray-200  px-10 py-10">
                <h3 class="text-3xl font-semibold text-center">Useful Links</h3>
                <div class="my-5 grid place-content-center">
                    <img src="{{asset('image/logo/cardfooter.avif')}}" alt="">
                </div>
            </div>
        </div>
        <footer class="lg:flex justify-between items-center px-10 bg-gray-200 border-t-4 border-white">
            <div class=""><p>Copyright © , <span class="text-[rgb(133,31,68)]">Trezza Jewels LLP</span> & Cad. All rights reserved.</p></div>
            <div class="flex gap-x-5 ">
                <img src="{{asset('image/logo/amazon-web-services.svg')}}" alt="" class="w-24 h-24">
                <img src="{{asset('image/logo/Sucuri_BG-Light_Green-Tagline.svg')}}" alt="" class="w-24 h-24">
            </div>
        </footer>
    </div>

    <!-- Main modal Contact us -->
<div id="authentication-modal4" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative  bg-[rgb(209,96,20)] rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal4 ">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close modal</span>
            </button>
            <div class="px-6 py-6 lg:px-8">
                <div class="text-white font-semibold pt-5">
                    <h1 class="text-center font-medium">MASTER CASTING & CAD</h1>
                    <h3 class="text-5xl  text-center font-medium">CONTACT</h3>
                    <div class="relative w-32 bg-white h-0.5 mx-auto mt-7 mb-5">
                        <span class="absolute -top-4 left-[50px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
                    </div>
                </div>
                <!-- <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Sign in to our platform</h3> -->
                <form class="space-y-6" action="#">
                    <div class="relative">
                        <input type="text" id="floating_filled" class="block px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-transparent  border border-white appearance-none dark:text-white dark:border-white dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " />
                        <label for="floating_filled" class="absolute text-sm text-white dark:text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-grey-800 peer-focus:dark:text-grey-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Email Address<span>*</span></label>
                        <h5 class="text-center text-white">Email is required</h5>
                    </div>
                    <div class="relative">
                        <input type="text" id="floating_filled" class="block px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-transparent border border-white appearance-none dark:text-white dark:border-white dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " />
                        <label for="floating_filled" class="absolute text-sm text-white dark:text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-grey-800 peer-focus:dark:text-grey-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Full Name<span>*</span></label>
                        <h5 class="text-center text-white">Fullname is required</h5>
                    </div>
                    <div class="relative">
                        <input type="text" id="floating_filled" class="block px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-transparent border border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " />
                        <label for="floating_filled" class="absolute text-sm text-white dark:text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-grey-600 peer-focus:dark:text-grey-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Phone Number<span>*</span></label>
                        <h5 class="text-center text-white">Phone number is required</h5>
                    </div>
                    <div class="relative">
                        <input type="text" id="floating_filled" class="block px-2.5 pb-2.5 pt-5 w-full text-sm text-gray-900 bg-transparent   border border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" " />
                        <label for="floating_filled" class="absolute text-sm text-white dark:text-white duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] left-2.5 peer-focus:text-grey-600 peer-focus:dark:text-grey-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4">Store Name(if applicable)</label>
                    </div>

                    <div class="relative z-0 w-full mb-3">
                        <textarea type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border border-white appearance-none dark:text-white dark:border-gray-600 dark:focus:border-white-500 focus:outline-none focus:ring-0 focus:border-white peer" placeholder=" "></textarea>
                        <label for="floating_standard" class="absolute text-sm text-white dark:text-white duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-grey-800 peer-focus:dark:text-grey-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">How Can We Help You?<span>*</span></label>
                        <h5 class="text-center text-white">Message is required</h5>
                    </div>
                  
                    <button type="submit" class="w-full text-black bg-white focus:ring-0 focus:outline-none  font-medium rounded-lg text-sm px-5 py-2.5 text-center">Send</button>
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
<!-- Main modal Contact us -->
