<div class="mx-4">
    <div>
        <span class="text-green-700">{{ $msg }}</span>
    </div>
    <div class="row pb-3 flex">
        <div class="col-lg-3">
            <label for="floatingInput" class="my-0" style="font-weight: 600">PO Number</label>
            <input type="text" placeholder="PO Number" class="form-control" {{ $disabled }} wire:model="po_number">
            @error('po_number')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-3">
            <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated Budget</label>
            <input type="number" placeholder="Estimated Budget" class="form-control" {{ $disabled }}
                wire:model="budget">
            <br>
            @error('budget')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-lg-3">
            <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated Delivery Date</label>
            <input type="date" placeholder="Estimated Delivery Date" class="form-control" {{ $disabled }}
                wire:model="end_date">
            @error('end_date')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="col-lg-12 w-full">
        <label for="floatingInput" class="my-0" style="font-weight: 600">Title</label>
        <br>
        <input type="text" placeholder="Title" class="form-control w-full" {{ $disabled }} wire:model="title">
        @error('title')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </div>
    <div class="col-lg-12 w-full">
        <label for="floatingInput" class="my-0" style="font-weight: 600">Mere Imformation</label>
        <br>
        <textarea wire:model="info" cols="30" rows="5" class="form-control w-full"></textarea>

        @error('info')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </div>
    <div class="mb-3">
        <label for="">Pic<span>*</span></label>
        <input type="file" wire:model="ref_image"
            class="block  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300" />
        <div wire:loading wire:target="ref_image">Uploading...</div>
        
        @error('ref_image')
            <span style="color:red">{{ $message }}</span>
        @enderror
    </div>
    <div class="float-right my-3">
        <button wire:click="store" class="px-10 py-2 bg-[rgb(209,96,20)] text-white text-lg">submit</button>
    </div>
</div>
