<x-master title="login">
<form action="{{route('login')}}" method="POST">
  @csrf

    <div class="container">
        <div class="mb-3">

        <label for="" class="form-label">email</label>
        <input type="email" name="email" class="form-control" value="{{old('email')}}" >
        @error('email')
          <span class="text-danger">{{$message}}</span>
        @enderror
      </div>

      <div class="mb-3">
        
        <label for="" class="form-label">password</label>
        <input type="text" name="password" class="form-control" >
      </div>

      <input name="submit" type="submit" id="submit" class="btn btn-primary w-100 my-3" type="button" value="connecter">
    </div>
    

</form>
</x-master>