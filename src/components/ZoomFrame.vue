/* eslint-disable no-console */
/* eslint-disable no-console */
<template>
  <div class="iframe-container">
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="https://dmogdx0jrul3u.cloudfront.net/1.3.7/css/bootstrap.css">
    <link
      type="text/css"
      rel="stylesheet"
      href="https://dmogdx0jrul3u.cloudfront.net/1.3.7/css/react-select.css"
    >

    <meta name="format-detection" content="telephone=no">
  </div>
</template>
<script>
import { ZoomMtg } from "@zoomus/websdk";

// eslint-disable-next-line no-console
console.log("checkSystemRequirements");
// eslint-disable-next-line no-console
console.log(JSON.stringify(ZoomMtg.checkSystemRequirements()));

// CDN version default
// ZoomMtg.setZoomJSLib('https://dmogdx0jrul3u.cloudfront.net/1.3.7/lib', '/av');
ZoomMtg.setZoomJSLib('https://source.zoom.us/1.8.0/lib', '/av') 

ZoomMtg.preLoadWasm();
ZoomMtg.prepareJssdk();

var API_KEY = "JveGiw_aTK2UUM0ZGqtD2g";

var API_SECRET = "6uSRGroD81ZP9qos8VuNs2s5ztoJRqBERRMv";

export default {
  name: "ZoomFrame",
  data: function() {
    return {
      src: "",
      meetConfig: {},
      signature: {}
    };
  },
  props: {
    nickname: String,
    meetingId: String,
    password: String,
    role: String
  },
  created: function() {
    // Meeting config object
    this.meetConfig = {
      apiKey: API_KEY,
      apiSecret: API_SECRET,
      meetingNumber: this.meetingId,
      userName: this.nickname,
      passWord: localStorage.pass,
      leaveUrl: "https://mice.id",
      role: localStorage.role
    };

    // Generate Signature function
    this.signature = ZoomMtg.generateSignature({
      meetingNumber: this.meetConfig.meetingNumber,
      apiKey: this.meetConfig.apiKey,
      apiSecret: this.meetConfig.apiSecret,
      role: this.meetConfig.role,
      success: function(res) {
        // eslint-disable-next-line
        console.log("success signature: " + res.result);
      }
    });

    // join function
    ZoomMtg.init({
      leaveUrl: "http://mice.id",
      isSupportAV: true,
      success: () => {
        ZoomMtg.join({
          meetingNumber: this.meetConfig.meetingNumber,
          userName: this.meetConfig.userName,
          signature: this.signature,
          apiKey: this.meetConfig.apiKey,
          userEmail: "email@gmail.com",
          passWord: this.meetConfig.passWord,
          success: function(res) {
            // eslint-disable-next-line
            console.log("join meeting success");
            // eslint-disable-next-line no-console
            console.log(res);
          },
          error: function(res) {
            // eslint-disable-next-line
            console.log(res);
          }
        });
      },
      error: function(res) {
        // eslint-disable-next-line
        console.log(res);
      }
    });
  },
  mounted: function() {}
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
</style>
