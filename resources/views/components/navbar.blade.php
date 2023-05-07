
<nav class="navbar navbar-expand-lg redBg navbar-dark d-flex flex-column vh-min-100">
    <div class="container-fluid  d-flex justify-content-center align-items-center">
        {{-- lista navbar con logo  --}}
       <div class="row"> 
            <div class="col-12">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarNav">
                    <ul class="navbar-nav d-flex justify-content-center align-items-center">
                    <li class="nav-item ">
                        <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">HOME</a>
                    </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('contatti')}}">I vostri panini</a>
                    </li>
                    
                    <li>
                        <a class="navbar-brand logoC" href="{{route('homepage')}}">
                            <img src="{{ url('/media/logo.png')}}" alt="logo" width="100" height="100">
                        </a>
                    </li>
                  
                    
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('panini')}}">PANINI</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{route('chi-siamo')}}">CHI SIAMO</a>
                    </li>
                    
                    </ul>
                </div>
            </div>    
        </div>  
     {{-- bottoni navbar --}}
       
    </div>

</nav>