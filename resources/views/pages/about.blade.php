@extends('layouts.master')

@section('content')
  <section id="about">
    <div class="row">
      <div class="col-lg-12">
          <h1 class="page-header">About Us
          </h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>
      </div>
    </div>
  </section>

  <!-- Team Members Row -->
  <section id="members">
    <div class="row">
      <div class="col-lg-12">
          <h2 class="page-header">Our Team Members</h2>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/enda/128.jpg" alt="">
          <h3>Peter Parker
              <small>Realtor</small>
          </h3>
          <p>Hell of gluten-free live-edge, DIY helvetica migas actually raw denim bushwick.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/abecherian/128.jpg" alt="">
          <h3>Kratos Simmons
              <small>Realtor</small>
          </h3>
          <p>Wolf moon cliche crucifix man braid. Brooklyn mumblecore adaptogen flannel pug hammock.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rem/128.jpg" alt="">
          <h3>Seymour Butts
              <small>Contractor</small>
          </h3>
          <p>Poutine flannel thundercats succulents, man bun gentrify heirloom neutra copper mug</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/jadlimcaco/128.jpg" alt="">
          <h3>John Shepherd
              <small>Property management</small>
          </h3>
          <p>Semiotics hoodie squid 90's waistcoat DIY, wolf af salvia letterpress artisan butcher.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/marcosmoralez/128.jpg" alt="">
          <h3>John Smith
              <small>Property management</small>
          </h3>
          <p>Knausgaard XOXO chicharrones, scenester pok pok adaptogen humblebrag man braid flexitarian viral tousled af la croix banjo.</p>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="member-details">
          <img class="img-circle img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/tomaslau/128.jpg" alt="">
          <h3>Jack Sparrow
              <small>Realtor</small>
          </h3>
          <p>Jianbing schlitz sriracha kickstarter. Vice pour-over sustainable, raclette blue bottle chia pickled asymmetrical post-ironic ennui offal raw denim flannel.</p>
        </div>
      </div>

    </div>
    <hr>
  </section>
@endsection

@section('footer')
  @include('partials.footer')
@endsection
