<template>
  <a :href="href" @click.prevent="scroll">
    <slot></slot>
  </a>
</template>

<script>
export default {
  props: ["href"],
  methods: {
    scroll() {
      // document.querySelector("header").classList.add("scrolled");
      document.querySelector(this.href).scrollIntoView({ behavior: "smooth" });
    }
  }
};
</script>

<style scoped>
a {
  transition: all 0.2s linear;
  padding: 2px;
  border: 2px solid transparent;
}
a:hover {
  padding: 2px;
  border-bottom: 2px solid white;
  border-radius: 3px;
}

@media only screen and (max-width: 371px) {
  a {
    /* font-size: 12px !important; */
  }
}
</style>
