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
    <div class="grid place-content-center">

        <h4 class="text-4xl my-2 font-medium text-center">CAD CAM</h4>
        <!-- <p class="my-3 text-sm">We are your casting experts. With state-of-the-art equipment, master craftsmen, and precise attention</p>
            <p class="text-sm">to every detail, your casting jobs are in the best of hands.</p> -->
        <div class="relative w-52 bg-black h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[90px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>

        <p class="text-justify text-sm leading-8">CAD/CAM jewelry technology facilitates efficient computer-aided designing and

            drafting methods and has become the intrinsic part of the designing and

            manufacturing system. With the help of CAD/CAM, the designer can access the

            virtual models and can detect the erroneous design and rectify it. It is used for

            integrating and 3D dimensional computer models of machines, jewelry,

            equipment, or any other product. It is required in the field where precision is

            needed, therefore it is used in the jewelry designs to get the utmost precision

            while keeping in mind the client's requirement. With the help of our CAD/CAM

            experts, we provide excellent designing services for jewelry designs. Our team

            members persist in the specialization in the CAD/CAM software which enables

            them to come up with intrinsic and innovative designs.</p>


        <!-- <div class="my-5">

            <button type="button" class="px-6 py-2  border-2 border-[rgb(133,31,68)]">How we do it</button>
        </div> -->

    </div>
    <div class="grid place-content-center w-full">
        <img src="image/index/Cad+custom+made+jewelry.avif" alt="" class="border border-[rgb(209,96,20)] p-1 h-[400px] w-[500px]">
    </div>
</div>

</div>






</div>
<div class="lg:h-[600px]"></div>
@include('frontend.footer')