@extends('main')

@section('content')
  <div class="content landing-page">
    <div class="row-image">
      <img src= "{{ $data['main_image_path'] }}" alt="Vinay Paramanand" class="img img-responsive">
      <div class="main_page_scroll animated bounce">
          <a href="#about_me" class="scroll-down">
          <i class="fa fa-angle-down fa-2x" aria-hidden="true"></i>
            <!-- <i class="fa fa-arrow-circle-down fa-2x" aria-hidden="true"></i> -->
          </a>
      </div>
    </div>
  </div>
  <div class="container">
      <div class="row" id="about_me">
          <div class="row">
                <div class="col-md-12">
                  <p class="break_word_class about_me_profile" style="width:100%; height:100%;
                  font-size: 18px;color:black;text-align: justify; margin-top:25px;font-style: italic;">
                  ...a dreamer who desires to see a society that is composed of just,
                   smart and hardworking members. 
                   I love my family and my kids hold a very special place in my life. 
                   What my kids will learn from me drives everything I do. 
                   To me, getting the job done and be able to help someone brings maximum satisfaction.
                    I believe in simplicity and in the magic of self-belief. 
                    I believe in the laws of nature and that nature charts its own course of dealing with things. 
                    I believe that there is something to learn each day, 
                    and each person has something good and unique to offer.
                     I also believe that as humans we can be a better version of ourselves everyday.
                  </p>
                </div>
            </div>
        </div>
        <div class="main_page_scroll_up animated bounce">
                <a href="#header" class="scroll-down">
                <i class="fa fa-angle-up fa-2x" aria-hidden="true"></i>
                  <!-- <i class="fa fa-arrow-circle-down fa-2x" aria-hidden="true"></i> -->
                </a>
        </div>
      </div>

    </div>
  </div>
@endsection
