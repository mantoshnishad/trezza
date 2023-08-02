@include('frontend.header')

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
        <button type="button" class="px-6 py-2  border-2 border-white">Find out more</button>
    </div>
    <div class="lg:block hidden">
        <div class="flex  gap-10  text-white  absolute lg:top-[550px] top-8 lg:left-[390px] opacity-100">
            <img src="image/logo/lab-chicago.png" alt="">
            <img src="image/logo/lab-guarantee.png" alt="">
            <img src="image/logo/lab-app-download.png" alt="">
        </div>
    </div>
</div>

<div class="lg:absolute lg:top-[700px] grid lg:grid-cols-2 gap-5 mx-10 my-10 lg:p-8 bg-white lg:drop-shadow-lg lg:shadow-xl">
    <div class="grid place-content-center">

        <h4 class="text-4xl my-2 font-medium text-center">MOLDS</h4>
        <!-- <p class="my-3 text-sm">We are your casting experts. With state-of-the-art equipment, master craftsmen, and precise attention</p>
            <p class="text-sm">to every detail, your casting jobs are in the best of hands.</p> -->
        <div class="relative w-52 bg-black h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[90px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        <span class="text-lg font-semibold my-2">VLT Mold</span>
        <p class="text-justify text-sm leading-8">VLT Mold gives you the ability to mold with carving waxes with extraordinarily shiny surfaces that require less finishing such as those created using CAD/CAM systems without damaging the models and wax models. This is a low-temperature vulcanizing mold for metal models. VLT brings revolution into the CAD process. This long-lasting low-shrink rubber produces a clean and shiny surface and is self-releasing.</p>

      <span class="text-lg font-semibold my-2">RTV Mold</span>
        <p class="text-justify text-sm leading-8">
        RTV Mold fixes quickly at ordinary room temperature and fixes much quicker at somewhat warmer temperatures. RTV makes solid, extreme, tear-safe resistant permanent Molds that last long. RTV Mold process used for molding waxes and items that cannot be heated. And it’s compatible with CAD/CAM resin and difficult to mold CAD-CAM wax patterns.
        </p>

        <span class="text-lg font-semibold my-2">Gelato Mold</span>
        <p class="text-justify text-sm leading-8">
        Gelato Mold used for Metal models only. This will last for years depending on the design. Gelato Molding Rubber gives waxes a smooth, shiny finish that won’t stick to the mold. And shiny waxes mean less finishing and less polishing of your castings! Produces a firm form with incredible adaptability and tear strength.
        </p>

        <span class="text-lg font-semibold my-2">Metal Mold</span>
        <p class="text-justify text-sm leading-8">
        Metal Molds are first in class when estimating consistency and accuracy all through the creation run. Metal Molds are the most expensive. If your creation run is huge and large consistency is of most extreme significance, we certainly suggest the utilization of Metal Molds.
        </p>
        <!-- <div class="my-5">

            <button type="button" class="px-6 py-2  border-2 border-[rgb(133,31,68)]">How we do it</button>
        </div> -->

    </div>
    <div class="grid place-content-center w-full">
        <img src="image/index/molds.avif" alt="" class="border border-[rgb(209,96,20)] p-1 h-[400px] w-[500px]">
    </div>
</div>

</div>






</div>
<div class="lg:h-[900px]"></div>
@include('frontend.footer')