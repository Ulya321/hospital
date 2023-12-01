<div class="page-section">
    <div class="container">
      <h1 class="text-center     mb-5 wow fadeInUp">Doctor List</h1>
  
       
          

           @if($doctor->isNotEmpty())
  
    @foreach($doctor as $doctors)
    <div class="item">
        <div class="card-doctor">
          <div class="header">
            <img height="300px" src="doctorimage/{{$doctors->image}}" alt="">
            <div class="meta">
              <a href="#"><span class="mai-call"></span></a>
              <a href="#"><span class="mai-logo-whatsapp"></span></a>
            </div>
          </div>
          <div class="body">
            <p class="text-xl mb-0">{{ $doctors->name}}</p>
            <span class="text-sm text-grey">{{ $doctors->speciality}}</span>
          </div>
        </div>
      </div>
    @endforeach
@else
    <p>Tidak ada data dokter.</p>
@endif
         
        </div>
      </div>
    </div>
  </div>