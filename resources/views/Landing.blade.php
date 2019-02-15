@extends('layouts.landing')

@section('title')
| Welcome
@endsection

@section('content')<input type="radio" class="radio" name="pages" id="exit" checked />

    <div class="page demo2">

      <input type="radio" class="radio" name="pages" id="page_1" />
      <section class="section-container section-one">
        <label for="exit" class="check-label exit-label">
          Back to Landing Page
        </label>
        <label for="page_1" class="page-label check-label">
          <span>FennTech Home User</span>
        </label>
        <header class="section-header">
          <div class="section-content">
            <h1 class="font-align">
              FennTech Home User
            </h1>
          </div>
        </header>
        <div class="section-info">
          <div class="section-content">
            <p>
              Bacon ipsum dolor sit amet tenderloin jowl drumstick ribeye strip steak prosciutto jerky kielbasa, pig flank porchetta. Salami tenderloin porchetta tongue t-bone pork chop bacon bresaola cow boudin strip steak jerky tail landjaeger doner. Pancetta turducken biltong porchetta kielbasa. Venison meatloaf rump landjaeger shoulder. T-bone pork chop doner fatback ground round chicken, ham hock drumstick kevin tenderloin salami boudin kielbasa turkey bresaola. Venison pastrami boudin meatball tenderloin jerky strip steak frankfurter bresaola doner landjaeger. Capicola andouille ground round pork loin short loin, tenderloin ham porchetta shoulder pancetta strip steak pork belly sausage.
            </p>
            <p>
              Tri-tip pork loin t-bone chicken tenderloin, porchetta fatback sirloin pork ham pig. Doner kielbasa chuck ground round. Chicken kielbasa tail venison shank salami. Chuck strip steak ham shank spare ribs drumstick ham hock jerky corned beef bresaola fatback sirloin t-bone doner shankle. Short loin ground round prosciutto turkey pork belly pastrami chuck. Hamburger pork belly swine, andouille filet mignon t-bone pork loin ball tip beef ribs beef pig spare ribs turducken shankle jerky.
            </p>
            <p>
              Capicola doner pancetta tenderloin cow hello there this leberkas beef turducken ham hock pork loin ball tip. Shoulder biltong pork belly, kielbasa pork ball tip jerky flank. Pastrami andouille doner, leberkas corned beef shoulder pig ham hock pork rump t-bone. Kevin sausage ball tip, tri-tip prosciutto pork shank brisket.
            </p>
            <a href="{{ route('Home')}}"><button class="button">Learn More</button></a>
          </div>
        </div>
      </section>

      <input type="radio" class="radio" name="pages" id="page_2" />
      <section class="section-container section-two">
        <label for="exit" class="check-label exit-label">
          Back To Landing Page
        </label>
        <label for="page_2" class="page-label check-label">
          <span>FennTech Corporate</span>
        </label>
        <header class="section-header">
          <div class="section-content">
            <h1>
              FennTech Corporate
            </h1>

          </div>
        </header>
        <div class="section-info">
          <div class="section-content">
            <p>
              Bacon ipsum dolor sit amet tenderloin jowl drumstick ribeye strip steak prosciutto jerky kielbasa, pig flank porchetta. Salami tenderloin porchetta tongue t-bone pork chop bacon bresaola cow boudin strip steak jerky tail landjaeger doner. Pancetta turducken biltong porchetta kielbasa. Venison meatloaf rump landjaeger shoulder. T-bone pork chop doner fatback ground round chicken, ham hock drumstick kevin tenderloin salami boudin kielbasa turkey bresaola. Venison pastrami boudin meatball tenderloin jerky strip steak frankfurter bresaola doner landjaeger. Capicola andouille ground round pork loin short loin, tenderloin ham porchetta shoulder pancetta strip steak pork belly sausage.
            </p>
            <p>
              Tri-tip pork loin t-bone chicken tenderloin, porchetta fatback sirloin pork ham pig. Doner kielbasa chuck ground round. Chicken kielbasa tail venison shank salami. Chuck strip steak ham shank spare ribs drumstick ham hock jerky corned beef bresaola fatback sirloin t-bone doner shankle. Short loin ground round prosciutto turkey pork belly pastrami chuck. Hamburger pork belly swine, andouille filet mignon t-bone pork loin ball tip beef ribs beef pig spare ribs turducken shankle jerky.
            </p>
            <p>
              Capicola doner pancetta tenderloin cow leberkas beef turducken ham hock pork loin ball tip. Shoulder biltong pork belly, kielbasa pork ball tip jerky flank. Pastrami andouille doner, leberkas corned beef shoulder pig ham hock pork rump t-bone. Kevin sausage ball tip, tri-tip prosciutto pork shank brisket.
            </p>
            <a href="{{ route('Home')}}"><button class="button">Learn More</button></a>
          </div>
        </div>
      </section>


      <input type="radio" class="radio" name="pages" id="page_3" />
      <section class="section-container section-three">
        <label for="exit" class="check-label exit-label">
          Back To Landing Page
        </label>
        <label for="page_3" class="page-label check-label">
          <span>FennTech Software Products</span>
        </label>
        <header class="section-header">
          <div class="section-content">
            <h1>
              FennTech Software Products
            </h1>
                 </div>
        </header>
        <div class="section-info">
          <div class="section-content">
            <p>
              Bacon ipsum dolor sit amet tenderloin jowl drumstick ribeye strip steak prosciutto jerky kielbasa, pig flank porchetta. Salami tenderloin porchetta tongue t-bone pork chop bacon bresaola cow boudin strip steak jerky tail landjaeger doner. Pancetta turducken biltong porchetta kielbasa. Venison meatloaf rump landjaeger shoulder. T-bone pork chop doner fatback ground round chicken, ham hock drumstick kevin tenderloin salami boudin kielbasa turkey bresaola. Venison pastrami boudin meatball tenderloin jerky strip steak frankfurter bresaola doner landjaeger. Capicola andouille ground round pork loin short loin, tenderloin ham porchetta shoulder pancetta strip steak pork belly sausage.
            </p>
            <p>
              Tri-tip pork loin t-bone chicken tenderloin, porchetta fatback sirloin pork ham pig. Doner kielbasa chuck ground round. Chicken kielbasa tail venison shank salami. Chuck strip steak ham shank spare ribs drumstick ham hock jerky corned beef bresaola fatback sirloin t-bone doner shankle. Short loin ground round prosciutto turkey pork belly pastrami chuck. Hamburger pork belly swine, andouille filet mignon t-bone pork loin ball tip beef ribs beef pig spare ribs turducken shankle jerky.
            </p>
            <p>
              Capicola doner pancetta tenderloin cow leberkas beef turducken ham hock pork loin ball tip. Shoulder biltong pork belly, kielbasa pork ball tip jerky flank. Pastrami andouille doner, leberkas corned beef shoulder pig ham hock pork rump t-bone. Kevin sausage ball tip, tri-tip prosciutto pork shank brisket.
            </p>
            <a href="{{ route('Home')}}"><button class="button">Learn More</button></a>
          </div>
        </div>
      </section>


      <input type="radio" class="radio" name="pages" id="page_4" />
      <section class="section-container section-four">
        <label for="exit" class="check-label exit-label">
          Back To Landing Page
        </label>

        <label for="page_4" class="page-label check-label">
          <span>FennTech Networking</span>
        </label>
        <header class="section-header">
          <div class="section-content">
            <h1>
              FennTech Networking
            </h1>
          </div>
        </header>
        <div class="section-info">
          <div class="section-content">
            <p>
              Bacon ipsum dolor sit amet tenderloin jowl drumstick ribeye strip steak prosciutto jerky kielbasa, pig flank porchetta. Salami tenderloin porchetta tongue t-bone pork chop bacon bresaola cow boudin strip steak jerky tail landjaeger doner. Pancetta turducken biltong porchetta kielbasa. Venison meatloaf rump landjaeger shoulder. T-bone pork chop doner fatback ground round chicken, ham hock drumstick kevin tenderloin salami boudin kielbasa turkey bresaola. Venison pastrami boudin meatball tenderloin jerky strip steak frankfurter bresaola doner landjaeger. Capicola andouille ground round pork loin short loin, tenderloin ham porchetta shoulder pancetta strip steak pork belly sausage.
            </p>
            <p>
              Tri-tip pork loin t-bone chicken tenderloin, porchetta fatback sirloin pork ham pig. Doner kielbasa chuck ground round. Chicken kielbasa tail venison shank salami. Chuck strip steak ham shank spare ribs drumstick ham hock jerky corned beef bresaola fatback sirloin t-bone doner shankle. Short loin ground round prosciutto turkey pork belly pastrami chuck. Hamburger pork belly swine, andouille filet mignon t-bone pork loin ball tip beef ribs beef pig spare ribs turducken shankle jerky.
            </p>
            <p>
              Capicola doner pancetta tenderloin cow leberkas beef turducken ham hock pork loin ball tip. Shoulder biltong pork belly, kielbasa pork ball tip jerky flank. Pastrami andouille doner, leberkas corned beef shoulder pig ham hock pork rump t-bone. Kevin sausage ball tip, tri-tip prosciutto pork shank brisket.
            </p>
          </div>
        </div>
      </section>

    </div>
@endsection
