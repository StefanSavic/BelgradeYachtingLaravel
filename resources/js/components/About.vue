<template>
  <div id="about" class="about">
    <div class="about__content">
      <h2 class="about__content_title">{{ title }}</h2>
      <p class="about__content_subtitle">{{subtitle}}</p>
      <p class="about__content_subtitle">{{subtitle2}}</p>
      <div class="about__price-card">
        <span class="about__price-card__title">{{capacity}}</span>
        <span class="about__price-card__title">{{price}}</span>
      </div>
    </div>
  </div>
</template>
<script>
export default {
  props: ["title", "subtitle", "subtitle2", "capacity", "price"],
  name: "about"
};
</script>
<style scoped>
#about {
  font-family: "Dosis", sans-serif;
  display: flex;
  color: white;
  text-align: center;
  background: url("/img/belgrade-yachting-about2.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  color: white;
  background-attachment: fixed;
  /* opacity: 0.9; */
  justify-content: center;
  align-items: center;
  flex-direction: column;
  padding-top: 121px;
  width: 100%;
  padding-bottom: 100px;
  /* padding: 100px 0; */
  padding-left: 15px;
  padding-right: 15px;
}
@media only screen and (min-width: 1880px) {
  p,
  span {
    font-size: 25px;
  }
}
@media only screen and (max-width: 700px) {
  #about {
    background-position: center;
    padding-top: 130px;
  }
  p,
  span {
    font-size: 21px !important;
  }
}
@media only screen and (min-width: 1920px) {
  #about {
    height: 100vh;
    padding-bottom: 0 !important;
  }
}
@media only screen and (max-width: 425px) {
  #about {
    /* padding: 255px 0; */
    height: auto;
  }
}

h1,
p,
span {
  padding: 20px 10px;
}
h1 {
  font-size: 48px;
  margin-top: 50px;
  font-weight: bold;
  /* line-height: 75px; */
}
p,
span {
  font-size: 23px;
  font-weight: 400;
  max-width: 985px;
}
p {
  font-weight: 400 !important;
}
span {
  min-width: 300px;
  max-width: 400px;
  /* border: 1px solid whitesmoke; */
  padding: 0.2em;
  font-size: 28px;
  color: black;
  /* background: rgba(225, 225, 225, 0.5); */
  background: rgba(31, 87, 138, 0.8);
  color: black;
  color: white;
}
.about__price-card {
  display: flex;
  flex-direction: column;
  margin-top: 10px;
  justify-content: center;
  align-items: center;
}
</style>



