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

<div class="lg:absolute lg:top-[800px] grid lg:grid-cols-2 gap-5 mx-10 my-10 lg:p-8 bg-white lg:drop-shadow-lg lg:shadow-xl">
    <div class="grid place-content-center text-center">

        <h4 class="text-3xl my-2 font-medium">CAD PRINTING SERVICES AND DESIGN</h4>
        <!-- <p class="my-3 text-sm">We are your casting experts. With state-of-the-art equipment, master craftsmen, and precise attention</p>
            <p class="text-sm">to every detail, your casting jobs are in the best of hands.</p> -->
        <div class="relative w-52 bg-black h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[90px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        <p class="mt-3 text-justify text-sm leading-8">Here at Master Casting and Cad we take in your STL and 3DM files to create a wax using our rapid prototyping machines.</p>

        <p class="text-justify text-sm leading-8">
            cad-printing2We can upload your designs directly from your USB drives or via email. High resolution resin is used for quality casting and molding. Overnight services available for rush jobs.
        </p>

        <p class="text-justify text-sm leading-8">
            We offer competitive pricing for printing services. Our waxes start at $50 per file. Special pricing is offered to regular customers at $30 per wax if more than 10 files are printed per month. Waxes are offered as low as $15 per wax if
            customers are casting in house.
        </p>
        <div class="my-5">

            <button type="button" class="px-6 py-2  border-2 border-[rgb(209,96,20)]">How we do it</button>
        </div>

    </div>
    <div class="grid place-content-center w-full">
        <img src="image/index/cad_mcc_design.avif" alt="" class="border border-[rgb(209,96,20)] p-1 h-[400px] w-[500px]">
    </div>
</div>

</div>



<div class="lg:mt-[700px] lg:grid lg:grid-cols-2 bg-[rgb(209,96,20)] place-items-center">
    <div>
        <div class="text-center text-white  opacity-100 py-10 lg:py-0">
            <h4 class="text-4xl my-2 font-medium">Custom Made Jewellery</h4>
            <div class="relative w-52 bg-white h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[90px] text-3xl text-white"><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <p class="my-3">Whether you drew it from your vision or you want to alter an existing piece, We will help make your jewellery as unique as the person it is for.</p>
            <div>
                <button type="button" class="px-6 py-2  border-2 border-white">Find out more</button>
            </div>
        </div>
    </div>
    <div>
        <img src="image/index/banner1.avif" alt="">
    </div>
    <div>
        <img src="image/index/customjew.avif" alt="">
    </div>
    <div>
        <div class="text-center text-white opacity-100 py-10 lg:py-0">
            <h2 class="text-sm">Explore</h2>
            <h4 class="text-4xl my-2 font-medium w-4/5 mx-auto">Clean Scrap Service</h4>
            <div class="relative w-52 bg-white h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[90px] text-3xl text-white"><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <p class="my-3">Master Casting and Cad offers a Clean Scrap Service where we can either provide all the metal for the casting of your piece or you could give us your scrap gold in exchange for gold casting grain.</p>
            <button type="button" class="px-6 py-2  border-2 border-white">Find out more</button>
        </div>
    </div>

</div>
</div>
@include('frontend.footer')