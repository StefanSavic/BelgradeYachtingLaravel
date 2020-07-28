<template>
  <header class="navigation" v-bind:class="{ opened: opened }">
    <div class="container-fluid navigation__wrapper">
      <div id="branding">
        <scrollLink href="#about">
          <img src="img/belgrade_yachting-logo.png" alt width="100" height="100" />
        </scrollLink>
        <h1 class="logo_heading">Belgrade Yachting</h1>
      </div>
      <!-- <div class="hamburger" @click="opened = !opened">III</div> -->
      <!-- <hamburger> -->

      <hamburger>
        <nav class="nav-responsive">
          <scrollLink href="#about">{{about}}</scrollLink>
          <scrollLink href="#gallery">{{gallery}}</scrollLink>
          <scrollLink href="#contact">{{contact}}</scrollLink>
          <language-switcher :locale="locale" :en="en" :sr="sr"></language-switcher>
          <!-- <languageSwitcher /> -->
          <!-- <languageSwitcher /> -->
        </nav>
      </hamburger>
      <!-- {{nav-links}} -->
      <nav class="nav">
        <scrollLink href="#about">{{about}}</scrollLink>
        <scrollLink href="#gallery">{{gallery}}</scrollLink>
        <scrollLink href="#contact">{{contact}}</scrollLink>
        <language-switcher :locale="locale" :en="en" :sr="sr"></language-switcher>
        <!-- <languageSwitcher /> -->
        <slot></slot>
      </nav>

      <!-- <nav class="nav-responsive" v-if="opened">
        <scrollLink href="#about">{{about}}</scrollLink>
        <scrollLink href="#gallery">{{gallery}}</scrollLink>
        <scrollLink href="#contact">{{contact}}</scrollLink>
        <languageSwitcher />
      </nav>-->
    </div>
  </header>
</template>
<script>
// import languageSwitcher from "components/LanguageSwitcher.vue";
// import scrollLink from "@/components/ScrollLink.vue";
// import hamburger from "@/components/Hamburger.vue";
// import langSwitcher from "@/components/langSwitcher.vue";
export default {
  props: ["locale", "en", "sr", "about", "gallery", "contact"],
  //   name: "navigation",
  data() {
    return {
      opened: false
    };
  },
  components: {
    // languageSwitcher,
    // scrollLink,
    // hamburger
    // langSwitcher
  },
  mounted() {
    if (this.opened) {
      var header = document.querySelector("header");
      header.style("height", 400);
    }
    // window.onscroll = function(ev) {
    //   if (window.innerHeight + window.scrollY >= document.body.offsetHeight) {
    //     console.log("scrolled");
    //     // you're at the bottom of the page
    //   }
    // };
    window.onscroll = function(ev) {
      var header = document.querySelector("header");
      if (window.scrollY > 0) {
        console.log("scrolled");
        header.classList.add("scrolled");
      } else if (window.scrollY === 0) {
        header.classList.remove("scrolled");
      }
    };
  }
};
</script>

<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Sail&display=swap");
@import url("https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;700&display=swap");

@keyframes open {
  from {
    height: 123px;
  }
  to {
    height: 200px;
  }
}
.opened {
  animation: open 3s linear;
}

header {
  font-family: "Dosis", sans-serif;
  font-weight: 700;
  display: flex;
  justify-content: center;
  align-items: center;
  /* background: #66ccff; */
  color: #ffffff;
  padding-top: 1px;
  min-height: 70px;
  top: 0;
  width: 100%;
  z-index: 999;
  /* padding: 0 5px; */
  transition: all 0.3s linear;
  /* position: absolute;
  top: 0;
  z-index: 99999999999; */
}
#branding {
  /* position: fixed; */
}
#branding a:hover {
  border-bottom: 2px solid transparent;
}
.scrolled .navigation__wrapper {
  /* transform: translateY(10px); */
}
.scrolled {
  position: fixed;
  border-bottom: #ffffff 1px solid;
  /* background-color: rgba(137, 167, 209, 0.5); */
  /* background-color: rgba(62, 78, 104); */
  /* background-color: rgba(80, 91, 109); */
  background-color: rgba(31, 87, 138);
}
.scrolled h1 {
  font-size: 50px;
}
#branding {
  display: flex;
  align-items: center;
}
h1 {
  font-family: Sail;
  font-size: 40px;
  transition: all 0.3s linear;
}
nav {
  display: flex;
  align-items: center;
}
/* .nav-responsive {
  display: none;
} */
header a {
  color: #ffffff;
  text-decoration: none;
  text-transform: uppercase;
  font-weight: bold;
  font-size: 20px;
  margin-right: 10px;
}

.navigation__wrapper {
  width: 100%;
  /* padding: 5px 0; */
  display: flex;
  align-items: center;
  justify-content: space-between;
  flex-wrap: wrap;
  padding: 5px 0;
  margin: 0 2rem;
  /* transform: translateY(10px); */
}
.hamburger {
  display: none;
}
.nav-responsive {
  /* position: fixed; */
}
@media only screen and (min-width: 426px) {
  .nav-responsive {
    display: none;
  }
}
@media only screen and (max-width: 425px) {
  .navigation__wrapper {
    flex-direction: column;
  }
  .nav {
    display: none;
  }
  nav {
    flex-direction: column;
  }
  .hamburger {
    position: fixed;
    right: 30px;
    top: 20px;
    display: flex;
  }
}
@media only screen and (max-width: 899px) {
  /* header a {
    font-size: 17px;
  } */
  .logo_heading {
    display: none;
  }
  .navigation__wrapper {
    justify-content: center !important;
  }
}
</style>