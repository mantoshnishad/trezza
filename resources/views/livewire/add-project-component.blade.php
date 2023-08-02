<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script> --}}
    <div class="py-2  pl-2  border-bottom ">
        <a href="">Home</a><span> > </span><a href="">Project</a><span> > </span><a href="">Add Project</a>
    </div>
    <div class="py-3">
        <h4><span>Add Project</h4>
    </div>
    <div class="container border p-3">
        <h2><span class="mr-3"><i class="fa-solid fa-bag-shopping "></i></span>Add Project</h2>
        <form>
            <div class="form-group">
                {{-- <label for="name">Name</label> --}}
                <input type="date" class="form-control" id="name" placeholder="">
            </div>
            <div class="form-group">
                <select class="form-select w-100 py-2" aria-label="Default select example">
                    <option selected>Standard Priority</option>
                    <option value="1">High Priority</option>
                    <option value="2">Critical</option>
                </select>
            </div>
            <div class="row form-group d-flex  aligin-items-center ">
                <div class="col-lg-3 form-group">
                    {{-- <label for="name">Name</label> --}}
                    <input type="date" class=" w-100" id="name" placeholder="">
                </div>

                <div class="col-lg-3 form-check py-1 ">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Printing only
                    </label>
                </div>

                <div class="col-lg-3 form-check py-1">
                    <input class="form-check-input" type="checkbox" id="gridCheck1">
                    <label class="form-check-label" for="gridCheck1">
                        Casting only
                    </label>
                </div>
            </div>



            <div class="row form-group d-flex  aligin-items-center ">
                <div class="col-lg-6 form-group">
                    {{-- <label for="name">Name</label> --}}
                    <input type="number" class=" w-100" id="name" placeholder="">
                </div>

                <div class="col-lg-3 form-check py-1 ">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Request Estimate
                    </label>
                </div>
            </div>

            <div class="row form-group">
                <div class="col">
                    <input type="text" class="form-control" placeholder="PO#">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Qunatity">
                </div>
            </div>

            <div class="form-group">
                <div class="">
                    <input id="job_title" name="project_details[title]" type="text" class="form-control"
                        placeholder="Job title" maxlength="30" required="">
                </div>
                <div class="text-right">
                    <span><span id="job_title_cn"></span>/30</span>
                    <a id="sample_editable_1_new" data-toggle="modal" data-target="#revision_history"><i
                            class="fas fa-info-circle"></i></a>
                </div>
            </div>


            <div class="form-floating form-group">
                <label for="floatingTextarea2">Comments</label>
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                    style="height: 100px"></textarea>
            </div>

            <div>
                <div>
                    <div class="form-group border p-2 d-flex justify-content-between  align-content-center">
                        <div>
                            <h4 class="specificationExp border border-2  py-1 px-2" style="cursor: pointer;">Specification</h4>
                        </div>
                        <div class="specification mt-2 ">
                            <h6 class="border border-2 border-danger py-1 px-2" style="cursor: pointer;">Add Specification</h6>
                        </div>
                    </div>
                    <div class="specificationExp1" style="display: none;">
                        <div>
                            <ul>
                                <li><span>Example: </span> Ring Size 5.25</li>
                                <li><span>Example: </span> Metal Purity 18k</li>
                                <li><span>Example: </span> Center Stone 1.5ct H VS1</li>
                            </ul>
                        </div>
                    </div>
                    <div class="specification1" style="display: none;">
                        <div class="form-group row w-100">
                            <div class="col-lg-6">
                                <div class="form-group row ">
                                    <!-- Finish -->
                                    <div class="col-md-4">
                                        <span>Finish</span>
                                    </div>
                                    <div class="col-md-7">
                                        <select name="project_specification[finish]" class="form-control">
                                            <option value="">Choose Value</option>
                                            <option value="High Polish">High Polish</option>
                                            <option value="Satin Finish">Satin Finish</option>
                                            <option value="Florentine">Florentine</option>
                                            <option value="Hammered">Hammered</option>
                                            <option value="Sand Blast">Sand Blast</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Purity / Color / Metal</span>
                                    </div>
                                    <div class="col-md-7">
                                        <select name="project_specification[purity]" class="form-control">
                                            <option value="">Choose Value</option>
                                            <option value=".925 White Sterling Silver">.925 White Sterling Silver
                                            </option>
                                            <option value=".950 White Palladium">.950 White Palladium</option>
                                            <option value="10K Red Legor">10K Red Legor</option>
                                            <option value="10K White Legor">10K White Legor</option>
                                            <option value="10K Yellow Legor">10K Yellow Legor</option>
                                            <option value="10k Rose Gold">10k Rose Gold</option>
                                            <option value="10k Two-Tone">10k Two-Tone</option>
                                            <option value="10k White Gold">10k White Gold</option>
                                            <option value="10k Yellow Gold">10k Yellow Gold</option>
                                            <option value="14K Red Legor">14K Red Legor</option>
                                            <option value="14K White Legor">14K White Legor</option>
                                            <option value="14K Yellow Legor">14K Yellow Legor</option>
                                            <option value="14k Green">14k Green</option>
                                            <option value="14k Rose Gold">14k Rose Gold</option>
                                            <option value="14k Two-Tone">14k Two-Tone</option>
                                            <option value="14k White Gold">14k White Gold</option>
                                            <option value="14k White Gold Palladium">14k White Gold Palladium</option>
                                            <option value="14k White Gold X1">14k White Gold X1</option>
                                            <option value="14k Yellow Gold">14k Yellow Gold</option>
                                            <option value="18K Euro (Standard)">18K Euro (Standard)</option>
                                            <option value="18K Green Gold">18K Green Gold</option>
                                            <option value="18K Red Legor">18K Red Legor</option>
                                            <option value="18K White Legor">18K White Legor</option>
                                            <option value="18K Yellow Lego">18K Yellow Lego</option>
                                            <option value="18k Green">18k Green</option>
                                            <option value="18k Rose Gold">18k Rose Gold</option>
                                            <option value="18k Royal Yellow Gold">18k Royal Yellow Gold</option>
                                            <option value="18k Two-Tone">18k Two-Tone</option>
                                            <option value="18k White Gold">18k White Gold</option>
                                            <option value="18k White Gold Palladium">18k White Gold Palladium</option>
                                            <option value="18k White Gold X1">18k White Gold X1</option>
                                            <option value="18k Yellow 720">18k Yellow 720</option>
                                            <option value="22k Yellow Gold">22k Yellow Gold</option>
                                            <option value="24k Gold">24k Gold</option>
                                            <option value="90/10 Platinum">90/10 Platinum</option>
                                            <option value="95/5 Platinum">95/5 Platinum</option>
                                            <option value="Argentium">Argentium</option>
                                            <option value="Brass">Brass</option>
                                            <option value="Bronze">Bronze</option>
                                            <option value="Silver Pure">Silver Pure</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row w-100">
                            <div class="col-lg-6">
                                <div class="form-group row ">
                                    <!-- Finish -->
                                    <div class="col-md-4">
                                        <span>Ring Size</span>
                                    </div>
                                    <div class="col-md-7">
                                        <select name="project_specification[ring_size]" class="form-control">
                                            <option value="0">N/A</option>
                                            <option value="N/A">N/A</option>
                                            <option value="2">2</option>
                                            <option value="2.25">2.25</option>
                                            <option value="2.5">2.5</option>
                                            <option value="2.75">2.75</option>
                                            <option value="3">3</option>
                                            <option value="3.25">3.25</option>
                                            <option value="3.5">3.5</option>
                                            <option value="3.75">3.75</option>
                                            <option value="4">4</option>
                                            <option value="4.25">4.25</option>
                                            <option value="4.5">4.5</option>
                                            <option value="4.75">4.75</option>
                                            <option value="5">5</option>
                                            <option value="5.25">5.25</option>
                                            <option value="5.5">5.5</option>
                                            <option value="5.75">5.75</option>
                                            <option value="6">6</option>
                                            <option value="6.25">6.25</option>
                                            <option value="6.5">6.5</option>
                                            <option value="6.75">6.75</option>
                                            <option value="7">7</option>
                                            <option value="7.25">7.25</option>
                                            <option value="7.5">7.5</option>
                                            <option value="7.75">7.75</option>
                                            <option value="8">8</option>
                                            <option value="8.25">8.25</option>
                                            <option value="8.5">8.5</option>
                                            <option value="8.75">8.75</option>
                                            <option value="9">9</option>
                                            <option value="9.25">9.25</option>
                                            <option value="9.5">9.5</option>
                                            <option value="9.75">9.75</option>
                                            <option value="10">10</option>
                                            <option value="10.25">10.25</option>
                                            <option value="10.5">10.5</option>
                                            <option value="10.75">10.75</option>
                                            <option value="11">11</option>
                                            <option value="11.25">11.25</option>
                                            <option value="11.5">11.5</option>
                                            <option value="11.75">11.75</option>
                                            <option value="12">12</option>
                                            <option value="12.25">12.25</option>
                                            <option value="12.5">12.5</option>
                                            <option value="12.75">12.75</option>
                                            <option value="13">13</option>
                                            <option value="13.25">13.25</option>
                                            <option value="13.5">13.5</option>
                                            <option value="13.75">13.75</option>
                                            <option value="14">14</option>
                                            <option value="14.25">14.25</option>
                                            <option value="14.5">14.5</option>
                                            <option value="14.75">14.75</option>
                                            <option value="15">15</option>
                                            <option value="15.25">15.25</option>
                                            <option value="15.5">15.5</option>
                                            <option value="15.75">15.75</option>
                                            <option value="16">16</option>
                                            <option value="16.25">16.25</option>
                                            <option value="16.5">16.5</option>
                                            <option value="16.75">16.75</option>
                                            <option value="17">17</option>
                                            <option value="17.25">17.25</option>
                                            <option value="17.5">17.5</option>
                                            <option value="17.75">17.75</option>
                                            <option value="18">18</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group row">
                                    <div class="col-md-4">
                                        <span>Customer's Metal</span>
                                    </div>
                                    <div class="col-md-7">
                                        <select name="project_specification[is_customers_metal]" class="form-control"
                                            id="customers_metal">
                                            <option value="">Choose Value</option>
                                            <option value="Yes" data-value="50.00">Yes (Additional Fee Applies $50.00)
                                            </option>
                                            <option value="No" data-value="0">No </option>

                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12 form-group">
                            {{-- <label for="name">Name</label> --}}
                            <input type="text" class="w-100 p-2" id="name" placeholder="Custom Specification">
                        </div>

                        <div>

                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>QC File</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[qc_file]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="1">Yes (Fee Applies $35.00 minimum)</option>
                                                <option value="0">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>3D Printing Quality</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[_3d_printing_quality]"
                                                class="form-control" id="wax_only">
                                                <option value="">Choose Value</option>
                                                <option value="Easy Out (wax)">Easy Out (wax)</option>
                                                <option value="Resin">Resin</option>
                                                <option value="HD resin">HD resin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>Wax Only</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[wax_only]" class="form-control"
                                                id="wax_only">
                                                <option value="">Choose Value</option>
                                                <option value="Easy Out (wax)">Easy Out (wax)</option>
                                                <option value="Resin">Resin</option>
                                                <option value="HD resin">HD resin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Casting Only</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[casting_only]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Raw">Raw</option>
                                                <option value="Pre-polish">Pre-polish</option>
                                                <option value="Raw tumbled">Raw tumbled</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>MCC Supply Melee</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[supply_diamonds]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Lab Grown">Lab Grown</option>
                                                <option value="Natural">Natural</option>
                                                <option value="Moissanite">Moissanite</option>
                                                <option value="WHITE CZ">WHITE CZ</option>
                                                <option value="COLOR CZ">COLOR CZ</option>
                                                <option value="NATURAL COLOR">NATURAL COLOR</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Mold</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[mold]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Cold Mold">Cold Mold</option>
                                                <option value="Rubber Mold(Production)">Rubber Mold(Production)</option>
                                                <option value="Silicone Mold">Silicone Mold</option>
                                                <option value="3D Mold">3D Mold</option>
                                                <option value="No Mold">No Mold</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>Clarity</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[clarity]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="VS">VS</option>
                                                <option value="Eye Clean">Eye Clean</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Supply Center</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[supply_center]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>Sending my own</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[sending_my_own]"
                                                class="form-control sending_my_own">
                                                <option value="">Choose Value</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                            <small class="hide d-none">You have to attach project envelop while sending diamond
                                                to company</small>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Set Center</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[set_center]" id="Project-set-center"
                                                class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>Prong Style</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[prong_style]"
                                                class="form-control prong-style-select">
                                                <option value="">Choose Value</option>
                                                <option value="Claw">Claw</option>
                                                <option value="Petite Claw">Petite Claw</option>
                                                <option value="Round">Round</option>
                                                <option value="Tab">Tab</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>MCC Make Cad</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[make_cad]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>Provide File</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[provide_file]" class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Yes">Yes</option>
                                                <option value="No">No</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Supply All Gems</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[supply_all_gems_yes]"
                                                class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Natural">Natural</option>
                                                <option value="Lab Grown">Lab Grown</option>
                                                <option value="Sythetic">Sythetic</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row w-100">
                                <div class="col-lg-6">
                                    <div class="form-group row ">
                                        <!-- Finish -->
                                        <div class="col-md-4">
                                            <span>Realistic Rendering</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[is_realistic_rendering]"
                                                class="form-control" id="realistic_rendering">
                                                <option value="">Choose Value</option>
                                                <option value="Yes" data-value="100.00">Yes (Additional Fee Applies
                                                    $100.00)</option>
                                                <option value="No" data-value="0">No </option>

                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    {{-- <div class="form-group row">
                                        <div class="col-md-4">
                                            <span>Supply All Gems</span>
                                        </div>
                                        <div class="col-md-7">
                                            <select name="project_specification[supply_all_gems_yes]"
                                                class="form-control">
                                                <option value="">Choose Value</option>
                                                <option value="Natural">Natural</option>
                                                <option value="Lab Grown">Lab Grown</option>
                                                <option value="Sythetic">Sythetic</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                {{-- <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter your email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.</small>
                </div> --}}
            </div>

            <div>
                <div class="form-group border p-2">
                    <h4 class="project" style="cursor: pointer;">Project file</h4>
                </div>


                <div class="project1" style="display: none;">
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
            </div>

            <div>
                <div class="form-group border p-2">
                    <h4 class="drop" style="cursor: pointer;">Drop Ship</h4>
                </div>


                <div class="drop1" style="display: none;">
                    <div class="form-group">
                        <div class="col-md-12" style="margin-top:20px">
                            <label class="bold">Customer</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Customer Name">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Customer Email">
                            </div>
                            <div class="form-group col-md-4">
                                <input type="text" class="form-control" placeholder="Customer phone">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12" style="margin-top:20px">
                            <label class="bold">Shipping Address Details</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="resize: vertical;" class="form-control form-field address_select"
                                    name="drop_ship[address]" id="" cols="30" rows="2" placeholder="Address"></textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-3">
                                <select class="form-control country_select" name="drop_ship[country]"
                                    style="width: 100%">
                                    <option value="">select a country</option>
                                    <option value="AF" data-id="1"> Afghanistan </option>
                                    <option value="AX" data-id="2"> Aland Islands </option>
                                    <option value="AL" data-id="3"> Albania </option>
                                    <option value="DZ" data-id="4"> Algeria </option>
                                    <option value="AS" data-id="5"> American Samoa </option>
                                    <option value="AD" data-id="6"> Andorra </option>
                                    <option value="AO" data-id="7"> Angola </option>
                                    <option value="AI" data-id="8"> Anguilla </option>
                                    <option value="AQ" data-id="9"> Antarctica </option>
                                    <option value="AG" data-id="10"> Antigua And Barbuda </option>
                                    <option value="AR" data-id="11"> Argentina </option>
                                    <option value="AM" data-id="12"> Armenia </option>
                                    <option value="AW" data-id="13"> Aruba </option>
                                    <option value="AU" data-id="14"> Australia </option>
                                    <option value="AT" data-id="15"> Austria </option>
                                    <option value="AZ" data-id="16"> Azerbaijan </option>
                                    <option value="BS" data-id="17"> Bahamas The </option>
                                    <option value="BH" data-id="18"> Bahrain </option>
                                    <option value="BD" data-id="19"> Bangladesh </option>
                                    <option value="BB" data-id="20"> Barbados </option>
                                    <option value="BY" data-id="21"> Belarus </option>
                                    <option value="BE" data-id="22"> Belgium </option>
                                    <option value="BZ" data-id="23"> Belize </option>
                                    <option value="BJ" data-id="24"> Benin </option>
                                    <option value="BM" data-id="25"> Bermuda </option>
                                    <option value="BT" data-id="26"> Bhutan </option>
                                    <option value="BO" data-id="27"> Bolivia </option>
                                    <option value="BA" data-id="28"> Bosnia and Herzegovina </option>
                                    <option value="BW" data-id="29"> Botswana </option>
                                    <option value="BV" data-id="30"> Bouvet Island </option>
                                    <option value="BR" data-id="31"> Brazil </option>
                                    <option value="IO" data-id="32"> British Indian Ocean Territory </option>
                                    <option value="BN" data-id="33"> Brunei </option>
                                    <option value="BG" data-id="34"> Bulgaria </option>
                                    <option value="BF" data-id="35"> Burkina Faso </option>
                                    <option value="BI" data-id="36"> Burundi </option>
                                    <option value="KH" data-id="37"> Cambodia </option>
                                    <option value="CM" data-id="38"> Cameroon </option>
                                    <option value="CA" data-id="39"> Canada </option>
                                    <option value="CV" data-id="40"> Cape Verde </option>
                                    <option value="KY" data-id="41"> Cayman Islands </option>
                                    <option value="CF" data-id="42"> Central African Republic </option>
                                    <option value="TD" data-id="43"> Chad </option>
                                    <option value="CL" data-id="44"> Chile </option>
                                    <option value="CN" data-id="45"> China </option>
                                    <option value="CX" data-id="46"> Christmas Island </option>
                                    <option value="CC" data-id="47"> Cocos (Keeling) Islands </option>
                                    <option value="CO" data-id="48"> Colombia </option>
                                    <option value="KM" data-id="49"> Comoros </option>
                                    <option value="CG" data-id="50"> Congo </option>
                                    <option value="CD" data-id="51"> Congo The Democratic Republic Of The </option>
                                    <option value="CK" data-id="52"> Cook Islands </option>
                                    <option value="CR" data-id="53"> Costa Rica </option>
                                    <option value="CI" data-id="54"> Cote D'Ivoire (Ivory Coast) </option>
                                    <option value="HR" data-id="55"> Croatia (Hrvatska) </option>
                                    <option value="CU" data-id="56"> Cuba </option>
                                    <option value="CY" data-id="57"> Cyprus </option>
                                    <option value="CZ" data-id="58"> Czech Republic </option>
                                    <option value="DK" data-id="59"> Denmark </option>
                                    <option value="DJ" data-id="60"> Djibouti </option>
                                    <option value="DM" data-id="61"> Dominica </option>
                                    <option value="DO" data-id="62"> Dominican Republic </option>
                                    <option value="TL" data-id="63"> East Timor </option>
                                    <option value="EC" data-id="64"> Ecuador </option>
                                    <option value="EG" data-id="65"> Egypt </option>
                                    <option value="SV" data-id="66"> El Salvador </option>
                                    <option value="GQ" data-id="67"> Equatorial Guinea </option>
                                    <option value="ER" data-id="68"> Eritrea </option>
                                    <option value="EE" data-id="69"> Estonia </option>
                                    <option value="ET" data-id="70"> Ethiopia </option>
                                    <option value="FK" data-id="71"> Falkland Islands </option>
                                    <option value="FO" data-id="72"> Faroe Islands </option>
                                    <option value="FJ" data-id="73"> Fiji Islands </option>
                                    <option value="FI" data-id="74"> Finland </option>
                                    <option value="FR" data-id="75"> France </option>
                                    <option value="GF" data-id="76"> French Guiana </option>
                                    <option value="PF" data-id="77"> French Polynesia </option>
                                    <option value="TF" data-id="78"> French Southern Territories </option>
                                    <option value="GA" data-id="79"> Gabon </option>
                                    <option value="GM" data-id="80"> Gambia The </option>
                                    <option value="GE" data-id="81"> Georgia </option>
                                    <option value="DE" data-id="82"> Germany </option>
                                    <option value="GH" data-id="83"> Ghana </option>
                                    <option value="GI" data-id="84"> Gibraltar </option>
                                    <option value="GR" data-id="85"> Greece </option>
                                    <option value="GL" data-id="86"> Greenland </option>
                                    <option value="GD" data-id="87"> Grenada </option>
                                    <option value="GP" data-id="88"> Guadeloupe </option>
                                    <option value="GU" data-id="89"> Guam </option>
                                    <option value="GT" data-id="90"> Guatemala </option>
                                    <option value="GG" data-id="91"> Guernsey and Alderney </option>
                                    <option value="GN" data-id="92"> Guinea </option>
                                    <option value="GW" data-id="93"> Guinea-Bissau </option>
                                    <option value="GY" data-id="94"> Guyana </option>
                                    <option value="HT" data-id="95"> Haiti </option>
                                    <option value="HM" data-id="96"> Heard and McDonald Islands </option>
                                    <option value="HN" data-id="97"> Honduras </option>
                                    <option value="HK" data-id="98"> Hong Kong S.A.R. </option>
                                    <option value="HU" data-id="99"> Hungary </option>
                                    <option value="IS" data-id="100"> Iceland </option>
                                    <option value="IN" data-id="101"> India </option>
                                    <option value="ID" data-id="102"> Indonesia </option>
                                    <option value="IR" data-id="103"> Iran </option>
                                    <option value="IQ" data-id="104"> Iraq </option>
                                    <option value="IE" data-id="105"> Ireland </option>
                                    <option value="IL" data-id="106"> Israel </option>
                                    <option value="IT" data-id="107"> Italy </option>
                                    <option value="JM" data-id="108"> Jamaica </option>
                                    <option value="JP" data-id="109"> Japan </option>
                                    <option value="JE" data-id="110"> Jersey </option>
                                    <option value="JO" data-id="111"> Jordan </option>
                                    <option value="KZ" data-id="112"> Kazakhstan </option>
                                    <option value="KE" data-id="113"> Kenya </option>
                                    <option value="KI" data-id="114"> Kiribati </option>
                                    <option value="KP" data-id="115"> Korea North
                                    </option>
                                    <option value="KR" data-id="116"> Korea South </option>
                                    <option value="KW" data-id="117"> Kuwait </option>
                                    <option value="KG" data-id="118"> Kyrgyzstan </option>
                                    <option value="LA" data-id="119"> Laos </option>
                                    <option value="LV" data-id="120"> Latvia </option>
                                    <option value="LB" data-id="121"> Lebanon </option>
                                    <option value="LS" data-id="122"> Lesotho </option>
                                    <option value="LR" data-id="123"> Liberia </option>
                                    <option value="LY" data-id="124"> Libya </option>
                                    <option value="LI" data-id="125"> Liechtenstein </option>
                                    <option value="LT" data-id="126"> Lithuania </option>
                                    <option value="LU" data-id="127"> Luxembourg </option>
                                    <option value="MO" data-id="128"> Macau S.A.R. </option>
                                    <option value="MK" data-id="129"> Macedonia </option>
                                    <option value="MG" data-id="130"> Madagascar </option>
                                    <option value="MW" data-id="131"> Malawi </option>
                                    <option value="MY" data-id="132"> Malaysia </option>
                                    <option value="MV" data-id="133"> Maldives </option>
                                    <option value="ML" data-id="134"> Mali </option>
                                    <option value="MT" data-id="135"> Malta </option>
                                    <option value="IM" data-id="136"> Man (Isle of) </option>
                                    <option value="MH" data-id="137"> Marshall Islands </option>
                                    <option value="MQ" data-id="138"> Martinique </option>
                                    <option value="MR" data-id="139"> Mauritania </option>
                                    <option value="MU" data-id="140"> Mauritius </option>
                                    <option value="YT" data-id="141"> Mayotte </option>
                                    <option value="MX" data-id="142"> Mexico </option>
                                    <option value="FM" data-id="143"> Micronesia </option>
                                    <option value="MD" data-id="144"> Moldova </option>
                                    <option value="MC" data-id="145"> Monaco </option>
                                    <option value="MN" data-id="146"> Mongolia </option>
                                    <option value="ME" data-id="147"> Montenegro </option>
                                    <option value="MS" data-id="148"> Montserrat </option>
                                    <option value="MA" data-id="149"> Morocco </option>
                                    <option value="MZ" data-id="150"> Mozambique </option>
                                    <option value="MM" data-id="151"> Myanmar </option>
                                    <option value="NA" data-id="152"> Namibia </option>
                                    <option value="NR" data-id="153"> Nauru </option>
                                    <option value="NP" data-id="154"> Nepal </option>
                                    <option value="AN" data-id="155"> Netherlands Antilles </option>
                                    <option value="NL" data-id="156"> Netherlands The </option>
                                    <option value="NC" data-id="157"> New Caledonia </option>
                                    <option value="NZ" data-id="158"> New Zealand </option>
                                    <option value="NI" data-id="159"> Nicaragua </option>
                                    <option value="NE" data-id="160"> Niger </option>
                                    <option value="NG" data-id="161"> Nigeria </option>
                                    <option value="NU" data-id="162"> Niue </option>
                                    <option value="NF" data-id="163"> Norfolk Island </option>
                                    <option value="MP" data-id="164"> Northern Mariana Islands </option>
                                    <option value="NO" data-id="165"> Norway </option>
                                    <option value="OM" data-id="166"> Oman </option>
                                    <option value="PK" data-id="167"> Pakistan </option>
                                    <option value="PW" data-id="168"> Palau </option>
                                    <option value="PS" data-id="169"> Palestinian Territory Occupied </option>
                                    <option value="PA" data-id="170"> Panama </option>
                                    <option value="PG" data-id="171"> Papua new Guinea </option>
                                    <option value="PY" data-id="172"> Paraguay </option>
                                    <option value="PE" data-id="173"> Peru </option>
                                    <option value="PH" data-id="174"> Philippines </option>
                                    <option value="PN" data-id="175"> Pitcairn Island </option>
                                    <option value="PL" data-id="176"> Poland </option>
                                    <option value="PT" data-id="177"> Portugal </option>
                                    <option value="PR" data-id="178"> Puerto Rico </option>
                                    <option value="QA" data-id="179"> Qatar </option>
                                    <option value="RE" data-id="180"> Reunion </option>
                                    <option value="RO" data-id="181"> Romania </option>
                                    <option value="RU" data-id="182"> Russia </option>
                                    <option value="RW" data-id="183"> Rwanda </option>
                                    <option value="SH" data-id="184"> Saint Helena </option>
                                    <option value="KN" data-id="185"> Saint Kitts And Nevis </option>
                                    <option value="LC" data-id="186"> Saint Lucia </option>
                                    <option value="PM" data-id="187"> Saint Pierre and Miquelon </option>
                                    <option value="VC" data-id="188"> Saint Vincent And The Grenadines </option>
                                    <option value="BL" data-id="189"> Saint-Barthelemy </option>
                                    <option value="MF" data-id="190"> Saint-Martin (French part) </option>
                                    <option value="WS" data-id="191"> Samoa </option>
                                    <option value="SM" data-id="192"> San Marino </option>
                                    <option value="ST" data-id="193"> Sao Tome and Principe </option>
                                    <option value="SA" data-id="194"> Saudi Arabia </option>
                                    <option value="SN" data-id="195"> Senegal </option>
                                    <option value="RS" data-id="196"> Serbia </option>
                                    <option value="SC" data-id="197"> Seychelles </option>
                                    <option value="SL" data-id="198"> Sierra Leone </option>
                                    <option value="SG" data-id="199"> Singapore </option>
                                    <option value="SK" data-id="200"> Slovakia </option>
                                    <option value="SI" data-id="201"> Slovenia </option>
                                    <option value="SB" data-id="202"> Solomon Islands </option>
                                    <option value="SO" data-id="203"> Somalia </option>
                                    <option value="ZA" data-id="204"> South Africa </option>
                                    <option value="GS" data-id="205"> South Georgia </option>
                                    <option value="SS" data-id="206"> South Sudan </option>
                                    <option value="ES" data-id="207"> Spain </option>
                                    <option value="LK" data-id="208"> Sri Lanka </option>
                                    <option value="SD" data-id="209"> Sudan </option>
                                    <option value="SR" data-id="210"> Suriname </option>
                                    <option value="SJ" data-id="211"> Svalbard And Jan Mayen Islands </option>
                                    <option value="SZ" data-id="212"> Swaziland </option>
                                    <option value="SE" data-id="213"> Sweden </option>
                                    <option value="CH" data-id="214"> Switzerland </option>
                                    <option value="SY" data-id="215"> Syria </option>
                                    <option value="TW" data-id="216"> Taiwan </option>
                                    <option value="TJ" data-id="217"> Tajikistan </option>
                                    <option value="TZ" data-id="218"> Tanzania </option>
                                    <option value="TH" data-id="219"> Thailand </option>
                                    <option value="TG" data-id="220"> Togo </option>
                                    <option value="TK" data-id="221"> Tokelau </option>
                                    <option value="TO" data-id="222"> Tonga </option>
                                    <option value="TT" data-id="223"> Trinidad And Tobago </option>
                                    <option value="TN" data-id="224"> Tunisia </option>
                                    <option value="TR" data-id="225"> Turkey </option>
                                    <option value="TM" data-id="226"> Turkmenistan </option>
                                    <option value="TC" data-id="227"> Turks And Caicos Islands </option>
                                    <option value="TV" data-id="228"> Tuvalu </option>
                                    <option value="UG" data-id="229"> Uganda </option>
                                    <option value="UA" data-id="230"> Ukraine </option>
                                    <option value="AE" data-id="231"> United Arab Emirates </option>
                                    <option value="GB" data-id="232"> United Kingdom </option>
                                    <option value="US" data-id="233"> United States </option>
                                    <option value="UM" data-id="234"> United States Minor Outlying Islands </option>
                                    <option value="UY" data-id="235"> Uruguay </option>
                                    <option value="UZ" data-id="236"> Uzbekistan </option>
                                    <option value="VU" data-id="237"> Vanuatu </option>
                                    <option value="VA" data-id="238"> Vatican City State (Holy See) </option>
                                    <option value="VE" data-id="239"> Venezuela </option>
                                    <option value="VN" data-id="240"> Vietnam </option>
                                    <option value="VG" data-id="241"> Virgin Islands (British) </option>
                                    <option value="VI" data-id="242"> Virgin Islands (US) </option>
                                    <option value="WF" data-id="243"> Wallis And Futuna Islands </option>
                                    <option value="EH" data-id="244"> Western Sahara </option>
                                    <option value="YE" data-id="245"> Yemen </option>
                                    <option value="ZM" data-id="246"> Zambia </option>
                                    <option value="ZW" data-id="247"> Zimbabwe </option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control state_select" name="drop_ship[region]" data-state=""
                                    style="width: 100%">
                                    <option></option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control city_select" name="drop_ship[city]" style="width: 100%">
                                    <option value="">Select city</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <input type="text" class="form-control form-field pin_code_select"
                                    name="drop_ship[postal_code]" placeholder="Postal Code">
                            </div>
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

                    <div class="form-group">
                        <div class="col-md-12" style="margin-top:20px">
                            <label class="bold">Package & Shipment Details</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3">
                            <select class="form-control city_select" name="drop_ship[city]" style="width: 100%">
                                <option value="">Fedex Ground</option>
                                <option value="">Fedex 2 Day</option>
                                <option value="">Standard Overnight</option>
                                <option value="">Priority Overnight</option>
                                <option value="">First Overnight</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form msg-frm" style="padding: 20px !important">
                <div class="form-actions text-right todo-form-actions">
                    <button type="submit" class="btn btn-circle btn-sm btn-primary btnsavedraft">Save Draft</button>
                    <button type="submit" class="btn btn-circle btn-sm btn-green bg-green btnSubmit">Submit</button>
                    <button type="reset" class="btn btn-circle btn-sm btn-default">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>



<script>
    $(document).ready(function(){
      $(".specification").click(function(){
        $(".specification1").toggle();
      });
    });

    $(document).ready(function(){
      $(".specificationExp").click(function(){
        $(".specificationExp1").toggle();
      });
    });
    
    $(document).ready(function(){
      $(".project").click(function(){
        $(".project1").toggle();
      });
    });

    $(document).ready(function(){
      $(".drop").click(function(){
        $(".drop1").toggle();
      });
    });
</script>