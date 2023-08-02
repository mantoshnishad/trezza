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

        <h4 class="text-4xl my-2 font-medium">3D PRINTING</h4>
        <!-- <p class="my-3 text-sm">We are your casting experts. With state-of-the-art equipment, master craftsmen, and precise attention</p>
            <p class="text-sm">to every detail, your casting jobs are in the best of hands.</p> -->
        <div class="relative w-52 bg-black h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[90px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        <p class="my-3 text-justify text-sm leading-8">We can take your idea from a sketch or a picture and we will create a 3D computer model as per the information provided. With AutoCAD (computer-aided design) programs the possibilities are infinite. AutoCAD 3D printing allows us to make precisely scaled designs. CAD designs allow designers to display designs with complete specifications and details. It is important to understand the details of producing outstanding sketches for 3d jewelry design. Turn your sketches or photos into CAD models that can then be 3D printed, cast, and finished.</p>
      
        <p class="text-justify text-sm leading-8">
        After the AutoCAD designs, we will create your design into 3D printing for review. AutoCAD 3D printing will help us to review your design. This method allows us to make changes in design and adjustments, giving you to finalize your product choice and making decisions with the final piece of jewelry. When CAD design is combined with 3D printing technology, the final product is more exemplary and accurate.
        </p>
        <!-- <div class="my-5">

            <button type="button" class="px-6 py-2  border-2 border-[rgb(209,96,20)]">How we do it</button>
        </div> -->

    </div>
    <div class="grid place-content-center w-full">
        <img src="image/index/3D_PRINTING.avif" alt="" class="border border-[rgb(209,96,20)] p-1 h-[400px] w-[500px]">
    </div>
</div>

</div>






</div>
<div class="lg:h-[700px]"></div>
@include('frontend.footer')