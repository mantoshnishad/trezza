@extends('adminlte::page')

@section('content')
<style>
  .switch-container {
  position: relative;
  width: 160px;
  height: 22px;
  border-radius: 10px;
  background: transparent;
  border: 1px solid #1e2834;
  box-sizing: border-box;
  display: flex;  
  align-items: center;
  justify-content: center;
}

.handle {
  position: absolute;
  box-sizing: border-box;
  width: 80px;
  height: 22px;
  border-radius: 16px;
  background: #1e2834;
  border: 1px solid #1e2834;
  transition: 0.5s;
  left: 0;
  z-index: 0;
}

.opt {
  text-align: center;
  flex: 1 0 90px;
  font-size: 16px;
  font-family: sans-serif;
  transition: 0.3s;
  color: #1e2834;
  cursor: pointer;
  z-index: 1;
  padding: 5px 10px;
}

.opt.activated{
  color: white;
  cursor: auto;
}

.handle.one {
  left: 0px;
}

.handle.two {
  left: 50%;
}

.hide {
  display: none;
}

#tab-one,
#tab-two {
  margin-top: 20px;
  width: 100%;
  height: 200px;
  padding: 20px;
  /* background: yellow; */
  box-sizing: border-box;
}

#tab-two {
  /* background: lime; */
}


/* .........................tab button................. */
.tab_box{
 display: flex;
 justify-content:space-between;
}



/* Style the tab */
.tab {
  display: flex; 
  
  /* border: 1px solid #ccc; */
  /* background-color: #714b4b; */
  /* width: 100%; */
  text-align: right
  /* height: 300px; */
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 10px 10px;
  /* width: 100%; */
  border: none;
  outline: none;
  text-align: right;
  cursor: pointer;
  transition: 0.3s;
  font-size: 14px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  /* float: right; */
  text-align: start;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 100%;
  border-left: none;
  /* height: 300px; */
}

.container_job{
  border-top: 1px  solid gray;
  border-bottom: 1px  solid gray;
  margin: 10px 10px;
  padding: 10px 10px;
}

.paid{
  width: 12%;
  background-color: skyblue;
  opacity: 0.7;
  padding: 5px;
  color: #fff;
  border-radius: 5px;
}

.container_job1{
  width: 20%;
  /* border-top: 1px  solid gray;
  border-bottom: 1px  solid gray; */
  /* margin: 10px 10px; */
  padding: 10px 10px;
}

.paid1{
  /* width: 12%; */
  background-color: skyblue;
  opacity: 0.7;
  padding: 5px;
  color: #fff;
  border-radius: 5px;
}
/* .........................tab button................. */

/* .....................read more...................... */
#more {display: none;}
/* .....................read more...................... */
/* ......................Delivery direction............................................. */


.circle_ul{
    display: flex;
    margin-top: 50px;
    ; 
}

.circle_ul .circle_il{
    list-style: none;
    display: flex;
    flex-direction: column;
    align-items: center;
   
}
.circle_ul .circle_il .icon{
    font-size: 35px;
    color: #ff4732;
    margin: 0 40px;
}
.circle_ul .circle_il .text{
    font-size: 14px;
    font-weight: 600;
    color: #030000;
    padding-top: 10px;
   
}

/* Progress Div Css  */

.circle_ul .circle_il .progress{
    width: 30px;
    height: 30px;
    border-radius: 50%;
    background-color: rgba(68, 68, 68, 0.781);
    margin: 18px 0;
    display: grid;
    place-items: center;
    color: #fff;
    position: relative;
    cursor: pointer;
    overflow: visible;
    margin: 0 35px
}
.progress::after{
    content: " ";
    position: absolute;
    width: 70px;
    height: 4px;
    background-color:  rgba(68, 68, 68, 0.781);
    right: 30px;
}
.one::after{
    width: 0;
    height: 0;
}
.circle_ul .circle_il .progress .uil{
    display: none;
}
.circle_ul .circle_il .progress p{
    font-size: 17px;
    padding-top: 10px;
}

/* Active Css  */

ul li .active{
    background-color: #ff4732;
    display: grid;
    place-items: center;
}
li .active::after{
    background-color: #ff4732;
}
ul li .active p{
    display: none;
}
ul li .active .uil{
    font-size: 20px;
    display: flex;
}

/* Responsive Css  */

@media (max-width: 980px) {
    ul{
        flex-direction: column;
    }
    ul li{
        flex-direction: row;
    }
    ul li .progress{
        margin: 0 30px;
    }
    .progress::after{
        width: 5px;
        height: 55px;
        bottom: 30px;
        left: 50%;
        transform: translateX(-50%);
        z-index: -1;
    }
    .one::after{
        height: 0;
    }
    ul li .icon{
        margin: 15px 0;
    }
}


@media (max-width:600px) {
    .head .head_1{
        font-size: 24px;
    }
    .head .head_2{
        font-size: 16px;
    }
}

/* ......................Delivery direction............................................. */

  </style>
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}" /> --}}
<!-- UniIcon CDN Link  -->
<link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<section class="content">
   <div class="py-3  pl-2 border-bottom">
    <a href="">Home</a><span> > </span><a href="">Dashboard</a>
   </div>
   <div>
    <div>
        <p class="" style="font-size:28px;">Client Trade Dashboard <span class="" style="font-size:16px;">statistics, charts, recent events and reports</span></p>
    </div>
    <div class="container">
        <div class="card_wrapper row" style="gap:10px;">
          
            <div class="card col-lg p-3 border text-right bg-primary d-flex justify-content-center aligin-items-center text-white" style="">
              <div>
                <h5>69</h5> 
                <a href="" class="text-white">All Projects</a>
              </div>  
            </div>
         
            <div class="card col-lg p-3 border text-right bg-danger d-flex justify-content-center aligin-items-center" style="">
              <div>
                <h5>3</h5> 
                <a href="" class="text-white">Live Project</a>
              </div>  
            </div>
          
        
            <div class="card col-lg p-3 border text-right bg-info d-flex justify-content-center aligin-items-center" style="">
              <div>
                <h5>61</h5> 
                <a href="" class="text-white">Complete Projects</a>
              </div>  
            </div>
        
          
            <div class="card col-lg p-3 border text-right  d-flex justify-content-center aligin-items-center" style="background-color:purple;">
              <div >
                <h5 class="text-white">2</h5> 
                <a href="" class="text-white">Cancel Projects</a>
              </div>  
            </div>
          
            <div class="card col p-3 border bg-warning-subtle text-right"  style="">
                <div>Gold: <span>$1,957.82 USD</span></div>
              <div>Platinum: <span>$954.38 USD</span></div> 
                <div>Silver: <span>$24.14 USD</span></div>
                <div>Palladium: <span>$1,283.32 USD</span></div>
                <div>Last Update: <span>13jul 05:30 AM IST</span></div>
          </div>
       
      </div>
      <div class='switch-container'>
        <div class='handle one' id='h'></div>
        <div class='opt activated' id='one'>DWT</div>
        <div class='opt' id='two'>GRM</div>
      </div>
      <div class='show overflow-auto' id='tab-one'>
        <table class="table border">
        <thead class="">
          <tr class="">
            <th scope="col " class="border border-1">Prices For</th>
            <th scope="col " class="border border-1">Gold 14K / DWT</th>
            <th scope="col " class="border border-1">Gold 18K / DWT</th>
            <th scope="col " class="border border-1">Gold 10K / DWT</th>
            <th scope="col " class="border border-1">Platinum 90% / DWT</th>
            <th scope="col " class="border border-1">Gold 22K / DWT</th>
            <th scope="col " class="border border-1">Platinum 95% / DWT</th>
            <th scope="col " class="border border-1">Sterling / DWT</th>
            <th scope="col " class="border border-1">Deox / DWT</th>
            <th scope="col " class="border border-1">Palladium / DWT</th>
            <th scope="col " class="border border-1">Rose Gold 18K / DWT</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row" class="border border-1">Tier 1</th>
            <td class="border border-1">$77.75</td>
            <td class="border border-1">$99.97</td>
            <td class="border border-1">$55.54</td>
            <td class="border border-1">$88.64</td>
            <td class="border border-1">$122.18</td>
            <td class="border border-1">$133.29</td>
            <td class="border border-1">$92.24</td>
            <td class="border border-1">$2.22</td>
            <td class="border border-1">$103.29</td>
            <td class="border border-1">$111.07</td>
          </tr>
        </tbody>
      </table>

      <p>
       
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#myDIV" aria-expanded="false" aria-controls="myDIV">
          Other Prices
        </button>
      </p>
      <div id="myDIV" class="collapse w-100"  >
        <div class="card card-body w-100">
          <table class="table border">
            <thead class="">
              <tr class="">
                <th scope="col " class="border border-1">Prices For</th>
                <th scope="col " class="border border-1">Silver Pure / DWT</th>
                <th scope="col " class="border border-1">14k White Gold Palladium / DWT</th>
                <th scope="col " class="border border-1">18k White Gold Palladium / DWT</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="border border-1">Tier 1</th>
                <td class="border border-1">$2.08</td>
                <td class="border border-1">$136.64</td>
                <td class="border border-1">$145.15</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
      <div class='show overflow-auto' id='tab-two'>
        <table class="table border">
          <thead class="">
            <tr class="">
              <th scope="col " class="border border-1">Prices For</th>
              <th scope="col " class="border border-1">Gold 14K / GRM</th>
              <th scope="col " class="border border-1">Gold 18K / GRM</th>
              <th scope="col " class="border border-1">Gold 10K / GRM</th>
              <th scope="col " class="border border-1">Platinum 90% / GRM</th>
              <th scope="col " class="border border-1">Gold 22K / GRM</th>
              <th scope="col " class="border border-1">Gold 24K / GRM</th>
              <th scope="col " class="border border-1">Platinum 95% / GRM</th>
              <th scope="col " class="border border-1">Sterling / GRM</th>
              <th scope="col " class="border border-1">Deox / GRM</th>
              <th scope="col " class="border border-1">Palladium / GRM</th>              
              <th scope="col " class="border border-1">Rose Gold 18K / GRM</th>              
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="border border-1">Tier 1</th>
              <td class="border border-1">$49.98</td>
              <td class="border border-1">$64.27</td>
              <td class="border border-1">$35.70</td>
              <td class="border border-1">$56.98</td>
              <td class="border border-1">$78.54</td>
              <td class="border border-1">$85.69</td>
              <td class="border border-1">$59.30</td>
              <td class="border border-1">$1.43</td>
              <td class="border border-1">$1.34</td>
              <td class="border border-1">$66.40</td>
              <td class="border border-1">$71.40</td>
            </tr>
          </tbody>
        </table>

        <p>
          {{-- <a class="btn btn-primary" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
            Link with href
          </a> --}}
          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
            Other Prices
          </button>
        </p>
        <div class="collapse" id="collapseExample">
          <div class="card card-body">
            <table class="table border">
              <thead class="">
                <tr class="">
                  <th scope="col " class="border border-1">Prices For</th>
                  <th scope="col " class="border border-1">Silver Pure / DWT</th>
                  <th scope="col " class="border border-1">14k White Gold Palladium / DWT</th>
                  <th scope="col " class="border border-1">18k White Gold Palladium / DWT</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="border border-1">Tier 1</th>
                  <td class="border border-1">$2.08</td>
                  <td class="border border-1">$136.64</td>
                  <td class="border border-1">$143.15</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      
   </div>

   <div>
    
   </section>
   

      
       
     <div class="tab_box" style="margin-top: 100px">
     <div class="job_status"><h4>JOB STATUS</h4></div>
     <div class="tab">
      <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Table View</button>
      <button class="tablinks" onclick="openCity(event, 'Paris')">List View</button>
      <button class="tablinks" onclick="openCity(event, 'Tokyo')">New Look</button>
    </div>
    </div>

    <div id="London" class="tabcontent">
      <div class="main">
        <ul class="circle_ul">
            <li class="circle_il">
                {{-- <i class="icon uil uil-capture"></i> --}}
                <div class="progress one">
                    <p>1</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Processing</p>
            </li>
            <li class="circle_il">
                {{-- <i class="icon uil uil-clipboard-notes"></i> --}}
                <div class="progress two">
                    <p>2</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">In Production</p>
            </li>
            <li class="circle_il">
                {{-- <i class="icon uil uil-credit-card"></i> --}}
                <div class="progress three">
                    <p>3</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Wax</p>
            </li>
            <li class="circle_il">
                {{-- <i class="icon uil uil-exchange"></i> --}}
                <div class="progress four">
                    <p>4</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Casting</p>
            </li>
            <li class="circle_il">
                {{-- <i class="icon uil uil-map-marker"></i> --}}
                <div class="progress five">
                    <p>5</p>
                    <i class="uil uil-check"></i>
                </div>
                <p class="text">Stone Setting</p>
            </li>
            <li class="circle_il">
              {{-- <i class="icon uil uil-map-marker"></i> --}}
              <div class="progress six">
                  <p>6</p>
                  <i class="uil uil-check"></i>
              </div>
              <p class="text">Polishing</p>
          </li>

          <li class="circle_il">
            {{-- <i class="icon uil uil-map-marker"></i> --}}
            <div class="progress seven">
                <p>7</p>
                <i class="uil uil-check"></i>
            </div>
            <p class="text">Quality Control</p>
        </li>

        <li class="circle_il">
          {{-- <i class="icon uil uil-map-marker"></i> --}}
          <div class="progress eight">
              <p>8</p>
              <i class="uil uil-check"></i>
          </div>
          <p class="text">Shipped</p>
      </li>
        </ul>

    </div>

      <div class="row ">
        <div class="col">
          <img src="{{asset('images/project_files_image_003.jpg')}}" alt="" style="width:100px; height:100px; ">
        </div>
        <div class="col">
          <p>
            <span>Project no:</span>
            <a href="{{asset('master/project-details')}}">J48338</a>
          </p>
        </div>
        <div class="col">
          <p>
            <span>Title :</span>
            8547 JAZZ CHAWLA - STB ARRHA
          </p>
        </div>
        <div class="col">
          <p>
            <span>Due By :</span>
            06-14-23
          </p>
        </div>
        <div class="col">
          <p>
            <span>PO :</span>
            8547 JAZZ CHAWLA - STB FRISCO ARHAMEstimate  
          </p>
        </div>
        <div class="col">
          <p>
            <span>Price :</span>
            1850.00
          </p>
        </div>
        <div class="row">
          <div class="col">

          </div>
          <div class="col">
            <p>
              <span>Job Description :</span>
              PLEASE REMAKE LINK PROVIDED: https://www.kay.com/neil-lane-ddiamond-engagement-ring-216-ct-tw-cushioncut-14k-white-gold/p/V-940233911 <span id="dots">...</span><span id="more">FOR A CUSHION CENTER (7.07 x 7.04 x 4.54 mm)PLEASE USE 14K WHITE AND LABGROWN F/VS MELEE FINGER SIZE 9.75 RING IS DUE 4 WEEKS FROM 5/15/23. PLEASE REACH OUT TO ARHAM FOR QUESTIONS PLEASE SEND QUOTE/CAD/WAX. The diamond in the link sits high, the customer has requested that the diamond sits as low as possible.</span> 
              <a href="#" onclick="myFunction()" id="myBtn">Read more</a>
            </p> 
          </div>
          <div class="col">
            <div class="row">
              <div class="col">
                <span>Tracking No. :</span>
              </div>
              <div class="col">
                  <span>Received Items:</span>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>


    </div>
    
    <div id="Paris" class="tabcontent">
      <div class="container_job">
        <h5>In Production</h5>
        <div class="paid">
          <h6>J48338</h6>
          <span><i class="fa-solid fa-clipboard"></i> 8547JA...</span>
        </div>
      </div> 

      <div class="container_job">
        <h5>Casting</h5>
        <div class="paid">
          <h6>J48338</h6>
          <span><i class="fa-solid fa-clipboard"></i> 8547JA...</span>
        </div>
      </div> 

      <div class="container_job">
        <h5>Customer Showing Wax</h5>
        <div class="paid">
          <h6>J48338</h6>
          <span><i class="fa-solid fa-clipboard"></i> 8547JA...</span>
        </div>
      </div> 
    </div>
    
    <div id="Tokyo" class="tabcontent ">
      <div style="Display:flex;" class="overflow-auto">
        <div class="container_job1">
          <h5>In Production</h5>
          <div class="paid1">
            <h6>J48338</h6>
            <span><i class="fa-solid fa-clipboard"></i> 8547JA...</span>
          </div>
        </div> 
  
        <div class="container_job1">
          <h5>Casting</h5>
          <div class="paid1">
            <h6>J48338</h6>
            <span><i class="fa-solid fa-clipboard"></i> 8547JA...</span>
          </div>
        </div> 
  
        <div class="container_job1">
          <h5>Customer Showing Wax</h5>
          <div class="paid1">
            <h6>J48338</h6>
            <span><i class="fa-solid fa-clipboard"></i> 8547JA...</span>
          </div>
        </div> 
      </div>
    </div>
    


{{-- <script>
    var xValues = [50,60,70,80,90,100,110,120,130,140,150];
    var yValues = [7,8,8,9,9,9,10,11,14,14,15];
    
    new Chart("myChart", {
      type: "line",
      data: {
        labels: xValues,
        datasets: [{
          fill: false,
          lineTension: 0,
          backgroundColor: "rgba(0,0,255,1.0)",
          borderColor: "rgba(0,0,255,0.1)",
          data: yValues
        }]
      },
      options: {
        legend: {display: false},
        scales: {
          yAxes: [{ticks: {min: 6, max:16}}],
        }
      }
    });
</script> --}}
<script>
  function myFunction() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  </script>



<script>
  var hndl = document.getElementById("h");
var tab1 = document.getElementById("tab-one");
var tab2 = document.getElementById("tab-two");
var opt1 = document.getElementById("one");
var opt2 = document.getElementById("two");

opt1.onclick = function() {
  opt2.classList.remove("activated");
  opt1.classList.add("activated");
  hndl.classList.remove("two");;
  hndl.classList.add("one")
  tab2.classList.add("hide");
  tab1.classList.remove("hide");
};

opt2.onclick = function() {
  opt1.classList.remove("activated");
  opt2.classList.add("activated");
  hndl.classList.add("one");
  hndl.classList.add("two");
  tab1.classList.add("hide");
  tab2.classList.remove("hide");
};
</script>

<span class="toggle-handle btn btn-light btn-sm"></span>

<script>
  function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }
  
  // Get the element with id="defaultOpen" and click on it
  document.getElementById("defaultOpen").click();
  </script>


{{-- <-----------  JavaScript Code Start  ----------> --}}
  <script>
const one = document.querySelector(".one");
const two = document.querySelector(".two");
const three = document.querySelector(".three");
const four = document.querySelector(".four");
const five = document.querySelector(".five");
const six = document.querySelector(".six");
const seven = document.querySelector(".seven");
const eight = document.querySelector(".eight");

one.onclick = function() {
    one.classList.add("active");
    two.classList.remove("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
    six.classList.remove("active");
    seven.classList.remove("active");
    eight.classList.remove("active");
}

two.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.remove("active");
    four.classList.remove("active");
    five.classList.remove("active");
    six.classList.remove("active");
    seven.classList.remove("active");
    eight.classList.remove("active");
}
three.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.remove("active");
    five.classList.remove("active");
    six.classList.remove("active");
    seven.classList.remove("active");
    eight.classList.remove("active");
}
four.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.remove("active");
    six.classList.remove("active");
    seven.classList.remove("active");
    eight.classList.remove("active");
}
five.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.add("active");
    six.classList.add("active");
    seven.classList.add("active");
    eight.classList.add("active");
}
six.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.add("active");
    six.classList.add("active");
    seven.classList.add("active");
    eight.classList.add("active");
}
seven.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.add("active");
    six.classList.add("active");
    seven.classList.add("active");
    eight.classList.add("active");
}
eight.onclick = function() {
    one.classList.add("active");
    two.classList.add("active");
    three.classList.add("active");
    four.classList.add("active");
    five.classList.add("active");
    six.classList.add("active");
    seven.classList.add("active");
    eight.classList.add("active");
}
  </script>
{{-- <-----------  JavaScript Code Start  ----------> --}}
<script>
  function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "Read more"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "Read less"; 
      moreText.style.display = "inline";
    }
  }
  </script>

 
@stop