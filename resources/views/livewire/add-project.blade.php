<div class="mx-4">
    <div>
        <span class="text-green-700">{{ $msg }}</span>
    </div>
    <div class="row pb-3 flex gap-x-3">
        <div class="w-1/3">
            <label for="floatingInput" class="my-0" style="font-weight: 600">PO Number</label>
            <br>
            <input type="text" placeholder="PO Number" class="w-full" {{ $disabled }} wire:model="po_number">
            @error('po_number')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-1/3">
            <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated Budget</label>
            <br>
            <input type="number" placeholder="Estimated Budget" class="w-full" {{ $disabled }} wire:model="budget">
            <br>
            @error('budget')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <div class="w-1/3">
            <label for="floatingInput" class="my-0" style="font-weight: 600">Estimated Delivery Date</label>
            <br>
            <input type="date" placeholder="Estimated Delivery Date" class="w-full" {{ $disabled }}
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
    <div class="flex gap-x-3">
        <div class="mb-3 w-full">
            <label for="">Pic<span>*</span></label>
            <input type="file" wire:model="ref_images"
                class="block  px-2 w-full text-sm text-gray-900 bg-transparent  border-2 border-gray-300" multiple accept="image/*"/>
            <div wire:loading wire:target="ref_images">Uploading...</div>
    
            @error('ref_images')
                <span style="color:red">{{ $message }}</span>
            @enderror
        </div>
        <div class="float-right my-3">
            <button wire:loading.remove wire:click="store"
                class="px-10 py-2 bg-[rgb(209,96,20)] text-white text-lg mt-3">submit</button>
        </div>
    </div>
    
    
        <div class="w-full grid grid-cols-6 gap-2">
            @foreach ($ref_images as $image)
                <img  src="{{$image->temporaryUrl()}}" alt="">
            @endforeach
        </div>

</div>
