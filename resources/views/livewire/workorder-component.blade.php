<div>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans&display=swap');

        body {
            background-color: #eeeeee;
            font-family: 'Open Sans', serif
        }

        .container {
            margin-top: 0px;
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
                                <th wire:click="sort('user_id')" style="cursor: pointer">Status <i
                                        class="fas fa-sort"></i>
                                </th>
                                <th>
                                    Action
                                    @if ($role == 1 || $role == 2)
                                        <button wire:click="add" type="button" data-toggle="modal"
                                            data-target="#exampleModal" class="btn text-lg p-0 m-0"> <i
                                                class="fas fa-plus-square"></i>
                                        </button>
                                    @endif
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($workorders as $item)
                                <tr @if ($loop->odd) class="" @endif>
                                    <td>{{ $item->job_id ?? '' }}</td>
                                    <td>{{ $item->customer->code ?? '' }}</td>
                                    <td>{{ $item->title ?? '' }}</td>
                                    <td>{{ $item->process->name ?? '' }}</td>
                                    <td>{{ $item->start_date ?? '' }}</td>
                                    <td>{{ $item->end_date ?? '' }}</td>
                                    <td>{{ $item->status->name ?? 'Open' }}
                                        {{-- ({{$item->approvalStatus->name ?? "Upload Pending"}}) --}}
                                    </td>
                                    <td>
                                        @if ($role == 1 || $role == 4)
                                            <button class="btn text-success p-0" wire:click="edit({{ $item->id }})"
                                                data-toggle="modal" data-target="#exampleModal">
                                                <i class="fas fa-user-edit"></i>
                                            </button>
                                        @endif
                                        <button wire:click="view('disabled',{{ $item->id }})"
                                            class="btn text-primary p-1" data-toggle="modal"
                                            data-target="#exampleModal">
                                            <i class="fas fa-eye"></i>
                                        </button>
                                        @if ($role == 1 || $role == 4)
                                            <button class="btn text-danger p-0" data-toggle="modal"
                                                data-target="#exampleModal"
                                                wire:click="deleteConfirmation({{ $item->id }},'delete')">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                        @endif
                                        @if ($role == 3)
                                            <button class="btn text-danger p-0" data-toggle="modal"
                                                data-target="#exampleModal"
                                                wire:click="uploadShow({{ $item->id }},'upload')">
                                                <i class="fas fa-upload"></i>
                                            </button>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->

            </div>
            <!-- /.card -->
            {{ $workorders->links() }}
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog @if ($delete != 'delete') modal-xl @endif" role="document">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h5 class="modal-title" id="exampleModalLabel">Workorder</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body  px-4">
                    @if ($disabled)
                        <div class="container" style="color:#000">
                            <article class="card">
                                <header class="card-header">
                                    <h6>Order ID: {{ $workorder->job_id }}</h6>
                                </header>
                                <div class="card-body" style="padding-top: 0px;">
                                    <div class="track">
                                        <div class="step active"> <span class="icon"> <i class="fa fa-check"></i>
                                            </span>
                                            <span class="text">Order confirmed</span>
                                        </div>
                                        <div class="step @if($workorder->process_id>=2) active @endif"> <span class="icon"> <i class="fa fa-cog"></i>
                                            </span>
                                            <span class="text">
                                                Design</span>
                                        </div>
                                        <div class="step @if($workorder->process_id>=3) active @endif"> <span class="icon"> <i class="fa fa-users"></i>
                                            </span> <span class="text"> Cad </span> </div>
                                        <div class="step @if($workorder->process_id>=3 || $workorder->is_closed==1) active @endif"> <span class="icon"> <i class="fa fa-box"></i>
                                            </span> <span class="text">Production</span> </div>
                                    </div>
                                    <article class="card">
                                        <div class="card-body">
                                            <div class="row">


                                                <div class="col-lg-10">
                                                    <h5><b>Title :</b>{{ $workorder->title }}</h5>
                                                    <hr>
                                                    <p>
                                                        <b>Customer Requirement :</b> {{ $workorder->info }}
                                                    </p>
                                                </div>
                                                <div class="col-lg-2">
                                                    <h6>Ref Image</h6>
                                                    <a href="{{ asset('storage/' . $workorder->image) }}"
                                                        target="_blank" rel="noopener noreferrer">
                                                        <img style="width: 100%; float: right;"
                                                            src="{{ asset('storage/' . $workorder->image) }}">
                                                    </a>
                                                </div>
                                            </div>

                                        </div>
                                    </article>
                                    @if ($workorder->upload)
                                        @if (($role == 2 && $workorder->upload->approval_status_id == 2) || $role == 1 || $role == 3 || $role == 4)
                                            <article>
                                                @php
                                                    $ctr = count($workorder->uploads);
                                                @endphp
                                                @foreach ($workorder->uploads as $upload)
                                                    @if ($role == 2 && $ctr < count($workorder->uploads))
                                                        @php
                                                            continue;
                                                        @endphp
                                                    @endif
                                                    <div class="card p-2">
                                                        <div class="row">
                                                            @foreach ($upload->images as $item)
                                                                <div class="col-lg-2">
                                                                    <div
                                                                        style="display: flex; justify-content: space-between">
                                                                        <b>Image {{ $loop->iteration }}</b>
                                                                        <button class="btn text-danger"
                                                                            wire:click="deleteImg({{ $item->id }},{{ $workorder->id }})">
                                                                            <i class="fas fa-trash-alt"></i></button>
                                                                    </div>

                                                                    <a href="{{ asset('storage/' . $item->image) }}"
                                                                        target="_blank" rel="noopener noreferrer">
                                                                        <img style="width: 100%;"
                                                                            src="{{ asset('storage/' . $item->image) }}">
                                                                    </a>

                                                                </div>
                                                            @endforeach
                                                            @if ($ctr == count($workorder->uploads))
                                                                @if ($upload->for_customer_approval == false)
                                                                    <div class="col-lg-12">
                                                                        <h5>Comment :</h5>
                                                                        <textarea wire:model="approval_comment" class="form-control"></textarea>
                                                                        @error('approval_comment')
                                                                            <span
                                                                                style="color:red">{{ $message }}</span>
                                                                        @enderror
                                                                    </div>

                                                                    @if ($role_id != 3)
                                                                        <div class="col-lg-3 mt-1">
                                                                            <select wire:model="approval_status_id"
                                                                                class="form-control">
                                                                                <option value="">Select</option>
                                                                                @foreach ($approved_statuses->whereNotIn('id', [1]) as $item)
                                                                                    <option
                                                                                        value="{{ $item->id }}">
                                                                                        {{ $item->name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    @endif
                                                                    <div class="col-lg-3 mt-1">
                                                                        <button
                                                                            wire:click="approvalSend({{ $upload->id }})"
                                                                            class="btn btn-primary">Send</button>
                                                                    </div>
                                                                @elseif($role_id == 4 || $role_id == 4)
                                                                    <div class="col-lg-12"></div>
                                                                    <div class="col-lg-3 mt-1">
                                                                        <select wire:model="new_process_id"
                                                                            class="form-control">
                                                                            <option value="">Select</option>
                                                                            @foreach ($processes as $item)
                                                                                <option value="{{ $item->id }}">
                                                                                    {{ $item->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-lg-3 mt-1">
                                                                        <button
                                                                            wire:click="createNewProcess({{ $workorder->id }})"
                                                                            class="btn btn-primary">Send</button>
                                                                    </div>
                                                                @endif
                                                            @endif
                                                            @foreach ($upload->comments as $comment)
                                                                <div class="col-lg-11 m-1"
                                                                    style="background-color: rgb(220, 230, 220); border-radius: 5px;">
                                                                    <span style="font-size:10px">
                                                                        {{ $comment->commentBy->name ?? '' }}
                                                                    </span>
                                                                    <br>
                                                                    {{ $comment->comment }}

                                                                </div>
                                                            @endforeach
                                                            <hr>
                                                            @php
                                                                $ctr--;
                                                            @endphp
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </article>
                                        @endif
                                    @endif
                                </div>
                            </article>
                        </div>
                        @foreach ($old_workorders as $workorder)
                            <div class="container" style="color:#000">
                                <article class="card">
                                    <header class="card-header">
                                        <div style="display: flex; justify-content: space-between">

                                       
                                        <h6>Process : {{ $workorder->process->name }} </h6>
                                        <h6>Status : Completed</h6>
                                    </div>
                                    </header>
                                    <div class="card-body" style="padding-top: 0px;">
                                        <article class="card">
                                            <div class="card-body">
                                                <div class="row mt-1">


                                                    <div class="col-lg-10">
                                                        <h5><b>Title :</b>{{ $workorder->title }}</h5>
                                                        <hr>
                                                        <p>
                                                            <b>Customer Requirement :</b> {{ $workorder->info }}
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <h6>Ref Image</h6>
                                                        <a href="{{ asset('storage/' . $workorder->image) }}"
                                                            target="_blank" rel="noopener noreferrer">
                                                            <img style="width: 100%; float: right;"
                                                                src="{{ asset('storage/' . $workorder->image) }}">
                                                        </a>
                                                    </div>
                                                </div>

                                            </div>
                                        </article>
                                        @if ($workorder->upload)
                                            @if (($role == 2 && $workorder->upload->approval_status_id == 2) || $role == 1 || $role == 3 || $role == 4)
                                                <article>
                                                    @php
                                                        $ctr = count($workorder->uploads);
                                                    @endphp
                                                    @foreach ($workorder->uploads as $upload)
                                                        @if ($role == 2 && $ctr < count($workorder->uploads))
                                                            @php
                                                                continue;
                                                            @endphp
                                                        @endif
                                                        <div class="card p-2">
                                                            <div class="row">
                                                                @foreach ($upload->images as $item)
                                                                    <div class="col-lg-2">
                                                                        <div
                                                                            style="display: flex; justify-content: space-between">
                                                                            <b>Image {{ $loop->iteration }}</b>
                                                                          
                                                                        </div>

                                                                        <a href="{{ asset('storage/' . $item->image) }}"
                                                                            target="_blank" rel="noopener noreferrer">
                                                                            <img style="width: 100%;"
                                                                                src="{{ asset('storage/' . $item->image) }}">
                                                                        </a>

                                                                    </div>
                                                                @endforeach
                                                                @if ($ctr == count($workorder->uploads))
                                                                    @if ($upload->for_customer_approval == false)
                                                                        <div class="col-lg-12">
                                                                            <h5>Comment :</h5>
                                                                            <textarea wire:model="approval_comment" class="form-control"></textarea>
                                                                            @error('approval_comment')
                                                                                <span
                                                                                    style="color:red">{{ $message }}</span>
                                                                            @enderror
                                                                        </div>

                                                                        @if ($role_id != 3)
                                                                            <div class="col-lg-3 mt-1">
                                                                                <select wire:model="approval_status_id"
                                                                                    class="form-control">
                                                                                    <option value="">Select
                                                                                    </option>
                                                                                    @foreach ($approved_statuses->whereNotIn('id', [1]) as $item)
                                                                                        <option
                                                                                            value="{{ $item->id }}">
                                                                                            {{ $item->name }}
                                                                                        </option>
                                                                                    @endforeach
                                                                                </select>
                                                                            </div>
                                                                        @endif
                                                                        <div class="col-lg-3 mt-1">
                                                                            <button
                                                                                wire:click="approvalSend({{ $upload->id }})"
                                                                                class="btn btn-primary">Send</button>
                                                                        </div>
                                                                    @endif
                                                                @endif
                                                                @foreach ($upload->comments as $comment)
                                                                    <div class="col-lg-11 m-1"
                                                                        style="background-color: rgb(220, 230, 220); border-radius: 5px;">
                                                                        <span style="font-size:10px">
                                                                            {{ $comment->commentBy->name ?? '' }}
                                                                        </span>
                                                                        <br>
                                                                        {{ $comment->comment }}

                                                                    </div>
                                                                @endforeach
                                                                <hr>
                                                                @php
                                                                    $ctr--;
                                                                @endphp
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </article>
                                            @endif
                                        @endif
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    @elseif($delete != 'delete' && $action != 'upload')
                        <div class="card p-2">
                            <div class="row pb-3 ">
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0"
                                        style="font-weight: 600">Customer</label>
                                    @livewire(
                                        'component.search-component',
                                        [
                                            'table_name' => 'customers',
                                            'table_search_column' => 'name',
                                            'name' => 'customer_id',
                                            'disabled' => $customer_disabled,
                                            'table_default_value' => $customer_id,
                                        ],
                                        key('customer_id' . $customer_id)
                                    )
                                    @error('customer')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Job ID</label>
                                    <input type="text" placeholder="Job ID" class="form-control" disabled
                                        wire:model="job_id" style="">
                                    @error('job_id')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">PO
                                        Number</label>
                                    <input type="text" placeholder="PO Number" class="form-control"
                                        {{ $disabled }} wire:model="po_number">
                                    @error('po_number')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated
                                        Budget</label>
                                    <input type="text" placeholder="Estimated Budget" class="form-control"
                                        {{ $disabled }} wire:model="budget">
                                    @error('budget')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0"
                                        style="font-weight: 600">Process</label>
                                    @livewire(
                                        'component.search-component',
                                        [
                                            'table_name' => 'processes',
                                            'table_search_column' => 'name',
                                            'name' => 'process_id',
                                            'table_default_value' => $process_id,
                                        ],
                                        key('process_id' . $process_id)
                                    )
                                    @error('process_id')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Assign
                                        to</label>
                                    @livewire(
                                        'component.search-component',
                                        [
                                            'table_name' => 'employees',
                                            'table_search_column' => 'name',
                                            'name' => 'employee_id',
                                            'table_default_value' => $employee_id,
                                        ],
                                        key('employee_id' . $employee_id)
                                    )
                                    @error('employee_id')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated
                                        Delivery Date</label>
                                    <input type="date" placeholder="Estimated Delivery Date" class="form-control"
                                        {{ $disabled }} wire:model="end_date">
                                    @error('end_date')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Ref
                                        Image</label>
                                    <input type="file" placeholder="Ref Image" class="form-control"
                                        {{ $disabled }} wire:model="image">
                                    @error('image')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Start
                                        Date</label>
                                    <input type="date" placeholder="Start Date" class="form-control"
                                        {{ $disabled }} wire:model="start_date">
                                    @error('start_date')
                                        <span style="color:red">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Status</label>
                                    <input type="text" placeholder="Status" class="form-control" disabled
                                        wire:model="status_text">
                                </div>
                                <div class="col-lg-3">
                                    <label for="floatingInput" class="my-0" style="font-weight: 600">Approval
                                        Status</label>
                                    <input type="text" placeholder="Approval Status" class="form-control" disabled
                                        wire:model="approval_status_text">
                                </div>
                                <div class="col-lg-9">
                                    <div class="row">

                                        <div class="col-lg-12">
                                            <label for="floatingInput" class="my-0"
                                                style="font-weight: 600">Title</label>
                                            <input type="text" placeholder="Title" class="form-control" disabled
                                                wire:model="title">
                                            @error('title')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="floatingInput" class="my-0"
                                                style="font-weight: 600">Custome Requirement</label>
                                            <textarea wire:model="info" cols="30" rows="5" class="form-control" disabled></textarea>
                                            @error('info')
                                                <span style="color:red">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="col-lg-3">

                                    @if ($image)
                                        Photo Preview:
                                        <img style="width: 200px;" src="{{ $image->temporaryUrl() }}">
                                    @else
                                        @if ($image_edit)
                                            <img style="width: 200px;" src="{{ asset('storage/' . $image_edit) }}">
                                        @endif
                                    @endif

                                </div>
                            </div>
                        </div>
                    @elseif($action == 'upload')
                        <div class="container" style="color:#000">
                            <article class="card">
                                <header class="card-header">
                                    <h6>Order ID: {{ $workorder->job_id }}</h6>
                                </header>
                                <div class="card-body" style="padding-top: 0px;">
                                    <input wire:model="upload_images" type="file" multiple class="form-control">
                                    <div>
                                        @if (count($upload_images) > 0)
                                            @foreach ($upload_images as $item)
                                                <img style="width: 200px" src="{{ $item->temporaryUrl() }}">
                                            @endforeach
                                        @endif
                                    </div>
                                </div>

                            </article>
                        </div>
                    @else
                        <span class="text-danger"> Are you sure to delete this employee?</span>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    @if (!$disabled)
                        @if ($workorder_id && $delete == 'delete')
                            <button type="button" wire:click.prevent="delete()" data-dismiss="modal"
                                class="btn btn-danger close-modal">Delete</button>
                        @elseif($workorder_id)
                            @if ($action)
                                <button type="button" wire:click.prevent="upload()"
                                    class="btn btn-primary close-modal">upload</button>
                            @else
                                <button type="button" wire:click.prevent="update()"
                                    class="btn btn-primary close-modal">Update</button>
                            @endif
                        @else
                            <button type="button" wire:click.prevent="store()"
                                class="btn btn-primary close-modal">Save</button>
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
