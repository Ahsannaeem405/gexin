<!-- <div class="modal otp-modal" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">2-Step Authentication</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <div class="otp-pass">
                <div class="title">
                    <h5>2-Step Authentication</h5>
                </div>
                <div class="otp-body">
                    <h5>Unlock account settings for 3 minutes</h5>
                    <p>Enter the code generated by your authenticator</p>
                    <div class="input-group-otp">
                    <form class="otc" name="one-time-code" action="#">
                        <fieldset>
                            <legend>Validation Code</legend>
                            <label for="otc-1">Number 1</label>
                            <label for="otc-2">Number 2</label>
                            <label for="otc-3">Number 3</label>
                            <label for="otc-4">Number 4</label>
                            <label for="otc-5">Number 5</label>
                            <label for="otc-6">Number 6</label>
                            <div>
                            <input type="number" pattern="[0-9]*"  value="" inputtype="numeric" autocomplete="one-time-code" id="otc-1" required>

                            Autocomplete not to put on other input
                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-2" required>
                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-3" required>
                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-4" required>
                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-5" required>
                            <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-6" required>
                            </div>
                        </fieldset>
                    </form>
                        
                    </div>
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div> -->



<!-- Modal -->
<div class="modal fade otp-modal" id="otpModal" tabindex="-1" aria-labelledby="otpModal" aria-hidden="true">
  <div class="modal-dialog  modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
          <div class="icon">
            <img src="images/lock-black.svg" alt="">
          </div>
            <div class="otp-pass">
              <div class="title">
                  <h5>2-Step Authentication</h5>
              </div>
              <div class="otp-body">
                <h5>Unlock account settings for 3 minutes</h5>
                <p>Enter the code generated by your authenticator</p>
                <div class="input-group-otp" style="direction:ltr">
                  <form class="otc" name="one-time-code" action="#">
                      <fieldset>
                          <!-- <legend>Validation Code</legend> -->
                          <label for="otc-1">Number 1</label>
                          <label for="otc-2">Number 2</label>
                          <label for="otc-3">Number 3</label>
                          <label for="otc-4">Number 4</label>
                          <label for="otc-5">Number 5</label>
                          <label for="otc-6">Number 6</label>
                          <div>
                          <input type="number" pattern="[0-9]*"  value="" inputtype="numeric" autocomplete="one-time-code" id="otc-1" required>

                          <!-- Autocomplete not to put on other input -->
                          <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-2" required>
                          <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-3" required>
                          <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-4" required>
                          <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-5" required>
                          <input type="number" pattern="[0-9]*" min="0" max="9" maxlength="1"  value="" inputtype="numeric" id="otc-6" required>
                          </div>
                      </fieldset>
                  </form>
                </div>
                <div class="buttons-modal">
                  <button type="button" class="btn btn-secondary cancel-btn" data-bs-dismiss="modal">Cancel</button>
                </div>
                <div class="sending-options">
                  <select class="form-select" aria-label="Default select example">
                        <option selected>اختر طريقة مختلفة</option>
                        <option value="1">رسالة نصية</option>
                        <option value="2">رموز النسخ الاحتياطي</option>
                        <option value="3">تحتاج مساعدة</option>
                    </select>
                </div>
            </div>
          </div>
          
        </div>
    </div>
  </div>
</div>