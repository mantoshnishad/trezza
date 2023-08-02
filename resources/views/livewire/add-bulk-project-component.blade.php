<div>
    <div class="py-2  pl-2  border-bottom ">
        <a href="">Home</a><span> > </span><a href="">Project</a><span> > </span><a href="">Add Bulk Project</a>
    </div>

    <div class="py-3">
        <h4><span>Add Bulk Project</h4>
    </div>

    <div class="d-flex">
        <div class="text-danger">
            <p><span style="font-weight: 900">Note :</span> The file MUST follow the EXCEL file format as per the sample here. Please download the sample for reference.</p>
            <ol>
                <li>Please do not change any <span style="font-weight: 900">Title</span> in the file</li>
                <li>You have mandatory data fields ORDER_NUMBER OR STYLE_NAME.</li>
                <li>Select FINISH , PURITY_COLOR_METAL , RING_SIZE , CUSTOMERS_METAL , PLATING , QC_FILE , 3D_PRINTING_QUALITY, WAX_ONLY , CASTING_ONLY , MCC_SUPPLY_MELEE , MOLD , CLARITY, SUPPLY_CENTER , SENDING_MY_OWN , SET_CENTER , PRONG_STYLE , MCC_MAKE_CAD , PROVIDE_FILE , REALISTIC_RENDERING , RUSH from list.</li>
                <li>CUSTOM_SPECIFICATION , CENTER_SHAPE, CENTER_DIMENSIONS, and QUANTITY (if <span style="font-weight: 900">QUANTITY </span> left blank or 0 is set to be 1 automatically ) are non-mandatory data fields.</li>
                <li>If you select SET_CENTER > YES, then PRONG_STYLE options will be display, and if You select SET_CENTER > NO, then PRONG_STYLE options will not be displayed.</li>
                <li><span  class="" style="font-weight: 900">You have to upload .xlsx extension file only.</span></li>
                <li>In the Sample file, the last 2 columns CAD_FILE and PIC_FILE are for uploading files with the project from File Manager (Add the file name in it). For the name of the (CAD_FILE, PIC_FILE), you have to go to the file manager and upload the file, if it is there, then just copy the file name and keep it in the column of the sheet, if you want to upload more than one file, then you have to give file name with separated by a comma.</li>
            </ol>
        </div>
        <div class="w-50">
            <button class="rounded-pill px-2 border-0" style="background-color: rgb(153,27,67); color:white;">Download Sample File</button>
        </div>
    </div>

    <div class="border ">
        <div class="border-bottom mx-2 py-2">
            <h4 style="font-weight: 900;"><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-briefcase" viewBox="0 0 16 16">
                <path d="M6.5 1A1.5 1.5 0 0 0 5 2.5V3H1.5A1.5 1.5 0 0 0 0 4.5v8A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-8A1.5 1.5 0 0 0 14.5 3H11v-.5A1.5 1.5 0 0 0 9.5 1h-3zm0 1h3a.5.5 0 0 1 .5.5V3H6v-.5a.5.5 0 0 1 .5-.5zm1.886 6.914L15 7.151V12.5a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5V7.15l6.614 1.764a1.5 1.5 0 0 0 .772 0zM1.5 4h13a.5.5 0 0 1 .5.5v1.616L8.129 7.948a.5.5 0 0 1-.258 0L1 6.116V4.5a.5.5 0 0 1 .5-.5z"/>
              </svg></span>UPLOAD PROJECT FILE</h4>
        </div>
        <div class="form-group">
            <h4 class="mx-4 pt-2">Projects CSV File</h4>
            <div class="border m-4 form-group">
                <div class=" m-4 d-flex align-items-center justify-content-center"
                    style="width:95%; height:200px;  border:2px solid black; border-style: dotted;">
                    <h2>Drag & Drop Files here</h2>
                </div>
            </div>
            <div class="border form-group mx-4">
                <input id="file-1" type="file" multiple class="file w-100 text-right" name="file[]">
            </div>
            <div class="form-group">
                <h6 class="text-center">Or</h6>
                <div class=" d-flex align-items-center justify-content-center">
                    <button><span class="mr-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dropbox" viewBox="0 0 16 16">
                        <path d="M8.01 4.555 4.005 7.11 8.01 9.665 4.005 12.22 0 9.651l4.005-2.555L0 4.555 4.005 2 8.01 4.555Zm-4.026 8.487 4.006-2.555 4.005 2.555-4.005 2.555-4.006-2.555Zm4.026-3.39 4.005-2.556L8.01 4.555 11.995 2 16 4.555 11.995 7.11 16 9.665l-4.005 2.555L8.01 9.651Z"/>
                      </svg></span>Choose From
                        Dropbox</button>
                </div>
            </div>
        </div>

        <div class="form-group ">
            <h4 class="mx-4 pt-2">List all</h4>
            <div class="border p-4 m-4 form-group">
                <div class="from-group d-flex justify-content-between align-items-center">
                    <div class="">
                        <select name="" id="" style="width: 100px;">
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

                <tbody class="w-100 border">
                    <table class="w-100 border">
                        <tr class="border text-center">
                            <th  class="border">#</th>
                            <th  class="border">Filename</th>
                            <th  class="border">Uploaded by</th>
                            <th  class="border">Uploaded at</th>
                            <th  class="border"> Projects</th>
                        </tr>
                        <tr class="text-center py-4">
                            <td class="text-center py-4"></td>
                            <td class="text-center py-4"></td>
                            <td class="text-center py-4">No data available in table</td>
                            <td class="text-center py-4"></td>
                            <td class="text-center py-4"></td>
                        </tr>
                    </table>
                </tbody>

                <div>
                    <p>Showing 0 to 0 of 0 entries</p>
                </div>
            </div>
        </div>
    </div>
</div>
