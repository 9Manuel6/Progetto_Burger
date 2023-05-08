<x-layout>

<div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                {{-- form --}}

                <form action="{{ route('burger.store') }}" method="POST" class="p-5 shadow" enctype="multipart/form-data">
                     @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                     @endif

                    @csrf

                    <div class="mb-3">
                        <label for="title" class="form-label">Panino</label>
                        <input type="text" name="title" class="form-control" id="title" value="{{old('title')}}">
                    </div>

                 

                    <div class="mb-3">
                        <label for="ingredienti" class="form-label">Ingredienti</label>
                        <textarea name="ingredienti" id="ingredienti" cols="30" rows="7" class="form-control">
                            {{old('ingredienti')}}
                        </textarea>
                    </div>
                    {{-- <div class="mb-3">
                        <label for="imgCibo" class="form-label">Immagine</label>
                        <input type="file" name="imgCibo" id="imgCibo" class="form-control">
                    </div> --}}

                    <button type="submit" class="btn btn-light">Inserisci</button>
                </form>
            </div>
        </div>
    </div>
</x-layout>