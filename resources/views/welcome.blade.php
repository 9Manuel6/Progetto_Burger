<x-layout>
    
   



    <header class="redBg d-flex justify-content-center flex-column align-items-center vh-100">
        @if (session('create'))
            <div class="alert alert-success">
                {{ session('create') }}
            </div>
        @endif
        <h1 class="display-1 text-white"><strong>Burger House</strong></h1>
        <h6 class="display-6"> Gnaam Gnammm </h6>
       <div class="container">
        <div class="row">
            <div class="col-12">
                <a class="aCustom" href="{{route('burger.index')}}"><img class="imgC img-fluid" src="{{ url('/media/panino.png')}}" alt="panino"></a>
            </div>
            </div>
        </div>
       </div>
    </header>
    <section class="container-fluid friesBg">
        <div class="row h-50">
            <div class="text-center">
                <h2 class="display-5 p-3"> I preferiti</h2>
                <h4>Cosa aspetti?? Facci sapere il tuo preferito..!</h4>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="panino col-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                <a href=""> 
                    <img class="hoverC img-fluid"src="{{ url('/media/panino2.png')}}" alt="">
                </a>
            </div>
            <div class="pollo col-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center align-items-center">
                <a href=""> 
                    <img class="hoverC img-fluid" src="{{url('/media/alette.png')}}" alt="">
                </a>
            </div>
        </div>
    </section>
            {{-- <div class="container-fluid formCustom ">
                <div class="row">
                    <div class="col-12"> 
                            <h2 class="text-center my-5">I vostri Panini</h2>
                        <form class="text-center" method="POST" action="{{route('contatti')}}" enctype="multipart/form-data">
                            @csrf
                            @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                           
                            <div class="mb-3">
                                    <label for="title" class="form-label">Nome</label>
                                    <input type="text" name="title" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                    <label for="ingredienti" class="form-label">Ingredienti</label>
                                    <textarea class="form-control" name="ingredienti" id="ingredienti" cols="30" rows="7"></textarea>
                            </div>
                            <div class="mb-3">
                                    <label for="imgCibo" class="form-label">Img Cibo</label>
                                    <input type="file" name="imgCibo" class="form-control" id="imgCibo" >
                            </div>  
                            <button type="submit" class="btn btnCustom">Gnaam</button>
                        </form>
                    </div> 
                </div>
            </div>--}}
</x-layout>