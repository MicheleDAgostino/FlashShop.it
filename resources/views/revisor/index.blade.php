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
                              <th>
                                <label>
                                  <input type="checkbox" class="checkbox" />
                                </label>
                              </th>
                              <th>Name</th>
                              <th>Job</th>
                              <th>Favorite Color</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($announcement_to_check as $announcement)
                            <tr>
                                <th>
                                  <label>
                                    <input type="checkbox" class="checkbox" />
                                  </label>
                                </th>
                                <td>
                                  <div class="flex items-center space-x-3">
                                    <div class="avatar">
                                      <div class="mask mask-squircle w-12 h-12">
                                        <img src="https://picsum.photos/150/150" alt="Avatar Tailwind CSS Component" />
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
                                <td>{{$announcement->price}}</td>
                                <th>
                                  <label for="my-drawer" class="btn btn-primary drawer-button" onclick="setSidebarContent('{{$announcement->body}}')">Open drawer</label>
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
                            <li id="sidebarLI"></li>
                            <li><a>Sidebar Item 2</a></li>
                            
                          </ul>
                        </div>
                      </div>
                      
                </div>
            </div>
        </section>

        
        
        
        
        @endif
        {{-- FINE SECTION CON TABELLA DI ANNUNCI DA REVISIONARE --}}

    </main>

</x-layout>