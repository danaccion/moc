<div class="container py-3">
<<<<<<< HEAD
    <div class="modal-body text-start text-black p-4">
        <h5 class="modal-title text-uppercase mb-5" id="exampleModalLabel">{{ auth()->user()->name }}</h5>
        <h4 class="mb-5" style="color: #35558a;">Dine(e) bestillinger</h4>
        <p class="mb-0" style="color: #35558a;">Opsumering</p>
        <hr class="mt-2 mb-4" style="height: 0; background-color: transparent; opacity: .75; border-top: 2px dashed #9e9e9e;">

        <div class="d-flex justify-content-between">
        <p class="fw-bold mb-0">Design4web</p>
        <p class="text-muted mb-0">Kr. 0.00</p>
        </div>

        <!--<div class="d-flex justify-content-between">
        <p class="small mb-0">Shipping</p>
        <p class="small mb-0">$175.00</p>
        </div>

        <div class="d-flex justify-content-between pb-1">
        <p class="small">Tax</p>
        <p class="small">$200.00</p>
        </div>-->

        <div class="d-flex justify-content-between">
        <p class="fw-bold">Total</p>
        <p class="fw-bold" style="color: #35558a;">Kr. 0.00</p>
        </div>

    </div>
    <!--<div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Pricing</h1>
        <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>
    
=======
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal">Pricing</h1>
        <p class="fs-5 text-muted">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It’s built with default Bootstrap components and utilities with little customization.</p>
    </div>

>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
    <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Free</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>10 users included</li>
              <li>2 GB of storage</li>
              <li>Email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-outline-primary">Sign up for free</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm">
          <div class="card-header py-3">
            <h4 class="my-0 fw-normal">Pro</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>20 users included</li>
              <li>10 GB of storage</li>
              <li>Priority email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Get started</button>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card mb-4 rounded-3 shadow-sm border-primary">
          <div class="card-header py-3 text-white bg-primary border-primary">
            <h4 class="my-0 fw-normal">Enterprise</h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
            <ul class="list-unstyled mt-3 mb-4">
              <li>30 users included</li>
              <li>15 GB of storage</li>
              <li>Phone and email support</li>
              <li>Help center access</li>
            </ul>
            <button type="button" class="w-100 btn btn-lg btn-primary">Contact us</button>
          </div>
        </div>
      </div>
<<<<<<< HEAD
    </div>-->
    
    <div class="row">
		<div class="form-group">
			<input id="terms" class="form-checkbox" type="checkbox" />
  			<label for="terms"> Jeg acceptere <a href="https://meetovercoffee.design4web.dk/terms/" target="_blank">betingelserne</a></label>
		</div>
	</div>
	
	<div class="row">
		<div class="form-group">
			<input id="terms" class="form-checkbox" type="checkbox" />
  			<label for="terms"> Accepter <a href="https://meetovercoffee.net/abonnementsbetingelser" target="_blank">abonnementsbetingelser</a></label>
		</div>
	</div>

    <div class="row">
        <div class="col-md-6">
            <a href="{{ route('logout') }}" class="btn btn-light fw-bold px-4 py-2 mt-5 fs-5 border rounded-3"
                onclick="event.preventDefault();document.getElementById('logout-form').submit();">Log Ud</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>

        <div class="col-md-6 text-end tilmelding-send mb-5 mt-4">
            <a href="javascript:;" id="buy" class="btn btn-outline-success fs-5 px-4 py-3">
                Buy
=======
    </div>
    
    <div class="row">
        <div class="text-end tilmelding-send mb-5 mt-4">
            <a href="javascript:;" class="prev btn btn-outline-warning fs-5 px-4 py-3">
                <i class="fa fa-angle-left fw-5" aria-hidden="true"></i>
                Previous
            </a>

            <a href="javascript:;" class="next btn btn-outline-warning fs-5 px-4 py-3">
                Next<i class="fa fa-angle-right fw-5" aria-hidden="true"></i>
>>>>>>> a9e5da251d54b237ec0b06fd8ba8ec14a8ca30f1
            </a>
        </div> 
    </div>
</div>