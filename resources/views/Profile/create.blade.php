<x-master title="create" >
  <form action="{{route('profiles.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3 container">
        <label for="name" class="form-label my-3">Name</label>
        <input type="text" name="name" class="form-control"  value="{{old('name')}}">
      @error('name')
      <div class="text  text-danger">{{$message}}</div>
          
      @enderror
  
        <label for="email" class="form-label my-3">email</label>
        <input type="text" name="email"  class="form-control" value="{{old('email')}}">
        @error('email')
        <div class="text text-danger">{{$message}}</div>
            
        @enderror

        <label for="password" class="form-label my-3">password</label>
        <input type="password" name="password" class="form-control" value="{{old('password')}}">
        @error('password')
        <div class="text text-danger">{{$message}}</div>
            
        @enderror

        <label for="password_confirmation" class="form-label my-3">confirmation mot pass</label>
        <input type="password" name="password_confirmation" class="form-control"  >
      
   
  
      <label for="bio" class="form-label my-3">Description </label>
      <textarea  name="bio" class="form-control" >{{old('bio')}}</textarea>
      
      @error('bio')
      <div class="text  text-danger">{{$message}}</div>
          
      @enderror

      <label for="image" class="form-label my-3">Image</label>
      <input type="file" name="image" class="form-control">

      @error('image')
      <div class="text text-danger">{{$message}}</div>
      @enderror

      <input name="submit" type="submit" id="submit" class="btn btn-primary w-100 my-3" type="button" value="Add">
  
  </div>
</form>
</x-master>
