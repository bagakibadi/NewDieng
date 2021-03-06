import Vue from 'vue'
import Router from 'vue-router'
const Login = () => import ('@/views/Login')

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/login',
      name: 'Login',
      component: Login
    }
  ]
})
