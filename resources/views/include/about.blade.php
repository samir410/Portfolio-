<section id="about" class="about">
    <div class="container">
      @foreach ($about as $abouts)
      <div class="section-title">
        <h2>About</h2>
        <p>{{$abouts->description1}}</p>
      </div>

      <div class="row">
       
        <div class="col-lg-4" data-aos="fade-right" >
          <div class="img-hover-zoom" >
             <img height="300" width="400" src="/storage/img/{{$abouts->profile_image}}" class="img-fluid" alt="">
          </div>
        </div>
        <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
          <h3>{{$abouts->Title}} &amp; {{$abouts->Title}}</h3>
          <p class="fst-italic">
            {{$abouts->description2}}
          </p>
          <div class="row">
            <div class="col-lg-7">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{$abouts->dob}}</span></li>
               
                <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+88{{$abouts->number}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{$abouts->address}}</span></li>
              </ul>
            </div>
            <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{$abouts->age}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{$abouts->inputEmail}}</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div>
          </div>
          <p>
            {{$abouts->description3}}
          </p>
        </div>
      </div>
     @endforeach
    
    </div>
  </section>