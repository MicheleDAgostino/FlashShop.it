<x-layout>
    
    {{-- INIZIO HEADER HOMEPAGE --}}
    <header class="container">
        <div class="flex justify-center items-center min-h-screen">
            <h1 class="text-6xl">Compra e vendi in modo <strong class="underline decoration-wavy">FLASH</strong></h1>
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