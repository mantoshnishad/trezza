@include('frontend.header')
<style>
    #hide1{
        display: none;
    }
  
</style>
<div class="grid justify-items-center">
    <img src="image/index/mizhari.jpg" alt="">
</div>
<div class="py-20 bg-gray-200">
    <div class="lg:grid lg:grid-cols-2 gap-5">
        <div class="justify-self-center text-center">

        <h3 class="text-2xl text-sky-950 my-5">
        Not registered yet?
        </h3>

        <button class="px-8 py-2 border border-sky-950 text-white bg-sky-950">Sign Up</button>
        </div>
        <div class="border-l-2 border-blue-700 p-8">
            <h3 class="text-2xl text-sky-950 text-center my-5">Already a member?</h3>

            <input type="text" name="" id="" placeholder="Username" class="w-full py-2.5"> <br>
            <div class="mt-3 relative w-full">
            <input type="password" name="" id="myInput" placeholder="Password" class="w-full py-2.5" >
            <span class="eye absolute top-3 right-2" onclick="myPassword()">
            <i class="fa-solid fa-eye " id="hide1"></i>
            <i class="fa-solid fa-eye-slash" id="hide2"></i>
            </span>
            <div class="flex justify-between py-2">
                <label for="">
                    <input type="radio" class="mr-2">Save Password
                </label>

                <a href="forget_password.php"><h4>forgot Password?</h4></a>
            </div>
            
            </div>
            <div class="text-center py-4">
            <button class="px-8 py-2 border border-black">Login</button>
            </div>
        </div>
        </div>
</div>

<div class="h-[300px]">

</div>
<script>
    function myPassword(){
        var x = document.getElementById("myInput");
        var y = document.getElementById("hide1");
        var z = document.getElementById("hide2");
        if(x.type === 'password'){
            x.type = "text";
            y.style.display="block";
            z.style.dispaly="none";
        }
        else{
            x.type="password";
            y.style.display="none";
            z.style.display="block";
        }
    }
</script>
@include('frontend.footer')