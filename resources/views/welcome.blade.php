<x-layout>

    <header class="redBg d-flex justify-content-center flex-column align-items-center vh-100">
        <h1 class="display-1 text-white"><strong>Burger House</strong></h1>
        <h6 class="display-6"> Gnaam Gnammm </h6>
        <img class="imgC" src="{{Storage:: url('/media/panino.png')}}" alt="panino">
        <a href=""> 
            <button type="button" class="btn btn-warning"> Chiama ora </button>
        </a>
    </header>
    <section class="container-fluid friesBg vh-100">
        <div class="row h-50">
            <div class="col-12 d-flex flex-column justify-content-center align-items-center">
                <h2 class="display-5 p-3"> I preferiti</h2>
                <h4>Cosa aspetti?? Facci sapere il tuo preferito..!</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <a href=""> 
                    <img src="{{Storage:: url('/media/panino2.png')}}" alt="">
                </a>
            </div>
            <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                <a href=""> 
                    <img src="{{Storage:: url('/media/alette.png')}}" alt="">
                </a>
            </div>
        </div>
       


    </section>


</x-layout>