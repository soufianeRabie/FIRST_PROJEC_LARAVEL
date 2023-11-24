@props(['type'])
<div class="alert alert-{{$type}}" role="alert">
   @if (session()->has('profile'))
   <div class="alert alert-success" role="alert">
      <strong>{{$profile->name}}</strong>{{session('success')}}
   </div>

   
   @else{{$slot}}
       
   @endif
</div>
