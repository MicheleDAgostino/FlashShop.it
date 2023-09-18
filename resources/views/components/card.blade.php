<div class="card card-compact w-96 bg-base-200 shadow-xl mt-14">
    <figure>
      <img 
        src="{{!$announcement->images()->get()->isEmpty() ? $announcement->images()->first()->getUrl(400, 400) : 'https://picsum.photos/400/250'}}"
        alt="Foto annuncio" />
    </figure>
    <div class="card-body">
      <h2 class="card-title">{{$announcement->title}}</h2>
      <p>{{$announcement->body}}</p>
      <p>{{$announcement->category->name}}</p>
      <div class="card-actions justify-between mt-9">
        <div class="tooltip tooltip-open tooltip-right" data-tip="€">
            <button class="btn">{{$announcement->price}}</button>
        </div>
        <a href="{{route('announcement.show', compact('announcement'))}}" class="btn btn-primary">Maggiori dettagli</a>
      </div>
    </div>
  </div>