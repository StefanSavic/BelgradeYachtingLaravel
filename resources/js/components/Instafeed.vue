<template>
  <div>
    <div class="instafeed__title">
      <h3>#belgradeyachting #belgradecruise</h3>
    </div>
    <div id="instafeed" class="row"></div>
  </div>
</template>

<script>
import Instafeed from "../instafeed.min.js";
export default {
  name: "instafeed",
  mounted() {
    var feed = new Instafeed({
      limit: 12,
      accessToken:
        "IGQVJVM09KX3VkMVI5VVlVTEpLN253N3hmay15c3duTE1lYVZAxSml4b1hCdGgzdjJFODJIVHlRTjlVbmlzSnMtX3JFOHlkWDZABekc3TmljUnpodk1FY29WYW5FZATlnRVcyRm9rd19sb1hrdUpQWnNuWgZDZD",
      // target:'instafeed',

      template:
        '<div class="flex image-wrapper col-md-3 col-sm-12 col-xs-12"><a href="{{link}}" title="{{caption}}" target="_blank"><img src="{{image}}" alt="{{caption}}" class="img-fluid"/></a></div>'
    });
    feed.run();
  }
};
</script>
<style >
.instafeed__title {
  text-align: center;
  color: rgba(31, 87, 138);
}
#instafeed {
  padding: 0 1rem;
  text-align: center;
}
html {
  overflow-x: hidden;
}
.image-wrapper {
  margin-bottom: 10px;
}
.image-wrapper a {
  width: 100%;
}
.image-wrapper img {
  width: 100%;
  object-fit: cover;
  height: 337px;
  max-height: 347px;
  margin: auto;
}
@media only screen and (max-width: 425px) {
  .instafeed__title h1 {
    font-size: 32px;
  }
}
</style>