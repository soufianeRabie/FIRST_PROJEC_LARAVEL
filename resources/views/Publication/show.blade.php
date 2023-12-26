<x-master title="{{$profile->name}}" >

  <h3 class="px-4">Profile</h3>
    
<div class="container-fluid">
    <div class="row">
        <div class="card my-4 py-4">
        <img src="{{asset('storage/'.$profile->image)}}" class="card-img-top w-25 mx-auto" alt="No photo">
        <div class="card-body text-center">
          <h5 class="card-title" >#{{$profile->id}} {{$profile->name}} </h5>
          <p class="card-text" >{{$profile->created_at->format('Y-m-d ')}}</p>
          <p class="card-text">Email: <a href="mailto:{{$profile->email}}">{{$profile->email}}</a></p>
          <p class="card-text ">{{$profile->bio}}</p>
        </div>
      </div>
    </div>
</div>



</x-master>
