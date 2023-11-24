
  <div class="col-sm-4 my-4">
        <div class="card m-1" >
        <img src='{{ asset('/storage/'.$profile->image) }}' class="card-img-top" height="140px" alt="...">
        <div class="card-body">
          <h5 class="card-title text text-success">{{$profile->name}}</h5>
          <p class="card-text">{{Str::limit($profile->bio , 20 )}}</p>
          <a name="" id="" class="stretched-link" href="{{route('profiles.show',$profile->id)}}" role="button"></a>
        </div>
        <div class="card-foot border-top px-3 py-3 bg-light" style="z-index: 9">
          <form action="{{route('profiles.destroy' , $profile->id)}}" method="POST" >
            @method('DELETE')
            @csrf
            <button class="btn btn-danger float-end" >delete</button>
          </form>

          <form action="{{route('profiles.edit' , $profile->id)}}" method="GET" >
            @csrf
            <button class="btn btn-primary float-end px-2 mx-2" >update</button>
          </form>

        </div>
      </div>

   </div>


