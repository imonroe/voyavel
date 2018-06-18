<form method="POST" action="/contact_form" style="margin-top:1em; margin-bottom:2em;">
  @csrf
  <div class="form-group row">
    <label for="name" class="col-4 col-form-label">Your name</label> 
    <div class="col-8">
      <input id="name" name="name" placeholder="Who are you?" type="text" class="form-control here" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label for="email" class="col-4 col-form-label">Your Email Address</label> 
    <div class="col-8">
      <input id="email" name="email" type="text" class="form-control here" required="required" aria-describedby="emailHelpBlock"> 
      <span id="emailHelpBlock" class="form-text text-muted">We will never sell or give away your email to anyone.</span>
    </div>
  </div>
  <div class="form-group row">
    <label for="additional_info" class="col-4 col-form-label">What can we help you with?</label> 
    <div class="col-8">
      <textarea id="additional_info" name="additional_info" cols="40" rows="10" class="form-control" aria-describedby="additional_infoHelpBlock"></textarea> 
      <span id="additional_infoHelpBlock" class="form-text text-muted">Include as much detail as possible to ensure we will be able to respond promptly.</span>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>