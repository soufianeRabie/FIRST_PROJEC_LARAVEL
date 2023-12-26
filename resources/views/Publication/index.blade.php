<x-master title="profiles" >
    <div class="row container mx-auto my-4" >
    @foreach ($profiles as $profile)
        
    <x-card-profile :profile="$profile"></x-card-profile>
    
    @endforeach

</div>
    <div class="d-flex justify-content-end mx-5">
        {{$profiles->links()}}
    </div>
</x-master>
