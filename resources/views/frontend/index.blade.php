
@include('frontend.header')


<style>
    .wrapper {
  display: flex;
  grid-gap: 1rem;
/*   max-width: 768px; */
  width: 100%;
  overflow-x: auto;
  scroll-snap-type: x;
  cursor: grab;
  scroll-behavior: smooth;
  scrollbar-width: none; /* for firefox */
}

.wrapper::-webkit-scrollbar { /* for chrome */
  display: none;
}

.slider {
  min-width: calc(50% - .5rem);
  aspect-ratio: 1 / 1;
  /* background: #222; */
  /* display: flex; */
  justify-content: center;
  /* align-items: center; */
  color: black;
  /* font-size: 2rem; */
  scroll-snap-align: start;
  /* font-weight: 600; */
  user-select: none;
}

@media only screen and (max-width: 600px) {
    .slider {
  min-width: calc(100% - .5rem);
  aspect-ratio: 1 / 1;
  /* background: #222; */
  /* display: flex; */
  justify-content: center;
  /* align-items: center; */
  color: black;
  /* font-size: 2rem; */
  scroll-snap-align: start;
  /* font-weight: 600; */
  user-select: none;
}
}
</style>


<!-- The video -->
<div class="relative ">
    <video autoplay muted loop id="myVideo" class="">
        <source src="image/vedio/Jewlry_Making__Joining_a_Ring_2.mov" type="video/mp4">
    </video>
    <div class="absolute top-0 right-0 left-0 bg-cover w-full h-full overflow-hidden opacity-40 transition duration-300 ease-in-out bg-black">
    </div>
    <div class="text-left text-white  absolute lg:top-60 top-8 left-12 opacity-100">
        <h2 class="text-xl font-medium">Your one-stop shop for</h2>
        <h4 class="text-5xl my-2 font-medium">Jewelry Design & Manufacturing</h4>
        <h5 class="my-3 text-xl">Your Custom Solution</h5>
        <button  type="button" class="px-6 py-2  border-2 border-white">Find out more</button>
    </div>
    <div class="lg:block hidden">
        <div class="flex  gap-10  text-white  absolute lg:top-[500px] top-8 lg:left-[390px] opacity-100">
            <img src="image/index/madeinindia-removebg-preview.png" alt="" class="w-40 h-40">
            <img src="image/index/uality-guarantee-removebg-preview.png" alt="" class="w-40 h-40">
            <img src="image/index/download-page-mobile-app-removebg-preview.png" alt="" class="w-40 h-40">
        </div>
    </div>
</div>

<div class="lg:absolute lg:top-[800px] grid lg:grid-cols-2 mx-10 my-10 lg:p-8 bg-white lg:drop-shadow-lg lg:shadow-xl">
    <div class="grid place-content-center text-center">
        <h4>Looking for</h4>
        <h2 class="text-4xl font-semibold">A Custom Solution</h2>
        <div class="relative w-60 bg-[rgb(209,96,20)] h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        <p class="my-3 leading-8 ">Whether you drew it from your vision or you want to alter an existing piece, Master Casting and Cad will help make your jewelry as unique as the person it is for. We make sure that you have your hand in every aspect of the designing process, as you should. With our computer aided design (CAD) program the possibilities are infinite.</p>
        <div class="flex items-center justify-center gap-5 my-10">
            <div>
                <span class="text-7xl font-semibold">1</span>
                <h3 class="text-sm text-[rgb(209,96,20)]">Send us your inspiration</h3>
            </div>
            <img src="image/vedio/right.png" alt="" class="w-14">
            <div>
                <span class="text-7xl font-semibold">2</span>
                <h3 class="text-sm text-[rgb(209,96,20)]">Send us your inspiration</h3>
            </div>
            <img src="image/vedio/left.png" alt="" class="w-14">
            <div>
                <span class="text-7xl font-semibold">3</span>
                <h3 class="text-sm text-[rgb(209,96,20)]">Send us your inspiration</h3>

            </div>
        </div>
        <div>
            <button type="button" class="px-8 py-2  border border-[rgb(209,96,20)] bg-gray-200">How we do it</button>
        </div>
    </div>
    <div class="border border-[rgb(209,96,20)] m-4">
        <img src="image/index/customsize.avif" alt="">
    </div>
</div>

</div>

<div class="lg:mt-[600px] mb-10 w-full">
    <div class="relative">
        <img src="image/index/Jewellery_Repair.jpg" alt="" class="w-full h-[400px] overflow-hidden bg--cover">
        <div class="absolute top-0  right-0 left-0 bg-cover w-full h-full overflow-hidden opacity-70 transition duration-300 ease-in-out bg-slate-100">
        </div>
        <div class="text-center text-black  absolute lg:top-20 top-8 left-0 opacity-100">
            <h2 class="font-medium text-lg">offer</h2>
            <h4 class="text-5xl my-2 font-medium">Fast, Reliable, Affordable Solution</h4>
            <div class="relative w-60 bg-[rgb(133,31,68)] h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <p class="my-3 text-sm w-10/12 mx-auto">Staying competitive in the complex jewelry world can be a challenge. Here at Master Casting and Cad, we of the full range of services you need to meet those challenges and grow your business.</p>
            <!-- <button data-modal-target="authentication-modal1" data-modal-toggle="authentication-modal1" type="button" class="px-6 py-2  border-2 border-white">Find out more</button> -->
        </div>
    </div>
</div>
</div>

<!-- .............................slider....................... -->
<div>
    <h2 class="text-center">Explore</h2>
    <h4 class="text-4xl text-center font-semibold">Our Services</h4>
    <div class="relative w-60 bg-[rgb(209,96,20)] h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
<div class="wrapper my-10">
    <div class="slider">
        <div>
            <img src="image/index/6custom.jpg" alt="" class="h-[400px] w-full">
        </div>
        <div class="text-center">
            <h2 class="text-3xl text-[rgb(209,96,20)] mt-5">Custom Made Jewellery</h2>
            <p class="p-4">Whether you drew it from your vision or you want to alter an existing piece, We will help make your jewellery as unique as the person it is for</p>
            <a href="" class="text-[rgb(209,96,20)] my-5">Explore <span>></span></a>
        </div>
    </div>
    <div class="slider">
        <div>
            <img src="image/index/7custom.jpg" alt="" class="h-[400px] w-full">
        </div>
        <div class="text-center">
            <h2 class="text-3xl text-[rgb(209,96,20)] mt-5">Clean Scrap Service</h2>
            <p class="p-4">Whether you drew it from your vision or you want to alter an existing piece, We will help make your jewellery as unique as the person it is for</p>
            <a href="" class="text-[rgb(209,96,20)] my-5">Explore <span>></span></a>
        </div>
    </div>
    <div class="slider">
    <div>
            <img src="image/index/8custom.jpg" alt="" class="h-[400px] w-full">
        </div>
        <div class="text-center">
            <h2 class="text-3xl text-[rgb(209,96,20)] mt-5">Clean Scrap Service</h2>
            <p class="p-4">Whether you drew it from your vision or you want to alter an existing piece, We will help make your jewellery as unique as the person it is for</p>
            <a href="" class="text-[rgb(209,96,20)]" >Explore <span>></span></a>
        </div>
    </div>
</div>
</div>
<!-- .............................slider....................... -->

<div class="lg:grid lg:grid-cols-2 bg-[rgb(209,96,20)] place-items-center">
    <div>
        <div class="text-center text-white  opacity-100 py-10 lg:py-0">
            <h4 class="text-4xl my-2 font-medium">Custom Made Jewellery</h4>
            <div class="relative w-52 bg-white h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[90px] text-3xl text-white"><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <p class="my-3 lg:p-0 px-4">Master Casting and Cad can help you meet the ever-increasing demand for custom jewelry. Our master designers and craftsmen can turn any concept into realit</p>
            <div>
                <button type="button" class="px-6 py-2  border-2 border-white">Find out more</button>
            </div>
        </div>
    </div>
    <div>
        <img src="image/index/customjew.avif" alt="">
    </div>
    <div>
        <img src="image/index/Contactmaster.avif" alt="">
    </div>
    <div>
        <div class="text-center text-white  2 opacity-100 py-10 lg:py-0">
            <h2 class="text-sm">Explore</h2>
            <h4 class="text-4xl my-2 font-medium ">Contact Trezza Jewels LLP</h4>
            <div class="relative w-52 bg-white h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[90px] text-3xl text-white"><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <p class="my-3 text-3xl">Phone: <span>+91 2269521111</span></p>
            <address class="mb-3">
            Unit 604, SDF VIII, SEEPZ SEZ,<br> J V Link Road, Andheri East,<br> Mumbai 400096.
            </address>
            <button data-modal-target="authentication-modal4" data-modal-toggle="authentication-modal4" type="button" class="px-6 py-2  border-2 border-white">Contact US</button>
        </div>
    </div>

</div>
@include('frontend.footer')


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

<script>
    const wrapper = document.querySelector('.wrapper')

let pressed = false
let startX = 0

wrapper.addEventListener('mousedown', function (e) {
  pressed = true
  startX = e.clientX
  this.style.cursor = 'grabbing'
})

wrapper.addEventListener('mouseleave', function (e) {
  pressed = false
})

window.addEventListener('mouseup', function (e) {
  pressed = false
  wrapper.style.cursor = 'grab'
})

wrapper.addEventListener('mousemove', function (e) {
  if(!pressed) {
    return
  }

  this.scrollLeft += startX - e.clientX
})
</script>