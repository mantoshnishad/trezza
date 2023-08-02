<div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Employee</h3>

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
                                <th wire:click="sort('role_id')" style="cursor: pointer">Name <i class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">Code <i class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">Email <i class="fas fa-sort"></i>
                                </th>
                                <th wire:click="sort('user_id')" style="cursor: pointer">Profile <i class="fas fa-sort"></i>
                                </th>
                                <th>Action <button wire:click="add" type="button" data-toggle="modal"
                                        data-target="#exampleModal" class="btn text-lg p-0 m-0"> <i
                                            class="fas fa-plus-square"></i>
                                        </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $item)
                            <tr>
                                <td>{{$item->name ?? ""}}</td>
                                <td>{{$item->code ?? ""}}</td>
                                <td>{{$item->email ?? ""}}</td>
                                <td>{{$item->profile ?? ""}}</td>
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
            {{$employees->links()}}
        </div>
    </div>

    <div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog @if($delete!='delete') modal-xl @endif" role="document">
            <div class="modal-content">
                <div class="modal-header px-4">
                    <h5 class="modal-title" id="exampleModalLabel">Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body  px-4">
                    @if($delete!='delete')
                    <div class="row pb-3 ">
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Label Color</label>
                            <input type="text" placeholder="Name" class="col-lg rounded  my-0" {{$disabled}}
                                wire:model="name" style="outline: 0; padding:4px;border:1px solid black">
                            @error('name')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Label Color</label>
                            <input type="text" placeholder="Code" class="col-lg rounded  my-0" {{$disabled}}
                                wire:model="code" style="outline: 0; padding:4px;border:1px solid black">
                            @error('code')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Label Color</label>
                            <input type="email" placeholder="Email" class="col-lg rounded  my-0" {{$disabled}}
                                wire:model="email" style="outline: 0; padding:4px;border:1px solid black">
                            @error('email')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="col-lg-3">
                            <label for="floatingInput" class="my-0" style="font-weight: 600">Label Color</label>
                            <input type="text" placeholder="Profile" class="col-lg rounded  my-0" {{$disabled}}
                                wire:model="profile" style="outline: 0; padding:4px;border:1px solid black">
                            @error('profile')
                            <span style="color:red">{{$message}}</span>
                            @enderror
                        </div>
                    </div>

                    @else
                    <span class="text-danger"> Are you sure to delete this employee?</span>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    @if($employee_id && $delete=='delete')
                    <button type="button" wire:click.prevent="delete()" data-dismiss="modal"
                        class="btn btn-danger close-modal">Delete</button>
                    @elseif($employee_id)
                    <button type="button" wire:click.prevent="update()"
                        class="btn btn-primary close-modal">Update</button>
                    @else
                    <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Save</button>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>