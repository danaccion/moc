<!-- Footer-->
<div class="container">
<<<<<<< HEAD
    <footer class="py-5">
        {{-- @if ( auth()->check() )
            <div class="row">
            <div class="col-4 login-btn">
                <a href="{{ route('logout') }}" class="btn btn-light fw-bold px-4 py-2 mb-5 fs-5 border rounded-3"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Ud</a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>      
            </div>
        @endif --}}
    <div class="row">
      <div class="col-6 footer-menu">
=======
  <footer class="py-5">
    @if ( auth()->check() )
        <div class="row">
        <div class="col-4 login-btn">
            <a href="{{ route('logout') }}" class="btn btn-light fw-bold px-4 py-2 mb-5 fs-5 border rounded-3"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Ud</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>      
        </div>
    @endif
    <div class="row">
      <div class="col-4 footer-menu">
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
          <ul class="nav flex-column fs-5 fw-normal">
            <li class="nav-item mb-2"><a href="https://meetovercoffee.net/en/terms" target="_blank" class="nav-link p-0 text-muted">Terms</a></li>
          </ul>
      </div>
      <div class="col-6 footer-menu">
          <ul class="nav flex-column fs-5 fw-normal">
            <li class="nav-item mb-2"><a href="https://meetovercoffee.net/en/cookie-policy" target="_blank" class="nav-link p-0 text-muted">Cookie Policy</a></li>
          </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 my-5">
        <div class="mb-8 mb-4" style="margin-left: 400px">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path></svg>
                </li>
                
                <li class="list-group-item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-dankort"><title id="pi-dankort">Dankort</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill-rule="evenodd" clip-rule="evenodd" fill="#E31F28" d="M18.309 15.378c.985-.645 1.621-1.641 1.907-2.991l3.145 3.968h6.028a6.858 6.858 0 01-2.394 1.918 6.758 6.758 0 01-3.086.727H12.566a6.792 6.792 0 01-3.086-.728 6.815 6.815 0 01-2.395-1.931h7.089c1.78.001 3.158-.32 4.135-.963zm-3.062-4.623c.254.23.321.568.202 1.013-.15.517-.342.878-.571 1.084-.278.246-.699.37-1.264.37H9.552l1.001-2.765h3.67c.453 0 .794.099 1.024.298zm11.651-5.088a6.9 6.9 0 012.337 1.799h-5.899l-2.979 3.086c-.103-1.12-.639-1.935-1.607-2.443-.834-.429-2.018-.644-3.551-.644H7.24A6.995 6.995 0 0112.566 5h11.343c1.048 0 2.045.222 2.989.667zm-.999 5.814l3.644-3.634a6.99 6.99 0 011.014 1.931c.239.715.357 1.458.357 2.228 0 .723-.107 1.426-.32 2.108a7.016 7.016 0 01-.919 1.858l-3.776-4.491z"></path></svg>
                </li>
                
                <li class="list-group-item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path></svg>
                </li>
                
                <li class="list-group-item">
                    <svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-mobilepay"><title id="pi-mobilepay">MobilePay</title><path fill="#000" opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M20.05 15.296s2.53-.771 4.282-.776c2.896-.007 4.857 1.15 4.857 1.15V10.06s-1.97-1.02-4.453-1.09c-2.481-.068-4.687 1.012-4.687 1.012v5.313z" fill="#5A78FF"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M17.308 9.19l2.082 4.957V9.396s1.646-.882 3.485-1.13c1.84-.249 4.181.08 4.181.08l-1.133-2.707s-2.461-.159-4.69.794c-2.228.952-3.925 2.756-3.925 2.756z" fill="#5A78FF"></path><path d="M21.428 5.676l-.82-1.99a1.818 1.818 0 00-2.37-.996l-5.663 2.334a1.818 1.818 0 00-.98 2.376l5.46 13.247a1.818 1.818 0 002.37.995l5.662-2.334a1.817 1.817 0 00.98-2.376l-.677-1.642s-.462-.027-.676-.033c-.226-.006-.644-.001-.644-.001l.88 2.136a.606.606 0 01-.326.793l-5.663 2.333a.606.606 0 01-.79-.331L12.711 6.94a.606.606 0 01.327-.792L18.7 3.814a.606.606 0 01.79.332l.83 2.011s.383-.187.59-.27c.206-.082.518-.211.518-.211z" fill="#5A78FF"></path></svg>
                </li>
            </ul>
        </div>

      <p class="fs-5 text-center fw-normal">Meet Over Coffee Aps | Hammerensgade 1, DK-1267 Copenhagen K, Denmark | Company registration: DK 37775460 | Phone: +45 70 99 99 07 | info@meetovercoffee.net </p>
      </div>
    </div>
  </footer>
</div>