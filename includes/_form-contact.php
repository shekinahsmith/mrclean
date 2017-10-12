<form class="form form--contact js-form--contact <?= $formClass; ?>" id="<?= $formID; ?>" method="post">

    <input type="text" id="first-name" name="firstName" placeholder="First Name" required>
    <input type="text" id="last-name" name="lastName" placeholder="Last Name" required>
    <input type="text" id="city" name="city" placeholder="City" required>

    <select class="form__select-custom" name="state">
        <option value="" disabled selected>State</option>
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

    <input type="text" id="zip" name="zip" pattern="(^\d{5}$)|(^\d{5}-\d{4}$)" maxlength="5" placeholder="Zip" required>

    <input type="tel" id="phone" name="phone" pattern="(\+0?1\s)?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}" placeholder="Phone Number (required)" required>

    <input type="email" id="email" name="email" pattern="^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$" placeholder="Email" required>

    <button class="g-recaptcha form__submit js-form__submit" data-sitekey="6LeJKDQUAAAAAMnyo48vqCJE8lSXqLm4yphVhWEf" id="<?= $recaptchaID; ?>" data-callback="<?= $formCallback; ?>">Send</button>


    <div class="form__legal legal">By filling out the form you are acknowleging you would like to be contacted by a Mr. Clean Mainance Company represenative with the intent of service or inqury.</div>
</form>