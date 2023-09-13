<x-layout>
    <section class="container mx-auto pt-24">
        <div class="flex justify-center items-center">
            <div class="w-full md:w-10/12 lg:w-6/12 bg-gray-100 shadow-xl rounded-lg p-14">

                {{-- INIZIO FORM --}}
                <form method="POST" action="{{route('revisor.become')}}" class="grid grid-cols-2 gap-4">
                    @csrf
                    <h2 class="text-2xl font-cursive uppercase col-span-2 text-center">Lavora con noi</h2>
                    <input type="text" name="name" value="{{Auth::user()->name}}" class="input input-bordered w-full max-w-xs col-start-1 mt-8"  />

                    <input type="email" name="email" value="{{Auth::user()->email}}" class="input input-bordered w-full max-w-xs col-start-1 mt-4" />

                    <textarea name="description" class="textarea textarea-bordered col-span-2 mt-4" placeholder="Perchè vuoi entrare nel team?"></textarea>

                    <div class="w-full flex justify-center items-center mt-6 col-span-2">
                        <button class="py-3 px-8 bg-violet-600 rounded-lg text-white uppercase font-bold" type="submit">Invia candidatura</button>
                    </div>
                </form>
                
            </div>
        </div>
    </section>
</x-layout>
