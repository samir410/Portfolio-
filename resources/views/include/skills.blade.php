<section id="skills" class="skills section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Skills</h2>
        {{-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}
      </div>

      <div class="row skills-content">

        <div class="col-lg-6" data-aos="fade-up">
          @foreach ($skills as $skill)
          
          <div class="progress">
            <span class="skill">{{$skill->skill_name}}</span> <i class="val">{{$skill->level}}%</i></span>
            <div class="progress-bar-wrap">
              <div class="progress-bar" role="progressbar" aria-valuenow="{{$skill->level}}" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
          </div>
        @endforeach

      </div>

    </div>
  </section>