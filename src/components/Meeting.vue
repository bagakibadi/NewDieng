<template>
  <div class="meeting">
    <div class="container-zoom">
      <ZoomFrame :nickname="nickname" :meetingId="meetingId" :password="password" :role="role"/>
    </div>
  </div>
</template>

<script>
import ZoomFrame from "./ZoomFrame.vue";

export default {
  name: "app",
  data: function () {
      return {
          nickname: '',
          meetingId: '',
          password: '',
          role: ''
      }
  },
  components: {
    ZoomFrame,
  },
  created : function (){
      this.nickname = this.$route.query.nickname;
      this.meetingId = this.$route.query.meetingId;
      this.password = this.$route.query.password;
      this.role = this.$route.query.role;
  }
};
</script>

<style>
.container-zoom {
  width: 70%;
  height: 100%;
}
.security-option-menu__button{
  width: 500px;
  background: black ;
}
</style>