<template>
  <section id="contact" class="general-style">
    <div class="contact__content">
      <div class="contact__content__title">
        <h2>{{ contact }}</h2>
      </div>
      <div class="contact__info">
        <a
          target="_blank"
          href="mailto:belgradeyachting@gmail.com?Subject=Hello"
        >email: belgradeyachting@gmail.com</a>
        <a target="_blank" href="tel:+381612889393">
          <span>{{ telephone }}</span>: +381612889393
        </a>
      </div>
      <div class="contact__social">
        <a target="_blank" href="https://www.instagram.com/belgradeyachting/">
          <!-- <img src="../assets/img/instagram.svg" alt /> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
            <path
              fill="rgba(31, 87, 138)"
              d="M11.984 16.815c2.596 0 4.706-2.111 4.706-4.707 0-1.409-.623-2.674-1.606-3.538-.346-.303-.735-.556-1.158-.748-.593-.27-1.249-.421-1.941-.421s-1.349.151-1.941.421c-.424.194-.814.447-1.158.749-.985.864-1.608 2.129-1.608 3.538 0 2.595 2.112 4.706 4.706 4.706zm.016-8.184c1.921 0 3.479 1.557 3.479 3.478 0 1.921-1.558 3.479-3.479 3.479s-3.479-1.557-3.479-3.479c0-1.921 1.558-3.478 3.479-3.478zm5.223.369h6.777v10.278c0 2.608-2.114 4.722-4.722 4.722h-14.493c-2.608 0-4.785-2.114-4.785-4.722v-10.278h6.747c-.544.913-.872 1.969-.872 3.109 0 3.374 2.735 6.109 6.109 6.109s6.109-2.735 6.109-6.109c.001-1.14-.327-2.196-.87-3.109zm2.055-9h-12.278v5h-1v-5h-1v5h-1v-4.923c-.346.057-.682.143-1 .27v4.653h-1v-4.102c-1.202.857-2 2.246-2 3.824v3.278h7.473c1.167-1.282 2.798-2 4.511-2 1.722 0 3.351.725 4.511 2h7.605v-3.278c0-2.608-2.114-4.722-4.722-4.722zm2.722 5.265c0 .406-.333.735-.745.735h-2.511c-.411 0-.744-.329-.744-.735v-2.53c0-.406.333-.735.744-.735h2.511c.412 0 .745.329.745.735v2.53z"
            />
          </svg>
        </a>
        <a target="_blank" href="https://www.facebook.com/belgradeyachting/">
          <!-- <img src="../assets/img/facebook.svg" alt /> -->
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
            <path
              fill="rgba(31, 87, 138)"
              d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.604 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"
            />
          </svg>
        </a>
        <a target="_blank" href="viber://contact?number=%2B+381612889393">
          <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" viewBox="0 0 24 24">
            <path
              fill="rgba(31, 87, 138)"
              d="M12.036 5.339c-3.635 0-6.591 2.956-6.593 6.589-.001 1.483.434 2.594 1.164 3.756l-.666 2.432 2.494-.654c1.117.663 2.184 1.061 3.595 1.061 3.632 0 6.591-2.956 6.592-6.59.003-3.641-2.942-6.593-6.586-6.594zm3.876 9.423c-.165.463-.957.885-1.337.942-.341.051-.773.072-1.248-.078-.288-.091-.657-.213-1.129-.417-1.987-.858-3.285-2.859-3.384-2.991-.099-.132-.809-1.074-.809-2.049 0-.975.512-1.454.693-1.653.182-.2.396-.25.528-.25l.38.007c.122.006.285-.046.446.34.165.397.561 1.372.611 1.471.049.099.083.215.016.347-.066.132-.099.215-.198.33l-.297.347c-.099.099-.202.206-.087.404.116.198.513.847 1.102 1.372.757.675 1.395.884 1.593.983.198.099.314.083.429-.05.116-.132.495-.578.627-.777s.264-.165.446-.099 1.156.545 1.354.645c.198.099.33.149.38.231.049.085.049.482-.116.945zm3.088-14.762h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-6.967 19.862c-1.327 0-2.634-.333-3.792-.965l-4.203 1.103 1.125-4.108c-.694-1.202-1.059-2.566-1.058-3.964.002-4.372 3.558-7.928 7.928-7.928 2.121.001 4.112.827 5.609 2.325s2.321 3.491 2.32 5.609c-.002 4.372-3.559 7.928-7.929 7.928z"
            />
          </svg>
        </a>
        <a target="_blank" href="whatsapp://send?abid=+381612889393">
          <!-- <img class="viber" src="../assets/img/viber.svg" alt /> -->
          <svg
            width="60"
            height="60"
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill-rule="evenodd"
            clip-rule="evenodd"
          >
            <path
              fill="rgba(31, 87, 138)"
              d="M19 24h-14c-2.761 0-5-2.239-5-5v-14c0-2.761 2.239-5 5-5h14c2.762 0 5 2.239 5 5v14c0 2.761-2.238 5-5 5zm-.806-17.791c-.419-.386-2.114-1.616-5.887-1.633 0 0-4.451-.268-6.62 1.722-1.207 1.208-1.632 2.974-1.677 5.166-.045 2.192-.103 6.298 3.855 7.411l.004.001-.002 1.699s-.025.688.427.828c.548.17.87-.353 1.393-.916.287-.309.683-.764.982-1.111 2.707.227 4.789-.293 5.026-.37.547-.178 3.639-.574 4.142-4.679.519-4.234-.251-6.911-1.643-8.118zm.458 7.812c-.425 3.428-2.933 3.645-3.395 3.793-.197.063-2.026.518-4.325.368 0 0-1.714 2.067-2.249 2.605-.083.084-.181.118-.247.102-.092-.023-.118-.132-.116-.291l.014-2.824c-3.348-.93-3.153-4.425-3.115-6.255.038-1.83.382-3.33 1.403-4.338 1.835-1.662 5.615-1.414 5.615-1.414 3.192.014 4.722.976 5.077 1.298 1.177 1.008 1.777 3.421 1.338 6.956zm-6.025.206s.3.026.461-.174l.315-.396c.152-.196.519-.322.878-.122.475.268 1.09.69 1.511 1.083.232.196.286.484.128.788l-.002.006c-.162.288-.38.557-.655.807l-.006.005c-.309.258-.665.408-1.046.284l-.007-.01c-.683-.193-2.322-1.029-3.367-1.862-1.709-1.349-2.923-3.573-3.26-4.765l-.01-.007c-.124-.382.027-.738.284-1.046l.005-.006c.251-.275.52-.492.807-.655l.006-.001c.304-.159.592-.105.788.127.258.267.743.908 1.083 1.511.2.359.075.726-.122.878l-.396.315c-.2.161-.174.461-.174.461s.586 2.219 2.779 2.779zm3.451-1.84c.118-.001.213-.097.212-.215-.011-1.404-.441-2.531-1.278-3.348-.835-.814-1.887-1.231-3.126-1.24h-.001c-.117 0-.213.094-.214.212 0 .118.094.214.212.215 1.125.008 2.078.384 2.831 1.119.753.734 1.139 1.759 1.149 3.046.001.117.096.211.213.211h.002zm-1.123-.438h-.005c-.118-.003-.211-.1-.208-.218.016-.73-.192-1.32-.637-1.806-.443-.484-1.051-.749-1.86-.808-.117-.009-.206-.111-.197-.228.009-.118.111-.206.228-.198.91.067 1.631.385 2.144.946.515.562.767 1.27.748 2.103-.002.117-.097.209-.213.209zm-1.095-.367c-.113 0-.207-.089-.213-.203-.036-.724-.377-1.079-1.074-1.116-.117-.007-.208-.107-.201-.225.006-.117.106-.208.224-.201.919.049 1.43.575 1.477 1.521.006.118-.084.218-.202.224h-.011z"
            />
          </svg>
        </a>
      </div>
    </div>
  </section>
</template>
<script>
export default {
  props: ["contact", "telephone"],
  name: "contact"
};
</script>
<style scoped>
.general-style {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  background: #ffffff;
  color: black;
  text-align: center;
  background: url("/img/belgrade-yachting-about2.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  color: white;
  background-attachment: fixed;
  /* backdrop-filter: blur(2px); */
  /* opacity: 0.9; */
  height: 100vh;
}
h2 {
  font-size: 50px;
  text-transform: uppercase;
  font-weight: bold;
}
.contact__info {
  display: flex;
  flex-direction: column;
  padding: 0 1em;
}
a {
  margin-bottom: 1rem;
  font-size: 30px;
  font-weight: 400;
  color: white;
  text-decoration: none;
  margin-right: 0.3em;
}
.contact__social a img {
  max-width: 60px;
  margin-right: 10px;
  background: white;
}
.viber {
  /* transform: scale(1.3); */
}
@media only screen and (max-width: 425px) {
  a {
    font-size: 24px;
  }
}
</style>