<template>
  <div class="bg-primary bg-pattern">
        <div class="home-btn d-none d-sm-block">
            <a href="index.html"><i class="mdi mdi-home-variant h2 text-white"></i></a>
        </div>

        <div class="account-pages pt-sm-5 pb-sm-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mb-5">
                            <a href="index.html" class="logo"><img src="../assets/images/logo-light.png" height="24" alt="logo"></a>
                            <h5 class="font-size-16 text-white-50 mb-4">Selamat datang di halaman Login Event Dieng</h5>
                        </div>
                    </div>
                </div>
                <!-- end row -->

                <div class="row justify-content-center">
                    <div class="col-xl-5 col-sm-8">
                        <div class="card">
                            <div class="card-body p-4">
                                <div class="p-2">
                                    <h5 class="mb-5 text-center">Login untuk melanjutkan</h5>
                                    <form class="form-horizontal" @submit.prevent="logins">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="text" class="form-control" id="email" required v-model="login.email">
                                                    <label for="email">Email</label>
                                                </div>

                                                <div class="form-group form-group-custom mb-4">
                                                    <input type="password" class="form-control" id="userpassword" required v-model="login.password">
                                                    <label for="userpassword">Password</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input" id="customControlInline">
                                                            <label class="custom-control-label"
                                                                for="customControlInline">Ingat saya</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-md-right mt-3 mt-md-0">
                                                            <a href="auth-recoverpw.html" class="text-muted"><i
                                                                    class="mdi mdi-lock"></i> Lupa Password ?</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mt-4">
                                                    <button class="btn btn-success btn-block waves-effect waves-light" type="submit">Log In</button>
                                                </div>
                                                <div class="mt-4 text-center">
                                                    <a href="auth-register.html" class="text-muted"><i class="mdi
                                                            mdi-account-circle mr-1"></i> Buat akun</a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- end Account pages -->

        <!-- JAVASCRIPT -->

    </div>
</template>

<script src="@assets/libs/jquery/jquery.min.js"></script>
<script src="@assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="@assets/libs/metismenu/metisMenu.min.js"></script>
<script src="@assets/libs/simplebar/simplebar.min.js"></script>
<script src="@assets/libs/node-waves/waves.min.js"></script>

<script src="https://unicons.iconscout.com/release/v2.0.1/script/monochrome/bundle.js"></script>

<script src="@assets/js/app.js"></script>
<script>
import Axios from 'axios';

export default {
  data() {
    return {
      login: {
        email: '',
        password: '',
      }
    }
  },
  methods: {
    logins() {
      console.log('login')
    //   Axios.post('http://api-dieng.primakom.co.id/login', {
    //     username: this.login.email,
    //     password: this.login.password,
    //   })
    //     .then((res) => {
    //       console.log(res)
    //     })
    //     .catch((err) => {
    //         console.log(err)
    //     })
    this.$store.dispatch('postApi', {
        url: 'login',
        data: {
          username: this.login.email,
          password: this.login.password,
        },
      })
        .then((res) => {
            console.log(res)
        })
        .catch((err) => {
            console.log(err)
        })
    }
  }
};
</script>

<style lang="scss">
// <link href="../src/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
//   <!-- Icons Css -->
//   <link href="../src/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
//   <!-- App Css-->
//   <link href="../src/assets/css/app.min.css" rel="stylesheet" type="text/css" />  
  @import '../assets/css/bootstrap.min.css';
  @import '../assets/css/icons.min.css';
  @import '../assets/css/app.min.css';
</style>
