@include('frontend.header')
<style>
    /* ...........tabs................. */
    .tablinks.active1 {
        /* background-color: midnightblue; */
        background-color: white;
        color: black;
        /* font-weight: 500; */
    }

    /* ...........tabs................. */
</style>
<div class="px-8 lg:flex ">
    <div class="lg:w-6/12 pt-4 h-full">
        <div class="relative bg-[url('image/logo/register1.png')] lg:h-[750px] h-[500px] bg-cover text-center ">
            <div class="absolute top-0 text-white right-0 left-0 bg-cover w-full h-full overflow-hidden opacity-90 transition duration-300 ease-in-out bg-sky-950  ">
                <div class="text-center absolute lg:top-24 top-16 left-12">
                    <h2>Customize your jewelry with us!</h2>
                    <h4 class="text-4xl my-2">ADD PROJECT</h4>
                    <div class="relative w-60 bg-[rgb(209,96,20)] h-0.5 mx-auto mt-7 mb-5">
                        <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
                    </div>
                    <h5 class="my-3">Need help? <span>Contact Us</span></h5>
                    <p class="my-3 text-3xl">Phone: <span>+91 2269521111</span></p>
                    <address class="mb-3">
                    Unit 604, SDF VIII, SEEPZ SEZ,<br> J V Link Road, Andheri East,<br> Mumbai 400096.
                    </address>
                    <button data-modal-target="authentication-modal2" data-modal-toggle="authentication-modal2" type="button" class="px-6 py-2  border-2 border-white">Contact US</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full">
        <div class="tab my-4 overflow-hidden text-center bg-gray-200 w-full">
           
            <button class="tablinks bg-[rgb(209,96,20)]  text-white  font-semibold py-2 px-8 mx-1 my-1"><span class="mr-1"><i class="fa-solid fa-building"></i></span> Project</button>
        </div>
        @livewireStyles
        @livewire('add-project')
        @livewireScripts
        </div>
    </div>
</div>
</div>
<!-- Main modal Contact us -->

<!-- Main modal Contact us -->



@include('frontend.footer')