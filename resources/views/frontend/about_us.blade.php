
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

        <h4 class="text-lg my-2 font-medium text-center">About us</h4>
        <!-- <p class="my-3 text-sm">We are your casting experts. With state-of-the-art equipment, master craftsmen, and precise attention</p>
            <p class="text-sm">to every detail, your casting jobs are in the best of hands.</p> -->
        <div class="relative w-52 bg-black h-0.5 mx-auto mt-2 mb-5">
            <span class="absolute -top-4 left-[90px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        
        <p class="text-justify text-sm leading-8 mb-3">Master Casting & Cad was founded in Chicago and for years, we have been in the business of diamond jewelry. As a third generation jeweler, we have been in the jewelry business for over 20 years. It wasn’t long before when we diversified into customized stones and selling into the jewellery trade. For decades, we’ve earned our customers’ trust by dedicating ourselves to unrivalled knowledge, service, honesty and respect. We are one of the few jewellers in Chicago who manufacture engagement rings, wedding rings, diamond earrings, pendants and all of its diamond and gemstone jewellery in-house, from start to finish.</p>

      
        <!-- <p class="text-justify text-sm leading-8">
        At Master Casting and Cad, the crucial factor in the manufacturing of the diamond jewelry is the creativity used in the stone settings.Thus we have an array of stone settings methods as per the liking and preference of the customer. There are innumerable ways to set the stone on a band, but there are few popular options for beautiful diamonds settings and some of these methods and techniques are described as follow:
        </p> -->

        
        <!-- <div class="my-5">

            <button type="button" class="px-6 py-2  border-2 border-[rgb(133,31,68)]">How we do it</button>
        </div> -->

    </div>
    <div class="grid place-content-center w-full">
        <img src="image/index/stone setting.avif" alt="" class="border border-[rgb(209,96,20)] p-1 h-[400px] w-[500px]">
    </div>
</div>
<div class="lg:mt-[550px] mb-10 bg-gray-100 px-20 py-10 border-t border-black">
        <h3 class="text-lg my-2 font-medium w-4/5 mx-auto text-center" >About Us</h3>
        <div class="relative w-24 bg-black h-0.5 mx-auto mt-3 mb-5">
            <span class="absolute -top-4 left-[35px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        <p class="text-justify leading-8 ">
        We craft the jewelry that would build the statement and turn heads by giving a simple & bold look. Initially, our designers sketch their ideas which would just fit perfectly for that special occasion. Later, the hand sketches are converted into a digital sketch with all the finishing & detailing as per the size and setting of each gemstone using Computer Aided Designing(CAD). We use the most advanced 3D printers to use the CAD files to create wax models which are the physical prototypes.
        </p> <br>

        <p class="text-justify leading-8">
        “Jewelry has exclusive individuality which tells a story about the person who’s wearing it.” So to create exquisite designs & experiences, we promise to deliver the elegant & spectacular jewelry pieces with a remarkable finish. A single jewel follows a long journey before coming to life. Therefore before designing the piece, our designers understand and analyze the individuality and personalized choices through Customer's occasions, professions, lifestyles and purposes. Only then we are able to bring out the emotion out of the jewellery which would make it special for you!
        </p>
        <div class="mt-3">
            <span class="text-lg font-semibold ">Customized designs, Curated collections</span><br>
            <p class="leading-8 text-justify">Crafted with efficacy and diligence, we have a comprehensive range of signature designs and a curated selection of engagement jewellery crafted by renowned and experienced designers. Since beginning our journey, we have constantly sought inspiration from our customers. Therefore, we thrive on fulfilling our customer's choice and provide them with customized and bespoke designs. Our bespoke tailored services come in centre, when it comes to understanding our client’s countless ideas or giving life to their dreams by delivering the personalised jewels, which is priceless for us</p> <br>

            <p class="leading-8 text-justify">To get in touch with us, contact us through contact number mentioned below, or you can visit us at our store in Chicago.</p> <br>

            <p><span class="text-lg font-semibold">Address :</span> Unit 604, SDF VIII, SEEPZ SEZ, J V Link Road, Andher East, Mumbai 400096</p><br>
            <p><span class="text-lg font-semibold">Phone number :</span> +91 2269521111</p>
        </div>
    </div>

<!-- <div class="lg:h-[900px]"></div> -->
@include('frontend.footer')