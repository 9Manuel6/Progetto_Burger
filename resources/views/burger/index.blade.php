<x-layout header="Tutti i panini inseriti">
   
    <div class="container">
        <div class="row justify-content-center">
            @foreach($burgers as $burger)
                <div class="col-12 col-md-4">
                    <div class="card m-5">
                        {{-- <img src="{{url($book->cover)}}" class="card-img-top " alt="..."> --}}
                        <div class="card-body ">
                            <h5 class="card-title">{{ $burger->title }}</h5>
                            <p class="small fst-italic text-muted">{{ $burger->ingredienti }}</p>                         
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</x-layout>


