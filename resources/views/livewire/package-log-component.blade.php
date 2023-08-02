<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<div>
    <div class="py-2  pl-2  border-bottom ">
        <a href="">Home</a><span> > </span><a href=""> Package logs</a>
    </div>

    <div class="border m-4 p-4">
        <div class="border-bottom pb-2">
        <h4 style="font-weight: 700;"><span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
            <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
          </svg></span>Package logs</h4>
            </div>

            <div class="from-group d-lg-flex justify-content-between align-items-center px-3 my-4">
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
        
                    <input type="date" name="" id="" placeholder="" class="px-2 mr-2">
                    <input type="text" name="" id="" placeholder="Search" class="px-2 mr-2">
                    <button class="border-0 px-2 rounded-pill text-white mr-2" style="background-color: rgb(153,27,67);">Search</button>
                    <button class="border-0 px-2 rounded-pill text-white mr-2" style="background-color: rgb(153,27,67);">Reset</button>
                </div>
            </div>

            <div class="form-group my-5 overflow-auto">
                    <tbody class="w-100 border">
                        <table class="w-100 border">
                            <tr class="border text-center">
                                <th  class="border">#</th>
                                <th  class="border">Tracking no</th>
                                <th  class="border">Carrier</th>
                                <th  class="border">Company</th>
                                <th  class="border">Job Tag</th>
                                <th  class="border">Other Tag</th>
                                <th  class="border">First check-in at</th>
                                <th  class="border">First check-in by</th>
                                <th  class="border">Latest check-in at</th>
                                <th  class="border">Latest check-in by</th>
                            </tr>
                            <tr class="text-center py-4">
                                <td class="border text-center py-4">1</td>
                                <td class="border text-center py-4"><a href="{{asset('master/single-package')}}">***6Y369A29243</a></td>
                                <td class="border text-center py-4">UPS</td>
                                <td class="border text-center py-4">Marquise Jewelers</td>
                                <td class="border text-center py-4"><a href="{{asset('master/project-details')}}">8725-PHOENIX-ARHAM-STB FRISCO - Copy(1)</a><span class="bg-success rounded-pill px-2">J49331</span></td>
                                <td class="border text-center py-4"></td>
                                <td class="border text-center py-4">2023-06-12 22:54</td>
                                <td class="border text-center py-4">Faye Wu</td>
                                <td class="border text-center py-4">2023-06-13 21:53</td>
                                <td class="border text-center py-4">Gabriel</td>
                               
                            </tr>
                        </table>
                    </tbody>
    
                    <div class="d-flex justify-content-between align-items-center my-2 ">
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
          
        
         

        {{-- <div class="from-group text-center py-2">
            <p>No matching records found</p>
        </div> --}}

        
            

           
    </div>





