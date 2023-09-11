<x-layout>
    
    {{-- INIZIO HEADER HOMEPAGE --}}
    <header class="container pt-32">
        <div class="flex justify-center items-center min-h-16">
            <h1 class="text-6xl uppercase font-bold">Tutti gli annunci!</h1>
        </div>
    </header>
    {{-- FINE HEADER HOMEPAGE --}}

    {{-- INIZIO MAIN --}}
    <main>
        {{-- INIZIO PRIMA SECTION CON ANNUNCI PIU' RECENTI --}}
        <section class="pt-10">

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

        {{-- INIZIO SECTION CON PAGINATION --}}
        <section class="container mx-auto py-32">
            <div class="flex justify-center items-center">
                <div class="w-full flex justify-center items-center">
                    {{$announcements->links()}}
                </div>
            </div>
        </section>
        {{-- INIZIO SECTION CON PAGINATION --}}

    </main>
    {{-- FINE MAIN --}}

</x-layout>