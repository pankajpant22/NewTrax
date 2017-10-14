<!--FOOTER WITH OPEN BLOCK FIELD-->
<footer id="footer">
            <div class="footer-wrapper">
              @if($data->socials != null)
                <div class="social">
                  <a href="mailto:{{$data->socials->contact_email}}"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i></a>
                  <a href="{{ $data->socials->linkedin_url }}" target="_blank"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                  <a href="{{ $data->socials->quora_url }}" target="_blank"><i class="fa fa-quora fa-2x" aria-hidden="true"></i></a>
              @endif
              <span id="copy">
                &copy; Vinay Paramanand </span>
              </div>
          </div>
</footer>
