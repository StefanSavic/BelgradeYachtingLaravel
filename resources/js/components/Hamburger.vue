<template>
  <article class="message" :class="accordionClasses">
    <div class="message-header" @click="toggleAccordion">
      <svg fill="#fff" viewBox="0 0 100 80" width="20" height="20">
        <rect width="100" height="20" rx="8" />
        <rect y="30" width="100" height="20" rx="8" />
        <rect y="60" width="100" height="20" rx="8" />
      </svg>
    </div>
    <div class="message-body" :class="{'pb-40': isOpen}">
      <slot></slot>
      <!-- <div class="message-content">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
        <strong>Pellentesque risus mi</strong>
      </div>-->
    </div>
  </article>
</template>

<script>
export default {
  data() {
    return {
      isOpen: false
    };
  },
  methods: {
    toggleAccordion: function() {
      this.isOpen = !this.isOpen;
    }
  },
  computed: {
    accordionClasses: function() {
      return {
        "is-closed": !this.isOpen,
        "is-primary": this.isOpen,
        "is-dark": !this.isOpen
      };
    }
  }
};
</script>

 <style scoped>
.message {
  max-width: 500px;
  margin-left: auto;
  margin-right: auto;
}
.message-header {
  cursor: pointer;
  position: absolute;
  right: 15px;
  top: 10px;
  display: none;
  padding: 1em;
}
@media only screen and (max-width: 425px) {
  .message-header {
    display: flex;
  }
}
/* .pb-40 {
  padding-bottom: 40px !important;
} */
.message-body {
  padding: 0;
  max-height: 20em;
  overflow: hidden;
  transition: 0.3s ease all;
}
.is-closed .message-body {
  max-height: 0;
}
.message-content {
  padding: 20px;
}
</style>
