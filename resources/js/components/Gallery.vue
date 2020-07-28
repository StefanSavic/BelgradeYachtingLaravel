<template>
  <div id="gallery">
    <div class="gallery__title">
      <h2>{{gallery}}</h2>
    </div>

    <div class="gallery__container row">
      <div v-for="(img,i) in imageNames" :key="i" class="col-md-6 col-sm-12 col-xs-12">
        <img :src="imgPath(img)" alt />
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["gallery"],
  name: "gallery",
  data() {
    return {
      imageNames: [
        "yaht2.jpg",
        "yaht3.jpg",
        "yaht5.jpg",
        "yaht6.jpg",
        "yaht7.jpg",
        "yaht8.jpg"
      ]
    };
  },
  methods: {
    imgPath(imgName) {
      return `/img/gallery/${imgName}`;
    }
  }
};
</script>

<style scoped>
#gallery {
  padding: 0 1rem;
  padding-top: 121px;
  text-align: center;
  /* background: url("../assets/img/water3.jpg"); */
}

.gallery__title h2 {
  text-transform: capitalize;
  padding: 50px 0;
  color: rgba(31, 87, 138);
  font-family: "Dosis", sans-serif;
}

img {
  width: 100%;
  height: auto;
  margin-bottom: 0.8rem;
}
@media only screen and (max-width: 425px) {
  #gallery {
    padding: 255px 0;
    /* height: auto; */
  }
}
</style>>


