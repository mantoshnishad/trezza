<div>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            background-color: #eeeeee;
            font-family: 'Open Sans', serif
        }

        .container {
            margin-top: 50px;
            margin-bottom: 50px
        }

        .card {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, 0.1);
            border-radius: 0.10rem
        }

        .card-header:first-child {
            border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0
        }

        .card-header {
            padding: 0.75rem 1.25rem;
            margin-bottom: 0;
            background-color: #fff;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1)
        }

        .track {
            position: relative;
            background-color: #ddd;
            height: 7px;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            margin-bottom: 60px;
            margin-top: 50px
        }

        .track .step {
            -webkit-box-flex: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            width: 25%;
            margin-top: -18px;
            text-align: center;
            position: relative
        }

        .track .step.active:before {
            background: #FF5722
        }

        .track .step::before {
            height: 7px;
            position: absolute;
            content: "";
            width: 100%;
            left: 0;
            top: 18px
        }

        .track .step.active .icon {
            background: #ee5435;
            color: #fff
        }

        .track .icon {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            position: relative;
            border-radius: 100%;
            background: #ddd
        }

        .track .step.active .text {
            font-weight: 400;
            color: #000
        }

        .track .text {
            display: block;
            margin-top: 7px
        }

        .itemside {
            position: relative;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            width: 100%
        }

        .itemside .aside {
            position: relative;
            -ms-flex-negative: 0;
            flex-shrink: 0
        }

        .img-sm {
            width: 80px;
            height: 80px;
            padding: 7px
        }

        ul.row,
        ul.row-sm {
            list-style: none;
            padding: 0
        }

        .itemside .info {
            padding-left: 15px;
            padding-right: 7px
        }

        .itemside .title {
            display: block;
            margin-bottom: 5px;
            color: #212529
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem
        }

        .btn-warning {
            color: #ffffff;
            background-color: #ee5435;
            border-color: #ee5435;
            border-radius: 1px
        }

        .btn-warning:hover {
            color: #ffffff;
            background-color: #ff2b00;
            border-color: #ff2b00;
            border-radius: 1px
        }
    </style>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Work Order</h3>

                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <input wire:model="search" type="text" name="table_search" class="form-control float-right"
                                placeholder="Search">

                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>
                            <tr>
                                <th wire:click="sort('role_id')" style="cursor: pointer">Job ID <i
                                        class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">Customer <i
                                        class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">Title <i
                                        class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">Process <i
                                        class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">Start Date <i
                                        class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">End Date <i
                                        class="fas fa-sort"></i>
                                </th>
                                <th>Action <button wire:click="add" type="button" data-toggle="modal"
                                        data-target="#exampleModal" class="btn text-lg p-0 m-0"> <i
                                            class="fas fa-plus-square"></i>
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($workorders as $item)
                            <tr @if($loop->odd) class="" @endif>
                                <td>{{$item->job_id ?? ""}}</td>
                                <td>{{$item->customer->name ?? ""}}</td>
                                <td>{{$item->title ?? ""}}</td>
                                <td>{{$item->process->name ?? ""}}</td>
                                <td>{{$item->start_date ?? ""}}</td>
                                <td>{{$item->end_date ?? ""}}</td>
                                <td>
                                    <button class="btn text-success p-0" wire:click="edit({{$item->id}})"
                                        data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-user-edit"></i>
                                    </button>
                                    <button wire:click="view('disabled',{{$item->id}})" class="btn text-primary p-1"
                                        data-toggle="modal" data-target="#exampleModal">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <button class="btn text-danger p-0" data-toggle="modal" data-target="#exampleModal"
                                        wire:click="deleteConfirmation({{$item->id}},'delete')">
                                        <i class="fas fa-trash-alt"></i>
                                    </button>
                                </td>
                            </tr>

                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
            {{$workorders->links()}}
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog @if($delete!='delete') modal-xl @endif" role="document">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h5 class="modal-title" id="exampleModalLabel">Workorder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body  px-4">
                    @if($disabled)
                    <div class="container" style="color:#000">
                        <article class="card">
                            <header class="card-header">Tracking </header>
                            <div class="card-body">
                                <h6>Order ID: OD45345345435</h6>
                                <article class="card">
                                    <div class="card-body row">
                                        <div class="col"> <strong>Estimated Delivery time:</strong>
                                            <br>29 nov 2019
                                        </div>
                                        <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART, |
                                            <i class="fa fa-phone"></i> +1598675986
                                        </div>
                                        <div class="col"> <strong>Status:</strong> <br> Picked by the
                                            courier </div>
                                        <div class="col"> <strong>Tracking #:</strong> <br>
                                            BD045903594059 </div>
                                    </div>
                                </article>
                                <article class="card">
                                    <div class="card-body row">
                                        <div class="col"> <strong>Estimated Delivery time:</strong>
                                            <br>29 nov 2019
                                        </div>
                                        <div class="col"> <strong>Shipping BY:</strong> <br> BLUEDART, |
                                            <i class="fa fa-phone"></i> +1598675986
                                        </div>
                                        <div class="col"> <strong>Status:</strong> <br> Picked by the
                                            courier </div>
                                        <div class="col"> <strong>Tracking #:</strong> <br>
                                            BD045903594059 </div>
                                    </div>
                                </article>
                                <div class="track">
                                    <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span>
                                        <span class="text">Order confirmed</span>
                                    </div>
                                    <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span>
                                        <span class="text">
                                            Picked by courier</span>
                                    </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-truck"></i>
                                        </span> <span class="text"> On the way </span> </div>
                                    <div class="step"> <span class="icon"> <i class="fa fa-box"></i>
                                        </span> <span class="text">Ready for pickup</span> </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    @elseif($delete!='delete')
                    <div class="card p-2">
                    <div class="row pb-3 ">
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Customer</label>
                            @livewire('component.search-component',
                            [
                            'table_name'=> 'customers',
                            'table_search_column'=> 'name',
                            'name' => 'customer_id',
                            'table_default_value' => $customer_id,
                            ],
                            key('customer_id'.$customer_id)
                            )
                            @error('customer')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Job ID</label>
                            <input type="text" placeholder="Job ID" class="form-control" {{$disabled}}
                                wire:model="job_id" style="">
                            @error('job_id')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">PO Number</label>
                            <input type="text" placeholder="PO Number" class="form-control" {{$disabled}}
                                wire:model="po_number" >
                            @error('po_number')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated Budget</label>
                            <input type="text" placeholder="Estimated Budget" class="form-control" {{$disabled}}
                                wire:model="budget" >
                            @error('budget')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Process</label>
                            @livewire('component.search-component',
                            [
                            'table_name'=> 'processes',
                            'table_search_column'=> 'name',
                            'name' => 'process_id',
                            'table_default_value' => $process_id,
                            ],
                            key('process_id'.$process_id)
                            )
                            @error('process_id')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            {{-- <label for="floatingInput" class="my-0" style="font-weight: 600">Order Date</label>
                            <input type="date" placeholder="Order Date" class="form-control" {{$disabled}}
                                wire:model="start_date" >
                            @error('start_date')
                            <span style="color:red">{{$message}}</span>
                            @enderror --}}
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Assign to</label>
                            @livewire('component.search-component',
                            [
                            'table_name'=> 'employees',
                            'table_search_column'=> 'name',
                            'name' => 'employee_id',
                            'table_default_value' => $employee_id,
                            ],
                            key('employee_id'.$employee_id)
                            )
                            @error('employee_id')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated Delivery Date</label>
                            <input type="date" placeholder="Estimated Delivery Date" class="form-control" {{$disabled}}
                                wire:model="end_date" >
                            @error('end_date')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Ref Image</label>
                            <input type="file" placeholder="Ref Image" class="form-control" {{$disabled}}
                                wire:model="image" >
                                @error('image')
                                <span style="color:red">{{$message}}</span>
                                @enderror
                        </div>
                        <div class="col-lg-9">
                            <div class="row">
                                <div class="col-lg-12">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Title</label>
                                    <input type="text" placeholder="Title" class="form-control" {{$disabled}}
                                        wire:model="title" >
                                    @error('title')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-12">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Mere Imformation</label>
                                    <textarea wire:model="info" cols="30" rows="5" class="form-control"
                                        ></textarea>
                                    @error('info')
                                    <span style="color:red">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-lg-3">
                            
                            @if ($image)
                            Photo Preview:
                            <img style="width: 200px;" src="{{ $image->temporaryUrl() }}">
                            @endif
                            
                        </div>
                    </div>
                </div>
                    @else
                    <span class="text-danger"> Are you sure to delete this employee?</span>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    @if(!$disabled)
                    @if($workorder_id && $delete=='delete')
                    <button type="button" wire:click.prevent="delete()" data-dismiss="modal"
                        class="btn btn-danger close-modal">Delete</button>
                    @elseif($workorder_id)
                    <button type="button" wire:click.prevent="update()"
                        class="btn btn-primary close-modal">Update</button>
                    @else
                    <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>