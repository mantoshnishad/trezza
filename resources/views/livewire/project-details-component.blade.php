<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <style>
        /* .....................checkbox tab...................... */
        article{
  /* background: #ccc;
  height: 200px; */
  display: none;
}
article.on{
  display: block;
}
 /* .....................checkbox tab...................... */
        /* .........................tab button................. */
        /* Style the tab */
        .tab {
            overflow: hidden;
            background-color: #f1f1f1;
            margin-top: 20px;
            /* border: 1px solid grey; */
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px 10px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
            border: 1px solid grey;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        /* .........................tab button................. */

        /* .........................tab button................. */
        /* Style the tab */
        .tabcheck {
            overflow: hidden;
            display: flex;
            gap: 20px;
            background-color: #f1f1f1;
            margin-top: 20px;
            padding: 0px 20px;
            /* border: 1px solid grey; */
        }

        /* Style the buttons inside the tab */
        .tabcheck div {
            background-color: inherit;
            /* display: flex; */
            border: none;
            outline: none;
            cursor: pointer;
            padding: 10px 10px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        /* .tabcheck div:hover {
            background-color: #ddd;
        } */

        /* Create an active/current tablink class */
        /* .tabcheck div.active {
            background-color: #ccc;
            border: 1px solid grey;
        } */

        /* Style the tab content */
        .tablinkscheck {
            /* display: none; */
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        /* .........................tab button................. */

        /* ......................Delivery direction............................................. */
        .main1 {
            display: flex;
            /* margin-top: 50px; */
            ;
        }

        .main1 .main_li {
            list-style: none;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        /* ul li .icon{
      font-size: 35px;
      color: #ff4732;
      margin: 0 40px;
  } */

        .main1 .main_li .text {
            font-size: 14px;
            font-weight: 600;
            color: #030000;
            padding-top: 10px;

        }

        /* Progress Div Css  */

        .main1 .main_li .progress {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: rgba(68, 68, 68, 0.781);
            margin: 18px 0;
            display: grid;
            place-items: center;
            color: #fff;
            position: relative;
            cursor: pointer;
            overflow: visible;
            margin: 0 30px
        }

        .progress::after {
            content: " ";
            position: absolute;
            width: 60px;
            height: 4px;
            background-color: rgba(68, 68, 68, 0.781);
            right: 50px;
        }

        .one::after {
            width: 0;
            height: 0;
        }

        .main1 .main_li .progress .uil {
            display: none;
        }

        .main1 .main_li .progress p {
            font-size: 17px;
            padding-top: 10px;
        }

        /* Active Css  */

        .main1 .main_li .active {
            background-color: #ff4732;
            display: grid;
            place-items: center;
        }

        .main_li .active::after {
            background-color: #ff4732;
        }

        .main1 .main_li .active p {
            display: none;
        }

        .main1 .main_li .active .uil {
            font-size: 20px;
            display: flex;
        }

        /* Responsive Css  */

        @media (max-width: 980px) {
            .main1 {
                flex-direction: column;
            }

            .main1 .main_li {
                flex-direction: row;
            }

            .main1 .main_li .progress {
                margin: 0 30px;
            }

            .progress::after {
                width: 5px;
                height: 55px;
                bottom: 30px;
                left: 50%;
                transform: translateX(-50%);
                z-index: -1;
            }

            .one::after {
                height: 0;
            }

            .main1 .main_li .icon {
                margin: 15px 0;
            }
        }


        /* @media (max-width:600px) {
      .head .head_1{
          font-size: 24px;
      }
      .head .head_2{
          font-size: 16px;
      }
  } */

        /* ......................Delivery direction............................................. */
    </style>

    <div class="py-2  pl-2  border-bottom">
        <a href="">Home</a><span> > </span><a href="">Project</a><span> > </span><a href="">Project Details</a>
    </div>

    <div class="py-4 from-group">
        <h3 class="font-weight-bold">Add Project - J48338 <span class="text-md p-1 border rounded-3 bg-danger "
                style="border-radius: 10px; ">Duplicate <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                    fill="currentColor" class="bi bi-journals" viewBox="0 0 16 16">
                    <path
                        d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2 2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v9a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2z" />
                    <path
                        d="M1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 2.5v.5H.5a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1H2v-.5a.5.5 0 0 0-1 0z" />
                </svg></span></h3>

    </div>

    <div class="container border p-3">
        <div class="from-group d-flex  justify-content-between align-items-center border-bottom mb-3" style="gap-40px;">
            <div class="d-flex w-100 align-items-center" style="display:flex; gap:10px;">
                <h6 class="font-weight-bold "><span><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"
                            fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                            <path
                                d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z" />
                        </svg></span> PO -<br> 8547 JAZZ <br>CHAWLA - STB FRISCO <br> ARHAM</h6>
                <h6 class="font-weight-bold"><span>CLIENT :</span>
                    MARQUISE JEWELERS (RAY PATEL)</h6>
            </div>

            <div class="d-flex w-100 justify-content-end " style="display:flex; gap:10px;">
                <h6 class="font-weight-bold"><span>
                        ADDED BY -</span>RAY PATEL</h6>
                <h6 class="font-weight-bold"><span>SALES REP -</span>
                    LILY</h6>
                <h6 class="font-weight-bold">STATUS - <span
                        class="bg-danger border rounded-lg rounded-3 px-2">LIVE</span></h6>
            </div>
            <div>

            </div>
        </div>
        {{-- <div>
            <div class="form-group">
                <div class="col-md-12" style="margin-top:20px">
                    <label class="bold">Disposition</label>
                </div>
            </div>
        </div> --}}

        <div>
            <div class="form-group">
                <div class="col-md-12" style="margin-top:20px">
                    <label class="bold">Disposition</label>
                </div>
            </div>
            <div class="main">
                <ul class="main1">
                    <li class="main_li">
                        {{-- <i class="icon uil uil-capture"></i> --}}
                        <div class="progress one">
                            <p>1</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Processing</p>
                    </li>
                    <li class="main_li">
                        {{-- <i class="icon uil uil-clipboard-notes"></i> --}}
                        <div class="progress two">
                            <p>2</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">In Production</p>
                    </li>
                    <li class="main_li">
                        {{-- <i class="icon uil uil-credit-card"></i> --}}
                        <div class="progress three">
                            <p>3</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Wax</p>
                    </li>
                    <li class="main_li">
                        {{-- <i class="icon uil uil-exchange"></i> --}}
                        <div class="progress four">
                            <p>4</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Casting</p>
                    </li>
                    <li class="main_li">
                        {{-- <i class="icon uil uil-map-marker"></i> --}}
                        <div class="progress five">
                            <p>5</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Stone Setting</p>
                    </li>
                    <li class="main_li">
                        {{-- <i class="icon uil uil-map-marker"></i> --}}
                        <div class="progress six">
                            <p>6</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Polishing</p>
                    </li>

                    <li class="main_li">
                        {{-- <i class="icon uil uil-map-marker"></i> --}}
                        <div class="progress seven">
                            <p>7</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Quality Control</p>
                    </li>

                    <li class="main_li">
                        {{-- <i class="icon uil uil-map-marker"></i> --}}
                        <div class="progress eight">
                            <p>8</p>
                            <i class="uil uil-check"></i>
                        </div>
                        <p class="text">Shipped</p>
                    </li>
                </ul>

            </div>
        </div>

        <form>

            <div class="form-group">
                <label for="name">Created At</label>
                <input type="date" class="form-control" id="name" placeholder="">
            </div>

            {{-- <div class="form-group">
                <label for="name">Project Status</label>
                <input type="date" class="form-control" id="name" placeholder="">
            </div> --}}

            <div class="form-group">
                <label for="name">Project Status</label>
                <select class="form-select w-100 py-2" aria-label="Default select example">
                    <option selected>live</option>
                    {{-- <option value="1">High Priority</option>
                    <option value="2">Critical</option> --}}
                </select>
            </div>

            <div class="form-group">
                <label for="name">Project Priority</label>
                <select class="form-select w-100 py-2" aria-label="Default select example">
                    <option selected>Standard Priority</option>
                    {{-- <option value="1">High Priority</option>
                    <option value="2">Critical</option> --}}
                </select>
            </div>

            <div class="row form-group d-flex  aligin-items-center ">
                <div class="col-lg-3 form-group position-relative">
                    <label for="name">Project Deadline</label>
                    <input type="date" class=" w-100" id="name" placeholder="06/14/2023">
                </div>
                <span class="position-absolute text-xs rounded-pill px-2 bg-primary" style="left:550px;">
                    Deadline history
                </span>
            </div>

            <div class="form-row">
                <div class="col-md-3">
                    <label for="name">Budget</label>
                    <input type="text" class="form-control form-field pin_code_select" name="drop_ship[postal_code]"
                        placeholder="Postal Code">
                </div>
                <div class="col-md-3">
                    <label for="name" class="position-relative">Recieved Price</label>
                    <span class="position-absolute text-xs rounded-pill px-2 bg-secondary" style="left:110px;">
                        Deadline history
                    </span>
                    <input type="text" class="form-control form-field pin_code_select" name="drop_ship[postal_code]"
                        placeholder="Postal Code">

                </div>
                <div class="col-md-3">
                    <label for="name">Estimateed price status</label>
                    <select class="form-control city_select" name="drop_ship[city]" style="width: 100%">
                        <option value=" " selected>Change Estimateed price status</option>
                        <option value=" ">Approve</option>
                        <option value=" ">Revise</option>
                        <option value=" ">Decline</option>
                    </select>
                </div>
            </div>

            <div class="row form-group mt-3">
                <div class="col">
                    <label for="name">Project Po</label>
                    <input type="text" class="form-control" placeholder="PO -8547 JAZZ CHAWLA - STB FRISCO ARHAM">
                </div>
                <div class="col">
                    <label for="name">Project Quantity</label>
                    <input type="number" class="form-control" placeholder="0">
                </div>
            </div>

            <div class="col-6">
                <label for="name">Project Tracking</label>
                <input type="text" class="form-control" placeholder="Tracking#">
            </div>
            <div class="form-group mt-3">
                <label for="name">Project Title</label>
                <div class="">
                    <input id="job_title" name="project_details[title]" type="text" class="form-control"
                        placeholder="8547 JAZZ CHAWLA - STB ARHAM" maxlength="30">
                </div>
                <div class="text-right">
                    <span><span id="job_title_cn"></span>/30</span>
                    <a id="sample_editable_1_new" data-toggle="modal" data-target="#revision_history"><i
                            class="fas fa-info-circle"></i></a>
                </div>
            </div>
            {{-- <div class="row form-group">
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="PO -8547 JAZZ CHAWLA - STB FRISCO ARHAM">
                </div>
                <div class="col">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" placeholder="Qunatity">
                </div>
            </div> --}}
            <div class="row form-group">
                <div class="col form-floating form-group">
                    <label for="floatingTextarea2">Comments</label>
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                        style="height: 100px"></textarea>
                </div>

                <div class="col form-group">
                    <label for="floatingTextarea2">Description History</label>
                    <div class="overflow-auto" style="height: 100px">
                        <div class="d-flex">
                            <div><a href="">PLEASE REMAKE LINK PROVIDED:
                                    https://www.kay.com/neil-lane-diamond-engagement-ring-216-ct-tw-cushioncut-14k-white-gold/p/V-940233911
                                    FOR A CUSHION CENTER (7.07…</a></div>
                            <div><span>2 months ago</span></div>
                            <div><span>Waiting for approval</span></div>
                        </div>
                        <div class="d-flex">
                            <div><a href=""> PLEASE REMAKE LINK PROVIDED:
                                    https://www.kay.com/neil-lane-diamond-engagement-ring-216-ct-tw-cushioncut-14k-white-gold/p/V-940233911
                                    FOR A CUSHION CENTER (7.07…</a></div>
                            <div><span>2 months ago</span></div>
                            <div><span>Waiting for approval</span></div>
                        </div>
                        <div class="d-flex">
                            <div><a href=""> PLEASE REMAKE LINK PROVIDED:
                                    https://www.kay.com/neil-lane-diamond-engagement-ring-216-ct-tw-cushioncut-14k-white-gold/p/V-940233911
                                    FOR A CUSHION CENTER (7.07…</a></div>
                            <div><span>2 months ago</span></div>
                            <div><span>Waiting for approval</span></div>
                        </div>
                        <div class="d-flex">
                            <div><a href=""> PLEASE REMAKE LINK PROVIDED:
                                    https://www.kay.com/neil-lane-diamond-engagement-ring-216-ct-tw-cushioncut-14k-white-gold/p/V-940233911
                                    FOR A CUSHION CENTER (7.07…</a></div>
                            <div><span>2 months ago</span></div>
                            <div><span>Waiting for approval</span></div>
                        </div>

                    </div>
                </div>
            </div>

            <button class="btn btn-danger px-4 rounded-pill fs-5    ">Save</button>
        </form>
        {{-- .............................Specification........................... --}}
        <div class="border p-4 my-3 bg-dark-subtle">
            <div class="d-flex justify-content-between align-items-center">
                <div><button class="specification">Specification</button></div>
                <div><button class="add_specification">Add Specification</button></div>
            </div>

            <div class="add_specification1" style="display: none;">
                <div class="row border-bottom pb-3">
                    <div class="col-lg-6 py-2">
                        <label for="">Finish</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">High Polish</option>
                        </select>
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="">Purity / Color / Metal</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">14k White Gold</option>
                        </select>
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="">Purity / Color / Metal</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">9.75</option>
                        </select>
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="">Purity / Color / Metal</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>
                    <div class="col-lg-6 py-2">
                        <label for="">Plating</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-12 my-3">
                        <input type="text" name="" id="" placeholder="Custom Specificaion" class="w-100 p-2">
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">QC File</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">No</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">3D Printing Quality</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Wax Only</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Casting Only</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Clarity</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Supply Center</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Sending my own</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Set Center</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">MCC Make Cad</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Provide File</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>

                    <div class="col-lg-6 py-2">
                        <label for="">Realistic Rendering</label>
                        <select name="" id="" class="w-100 p-2">
                            <option value="" class="">Choose Value</option>
                        </select>
                    </div>
                </div>
                <div class="my-3 text-right">
                    <button class="py-1 px-3 rounded-pill text-white" style="background-color: rgb(153,27,67);">Save
                        Specification</button>
                </div>
            </div>
            <div class="specification1" style="display: none;">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'specification')">Specification</button>
                    <button class="tablinks" onclick="openCity(event, 'Specification_History')">Specification
                        History</button>
                </div>
                <div id="specification" class="tabcontent">
                    <div class="row ">
                        <div class="col">
                            <ul>
                                <li style=""></i><span>Ring Size : </span>9.75</li>
                                <li><span>Purity / Color / Metal: </span>14k White Gold</li>
                                <li><span>QC File : </span>No</li>
                                <li><span>3D Printing Quapty :</span></li>
                                <li><span>Plating : </span></li>
                                <li><span>Finish : </span>High Popsh</li>
                                <li><span>Custom :</span></li>
                                <li><span>Reapstic Rendering : </span></li>
                                <li><span>Customer's Metal : </span></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><span>Ring Size : </span>9.75</li>
                                <li><span>Purity / Color / Metal: </span>14k White Gold</li>
                                <li><span>QC File : </span>No</li>
                                <li><span>3D Printing Quapty :</span></li>
                                <li><span>Plating : </span></li>
                                <li><span>Finish : </span>High Popsh</li>
                                <li><span>Custom :</span></li>
                                <li><span>Reapstic Rendering : </span></li>
                                <li><span>Customer's Metal : </span></li>
                            </ul>
                        </div>
                    </div>

                </div>

                <div id="Specification_History" class="tabcontent">
                    <tbody style="width:100%;">
                        <table style="width:100%;" class="table-striped">
                            <tr class="border-top border-bottom " style="">
                                <td class="my-2 py-2">Finish changed to High Polish</td>
                                <td class="my-2 py-2">Waiting for approval</td>
                                <td class="my-2 py-2">2 months ago</td>
                            </tr>

                            <tr class="border-top border-bottom">
                                <td class="my-2 py-2">Purity changed to 14k White Gold</td>
                                <td class="my-2 py-2">Waiting for approval</td>
                                <td class="my-2 py-2">2 months ago</td>
                            </tr>
                            <tr class="border-top border-bottom">
                                <td class="my-2 py-2">Supply_diamonds changed to Lab Grown</td>
                                <td class="my-2 py-2">Waiting for approval</td>
                                <td class="my-2 py-2">2 months ago</td>
                            </tr>

                            <tr class="border-top border-bottom">
                                <td class="my-2 py-2">Clarity changed to VS</td>
                                <td class="my-2 py-2">Waiting for approval</td>
                                <td class="my-2 py-2">2 months ago</td>
                            </tr>

                            <tr class="border-top border-bottom">
                                <td class="my-2 py-2">Make_cad changed to Yes</td>
                                <td class="my-2 py-2">Waiting for approval</td>
                                <td class="my-2 py-2">2 months ago</td>
                            </tr>
                        </table>
                    </tbody>
                </div>
            </div>

        </div>
        {{-- .............................Specification........................... --}}


        {{-- .............................message........................... --}}

        <div class="border p-4 my-3 bg-dark-subtle">
            <div class="d-flex justify-content-between align-items-center">
                <div><button class="Message">Message</button></div>
                <div><button class="">Send Message</button></div>
            </div>
        </div>
        <div class="Message1" style="display: none;">
            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'New')">New</button>
                <button class="tablinks" onclick="openCity(event, 'Old')">old</button>
            </div>
            <div id="New" class="tabcontent overflow-auto" style="height: 300px;">
                <table class="w-100 ">
                    <tbody>
                        <thead>
                            <tr class="row border-bottom">
                                <th class="col text-left py-2">Msg By</th>
                                <th class="col text-left py-2">Msg To</th>
                                <th class="col-5 text-left py-2">Msg</th>
                                <th class="col-2 text-left py-2">Messaged At</th>
                                <th class="col text-left py-2">See/Unseen</th>
                            </tr>
                        </thead>
                        <tr class="row border-top border-bottom">
                            <td class="col text-left py-2">Tony Ma</td>
                            <td class="col text-left py-2">Me</td>
                            <td class="col-5 text-left py-2">Hi Ray Patel, I have sent you file approval request for
                                1689000419_48338.stl.</td>
                            <td class="col-2 text-left py-2">338.stl. 8:20 PM 10th July,2023</td>
                            <td class="col text-left py-2">Unseen</td>
                        </tr>

                        <tr class="row border-top border-bottom">
                            <td class="col text-left py-2">Tony Ma</td>
                            <td class="col text-left py-2">Me</td>
                            <td class="col-5 text-left py-2">Hi Ray Patel, I have sent you file approval request for
                                1689000419_48338.stl.</td>
                            <td class="col-2 text-left py-2">338.stl. 8:20 PM 10th July,2023</td>
                            <td class="col text-left text-success py-2">seen</td>
                        </tr>

                        <tr class="row border-top border-bottom">
                            <td class="col text-left py-2">Tony Ma</td>
                            <td class="col text-left py-2">Me</td>
                            <td class="col-5 text-left py-2">Hi Ray Patel, I have sent you file approval request for
                                1689000419_48338.stl.</td>
                            <td class="col-2 text-left py-2">338.stl. 8:20 PM 10th July,2023</td>
                            <td class="col text-left py-2">Unseen</td>
                        </tr>

                        <tr class="row border-top border-bottom">
                            <td class="col text-left">Tony Ma</td>
                            <td class="col text-left">Me</td>
                            <td class="col-5 text-left">Hi Ray Patel, I have sent you file approval request for
                                1689000419_48338.stl.</td>
                            <td class="col-2 text-left">338.stl. 8:20 PM 10th July,2023</td>
                            <td class="col text-left">Unseen</td>
                        </tr>

                        <tr class="row border-top border-bottom">
                            <td class="col text-left">Tony Ma</td>
                            <td class="col text-left">Me</td>
                            <td class="col-5 text-left">Hi Ray Patel, I have sent you file approval request for
                                1689000419_48338.stl.</td>
                            <td class="col-2 text-left">338.stl. 8:20 PM 10th July,2023</td>
                            <td class="col text-left">Unseen</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="Old" class="tabcontent overflow-auto">
                <table class="w-100 ">
                    <tbody>
                        <thead>
                            <tr class="row   border-bottom">
                                <th class="col text-left py-2">Msg By</th>
                                <th class="col text-left py-2">Msg To</th>
                                <th class="col text-left py-2">Msg</th>
                                <th class="col text-left py-2">Reply</th>
                                <th class="col-4 text-left py-2">Messaged At</th>
                            </tr>
                            <tr class="row text-center">
                                <td class="col py-2"></td>
                                <td class="col py-2"></td>
                                <td class="col py-2">empty</td>
                                <td class="col py-2"></td>
                                <td class="col-4 py-2"></td>
                            </tr>
                        </thead>

                    </tbody>
                </table>
            </div>
        </div>
        {{-- .............................message........................... --}}

        {{-- .............................Specification........................... --}}

        <div class="border p-4 my-3 bg-dark-subtle">
            <div class="d-flex justify-content-between align-items-center">
                <div><button class="Project">Project File</button></div>
                <div>
                    <button class="rounded-pill" style="background-color: rgb(153,27,67);" type="button"
                        data-bs-toggle="modal" data-bs-target="#exampleModal">Access File</button>
                    <button class="Upload">Upload File</button>
                </div>
            </div>
        </div>

        <!-- Button trigger modal -->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload file</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <div class=" overflow-auto">
                                {{-- <div class=" mx-2 py-2">
                                    <h5 class="text-center rounded-pill text-white py-1"
                                        style="font-weight: 500; background-color: rgb(153,27,67); width:120px;">Add
                                        Job<span> + </span></h5>
                                </div> --}}

                                <div class="from-group d-flex justify-content-between align-items-center px-3">
                                    <div class="">
                                        <select name="" id="" style="width: 100px;" class="py-1">
                                            <option value="" selected>10</option>
                                            <option value="">25</option>
                                            <option value="">50</option>
                                            <option value="">10</option>
                                        </select>
                                        <label for="">records</label>
                                    </div>
                                    <div>
                                        <label for="">Search:</label>
                                        <input type="text" name="" id="">
                                    </div>
                                </div>

                                <div class="text-right my-3" style="margin-right: 50px;">
                                    <button class="px-2 py-1 mr-2" style="background-color: rgb(153,27,67);">Upload Cad
                                        File</button>
                                    <button class="px-2 py-1 " style="background-color: rgb(153,27,67);">Upload Pic
                                        File</button>
                                </div>

                                <div class="text-center py-3">
                                    <p>No Recod</p>
                                </div>

                                {{-- <div class="form-group ">
                                    <div class="border p-4 m-4 form-group">
                                        <tbody class="w-100 border">
                                            <table class="w-100 border">
                                                <tr class="border text-center">
                                                    <th class="border">#</th>
                                                    <th class="border">Job</th>
                                                    <th class="border">Po</th>
                                                    <th class="border">Client</th>
                                                    <th class="border">Added By</th>
                                                    <th class="border">Assignee</th>
                                                    <th class="border">Disposition</th>
                                                    <th class="border">ETA</th>
                                                    <th class="border">Deadline</th>
                                                    <th class="border">Type</th>
                                                    <th class="border">Queue</th>
                                                </tr>
                                                <tr class="text-center py-4">
                                                    <td class="border text-center py-4">1</td>
                                                    <td class="border text-center py-4">8725-PHOENIX-ARHAM-STB FRISCO -
                                                        Copy(1)</td>
                                                    <td class="border text-center py-4">8725-PHOENIX HARRIS-ARHAM-STB
                                                        FRISCO</td>
                                                    <td class="border text-center py-4">Marquise Jewelers (Ray Patel)
                                                    </td>
                                                    <td class="border text-center py-4">Gabriel</td>
                                                    <td class="border text-center py-4"></td>
                                                    <td class="border text-center py-4">Casting</td>
                                                    <td class="border text-center py-4">+ 1 Day</td>
                                                    <td class="border text-center py-4">2023-07-19</td>
                                                    <td class="border text-center py-4"><span
                                                            class="bg-info rounded-pill px-2">Live</span></td>
                                                    <td class="border text-center py-4"><span
                                                            class="bg-success rounded-pill px-2">J49331</span></td>
                                                </tr>
                                            </table>
                                        </tbody>


                                    </div>
                                </div> --}}
                                <div class="d-flex justify-content-between align-items-center my-2">
                                    <div>
                                        <p>Showing 0 to 0 of 0 entries</p>
                                    </div>


                                    <div>
                                        <nav aria-label="Page navigation example">
                                            <ul class="pagination">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                    </div>
                </div>
            </div>
        </div>
        {{-- ........................Upload..................... --}}
        <div class="Upload1" style="display: None;">
            <div class="form-group">
                <h5>Cad</h5>
                <div class="border form-group">
                    <div class="border m-4 d-flex align-items-center justify-content-center"
                        style="width:95%; height:200px;">
                        <h2>Drag & Drop Files here</h2>
                    </div>
                </div>
                <div class="border form-group">
                    <input id="file-1" type="file" multiple class="file w-100 text-right" name="file[]">
                </div>
                <div class="form-group">
                    <h6 class="text-center">Or</h6>
                    <div class=" d-flex align-items-center justify-content-center">
                        <button><span class="mr-2"><i class="fa-brands fa-dropbox"></i></span>Choose From
                            Dropbox</button>
                    </div>
                </div>
            </div>

            <div class="form-group mt-2">
                <h5>Pic</h5>
                <div class="border form-group">

                    <div class="border m-4 d-flex align-items-center justify-content-center"
                        style="width:95%; height:200px;">
                        <h2>Drag & Drop Files here</h2>
                    </div>
                </div>
                <div class="border form-group">
                    <input id="file-1" type="file" multiple class="file w-100 text-right" name="file[]">
                </div>
                <div class="form-group">
                    <h6 class="text-center">Or</h6>
                    <div class=" d-flex align-items-center justify-content-center">
                        <button><span class="mr-2"><i class="fa-brands fa-dropbox"></i></span>Choose From
                            Dropbox</button>
                    </div>
                </div>
            </div>
        </div>

        {{-- ..........................project............... --}}
        <div class="Project1" style=" display:none;">
            <div class="from-group row border p-2 my-3 overflow-auto " style="gap:5px;">
                <div class="col-lg-1"><span><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path
                                d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                        </svg></span></div>
                <div class="col-lg-6">
                    <div class="d-flex" style="gap:5px;">
                        <div><span class="bg-secondary rounded-pill px-2">1689000419_48338.stl</span></div>
                        <div><span class="bg-secondary rounded-pill px-2">cad</span></div>
                        <div><span class="bg-secondary rounded-pill px-2">10 Jul, 2023 08:17 PM</span></div>
                        <div><span class="bg-secondary rounded-pill px-2">Approval request sent</span></div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex" style="gap:5px;">
                        <div><button class="border-info text-info" style="font-size: 16px; font-weight:700;"><span
                                    class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg><span>Approve</button></div>
                        <div><button class="border-warning text-warning" style="font-size: 16px; font-weight:700;"><span
                                    class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                        <path
                                            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                    </svg></span>Resive</button></div>
                        <div><button class="border-danger text-danger" style="font-size: 16px; font-weight:700;"><span
                                    class=" pr-2">X</span>Reject</button></div>
                    </div>
                </div>
                <div class="col">
                    <div class=" d-flex" style="gap:5px;">
                        <div><button class=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                    <path
                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                                </svg></button></div>
                        <div><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg></button></div>
                        <div><button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg></button></div>
                    </div>
                </div>
            </div>

            <div class="from-group row border p-2 my-3 overflow-auto " style="gap:5px;">
                <div class="col-lg-1"><span><svg xmlns="http://www.w3.org/2000/svg" width="60" height="60"
                            fill="currentColor" class="bi bi-file-text" viewBox="0 0 16 16">
                            <path
                                d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                        </svg></span></div>
                <div class="col-lg-6">
                    <div class="d-flex" style="gap:5px;">
                        <div><span class="bg-secondary rounded-pill px-2">1689000419_48338.stl</span></div>
                        <div><span class="bg-secondary rounded-pill px-2">cad</span></div>
                        <div><span class="bg-secondary rounded-pill px-2">10 Jul, 2023 08:17 PM</span></div>
                        <div><span class="bg-secondary rounded-pill px-2">Approval request sent</span></div>

                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="d-flex" style="gap:5px;">
                        <div><button class="border-info text-info" style="font-size: 16px; font-weight:700;"><span
                                    class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-check" viewBox="0 0 16 16">
                                        <path
                                            d="M10.97 4.97a.75.75 0 0 1 1.07 1.05l-3.99 4.99a.75.75 0 0 1-1.08.02L4.324 8.384a.75.75 0 1 1 1.06-1.06l2.094 2.093 3.473-4.425a.267.267 0 0 1 .02-.022z" />
                                    </svg><span>Approve</button></div>
                        <div><button class="border-warning text-warning" style="font-size: 16px; font-weight:700;"><span
                                    class="pr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd"
                                            d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                        <path
                                            d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                    </svg></span>Resive</button></div>
                        <div><button class="border-danger text-danger" style="font-size: 16px; font-weight:700;"><span
                                    class=" pr-2">X</span>Reject</button></div>
                    </div>
                </div>
                <div class="col">
                    <div class=" d-flex" style="gap:5px;">
                        <div>
                            <button class="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" class="bi bi-file-earmark-spreadsheet" viewBox="0 0 16 16">
                                    <path
                                        d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V9H3V2a1 1 0 0 1 1-1h5.5v2zM3 12v-2h2v2H3zm0 1h2v2H4a1 1 0 0 1-1-1v-1zm3 2v-2h3v2H6zm4 0v-2h3v1a1 1 0 0 1-1 1h-2zm3-3h-3v-2h3v2zm-7 0v-2h3v2H6z" />
                                </svg>
                            </button>
                            </div>
                        <div>
                            <button>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                    <path
                                        d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                </svg>
                            </button>
                            </div>
                        <div>
                            <button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-download" viewBox="0 0 16 16">
                                    <path
                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                    <path
                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
                                </svg></button>
                            </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ..........................project............... --}}

        <div class="border p-4 my-3 bg-dark-subtle">
            <div class="">
                <div><button class="printing">Printing ship label</button></div>
                {{-- <div><button class="add_specification">Add Specification</button></div> --}}
            </div>
        </div>
        <div class="printing1" style="display: none;">
            <div class="py-3">
                <h4><span>Shipping Type</h4>
            </div>
            <div class="d-flex" style="gap:20px;">
           <div>
            <input type="radio" id="tab1" name="tab" checked>
            <label for="tab1">Ship To Client</label>
           </div>
            <div>
                <input type="radio" id="tab2" name="tab">
                <label for="tab2">Drop Ship</label>
            </div>
            <div>
                <input type="radio" id="tab3" name="tab">
                <label for="tab3">Ship To MCC</label>
            </div>
        </div>

            <div>
                <article>
                    <form action="">
                    <div class="my-3">
                        <h4 class="" style="font-weight: 700">Shipping Address Details</h4>
                    </div>

                    <div class="form-group">
                        <textarea class="form-control" id="message" rows="3"></textarea>
                      </div>
                      
                      <div class="form-row">
                        <div class="form-group col">
                            <select id="inputState" class="form-control">
                              <option selected>United States</option>
                              <option>...</option>
                            </select>
                          </div>
                        <div class="form-group col">
                          <select id="inputState" class="form-control">
                            <option selected>Texas</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col">
                            <select id="inputState" class="form-control">
                              <option selected>Frisco</option>
                              <option>...</option>
                            </select>
                          </div>
                        <div class="form-group col">
                            <input type="text" class="form-control" id="inputZip" placeholder="75034">
                          </div>
                      </div>

                      <div class="my-3">
                        <h4 class="" style="font-weight: 700">Package & Shipment Details</h4>
                    </div>

                      
                      <div class="form-row">
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputZip" placeholder="75034">
                          </div>
                        <div class="form-group col-3">
                          <select id="inputState" class="form-control">
                            <option selected>Fedex Ground</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col-3">
                            <select id="inputState" class="form-control">
                              <option selected>Stock 4*6</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="form-group col-4">
                            <select id="inputState" class="form-control">
                              <option selected>Default Signature</option>
                              <option>...</option>
                            </select>
                          </div>
                      </div>

                      <div class="form-row">
                        <div class="form-group col-2">
                            <input type="text" class="form-control" id="inputZip" placeholder="75034">
                          </div>
                        <div class="form-group col-3">
                          <select id="inputState" class="form-control">
                            <option selected>Fedex Ground</option>
                            <option>...</option>
                          </select>
                        </div>
                        <div class="form-group col-3">
                            <select id="inputState" class="form-control">
                              <option selected>Stock 4*6</option>
                              <option>...</option>
                            </select>
                          </div>
                          <div class="form-group col-4">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                Is Saturday delivery? 
                              </label>
                            </div>
                          </div>
                      </div>

                      <div class="text-right">
                        <button type="submit" class="btn px-4 text-white rounded-pill" style="background-color: rgb(153,27,67);">Save</button>
                      </div>
                    </form>
                  </article>
                  
                  
            </div>
            {{-- .................Drop Ship......... --}}
            <div>
                <article>
                    <form action="">
                        <div class="my-3">
                            <h4 class="" style="font-weight: 700">Shipping Address Details</h4>
                        </div>
                        
                          
                        <div class="form-row">
                            
                              <div class="form-group col">
                                <input type="text" class="form-control" id="inputZip" placeholder="Customer Name">
                              </div>
                            <div class="form-group col">
                                <input type="text" class="form-control" id="inputZip" placeholder="Customer Email">
                              </div>
                            <div class="form-group col">
                                <input type="text" class="form-control" id="inputZip" placeholder="Customer Phone">
                              </div>
                          </div>

    
                          <div class="my-3">
                            <h4 class="" style="font-weight: 700">Package & Shipment Details</h4>
                        </div>
    
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="3"></textarea>
                          </div>

                          <div class="form-row">
                            <div class="form-group col">
                                <select id="inputState" class="form-control">
                                  <option selected>Select a Country</option>
                                  <option>...</option>
                                </select>
                              </div>
                            <div class="form-group col">
                              <select id="inputState" class="form-control">
                                <option selected>Select a State</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group col">
                                <select id="inputState" class="form-control">
                                  <option selected>Entry City</option>
                                  <option>...</option>
                                </select>
                              </div>

                              <div class="form-group col">
                                <input type="text" class="form-control" placeholder="Postal Code">
                              </div>
                          </div>
    
                          
                          <div class="form-group ">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="gridCheck">
                              <label class="form-check-label" for="gridCheck">
                                This is a residential address? 
                              </label>
                            </div>
                          </div>

                          <div class="my-3">
                            <h4 class="" style="font-weight: 700">Package & Shipment Details</h4>
                        </div>

                          <div class="form-row">
                            <div class="form-group col-2">
                                <input type="text" class="form-control" id="name" placeholder="Custom value">
                              </div>
                            <div class="form-group col-3">
                              <select id="inputState" class="form-control">
                                <option selected>Select ship method</option>
                                <option>...</option>
                              </select>
                              <span class="text-sm">( Requested shipping method : FEDEX_GROUND )</span>
                            </div>
                            <div class="form-group col-3 ">
                                <select id="inputState" class="form-control">
                                  <option selected>Stock 4*6</option>
                                  <option>...</option>
                                </select>
                              </div>

                              <div class="form-group col-4 ">
                                <select id="inputState" class="form-control">
                                  <option selected>Default Signature</option>
                                  <option>...</option>
                                </select>
                              </div> 
                          </div>

                          <div class="form-row">
                            <div class="form-group col-3">
                              <select id="inputState" class="form-control">
                                <option selected>Select ship method</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group col-2">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" id="gridCheck">
                                  <label class="form-check-label" for="gridCheck">
                                    Is Saturday delivery? 
                                  </label>
                                </div>
                              </div>
                              <div class="form-group col-2 ">
                                <input type="text" class="form-control" placeholder="2">
                              </div> 
                              <div class="form-group col-3">
                                <select id="inputState" class="form-control">
                                  <option selected>LB</option>
                                  <option>...</option>
                                </select>
                              </div>
                          </div>

                          <div class="text-right">
                            <button type="submit" class="btn px-4 text-white rounded-pill" style="background-color: rgb(153,27,67);">Save Changes</button>
                          </div>
                        </form>
                  </article>
            </div>
 {{-- .................Drop Ship......... --}}

            <div>
                <article>
                     <form action="">
                        <div class="my-3">
                            <h4 class="" style="font-weight: 700">Shipping Address Details</h4>
                        </div>
                        
                          
                        <div class="form-row">  
                              <div class="form-group col-3">
                                <select id="inputState" class="form-control">
                                  <option selected>Select Type</option>
                                  <option>Return</option>
                                  <option>Repair</option>
                                </select>
                              </div>
                            <div class="form-group col-3">
                                <input type="text" class="form-control" id="inputZip" placeholder="Reason for Return">
                              </div>
                          </div>

                          <div class="my-3">
                            <h4 class="" style="font-weight: 700">Customer Details</h4>
                        </div>
                          <div class="form-row">
                            <div class="form-group col">
                              <input type="text" class="form-control" id="inputZip" placeholder="Customer Name">
                            </div>
                          <div class="form-group col">
                              <input type="text" class="form-control" id="inputZip" placeholder="Customer Email">
                            </div>
                          <div class="form-group col">
                              <input type="text" class="form-control" id="inputZip" placeholder="Customer Phone">
                            </div>
                        </div>

                        <div class="my-3">
                            <h4 class="" style="font-weight: 700">Customer Address Details</h4>
                        </div>
    
                        <div class="form-group">
                            <textarea class="form-control" id="message" rows="3"></textarea>
                          </div>

                          <div class="form-row">
                            <div class="form-group col">
                                <select id="inputState" class="form-control">
                                  <option selected>Select a Country</option>
                                  <option>...</option>
                                </select>
                              </div>
                            <div class="form-group col">
                              <select id="inputState" class="form-control">
                                <option selected>Select a State</option>
                                <option>...</option>
                              </select>
                            </div>
                            <div class="form-group col">
                                <select id="inputState" class="form-control">
                                  <option selected>Entry City</option>
                                  <option>...</option>
                                </select>
                              </div>

                              <div class="form-group col">
                                <input type="text" class="form-control" placeholder="Postal Code">
                              </div>
                          </div>
    

                          <div class="my-3">
                            <h4 class="" style="font-weight: 700">Package & Shipment Details</h4>
                        </div>

                          <div class="form-row">
                            <div class="form-group col-2">
                                <input type="text" class="form-control" id="name" placeholder="Custom value">
                              </div>
                            <div class="form-group col-3">
                              <select id="inputState" class="form-control">
                                <option selected>Select ship method</option>
                                <option>...</option>
                              </select>
                              {{-- <span class="text-sm">( Requested shipping method : FEDEX_GROUND )</span> --}}
                            </div>
                            <div class="form-group col-3 ">
                                <select id="inputState" class="form-control">
                                  <option selected>Stock 4*6</option>
                                  <option>...</option>
                                </select>
                              </div>

                              <div class="form-group col-4 ">
                                <select id="inputState" class="form-control">
                                  <option selected>Default Signature</option>
                                  <option>...</option>
                                </select>
                              </div> 
                          </div>

                          <div class="form-row border-bottom pb-3">
                              <div class="form-group col-2 ">
                                <input type="text" class="form-control" placeholder="2">
                              </div> 
                              <div class="form-group col-3">
                                <select id="inputState" class="form-control">
                                  <option selected>LB</option>
                                  <option>...</option>
                                </select>
                              </div>

                              <div class="form-group col-3">
                                <select id="inputState" class="form-control">
                                  <option selected>BOX</option>
                                  <option>BUCKET</option>
                                </select>
                              </div>
                          </div>

                          <div class="my-3">
                            <h4 class="" style="font-weight: 700">Commodity Information</h4>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                              <label for="inputEmail4">Description</label>
                              <input type="email" class="form-control" id="inputEmail4" placeholder="Description">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputEmail4">Commodity Weight</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="2">
                              </div>
                              <div class="form-group col-md-3">
                                <label for="inputEmail4">Bill Duties/Taxes/Fees Account Number</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="Account Number">
                              </div>
                            <div class="form-group col-md-3">
                              <label for="inputPassword4">Harmonized Code</label>
                              <input type="password" class="form-control" id="inputPassword4" placeholder="711311100000">
                            </div>
                          </div>

                          <div class="text-right">
                            <button type="submit" class="btn px-4 text-white rounded-pill" style="background-color: rgb(153,27,67);">Save Changes</button>
                          </div>
                        </form>
                  </article>
                  </article>
            </div>
        </div>
    </div>

   

    <script>
    $('[name=tab]').each(function(i,d){
  var p = $(this).prop('checked');
//   console.log(p);
  if(p){
    $('article').eq(i)
      .addClass('on');
  }    
});  

$('[name=tab]').on('change', function(){
  var p = $(this).prop('checked');
  
  // $(type).index(this) == nth-of-type
  var i = $('[name=tab]').index(this);
  
  $('article').removeClass('on');
  $('article').eq(i).addClass('on');
});
</script>


    <script>
        // ....................tab...................
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontentcheck");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tabtablinkschecklinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
// ....................tab..................
    </script>

    <script>
        // ......toggle..............
$(document).ready(function(){
  $(".specification").click(function(){
    $(".specification1").toggle();
  });
});


$(document).ready(function(){
  $(".add_specification").click(function(){
    $(".add_specification1").toggle();
  });
});

$(document).ready(function(){
  $(".Message").click(function(){
    $(".Message1").toggle();
  });
});

$(document).ready(function(){
  $(".Project").click(function(){
    $(".Project1").toggle();
  });
});

$(document).ready(function(){
  $(".Upload").click(function(){
    $(".Upload1").toggle();
  });
});

$(document).ready(function(){
  $(".printing").click(function(){
    $(".printing1").toggle();
  });
});
// ..............toggle............

// ....................tab...................
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
// ....................tab..................
    </script>


    {{-- <----------- JavaScript Code Start ----------> --}}
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
        {{-- <----------- JavaScript Code Start ----------> --}}


</div>