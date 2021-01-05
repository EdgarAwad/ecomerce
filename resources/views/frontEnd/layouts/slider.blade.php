<div class="nav-bottom">

  <div class="popup-whatsapp fadeIn">
    <div class="content-whatsapp -top"><button type="button" class="closePopup">
        <i class="material-icons icon-font-color">close</i>
      </button>

      <p> <img src="{{ asset('img/secretary.png') }}" width="50"> Hola, ¿en que podemos ayudarle? </p>

    </div>
    <div class="content-whatsapp -bottom">
      <input class="whats-input" id="whats-in" type="text" Placeholder="Enviar mensaje..." />




      <button class="send-msPopup" id="send-btn" type="button">
        <i class="material-icons icon-font-color--black">send</i>
      </button>

    </div>
  </div>
  <button type="button" id="whats-openPopup" class="whatsapp-button">
    <div class="float" style="text-align: center;">
      <i class="fab fa-whatsapp my-float"></i>
    </div>
  </button>
  <div class="circle-anime"></div>
</div>
<script>
  popupWhatsApp = () => {

    let btnClosePopup = document.querySelector('.closePopup');
    let btnOpenPopup = document.querySelector('.whatsapp-button');
    let popup = document.querySelector('.popup-whatsapp');
    let sendBtn = document.getElementById('send-btn');

    btnClosePopup.addEventListener("click", () => {
      popup.classList.toggle('is-active-whatsapp-popup')
    })

    btnOpenPopup.addEventListener("click", () => {
      popup.classList.toggle('is-active-whatsapp-popup')
      popup.style.animation = "fadeIn .6s 0.0s both";
    })

    sendBtn.addEventListener("click", () => {
      let msg = document.getElementById('whats-in').value;
      let relmsg = msg.replace(/ /g, "%20");

      window.open('https://wa.me/573017779956?text=' + relmsg, '_blank');

    });



  }

  popupWhatsApp();
</script>