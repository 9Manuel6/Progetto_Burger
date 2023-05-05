
<nav class="navbar navbar-expand-lg redBg navbar-dark d-flex flex-column">
    <div class="container-fluid  d-flex justify-content-center align-items-center">
        {{-- lista navbar con logo  --}}
       <div class="row"> 
            <div class="col-12">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">PANINI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">LOCATION</a>
                    </li>
                    
                    <li>
                        <a class="navbar-brand" href="{{route('homepage')}}">
                            <img src="{{Storage:: url('/media/logo.png')}}" alt="logo" width="100" height="100">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CONTATTI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CHI SIAMO</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    
                    </ul>
                </div>
            </div>    
        </div>  
     {{-- bottoni navbar --}}
       
    </div>
    <div class="container d-flex">
        <div class="row w-100">
            <div class="col-12 col-md-6 d-flex justify-content-start ps-5 buttonC">
                <a href=""> 
                    <button type="button" class="btn btn-warning"> Chiama ora </button>
                </a>

            </div>
            <div class="col-12 col-md-6 d-flex justify-content-end">
                <a href=""> 
                    <button type="button" class="btn btn-warning"> Menu </button>
                </a>
                
            </div>
        </div>
    </div>
</nav>