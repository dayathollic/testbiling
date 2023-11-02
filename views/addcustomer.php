
      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
          <div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Customer/</span> Add</h4>


<!-- Collapsible Section -->
<div class="row my-4">
  <div class="col">
    <div class="accordion" id="collapsibleSection">
      <div class="card accordion-item">
        <h2 class="accordion-header" id="headingDeliveryAddress">
          <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryAddress" aria-expanded="true" aria-controls="collapseDeliveryAddress"> Delivery Address </button>
        </h2>
        <div id="collapseDeliveryAddress" class="accordion-collapse collapse show" data-bs-parent="#collapsibleSection">
          <div class="accordion-body">
            <div class="row g-3">
              <div class="col-md-6">
                <label class="form-label" for="collapsible-fullname">Full Name</label>
                <input type="text" id="collapsible-fullname" class="form-control" placeholder="John Doe" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="collapsible-phone">Phone No</label>
                <input type="text" id="collapsible-phone" class="form-control phone-mask" placeholder="658 799 8941" aria-label="658 799 8941" />
              </div>
              <div class="col-12">
                <label class="form-label" for="collapsible-address">Address</label>
                <textarea name="collapsible-address" class="form-control" id="collapsible-address" rows="2" placeholder="1456, Mall Road"></textarea>
              </div>
              <div class="col-md-6">
                <label class="form-label" for="collapsible-pincode">Pincode</label>
                <input type="text" id="collapsible-pincode" class="form-control" placeholder="658468" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="collapsible-landmark">Landmark</label>
                <input type="text" id="collapsible-landmark" class="form-control" placeholder="Nr. Wall Street" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="collapsible-city">City</label>
                <input type="text" id="collapsible-city" class="form-control" placeholder="Jackson" />
              </div>
              <div class="col-md-6">
                <label class="form-label" for="collapsible-state">State</label>
                <select id="collapsible-state" class="select2 form-select" data-allow-clear="true">
                  <option value="">Select</option>
                  <option value="AL">Alabama</option>
                  <option value="AK">Alaska</option>
                  <option value="AZ">Arizona</option>
                  <option value="AR">Arkansas</option>
                  <option value="CA">California</option>
                  <option value="CO">Colorado</option>
                  <option value="CT">Connecticut</option>
                  <option value="DE">Delaware</option>
                  <option value="DC">District Of Columbia</option>
                  <option value="FL">Florida</option>
                  <option value="GA">Georgia</option>
                  <option value="HI">Hawaii</option>
                  <option value="ID">Idaho</option>
                  <option value="IL">Illinois</option>
                  <option value="IN">Indiana</option>
                  <option value="IA">Iowa</option>
                  <option value="KS">Kansas</option>
                  <option value="KY">Kentucky</option>
                  <option value="LA">Louisiana</option>
                  <option value="ME">Maine</option>
                  <option value="MD">Maryland</option>
                  <option value="MA">Massachusetts</option>
                  <option value="MI">Michigan</option>
                  <option value="MN">Minnesota</option>
                  <option value="MS">Mississippi</option>
                  <option value="MO">Missouri</option>
                  <option value="MT">Montana</option>
                  <option value="NE">Nebraska</option>
                  <option value="NV">Nevada</option>
                  <option value="NH">New Hampshire</option>
                  <option value="NJ">New Jersey</option>
                  <option value="NM">New Mexico</option>
                  <option value="NY">New York</option>
                  <option value="NC">North Carolina</option>
                  <option value="ND">North Dakota</option>
                  <option value="OH">Ohio</option>
                  <option value="OK">Oklahoma</option>
                  <option value="OR">Oregon</option>
                  <option value="PA">Pennsylvania</option>
                  <option value="RI">Rhode Island</option>
                  <option value="SC">South Carolina</option>
                  <option value="SD">South Dakota</option>
                  <option value="TN">Tennessee</option>
                  <option value="TX">Texas</option>
                  <option value="UT">Utah</option>
                  <option value="VT">Vermont</option>
                  <option value="VA">Virginia</option>
                  <option value="WA">Washington</option>
                  <option value="WV">West Virginia</option>
                  <option value="WI">Wisconsin</option>
                  <option value="WY">Wyoming</option>
                </select>
              </div>

              <label class="form-check-label">Address Type</label>
              <div class="col mt-2">
                <div class="form-check form-check-inline">
                  <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-home" checked="" />
                  <label class="form-check-label" for="collapsible-address-type-home">Home (All day delivery)</label>
                </div>
                <div class="form-check form-check-inline">
                  <input name="collapsible-address-type" class="form-check-input" type="radio" value="" id="collapsible-address-type-office" />
                  <label class="form-check-label" for="collapsible-address-type-office"> Office (Delivery between 10 AM - 5 PM) </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card accordion-item">
        <h2 class="accordion-header" id="headingDeliveryOptions">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseDeliveryOptions" aria-expanded="false" aria-controls="collapseDeliveryOptions"> Delivery Options </button>
        </h2>
        <div id="collapseDeliveryOptions" class="accordion-collapse collapse" aria-labelledby="headingDeliveryOptions" data-bs-parent="#collapsibleSection">
          <div class="accordion-body">
            <div class="row">
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content" for="radioStandard">
                    <input name="CustomRadioDelivery" class="form-check-input" type="radio" value="" id="radioStandard" checked />
                    <span class="custom-option-header">
                      <span class="h6 mb-0">Standard 3-5 Days</span>
                      <span>Free</span>
                    </span>
                    <span class="custom-option-body">
                      <small> Friday, 15 Nov - Monday, 18 Nov </small>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md mb-md-0 mb-2">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content" for="radioExpress">
                    <input name="CustomRadioDelivery" class="form-check-input" type="radio" value="" id="radioExpress" />
                    <span class="custom-option-header">
                      <span class="h6 mb-0">Express</span>
                      <span>$5.00</span>
                    </span>
                    <span class="custom-option-body">
                      <small> Friday, 15 Nov - Sunday, 17 Nov </small>
                    </span>
                  </label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-check custom-option custom-option-basic">
                  <label class="form-check-label custom-option-content" for="radioOvernight">
                    <input name="CustomRadioDelivery" class="form-check-input" type="radio" value="" id="radioOvernight" />
                    <span class="custom-option-header">
                      <span class="h6 mb-0">Overnight</span>
                      <span>$10.00</span>
                    </span>
                    <span class="custom-option-body">
                      <small>Friday, 15 Nov - Saturday, 16 Nov</small>
                    </span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card accordion-item">
        <h2 class="accordion-header" id="headingPaymentMethod">
          <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePaymentMethod" aria-expanded="false" aria-controls="collapsePaymentMethod"> Payment Method </button>
        </h2>
        <div id="collapsePaymentMethod" class="accordion-collapse collapse" aria-labelledby="headingPaymentMethod" data-bs-parent="#collapsibleSection">
          <form>
            <div class="accordion-body">
              <div class="mb-3">
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cc" checked="" />
                  <label class="form-check-label" for="collapsible-payment-cc">
                    Credit/Debit/ATM Card <i class="bx bx-credit-card-alt"></i>
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input name="collapsible-payment" class="form-check-input" type="radio" value="" id="collapsible-payment-cash" />
                  <label class="form-check-label" for="collapsible-payment-cash">
                    Cash On Delivery
                    <i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="You can pay once you receive the product."></i>
                  </label>
                </div>
              </div>
              <div class="row">
                <div class="col-12 col-md-8 col-xl-6">
                  <div class="mb-3">
                    <label class="form-label w-100" for="creditCardMask">Card Number</label>
                    <div class="input-group input-group-merge">
                      <input type="text" id="creditCardMask" name="creditCardMask" class="form-control credit-card-mask" placeholder="1356 3215 6548 7898" aria-describedby="creditCardMask2" />
                      <span class="input-group-text cursor-pointer p-1" id="creditCardMask2"><span class="card-type"></span></span>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12 col-md-6">
                      <div class="mb-3">
                        <label class="form-label" for="collapsible-payment-name">Name</label>
                        <input type="text" id="collapsible-payment-name" class="form-control" placeholder="John Doe" />
                      </div>
                    </div>
                    <div class="col-6 col-md-3">
                      <div class="mb-3">
                        <label class="form-label" for="collapsible-payment-expiry-date">Exp. Date</label>
                        <input type="text" id="collapsible-payment-expiry-date" class="form-control expiry-date-mask" placeholder="MM/YY" />
                      </div>
                    </div>
                    <div class="col-6 col-md-3">
                      <div class="mb-3">
                        <label class="form-label" for="collapsible-payment-cvv">CVV Code</label>
                        <div class="input-group input-group-merge">
                          <input type="text" id="collapsible-payment-cvv" class="form-control cvv-code-mask" maxlength="3" placeholder="654" />
                          <span class="input-group-text cursor-pointer" id="collapsible-payment-cvv2"><i class="bx bx-help-circle text-muted" data-bs-toggle="tooltip" data-bs-placement="top" title="Card Verification Value"></i></span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mt-1">
                <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
                <button type="reset" class="btn btn-label-secondary">Cancel</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>


            
          </div>


          
          <div class="content-backdrop fade"></div>
        </div>