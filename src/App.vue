<template>
  <div id="app">
    <router-view></router-view>
  </div>
</template>

<script>

export default {
  name: "app"
};
</script>

<style>
  *{
    padding: 0;
    margin: 0;
    /* box-sizing: border-box;
    font-size: 16px;
    font-family: Arial, "Helvetica Neue", Helvetica, sans-serif; */
  }
  .security-option-menu__button{
    width: 500px;
    background: black !important;
  }
  #moreButton{
    background-image: linear-gradient(to bottom, #26282a, #1c1e20);
  }
</style>
