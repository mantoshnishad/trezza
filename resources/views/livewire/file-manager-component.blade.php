<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<div>
    <div class="py-2  pl-2  border-bottom ">
        <a href="">Home</a><span> > </span><a href=""> File manager</a>
    </div>

    <div class="border m-4 p-4">
        <div class="d-flex justify-content-between border-bottom">
        <h2 style="font-weight: 700;"><span class="mr-3"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
            <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
            <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
          </svg></span>FILE MANAGER</h2>

          <div>
            <!-- Button trigger modal -->
<button type="button" style="background-color: rgb(153,27,67);" class="btn  rounded-pill text-white" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Add files
  </button>
</div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title fs-6" id="exampleModalLabel">Add files</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            <div>
                <div class=" my-2">
                    <div class="form-group">
                        <h4 class="mx-4 pt-2">File</h4>
                        <div class="border m-4 form-group">
                            <div class=" m-4 d-flex align-items-center justify-content-center"
                                style="width:95%; height:200px;  border:2px solid black; border-style: dotted;">
                                <h2>Drag & Drop Files here</h2>
                            </div>
                        </div>
                        <div class="border form-group mx-4">
                            <input id="file-1" type="file" multiple class="file w-100 text-right" name="file[]">
                        </div>
                       
                    </div>
            
                    
                </div>
            </div>
            
            {{-- <div class="border my-10 pb-5">
                <div class="border-bottom mx-2 py-2 ">
                <h4 style="font-weight: 900;"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                    <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
                  </svg></span>UPLOAD STL FILE AND GET EASY COST CALCULATOR</h4>
            </div>
        </div> --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
          
        
          <div class="from-group d-flex justify-content-between align-items-center px-3 my-3">
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
               <button class="border-0 px-2 rounded-pill text-white mr-2" style="background-color: rgb(153,27,67);">Project File Upload</button>
                <input type="text" name="" id="" placeholder="Search" class="px-2">
            </div>
        </div>

        <div class="from-group text-center py-2">
            <p>No matching records found</p>
        </div>

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



