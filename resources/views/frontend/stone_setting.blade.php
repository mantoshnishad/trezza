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

        <h4 class="text-4xl my-2 font-medium text-center">STONE SETTING</h4>
        <!-- <p class="my-3 text-sm">We are your casting experts. With state-of-the-art equipment, master craftsmen, and precise attention</p>
            <p class="text-sm">to every detail, your casting jobs are in the best of hands.</p> -->
        <div class="relative w-52 bg-black h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[90px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        
        <p class="text-justify text-sm leading-8 mb-3">Stone setting is the crucial stage in jewelry making, where gemstones are attached in a metal casting. The main reason for the stone setting is to hold a gemstone secure and enhance the luster, cut, clarity, and color of a gemstone. Jewelry manufacturers use various methods to set a gemstone into a jewelry item which is based on gemstone's cut and proportion.</p>

      
        <p class="text-justify text-sm leading-8">
        At Master Casting and Cad, the crucial factor in the manufacturing of the diamond jewelry is the creativity used in the stone settings.Thus we have an array of stone settings methods as per the liking and preference of the customer. There are innumerable ways to set the stone on a band, but there are few popular options for beautiful diamonds settings and some of these methods and techniques are described as follow:
        </p>

        
        <!-- <div class="my-5">

            <button type="button" class="px-6 py-2  border-2 border-[rgb(133,31,68)]">How we do it</button>
        </div> -->

    </div>
    <div class="grid place-content-center w-full">
        <img src="image/index/stone setting.avif" alt="" class="border border-[rgb(209,96,20)] p-1 h-[400px] w-[500px]">
    </div>
</div>
<div class="lg:mt-[550px] mb-10 bg-gray-100 px-20 py-10 border-t border-black">
        <h3 class="text-4xl my-2 font-medium w-4/5 mx-auto text-center" >Stone Setting Methods</h3>
        <div class="relative w-52 bg-black h-0.5 mx-auto mt-7 mb-5">
            <span class="absolute -top-4 left-[90px] text-3xl text-[rgb(209,96,20)]"><i class="fa-sharp fa-solid fa-gem"></i></span>
        </div>
        <p class="text-justify leading-8 ">
        Stone setting is the crucial stage in jewelry making, where gemstones are attached in a metal casting. The main reason for the stone setting is to hold a gemstone secure and enhance the luster, cut, clarity, and color of a gemstone. Jewelry manufacturers use various methods to set a gemstone into a jewelry item which is based on gemstone's cut and proportion and some of these methods and techniques are described as follow:
        </p> <br>

        <!-- <p class="text-justify leading-8">
        The Lab-grown diamonds are less expensive and avoid the burden of the natural procedures of a naturally mined stone. The differences between man-made and natural are so subtle, they are incredibly difficult to identify without using sophisticated spectroscopy. We offer millions of combinations of style, finishes, metals, and settings with precious gemstones. The standard and quality of the diamond is determined by the Cut, Clarity and Color.
        </p> -->
        <div class="mt-3">
            <span class="text-lg font-semibold mb-5">Pave setting :</span>
            <p class="leading-8 text-justify">Pave setting is a method where the surface of a jewelry item appears to be covered with tiny diamonds. These multiple-sized diamonds are placed in small holes which are drilled out on the surface of the jewelry. Pave setting has small holes, triangular in shape which holds the stones low and very close so that they produce a brilliance across the entire surface of a jewelry item. The use of multiple stones in pave setting forms an illusion of bigger jewelry. This setting gives the best results with diamonds and white gold.</p>
        </div>
        <div class="my-3">
            <span class="text-lg font-semibold mb-5">Tension Setting :</span>
            <p class="leading-8 text-justify">It is a relatively new type of setting in which metal pressure is used to hold a stone. In this method, the metal is attached apart and the girdle of the stone is settled into small grooves in the inner surface of the metal. Tension settingrequires strong metals to create sufficient tension and pressure to hold a stone firmly and platinum is often used for this purpose.</p>
        </div>
        <div class="mb-3">
            <span class="text-lg font-semibold mb-5">Channel setting :</span>
            <p class="leading-8 text-justify">Channel setting is a method in which gemstones are placed side by side held in between two parallel tracks on each metal wall. This setting gives the impression of stones in the jewelry items and produces the maximum amount of light as no metal appears in-between the gemstones. The Channel setting protects the gemstones and none of the stone's edges are exposed, which are safe from hard knocks and general wear and tear.</p>
        </div>
        <div class="mb-3">
            <span class="text-lg font-semibold mb-5">Invisible setting :</span>
            <p class="leading-8 text-justify">An invisible setting is an improved method that is considered as one of the most difficult in which the stones are positioned in such a manner so that metal is not visible from in-between stones. This setting is appropriate only for the multi-stone arrangement that is usually attached in multiple rows. Usually, an invisible setting is best suited with a square princess, emerald, baguette, and trillion cut diamonds and gemstones because the straight edges can be positioned very close to each other without leaving any space in-between.</p>
        </div>
    </div>

<!-- <div class="lg:h-[900px]"></div> -->
@include('frontend.footer')