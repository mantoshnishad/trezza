<style>
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
</style>
<div>
    <div class="">
        {{-- <h3>Add Associate</h3> --}}
        <div class="border p-3 m-3">
            <div class="border-bottom mx-2 py-2">
                <h4 style="font-weight: 900;"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                    <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492zM5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0z"/>
                    <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52l-.094-.319zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115l.094-.319z"/>
                  </svg></span>PROJECT MESSAGES</h4>
            </div>

            <div class="from-group d-flex justify-content-between align-items-center mt-3 px-3">
                <div class="w-25">
                    <div class="form-group ">
                        <div class="d-flex justify-content-between form-check">
                            <div class="">
                            <input class=" form-check-input mr-5 p-2" type="checkbox" id="gridCheck">
                        </div>
                        <div class="">
                            <label class=" " >
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                  </svg>
                            </label>
                        </div>
                        <div class="">
                            <label class="" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-envelope-open" viewBox="0 0 16 16">
                                    <path d="M8.47 1.318a1 1 0 0 0-.94 0l-6 3.2A1 1 0 0 0 1 5.4v.817l5.75 3.45L8 8.917l1.25.75L15 6.217V5.4a1 1 0 0 0-.53-.882l-6-3.2ZM15 7.383l-4.778 2.867L15 13.117V7.383Zm-.035 6.88L8 10.082l-6.965 4.18A1 1 0 0 0 2 15h12a1 1 0 0 0 .965-.738ZM1 13.116l4.778-2.867L1 7.383v5.734ZM7.059.435a2 2 0 0 1 1.882 0l6 3.2A2 2 0 0 1 16 5.4V14a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V5.4a2 2 0 0 1 1.059-1.765l6-3.2Z"/>
                                  </svg>
                            </label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="w-25">
                    {{-- <label for="">Search:</label> --}}
                    <input type="text" name="" id="" class="w-100 p-1" placeholder="serach here">
                </div>
            </div>
            <div class="specification1" >
                <div class="tab_box" style="margin-top: 50px">
                    {{-- <div class="job_status"><h4>JOB STATUS</h4></div> --}}
                    <div class="tab">
                     <button class="tablinks" onclick="openCity(event, 'Message')" id="defaultOpen">Message</button>
                     <button class="tablinks" onclick="openCity(event, 'Replies')">Replies</button>
                     {{-- <button class="tablinks" onclick="openCity(event, 'Tokyo')">New Look</button> --}}
                   </div>
                   </div>


                   <div id="Message" class="tabcontent">
                    
                    <div class="border m-4 p-2  shadow-lg">
                        <p>no result
                        </p>
                    </div>
                        </div>
                    </div>

                    
                    <div id="Replies" class="tabcontent">
                        <div class="border m-4 p-2 shadow-lg">
                            <p>no result
                            </p>
                        </div>  
                      </div>

    
    </div>
      </div>
</div>

  {{-- ............................Tab button......................... --}}
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
    {{-- ............................Tab button......................... --}}
