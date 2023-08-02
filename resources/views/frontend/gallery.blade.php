@include('frontend.header')
<style>
    .gallery .gallery-items .item.hide{
	display: none;
}
.gallery .gallery-items .item.show{
	display: block;
	animation: show .5s ease;
}
@keyframes show{
    0%{
    	opacity:0;
    	transform: scale(0.9);
    }
    100%{
    	opacity:1;
    	transform: scale(1);
    }
}
</style>
<div class="my-5">
<section class="gallery px-8">
	<div class="container">
		<!-- <div class="title text-center">
			<h1>Gallery</h1>
		</div> -->
		<div class="gallery-items grid lg:grid-cols-4 gap-3">
			<div class="item relative">
				<img src="images/1.jpg" alt="gallery" class="w-full"/>
                <div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/2.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/3.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/4.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/5.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/6.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/7.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/8.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/9.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/10.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/11.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/12.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/13.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/14.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/15.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/16.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/17.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/18.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/19.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
			<div class="item relative">
				<img src="images/20.jpg" alt="gallery" class="w-full"/>
				<div class="caption   absolute  top-0 right-0 bottom-0 left-0 w-full h-full bg-cover overflow-hidden opacity-0 transition duration-300 ease-in-out bg-sky-950 hover:opacity-80">        
                </div>
			</div>
		</div>
		<div class="pagination grid justify-items-end my-5">
        <!-- <div class="page"><span>Page</span></div> -->
        <div class="flex gap-5">
			<div class="prev border border-black px-4 py-1"><h3>Prev</h3></div>
            <div class="border border-black px-4 py-1"><span class="page-num"></span></div>
			<div class="next border border-black px-4 py-1"><h3>Next</h3></div>
            </div>
		</div>
	</div>
</section>
</div>

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
        <div class="text-center text-white opacity-100 py-10 lg:py-0">
            <h2 class="text-sm">Explore</h2>
            <h4 class="text-4xl my-2 font-medium ">Contact Trezza Jewels LLP</h4>
            <div class="relative w-52 bg-white h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[90px] text-3xl text-white"><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <p class="my-3 text-3xl">Phone: <span>+91 2269521111</span></p>
            <address class="mb-3">
			Unit 604, SDF VIII, SEEPZ SEZ,<br> J V Link Road, Andheri East,<br> Mumbai 400096.
            </address>
            <button data-modal-target="authentication-modal7" data-modal-toggle="authentication-modal7" type="button" class="px-6 py-2  border-2 border-white">Contact US</button>
        </div>
    </div>

</div>
<!-- Main modal Contact us -->
<div id="authentication-modal7" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative  bg-[rgb(209,96,20)] rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal7">
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
     const galleryItems=document.querySelector(".gallery-items").children;
 const prev=document.querySelector(".prev");
 const next=document.querySelector(".next");
 const page=document.querySelector(".page-num");
 const maxItem=8;
 let index=1;
  
  const pagination=Math.ceil(galleryItems.length/maxItem);
  console.log(pagination)

  prev.addEventListener("click",function(){
    index--;
    check();
    showItems();
  })
  next.addEventListener("click",function(){
  	index++;
  	check();
    showItems();  
  })

  function check(){
  	 if(index==pagination){
  	 	next.classList.add("disabled");
  	 }
  	 else{
  	   next.classList.remove("disabled");	
  	 }

  	 if(index==1){
  	 	prev.classList.add("disabled");
  	 }
  	 else{
  	   prev.classList.remove("disabled");	
  	 }
  }

  function showItems() {
  	 for(let i=0;i<galleryItems.length; i++){
  	 	galleryItems[i].classList.remove("show");
  	 	galleryItems[i].classList.add("hide");


  	    if(i>=(index*maxItem)-maxItem && i<index*maxItem){
  	 	  // if i greater than and equal to (index*maxItem)-maxItem;
  		  // means  (1*8)-8=0 if index=2 then (2*8)-8=8
          galleryItems[i].classList.remove("hide");
          galleryItems[i].classList.add("show");
  	    }
  	    page.innerHTML=index;
  	 }

  	 	
  }

  window.onload=function(){
  	showItems();
  	check();
  }
</script>



@include('frontend.footer')