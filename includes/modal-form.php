<div class="modal fade" data-keyboard="false" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="static"><!--add data-backdrop="static" so you cant click out of modal-->
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <div class="row">
          <!-- ===MODAL TITLE=== -->
          <div class="col-lg-12 col lg-offset-2">
            <h1 class="modal-head has-success">Fill out the form to view offer!</h1>
            <p class="has-success">Fill out the following form to see the offer!</p>

            <!-- ===BEGIN CONTACT FORM=== -->
            <form id="contact-form" method="post" role="form" action="contact.php">
              <div class="messages"></div>
                    <div class="row">
                      <!-- ===FIRST NAME=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_name">First Name <span class="asterisk">*</span></label>
                          <input id="form_name" type="text" name="firstName" class="form-control" placeholder="Please enter your first name" required="required" data-error="First Name is required" maxlength="15">
                        </div>
                      </div>
                      <!-- ===LAST NAME=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_lastname">Last Name <span class="asterisk">*</span></label>
                          <input id="form_lastname" type="text" name="lastName" class="form-control" placeholder="Please enter your last name" required="required" data-error="Last Name is required" maxlength="20">
                        </div>
                      </div>
                      <!-- ===EMAIL=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_email">Email <span class="asterisk">*</span></label>
                          <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="A valid email is required" maxlength="45">
                        </div>
                      </div>
                      <!-- ===PHONE=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_phone">Phone <span class="asterisk">*</span></label>
                          <input id="form_phone" type="tel" min="6" name="phone" class="form-control" placeholder="Please enter your phone" required="required" data-error="A valid email is required" maxlength="15">
                        </div>
                      </div>
                      <!-- ===CATALOG REQUEST=== -->
                      <div class="col-md-6 has-success">
                        <div class="form-group">
                          <label for="form_catalog">Request Catalog</label>
                          <input id="form_catalog" type="checkbox" name="catalog" value="addressInfo" />
                        </div>
                      </div>
                    </div><!--end .row-->

                    <div class="row has-success" id="addressFields" style="display: none;" data-topic="addressInfo">
                      <!-- ===ADDRESS LINE 1=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_line1">Address Line 1 <span class="asterisk">*</span></label>
                          <input id="address-line1" name="address-line1" type="text" placeholder="Address Line 1" class="form-control reset" data-error="Address Line 1 is Required" maxlength="15">
                        </div>
                      </div>
                      <!-- ===ADDRESS LINE 2=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_line1">Address Line 2 </label>
                          <input id="address-line2" name="address-line2" type="text" placeholder="Address Line 2" class="form-control reset" data-error="Address Line 2 is Required" maxlength="15">
                        </div>
                      </div>
                      <!-- ===CITY=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_city">City <span class="asterisk">*</span></label>
                          <input id="city" name="city" type="text" placeholder="City" class="form-control reset" data-error="City is Required" maxlength="15">
                        </div>
                      </div>
                      <!-- ===STATE=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="state">State <span class="asterisk">*</span></label>
                          <input id="state" name="state" type="text" placeholder="State" class="form-control reset" data-error="State is Required" maxlength="15">
                        </div>
                      </div>
                      <!-- ===ZIPCODE=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_zipcode">ZIP Code <span class="asterisk">*</span></label>
                          <input id="zipcode" name="zipcode" type="text" placeholder="ZIP Code" class="form-control reset" data-error="Zip Code is Required" maxlength="15">
                        </div>
                      </div>
                      <!-- ===COUNTRY=== -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="form_country">Country <span class="asterisk">*</span></label>
                          <input id="country" name="country" type="text" placeholder="Country" class="form-control reset" data-error="Country is Required" maxlength="15">
                        </div>
                      </div>
                    </div><!--end .row-->
                    <div class="row has-success">
                      <!-- ===NEWSLETTER=== -->
                      <div class="col-md-12">
                        <div class="form-group">
                        <fieldset>
                          <label for="howHear">How did you hear about this promotion?</label>
                          <select name="howHear" required>
                            <option selected="true" disabled="disabled">Select One</option>
                            <option value="nrpa">NRPA</option>
                            <option value="asla">ASLA</option>
                            <option value="website">Website</option>
                            <option value="facebook">Facebook</option>
                            <option value="distributor">Distributor</option>
                            <option value="other">Other</option>
                          </select>
                          </fieldset>
                        </div>
                      </div>
                    </div><!--end .row-->
                    <div class="row">
                      <!-- ===SUBMIT BUTTON=== -->
                      <div class="col-md-12">
                          <input type="submit" id="submitBtn" class="btn btn-success btn-send has-success dontShow" value="Send Message" onClick="ga('send', 'event', 'Form Button', 'submit', 'Passport Promo'); ">
                      </div>
                    </div><!--end .row-->
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
