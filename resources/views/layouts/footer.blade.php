<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0"></script>
<footer class="footer">
  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-4 col-xs-6 col-ssm">
          <div class="footer-widget">
            <div class="widget-title">
              <h3>{{ __('footer.AboutUs') }}</h3>
            </div>
            <div class="widget-content">
              <p><b><i class="fas fa-mobile-alt"></i> Hotline:</b> <a href="tel:(+84) 989 448 742">(+84) 989 448 742</a></p>
              <p><b><i class="fas fa-envelope"></i> Email:</b> <a href="mailto:lap37@gmail.com">lap37lap37@gmail.com
              <p><b><i class="fas fa-store-alt"></i> Địa chỉ:</b> {{ __('footer.address') }}</p>
            </div>
          </div>
        </div>
        <div class="col-md-3 hidden-sm hidden-xs">
          <div class="footer-widget">
            <div class="widget-title">
              <h3>{{ __('footer.support') }}</h3>
            </div>
            <div class="widget-content">
              <ul>
                <li><a href="#" title="Chính sách bảo hành">Chính sách bảo hành</a></li>
                <li><a href="#" title="Chính sách vận chuyển">Chính sách vận chuyển</a></li>
                <li><a href="#" title="Chính sách đổi trả hàng">Chính sách đổi trả hàng</a></li>
                <li><a href="#" title="Hướng dẫn thanh toán">Hướng dẫn thanh toán</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-4 col-xs-6 col-ssm">
          <div class="footer-widget">
            <div class="widget-title">
              <h3>{{ __('footer.payment') }}</h3>
            </div>
            <div class="widget-content">
              <ul>
                <li class="clearfix">
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="{{ __('footer.visa') }}"><div class="payment visa"><img src="{{ asset('images/visa.png') }}"></div></div>
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="{{ __('footer.mastercard') }}"><div class="payment"><img src="{{ asset('images/mastercard.png') }}"></div></div>
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="{{ __('footer.jcb') }}"><div class="payment"><img src="{{ asset('images/jcb.png') }}"></div></div>
                  <div class="col-md-3 col-sm-3 col-xs-3 padding-lr5" title="{{ __('footer.cod') }}"><div class="payment"><img src="{{ asset('images/cod.png') }}"></div></div>
                </li>
                <li>
                  <div class="payment-service" title="{{ __('footer.nganluong') }}"><img src="{{ asset('images/nganluong.png') }}"></div>
              </ul>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-sm-4 hidden-xs">
          <div class="footer-widget">
            <div class="widget-title">
              <h3>{{ __('footer.FollowUs') }}</h3>
            </div>
            <div class="widget-content">
              {{-- <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fquang.nguyenkhac.735%2F%3Fmodal%3Dadmin_todo_tour&tabs=timelinewww.facebook.com&width=270&height=130&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="270" height="130" style="border: none; overflow: hidden; max-width: 100%;" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe> --}}
              <div class="fb-page" data-href="https://www.facebook.com/quang.nguyenkhac.735" data-tabs="timeline" data-width="270" data-height="130" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="copyright text-center">
      Copyright &copy {{date('Y')}} Nguyễn Khắc Quang
     </div>
  </div>
</footer>
