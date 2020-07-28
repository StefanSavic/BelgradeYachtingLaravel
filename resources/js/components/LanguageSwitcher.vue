<template>
  <div class="locale-changer">
    <button @click.prevent="toggleVisible()">
      <!-- <img :src="imgPath($i18n.locale)" alt /> -->
      <span>{{locale}}</span>
      <div>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink"
          aria-hidden="true"
          focusable="false"
          width="1em"
          height="1em"
          style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);"
          preserveAspectRatio="xMidYMid meet"
          viewBox="0 0 1200 1200"
        >
          <path
            d="M600.006 989.352l178.709-178.709L1200 389.357l-178.732-178.709L600.006 631.91L178.721 210.648L0 389.369l421.262 421.262l178.721 178.721h.023z"
            fill="white"
          />
          <rect x="0" y="0" width="1200" height="1200" fill="rgba(0, 0, 0, 0)" />
        </svg>
      </div>
    </button>
    <ul class="languageList" :class="accordianClasses">
      <li v-for="(lang, i) in langs" :key="`Lang${i}`">
        <a v-if="lang.text !== locale" :href="lang.link">{{lang.text}}</a>
        <img v-if="lang.text !== locale" :src="'/img/flags/'+ lang.text +'.png'" alt />
      </li>
    </ul>
  </div>
</template>

<script scoped>
// import { mixin as clickaway } from "vue-clickaway";
export default {
  // mixins: [clickaway],
  props: ["locale", "en", "sr"],
  data() {
    return {
      isVisible: false,
      langs: [
        { link: this.en, text: "en" },
        { link: this.sr, text: "sr" }
      ]
    };
  },

  methods: {
    closeDropdown() {
      this.isVisible = false;
    },
    toggleVisible() {
      console.log("clicked");
      this.isVisible = !this.isVisible;
    },
    // imgPath(lang) {
    //   return require(`@/assets/img/flags/${lang}` + ".png");
    // },
    changeLocale(lang) {
      this.$i18n.locale = lang;
      this.isVisible = false;
      this.$router.push({
        params: { lang: lang }
      });
    }
  },
  computed: {
    accordianClasses: function() {
      return {
        "is-closed": !this.isVisible
      };
    }
  },
  mounted() {}
};
</script>
<style scoped lang="scss">
.languageList {
  // position: relative;
  top: 80px;
  transition: 0.3s ease all;
  text-transform: uppercase;
  margin-bottom: 0;
  position: fixed;
  font-size: 20px;
  a {
    margin-right: 10px;
    color: white;
  }

  li {
    display: flex;
    justify-content: center;
    align-items: center;
  }
}
img {
  max-width: 25px;
}
.is-closed {
  max-height: 0 !important;
  overflow: hidden;
  margin: 0;
}
button {
  text-transform: uppercase;
  display: flex;
  align-items: center;
  width: 55px;
  justify-content: space-between;
  background: transparent;
  border: none;
  color: white;
  font-weight: bold;
  font-size: 20px;
  cursor: pointer;
  padding: 0;
  position: fixed;
  svg {
    margin-top: 4px;
  }
}

@media only screen and (max-width: 425px) {
  button {
    position: relative;
  }
  .languageList {
    position: static;
  }
  .locale-changer {
    margin: 5px 0;
    margin-right: 0 !important;
  }
}
ul {
  padding: 0;
  /* display: flex; */
  list-style: none;

  text-transform: uppercase;
}
li {
}
div {
  display: flex;
  justify-content: center;
  align-items: center;
  /* flex-direction: column; */
  /* margin-bottom: 3px; */
}
ul span {
  margin-left: 15px;
}
.locale-changer {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-right: 40px;
  text-transform: uppercase;
}
</style>