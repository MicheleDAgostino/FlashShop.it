<x-layout>

    <header class="container mx-auto py-28">
        <div class="flex justify-center items-center">
            <div class="w-full text-center">
                <h1 class="text-3xl font-bold uppercase">{{$announcement_to_check ? 'Ecco tutti gli annunci da revisionare' : 'Non ci sono annunci da revisionare'}}</h1>
            </div>
        </div>
    </header>

    <main>

        {{-- INIZIO SECTION CON TABELLA DI ANNUNCI DA REVISIONARE --}}
        @if($announcement_to_check)
        <section class="container mx-auto">
            <div class="flex justify-center items-center">
                <div class="w-10/12">
                    <div class="overflow-x-auto border border-white rounded-lg">
                        <table class="table">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>Titolo</th>
                              <th>Autore</th>
                              <th>Prezzo</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($announcement_to_check as $announcement)
                            <tr>
                                <td>
                                  <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                      <div class="mask mask-squircle w-12 h-12">
                                        <img src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 400) : 'https://picsum.photos/150/150'}}" alt="Avatar Tailwind CSS Component" />
                                      </div>
                                    </div>
                                    <div>
                                      <div class="font-bold">{{$announcement->title}}</div>
                                      <div class="text-sm opacity-50"></div>
                                    </div>
                                  </div>
                                </td>
                                <td>
                                  {{$announcement->user->email}}
                                </td>
                                <td>{{$announcement->price}}€</td>
                                <th>
                                  <label for="my-drawer" class="btn drawer-button" onclick="setSidebarContent('{{$announcement->body}}', {{ json_encode($announcement->images->pluck('path')) }})">Dettagli</label>
                                </th>
                                <th class="flex justify-around">
                                  <form method="POST" action="{{route('revisor.accept_announcement', ['announcement' => $announcement])}}">
                                    @csrf
                                    @method('PATCH')
                                    <button type="submit" class="btn btn-success">Accetta</button>
                                  </form>
                                  <form method="POST" action="{{route('revisor.reject_announcement', ['announcement' => $announcement])}}">
                                    @csrf
                                    @method('PATCH')
                                    <button class="btn btn-error">Rifiuta</button>
                                  </form>
                                </th>
                              </tr>
                              @endforeach
                         </tbody>
                          
                        </table>
                      </div>

                      <div class="drawer">
                        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
                        <div class="drawer-content">
                          <!-- Page content here -->
                          {{-- <label for="my-drawer" class="btn btn-primary drawer-button">Open drawer</label> --}}
                        </div> 
                        <div class="drawer-side pt-16">
                          <label for="my-drawer" class="drawer-overlay"></label>
                          <ul class="menu p-4 w-80 min-h-full bg-base-200 text-base-content">
                            <!-- Sidebar content here -->
                            <li>
                              <p class="text-lg font-bold">Descrizione annuncio:</p>
                              <p id="sidebarDescription"></p>
                            </li>
                            <li>
                              <p class="text-lg font-bold">Immagini annuncio:</p>
                              <div id="sidebarImg" class="flex flex-wrap">

                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                      
                </div>
            </div>
        </section>

        
        
        
        
        @endif
        {{-- FINE SECTION CON TABELLA DI ANNUNCI DA REVISIONARE --}}

    </main>

    <script>
      function setSidebarContent(body, images){
      let sidebarDescription = document.querySelector('#sidebarDescription');
      let sidebarImg = document.querySelector('#sidebarImg');
      sidebarDescription.textContent = body;

    // Aggiungi le immagini alla sidebarImg
      sidebarImg.innerHTML = '';
      images.forEach(imagePath => {
        const div = document.createElement('div');
        div.innerHTML= `
          <div class="w-28 mask mask-squircle">
            <img src="{{ asset('storage/') }}/${imagePath}">
          </div>
        `;
        sidebarImg.appendChild(div);
      });
    }

    </script>

</x-layout>