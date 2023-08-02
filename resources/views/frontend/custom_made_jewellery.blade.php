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
        <div class="flex  gap-10  text-white  absolute lg:top-[550px] top-8 lg:left-[390px] opacity-100">
            <img src="image/logo/lab-chicago.png" alt="">
            <img src="image/logo/lab-guarantee.png" alt="">
            <img src="image/logo/lab-app-download.png" alt="">
        </div>
    </div>
</div>

<div class="lg:absolute lg:top-[800px] grid lg:grid-cols-2 gap-5 mx-10 my-10 lg:p-8 bg-white lg:drop-shadow-lg lg:shadow-xl">
    <div class="grid place-content-center text-center">
        <h4>Master Casting and Cad</h4>
        <h2 class="text-4xl font-semibold">Our service</h2>
        <div class="relative w-60 bg-[rgb(209,96,20)]  h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        <p class="my-3 leading-8 ">Whether you drew it from your vision or you want to alter an existing piece, Master Casting and Cad will help make your jewelry as unique as the person it is for. We make sure that you have your hand in every aspect of the designing process, as you should. With our computer aided design (CAD) program the possibilities are infinite.</p>
        <div class="flex items-center justify-center gap-5 my-10">
            <div>
                <span class="text-7xl font-semibold">1</span>
                <h3 class="text-sm text-[rgb(209,96,20)] ">Send us your inspiration</h3>
            </div>
            <img src="image/vedio/right.png" alt="" class="w-14">
            <div>
                <span class="text-7xl font-semibold">2</span>
                <h3 class="text-sm text-[rgb(209,96,20)] ">Send us your inspiration</h3>
            </div>
            <img src="image/vedio/left.png" alt="" class="w-14">
            <div>
                <span class="text-7xl font-semibold">3</span>
                <h3 class="text-sm text-[rgb(209,96,20)] ">Send us your inspiration</h3>

            </div>
        </div>
        <div>
            <button type="button" class="px-8 py-2  border border-[rgb(209,96,20)]  bg-gray-200">How we do it</button>
        </div>
    </div>
    <div class="grid place-content-center">
        <img src="image/index/custom-jwel.avif" alt="" class="border border-[rgb(209,96,20)]  p-1">
    </div>
</div>

</div>

<!-- <div class="lg:mt-[600px] mb-10 w-full">
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
            <button data-modal-target="authentication-modal1" data-modal-toggle="authentication-modal1" type="button" class="px-6 py-2  border-2 border-white">Find out more</button>
        </div>
    </div>
</div>
</div> -->

<!-- .............................slider....................... -->
<div class="lg:mt-[600px]">
    <h2 class="text-center">Explore</h2>
    <h4 class="text-4xl text-center font-semibold">Our Services</h4>
    <div class="relative w-60 bg-[rgb(209,96,20)]  h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
<div class="wrapper my-10">
    <div class="slider">
        <div>
            <img src="image/index/Cad+custom+made+jewelry.avif" alt="" class="h-[400px] w-full">
        </div>
        <div class="text-center">
            <h2 class="text-3xl text-[rgb(209,96,20)]  mt-5">Custom Made Jewellery</h2>
            <p class="p-4">Whether you drew it from your vision or you want to alter an existing piece, We will help make your jewellery as unique as the person it is for</p>
            <a href="" class="text-[rgb(209,96,20)]  my-5">Explore <span>></span></a>
        </div>
    </div>
    <div class="slider">
        <div>
            <img src="image/index/Photo+May.avif" alt="" class="h-[400px] w-full">
        </div>
        <div class="text-center">
            <h2 class="text-3xl text-[rgb(209,96,20)]  mt-5">Clean Scrap Service</h2>
            <p class="p-4">Whether you drew it from your vision or you want to alter an existing piece, We will help make your jewellery as unique as the person it is for</p>
            <a href="" class="text-[rgb(209,96,20)]  my-5">Explore <span>></span></a>
        </div>
    </div>
    <div class="slider">
    <div>
            <img src="image/index/Jewelery-polishing-ring-Master+casting+can+cad+chicago.avif" alt="" class="h-[400px] w-full">
        </div>
        <div class="text-center">
            <h2 class="text-3xl text-[rgb(209,96,20)]  mt-5">Clean Scrap Service</h2>
            <p class="p-4">Whether you drew it from your vision or you want to alter an existing piece, We will help make your jewellery as unique as the person it is for</p>
            <a href="" class="text-[rgb(209,96,20)] " >Explore <span>></span></a>
        </div>
    </div>
</div>
</div>
<!-- .............................slider....................... -->

<!-- <div class="lg:grid lg:grid-cols-2 bg-[rgb(133,31,68)] place-items-center">
    <div>
        <div class="text-center text-white  opacity-100">
            <h4 class="text-4xl my-2 font-medium">Custom Made Jewellery</h4>
            <div class="relative w-52 bg-white h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[90px] text-3xl text-white"><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <p class="my-3">Master Casting and Cad can help you meet the ever-increasing demand for custom jewelry. Our master designers and craftsmen can turn any concept into realit</p>
            <div>
                <button type="button" class="px-6 py-2  border-2 border-white">Find out more</button>
            </div>
        </div>
    </div>
    <div>
        <img src="image/index/cut-img2.avif" alt="">
    </div>
    <div>
        <img src="image/index/con-img2.avif" alt="">
    </div>
    <div>
        <div class="text-center text-white  2 opacity-100">
            <p class="my-3 ">Phone: <span>(312) 312-4434</span></p>
            <div class="relative w-52 bg-white h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[90px] text-3xl text-white"><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            
            <h4 class="my-2 font-medium w-4/5 mx-auto">Contact Master Casting & Cad</h4>
            <address class="mb-3">
                Master Casting & Cad, 68 E Madison St, Chicogo, IL60602
            </address>
            <button type="button" class="px-6 py-2  border-2 border-white">Contact US</button>
        </div>
    </div>

</div> -->
@include('frontend.footer')

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