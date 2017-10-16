<form class="form form--contact js-form--contact <?= $formClass; ?>" id="<?= $formID; ?>" method="post">
    
    <label for="firstName" class="form__label">First Name</label>
    <input type="text" id="first-name" name="firstName" placeholder="First Name" required="true">

    <label for="lastName" class="form__label">Last Name</label>
    <input type="text" id="last-name" name="lastName" placeholder="Last Name" required="true">

    <label for="city" class="form__label">City</label>
    <input type="text" id="city" name="city" placeholder="City" required="true">

     <label for="state" class="form__label">State</label>
    <select class="form__select-custom" name="state" required="true">
        <option value="" disabled selected>State</option>
        <option value="AL">AL</option>
        <option value="AK">AK</option>
        <option value="AR">AR</option>	
        <option value="AZ">AZ</option>
        <option value="CA">CA</option>
        <option value="CO">CO</option>
        <option value="CT">CT</option>
        <option value="DC">DC</option>
        <option value="DE">DE</option>
        <option value="FL">FL</option>
        <option value="GA">GA</option>
        <option value="HI">HI</option>
        <option value="IA">IA</option>	
        <option value="ID">ID</option>
        <option value="IL">IL</option>
        <option value="IN">IN</option>
        <option value="KS">KS</option>
        <option value="KY">KY</option>
        <option value="LA">LA</option>
        <option value="MA">MA</option>
        <option value="MD">MD</option>
        <option value="ME">ME</option>
        <option value="MI">MI</option>
        <option value="MN">MN</option>
        <option value="MO">MO</option>	
        <option value="MS">MS</option>
        <option value="MT">MT</option>
        <option value="NC">NC</option>	
        <option value="NE">NE</option>
        <option value="NH">NH</option>
        <option value="NJ">NJ</option>
        <option value="NM">NM</option>			
        <option value="NV">NV</option>
        <option value="NY">NY</option>
        <option value="ND">ND</option>
        <option value="OH">OH</option>
        <option value="OK">OK</option>
        <option value="OR">OR</option>
        <option value="PA">PA</option>
        <option value="RI">RI</option>
        <option value="SC">SC</option>
        <option value="SD">SD</option>
        <option value="TN">TN</option>
        <option value="TX">TX</option>
        <option value="UT">UT</option>
        <option value="VT">VT</option>
        <option value="VA">VA</option>
        <option value="WA">WA</option>
        <option value="WI">WI</option>	
        <option value="WV">WV</option>
        <option value="WY">WY</option>
    </select>

    <label for="zip" class="form__label">Zip Code</label>
    <input type="text" id="zip" name="zip" pattern="(^\d{5}$)|(^\d{5}-\d{4}$)" maxlength="5" placeholder="Zip" required="true">

    <label for="phone" class="form__label">Phone Number</label>
    <input type="tel" id="phone" name="phone" pattern="(\+0?1\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}" placeholder="Phone Number" required="true">

    <label for="email" class="form__label">Email</label>
    <input type="email" id="email" name="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Email" required="true">

    <div class="g-recaptcha" data-sitekey="6LeJKDQUAAAAAMnyo48vqCJE8lSXqLm4yphVhWEf" id="<?= $recaptchaID; ?>" data-callback="<?= $formCallback; ?>" data-size="invisible"></div>

    <button class="form__submit js-form__submit">Send</button>

    <!-- <button class="g-recaptcha form__submit js-form__submit" data-sitekey="6LeJKDQUAAAAAMnyo48vqCJE8lSXqLm4yphVhWEf" id="<?= $recaptchaID; ?>" data-callback="<?= $formCallback; ?>">Send</button> -->


    <div class="form__legal legal">By filling out the form you are acknowleging you would<br>like to be contacted by a Mr. Clean Mainance Company represenative with the intent of service or inqury.</div>
</form>