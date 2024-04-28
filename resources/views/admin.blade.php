<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    @vite('resources/css/app.css')
    <title>Admin</title>
</head>
<body>
    @role('admin')
    <form action=" {{ route('workspace.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-center items-center h-screen rounded-full ">
        <div class="flex-col justify-evenly w-[30%] bg-red-300 p-5 items-center ">
            <div class="p-2">
                <label for="name" id="name">Name</label>
                <input type="text" name="name" placeholder=" Insert name" value="{{ old('name') }}">
            </div>

            <div class="p-2">
                <label for="description" id="description">description</label>
                <input type="text" name="description" placeholder=" Insert description" {{ old('discription') }}>
            </div>
            <div class="p-2">
                <label for="image" id="image">Image</label>
                <input type="file" name="image" placeholder=" Insert Image" enctype="multipart/form-data">
                
            </div>
            <div class="p-2">
                <label for="amenties" id="ameneties">Ameneties</label>
                <input type="text" name="ameneties" placeholder="ameneties">
                
            </div>
            <div class="p-2">
                <label for="price" id="price">Price</label>
                <input type="text" name="price" placeholder=" Insert price" value="{{ old('price') }}">
            </div>
            <div class="p-2">
                <button class="bg-cyan-500 shadow-lg shadow-cyan-500/50" type="submit">ADD PRODUCT </button>
            {{-- </div><div><a href="{{ route('home.index') }}" class="btn btn-primary">Show all product </a></div> --}}
        </div> 
        </div>
    </form>
    @endrole


    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <hr>
    <br>
    <br>
    <br>

@role('admin')
    <form action=" {{ route('booking.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="flex justify-center items-center h-screen rounded-full ">
        <div class="flex-col justify-evenly w-[30%] bg-red-300 p-5 items-center ">
            <div class="p-2">
                @foreach ($workspaces as $workspace)
                    
               
                <label for="" id="workspace_id">workspace</label>
                <input type="text" name="workspace_id" placeholder=" Insert workspace_id" value="{{ $workspace->id }}">
            </div>
 @endforeach
            <div class="p-2">
                <label for="booking_type" id="booking_type">booking_type</label>
                <input type="text" name="booking_type" placeholder=" Insert description" {{ old('booking_type') }}>
            </div>
           
            <div class="p-2">
                <label for="start_time" id="start_time">start_time</label>
                <input type="time" name="start_time" placeholder="start_time">
                
            </div>

            <div class="p-2">
                <label for="end_time" id="end_time">end_time</label>
                <input type="time" name="end_time" placeholder="end_time">
                
            </div>
            <div class="p-2">
                <label for="status" id="status">status</label>
                <input type="text" name="status" placeholder=" Insert status" >
            </div>
            <div class="p-2">
                <button class="bg-cyan-500 shadow-lg shadow-cyan-500/50" type="submit">ADD Booking </button>
            {{-- </div><div><a href="{{ route('home.index') }}" class="btn btn-primary">Show all product </a></div> --}}
        </div> 
        </div>
    </form>
    @endrole

</body>
</html>