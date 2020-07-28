<template>
  <section id="hero" class="hero">
    <by-navigation
      :about="about"
      :gallery="gallery"
      :contact="contact"
      :locale="locale"
      :en="en"
      :sr="sr"
    ></by-navigation>

    <div class="hero__content container">
      <h1 class="hero-title">Belgradeyachting Story</h1>
      <h2 class="hero-title">{{title}}</h2>
      <p>{{subtitle}}</p>
    </div>
  </section>
</template>

<script>
// import Navigation from "@/components/Navigation.vue";
export default {
  props: [
    "locale",
    "en",
    "sr",
    "about",
    "gallery",
    "contact",
    "title",
    "subtitle"
  ],
  name: "hero"
  //   components: { Navigation }
};
</script>

<style scoped>
.hero {
  color: white;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  width: 100%;
  min-height: 100vh;
  background: url("/img/belgradeyachting-hero1.jpg");
  text-align: center;
  z-index: 9999999;
  background-size: cover;
  background-attachment: fixed;
  font-family: "Sail", cursive;
  flex-direction: column;
}
.hero__content {
  animation: goUp 1s linear;
  /* display: flex; */
  transition: 1s all ease-in;
  margin: auto;
}

h1 {
  margin: 0;
  padding: 0;
  font-size: 60px;
}
p {
  font-size: 30px;
}
h1,
p {
  padding: 0 10px;
}
@keyframes goUp {
  from {
    transform: translateY(90);
  }
  to {
    transform: translateY(0);
  }
}
@media only screen and (min-width: 1760px) {
  .hero {
    background-position: center -495px;
  }
}
@media only screen and (min-width: 426px) {
  .hero__content {
    /* transform: translateY(90px); */
  }
}
@media only screen and (max-width: 425px) {
  h1 {
    font-size: 40px;
  }
}
</style>