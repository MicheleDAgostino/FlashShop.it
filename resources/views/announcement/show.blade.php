<x-layout>
    
    {{-- INIZIO HEADER --}}
    <header class="container pt-32">
        <div class="flex justify-center items-center min-h-16">
            <h1 class="text-6xl uppercase font-bold">Maggiori dettagli</h1>
        </div>
    </header>
    {{-- FINE HEADER --}}

    {{-- INIZIO MAIN --}}
    <main>
        {{-- INIZIO PRIMA SECTION DETTAGLIO ANNUNCIO --}}
        <section class="pt-10">

            {{-- INIZIO CARD --}}
            <div class="container mx-auto pt-16">
                <div class="flex justify-evenly">
                    <div class="w-5/12 flex flex-col justify-center items-center">

                        <div class="carousel carousel-center max-w-xl p-4 space-x-4 bg-base-200 rounded-box">
                            <div class="carousel-item">
                              <img src="https://picsum.photos/400/400" class="rounded-box" />
                            </div> 
                            <div class="carousel-item">
                              <img src="https://picsum.photos/400/400" class="rounded-box" />
                            </div> 
                            <div class="carousel-item">
                              <img src="https://picsum.photos/400/400" class="rounded-box" />
                            </div> 
                            <div class="carousel-item">
                              <img src="https://picsum.photos/400/400" class="rounded-box" />
                            </div> 
                            <div class="carousel-item">
                              <img src="https://picsum.photos/400/400" class="rounded-box" />
                            </div> 
                            <div class="carousel-item">
                              <img src="https://picsum.photos/400/400" class="rounded-box" />
                            </div> 
                            <div class="carousel-item">
                              <img src="https://picsum.photos/400/400" class="rounded-box" />
                            </div>
                          </div>

                    </div>
                    <div class="w-3/12 flex flex-col justify-center bg-base-200 rounded-lg">
                        <div class="chat chat-start">
                            <div class="chat-header">
                                <h3 class="text-xl">Titolo:</h3>   
                            </div>
                            <div class="chat-bubble bg-base-300 text-black">{{$announcement->title}}</div>
                        </div>
                        <div class="chat chat-start">
                            <div class="chat-header">
                                <h3 class="text-xl">Descrizione:</h3>   
                            </div>
                            <div class="chat-bubble bg-base-300 text-black">{{$announcement->body}}</div>
                        </div>
                        <div class="chat chat-start">
                            <div class="chat-header">
                                <h3 class="text-xl">Prezzo:</h3>   
                            </div>
                            <div class="chat-bubble bg-base-300 text-black">{{$announcement->price}}€</div>
                        </div>
                        <div class="chat chat-start">
                            <div class="chat-header">
                                <h3 class="text-xl">Autore:</h3>   
                            </div>
                            <div class="chat-bubble bg-base-300 text-black">{{$announcement->user->email}}</div>
                        </div>

                        <div class="mt-5 text-center">Scrolla le foto con &#x27A1 / &#x2B05</div>
                    </div>
                </div>
            </div>
            {{-- FINE CARD --}}
        </section>
        {{-- FINE PRIMA SECTION CON DETTAGLIO ANNUNCIO --}}

    </main>
    {{-- FINE MAIN --}}

</x-layout>
