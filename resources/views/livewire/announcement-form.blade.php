<div>

    @if (session('message'))
        <div class="container mx-auto pt-20">
            <div class="flex justify-center items-center">
                <div class="w-4/12">
                    <span class="alert alert-success">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                        <span>{{session('message')}}</span>
                    </span>
                </div>
            </div>
        </div>
    @endif

        
    <section class="container mx-auto pt-24">
        <div class="flex justify-evenly items-center">
            <div class="w-full md:w-10/12 lg:w-6/12 bg-gray-100 shadow-xl rounded-lg p-14">

                {{-- INIZIO FORM --}}
                <form class="grid grid-cols-2 gap-4" wire:submit.prevent='store'>
                    @csrf
                    <h2 class="text-2xl font-cursive uppercase">Inserisci un annuncio</h2>
                    <input type="text" placeholder="Titolo" class="input input-bordered w-full max-w-xs col-start-1 mt-8" wire:model.lazy='title' />
                    @error('title') 
                        <span class="alert alert-error">{{ $message }}</span> 
                    @enderror

                    <select class="select select-bordered w-full max-w-xs col-start-1 mt-4" wire:model.defer='category' id="categorySelect">
                        <option selected>Scegli una categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category') 
                        <span class="alert alert-error">{{ $message }}</span> 
                    @enderror

                    <input type="number" step="0.1" placeholder="Prezzo" class="input input-bordered w-full max-w-xs col-start-1 mt-4" wire:model.lazy='price' />
                    @error('price') 
                        <span class="alert alert-error">{{ $message }}</span> 
                    @enderror

                    <input type="file" name="images" multiple class="file-input file-input-bordered w-full max-w-xs mt-4" wire:model='temporary_images' />
                    @error('temporary_images.*') 
                        <span class="alert alert-error">{{ $message }}</span> 
                    @enderror

                    <textarea class="textarea textarea-bordered col-span-2 mt-4" placeholder="Descrivi il tuo articolo qui..." wire:model.lazy='body'></textarea>
                    @error('body') 
                        <span class="alert alert-error">{{ $message }}</span> 
                    @enderror

                    <div class="w-full flex justify-center items-center mt-6 col-span-2">
                        <button class="py-3 px-8 bg-violet-600 rounded-lg text-white uppercase font-bold" type="submit">Inserisci</button>
                    </div>
                </form>
                

            </div>

            @if (!empty($images))
                <div class="w-4/12">
                    <h3 class="text-2xl text-center mb-5 uppercase font-semibold">Photo preview:</h3>
                    <div class="rounded-lg py-10 px-5 bg-violet-600 flex flex-wrap justify-evenly">

                        @foreach ($images as $key => $image)
                            <div class="avatar flex flex-col justify-center items-center">
                                <div class="w-28 mask mask-squircle">
                                <img src="{{$image->temporaryUrl()}}" alt="">
                                </div>
                                <button type="button" wire:click='removeImage({{$key}})' class="btn btn-error btn-xs mt-2">Elimina</button>
                            </div>
                        @endforeach
                        
                    </div>
                </div> 
            @endif
            
        </div>
    </section>
</div>
