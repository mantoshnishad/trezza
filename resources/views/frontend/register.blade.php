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
                    <h2>Before going further, please</h2>
                    <h4 class="text-4xl my-2">Register</h4>
                    <div class="relative w-60 bg-[rgb(209,96,20)] h-0.5 mx-auto mt-7 mb-5">
                        <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
                    </div>
                    <h5 class="my-3">Need help? <span>Contact Us</span></h5>
                    <p class="my-3 text-3xl">Phone: <span>+91 2269521111</span></p>
                    <address class="mb-3">
                    Unit 604, SDF VIII, SEEPZ SEZ,<br> J V Link Road, Andheri East,<br> Mumbai 400096.
                    </address>
                    <button data-modal-target="authentication-modal1" data-modal-toggle="authentication-modal1" type="button" class="px-6 py-2  border-2 border-white">Contact US</button>
                </div>
            </div>
        </div>
        <!-- <img src="image/logo/register1.png" alt=" " class=""> -->
        <!-- <div class="text-center">
            <h2>Before going further, please</h2>
            <h4>Register</h4>
            <div class="relative w-60 bg-[rgb(209,96,20)] h-0.5 mx-auto mt-7 mb-5">
                <span class="absolute -top-4 left-[110px] text-3xl "><i class="fa-sharp fa-solid fa-gem"></i></span>
            </div>
            <h5>Need help? <span>Contact Us</span></h5>
            <p>Phone: <span>(312) 312-4434</span></p>
            <address>
                Master Casting & Cad,<br> 68 E Madison St, Chicogo, IL60602
            </address>
        </div> -->
    </div>
    <div class="w-full">
        <div class="tab my-4 overflow-hidden text-center bg-gray-200 w-full">
            <button class="tablinks bg-[rgb(209,96,20)]  text-white  font-semibold  p-2 mx-1 my-1" id="defaultOpen" onclick="openCity(event, 'Company')">Company</button>
            <button class="tablinks bg-[rgb(209,96,20)]  text-white  font-semibold p-2 mx-1 my-1" onclick="openCity(event, 'Individual')">Individual</button>
        </div>
        <div class="lg:px-10">
            <div id="Company" class="tabcontent hidden py-10 lg:w-9/12 mx-auto ">
                <div class="lg:flex gap-5 w-full">
                    <div class="relative z-0 w-full lg:mb-0 mb-3">
                        <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">First Name <span>*</span></label>
                    </div>

                    <div class="relative z-0 w-full">
                        <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Last Name <span>*</span></label>
                    </div>
                </div>

                <div class="relative z-0 w-full mt-3">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Company Name <span>*</span></label>
                </div>

                <div class="relative z-0 w-full my-3">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Website Name <span>*</span></label>
                </div>

                <div class="relative z-0 w-full mb-3">
                    <textarea type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Address <span>*</span></label>
                </div>

                <div class="flex gap-5 w-full">
                    <div class="relative z-0 w-full my-3">
                        <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected>Choose a Country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Country<span>*</span></label>
                    </div>

                    <div class="relative z-0 w-full my-3">
                        <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected>Choose a state</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">State<span>*</span></label>
                    </div>
                </div>

                <div class="lg:flex gap-5 w-full ">
                    <div class="relative z-0 w-full my-3">
                        <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                            <option selected>Choose a city</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">City<span>*</span></label>
                    </div>

                    <div class="relative z-0 w-full my-3">
                        <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Zip<span>*</span></label>
                    </div>
                </div>

                <div class="lg:flex gap-5 w-full mb-3">
                    <div class="relative z-0 w-full lg:mb-0 mb-3">
                        <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Phone Number <span>*</span></label>
                    </div>

                    <div class="relative z-0 w-full">
                        <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Email <span>*</span></label>
                    </div>
                </div>

                <div class="lg:flex gap-5 w-full">
                    <div class="relative z-0 w-full lg:mb-0 mb-3">
                        <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Username <span>*</span></label>
                    </div>

                    <div class="relative z-0 w-full">
                        <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                        <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Password <span>*</span></label>
                    </div>
                </div>

                <div class="flex items-center mt-5 gap-5">
                    <div class="">
                        <h3 class="text-lg font-medium text-gray-900 dark:text-white">Are you a jbt member?</h3>
                    </div>
                    <div class="flex flex-wrap items-center">
                        <div class="flex items-center mr-4">
                            <input type="radio" value="" name="colored-radio" class="tablinks1 w-4 h-4 text-[rgb(209,96,20)] bg-gray-100 border-gray-300 focus:ring-[rgb(209,96,20)] dark:focus:ring-[rgb(209,96,20)] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" id="defaultOpen1" onclick="openRadio(event, 'redradio')">
                            <label for="red-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Yes</label>
                        </div>

                        <div class="flex items-center mr-4">
                            <input type="radio" value="" name="colored-radio" class="tablinks1 w-4 h-4 text-[rgb(209,96,20)] bg-gray-100 border-gray-300 focus:ring-[rgb(209,96,20)] dark:focus:ring-[rgb(209,96,20)] dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" onclick="openRadio(event, 'greenradio')">
                            <label for="green-radio" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">No</label>
                        </div>
                    </div>
                </div>
                <div id="redradio" class="tabradio hidden py-5">
                    <div class="flex gap-5 w-full">
                        <div class="relative z-0 w-full my-3">
                            <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Zip<span>*</span></label>
                        </div>

                        <div class="relative z-0 w-full my-3">
                            <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected>Choose a city</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">City<span>*</span></label>
                        </div>
                    </div>

                    <div class="float-right mb-5">
                        <button class="px-10 py-2 bg-[rgb(209,96,20)] text-white text-lg">submit</button>
                    </div>
                </div>

                <div id="greenradio" class="tabradio hidden py-10">
                    <div class="flex gap-5 w-full">
                        <div class="relative z-0 w-full my-3">
                            <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Zip<span>*</span></label>
                        </div>

                        <div class="relative z-0 w-full my-3">
                            <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Zip<span>*</span></label>
                        </div>
                    </div>

                    <div class="bg-[rgb(209,236,241)] p-3 mb-1">
                        <p class="text-sm text-[rgb(39,108,122)]">Please upload an image of your state or federal business registration certificate.</p>
                    </div>
                    <div>
                        <input type="file" id="floating_standard" class="block  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    </div>

                    <div class="grid grid-cols-2 gap-5 w-full my-3">
                        <div class="relative z-0 w-full ">
                            <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                <option selected>Choose a city</option>
                                <option value="US">United States</option>
                                <option value="CA">Canada</option>
                                <option value="FR">France</option>
                                <option value="DE">Germany</option>
                            </select>
                            <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">City<span>*</span></label>
                        </div>
                        <div class="justify-self-end">
                            <button class="px-10 py-2 bg-[rgb(209,96,20)] text-white text-lg">submit</button>
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <div id="Individual" class="tabcontent hidden py-10 lg:w-9/12 mx-auto">
            <div class="lg:flex gap-5 w-full mb-3">
                <div class="relative z-0 w-full lg:mb-0 mb-3">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">First Name <span>*</span></label>
                </div>

                <div class="relative z-0 w-full">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Last Name <span>*</span></label>
                </div>
            </div>

            <!-- <div class="relative z-0 w-full mt-3">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Company Name <span>*</span></label>
                </div> -->

            <!-- <div class="relative z-0 w-full my-3">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Website Name <span>*</span></label>
                </div> -->

            <div class="relative z-0 w-full">
                <textarea type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "></textarea>
                <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Address <span>*</span></label>
            </div>

            <div class="flex gap-5 w-full my-3">
                <div class="relative z-0 w-full lg:mb-0 mb-3">
                    <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option selected>Choose a Country</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Country<span>*</span></label>
                </div>

                <div class="relative z-0 w-full ">
                    <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option selected>Choose a state</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">State<span>*</span></label>
                </div>
            </div>

            <div class="lg:flex gap-5 w-full my-3">
                <div class="relative z-0 w-full lg:mb-0 mb-3">
                    <select id="floating_standard" class="block py-2.5 px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                        <option selected>Choose a city</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">City<span>*</span></label>
                </div>

                <div class="relative z-0 w-full ">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Zip<span>*</span></label>
                </div>
            </div>

            <div class="lg:flex gap-5 w-full my-3">
                <div class="relative z-0 w-full lg:mb-0 mb-3">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Phone Number <span>*</span></label>
                </div>

                <div class="relative z-0 w-full">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Email <span>*</span></label>
                </div>
            </div>

            <div class="lg:flex gap-5 w-full my-3">
                <div class="relative z-0 w-full lg:mb-0 mb-3">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Username <span>*</span></label>
                </div>

                <div class="relative z-0 w-full">
                    <input type="text" id="floating_standard" class="block py-2.5  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
                    <label for="floating_standard" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-3 translate-x-3  scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-3">Password <span>*</span></label>
                </div>
            </div>



            <div class="flex items-center my-3">
                <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Gia student id</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Jewelery School id</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Trade show badge</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Social medial or website proving that you sell jewelery</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Design studio</label>
            </div>
            <div class="flex items-center mb-3">
                <input id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Independent designer</label>
            </div>

            <div class="bg-[rgb(209,236,241)] p-3 mb-1">
                <p class="text-sm text-[rgb(39,108,122)]">Please upload an image of the option selected as proof.</p>
            </div>
            <div>
                <input type="file" id="floating_standard" class="block  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " />
            </div>


            <div class="float-right my-3">
                <button class="px-10 py-2 bg-[rgb(209,96,20)] text-white text-lg">submit</button>
            </div>

        </div>
    </div>
</div>
</div>

<!-- Main modal Contact us -->
<div id="authentication-modal1" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative  bg-[rgb(209,96,20)] rounded-lg shadow dark:bg-gray-700">
            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="authentication-modal1">
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

<!-- ...................Radio tabs............. -->
<script>
    function openRadio(evt, radioName) {
        var i, tabradio, tablinks1;
        tabradio = document.getElementsByClassName("tabradio");
        for (i = 0; i < tabradio.length; i++) {
            tabradio[i].style.display = "none";
        }
        tablinks1 = document.getElementsByClassName("tablinks1");
        for (i = 0; i < tablinks1.length; i++) {
            tablinks1[i].className = tablinks1[i].className.replace(" active2", "");
        }
        document.getElementById(radioName).style.display = "block";
        evt.currentTarget.className += " active2";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen1").click();
</script>
<!-- ...................Radio tabs.............   -->
<!-- ...................tabs............. -->
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active1", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active1";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
</script>
<!-- ...................tabs.............   -->
@include('frontend.footer')