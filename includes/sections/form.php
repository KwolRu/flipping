<section class="form-section">
  <div class="container">
    <div class="form-wrapper">
      <form class="form-container" action="send.php" method="post">
        <div class="form-title">НАЧАТЬ БИЗНЕС С FLIPPING POINT</div>

        <div class="form-group">
          <input type="text" class="form-input" name="name" placeholder="Ваше имя" required />
        </div>

        <div class="form-group">
          <input type="email" class="form-input" name="email" placeholder="Ваш e-mail" required />
        </div>

        <div class="form-group">
          <input id="phone" type="tel" class="form-input maskphone" name="phone" placeholder="+7 (999) 999 - 99 - 99" required />
        </div>

        <label class="form-checkbox">
          <input type="checkbox" name="agreement" required />
          <span>
            Нажимая узнать больше, вы соглашаетесь <br />
            с политикой конфиденциальности и обработке данных
          </span>
        </label>

        <button type="submit" class="form-button">Отправить</button>
      </form>
    </div>
  </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
<script>
  document.addEventListener("DOMContentLoaded", () => {
    const phoneInputs = document.querySelectorAll(".maskphone");
    phoneInputs.forEach(input => {
      const iti = window.intlTelInput(input, {
        initialCountry: "auto",
        geoIpLookup: function(callback) {
          fetch('https://ipapi.co/json')
            .then(res => res.json())
            .then(data => callback(data.country_code))
            .catch(() => callback("ru"));
        },
        nationalMode: false,
        autoPlaceholder: "polite",
        formatOnDisplay: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
      });
      input.addEventListener("input", () => {
        const dialCode = iti.getSelectedCountryData().dialCode;
        input.value = input.value.replace(new RegExp(`^\\+${dialCode}`), "").trim();
      });
    });
  });
</script>