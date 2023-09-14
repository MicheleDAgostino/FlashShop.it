<x-layout>
    
    {{-- INIZIO HEADER HOMEPAGE --}}
    <header class="container">
        <div class="flex flex-wrap justify-evenly items-center flex-col min-h-screen">
            <div class="w-6/12 text-center">
                <h1 class="text-5xl">Compra e vendi in modo <strong class="underline decoration-wavy">FLASH</strong></h1>
            </div>
            <div class="w-6/12 flex justify-evenly items-center">
                <form method="GET" action="{{route('announcement.search')}}" class="join">
                    <div>
                        <input name="searched" class="input input-bordered join-item rounded-s-3xl w-[550px]" placeholder="Search"/>
                    </div>
                    <div class="indicator"> 
                      <button class="btn join-item rounded-e-3xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
                      </button>
                    </div>
                </form>
                <div class="dropdown dropdown-right dropdown-hover">
                    <label tabindex="0" class="btn m-1 rounded-3xl">Categorie</label>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        @foreach($categories as $category)
                            <li><a href="{{route('categoryShow', compact('category'))}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                  </div>
            </div>
        </div>
    </header>
    {{-- FINE HEADER HOMEPAGE --}}

    {{-- INIZIO MAIN --}}
    <main>
        {{-- INIZIO PRIMA SECTION CON ANNUNCI PIU' RECENTI --}}
        <section class="pt-10">
            <div class="container max-auto">
                <div class="flex justify-center items center">
                    <div class="w-6/12">
                        <h2 class="uppercase font-bold text-5xl text-center">Annunci più recenti</h2>
                    </div>
                </div>
            </div>

            {{-- INIZIO CARD --}}
            <div class="container mx-auto pt-16">
                <div class="flex flex-wrap justify-evenly items-center">
                    @foreach ($announcements as $announcement)
                        <x-card :announcement="$announcement"></x-card>
                    @endforeach
                </div>
            </div>
            {{-- FINE CARD --}}
        </section>
        {{-- FINE PRIMA SECTION CON ANNUNCI PIU' RECENTI --}}
    </main>
    {{-- FINE MAIN --}}

</x-layout>