<x-layout>
    
    {{-- INIZIO HEADER HOMEPAGE CATEGORIE --}}
    <header class="container">
        <div class="flex flex-wrap justify-evenly items-center flex-col min-h-screen">
            <div class="w-12/12 text-center">
                <h1 class="text-5xl">Compra e vendi in modo <strong class="underline decoration-wavy">FLASH</strong></h1>
            </div>
        </div>
    </header>
    {{-- FINE HEADER HOMEPAGE --}}

    {{-- INIZIO MAIN --}}
    <main>
        {{-- INIZIO PRIMA SECTION --}}
        <section class="pt-10">
            <div class="container max-auto">
                <div class="flex justify-center items center">
                    <div class="w-6/12">
                        <h2 class="uppercase font-bold text-5xl text-center">{{$category->name}}</h2>
                    </div>
                </div>
            </div>

            {{-- INIZIO CARD --}}
            <div class="container mx-auto pt-16">
                <div class="flex flex-wrap justify-evenly items-center">
                    @forelse ($category->announcements->where('is_accepted', true)->sortByDesc('created_at') as $announcement)
                        <x-card :announcement="$announcement"></x-card>
                    @empty
                    <div class="w-12/12 text-center">
                        <h3 class="text-5xl underline decoration-wavy">Non sono presenti annunci per questa categoria!</h3>
                    </div>
                    @endforelse
                </div>
            </div>
            {{-- FINE CARD --}}
        </section>
        {{-- FINE PRIMA SECTION CON ANNUNCI PIU' RECENTI --}}
    </main>
    {{-- FINE MAIN --}}

</x-layout>