import vue from 'vue';
import vuex from 'vuex';
import Axios from 'axios';

vue.use(vuex);

export default new vuex.Store({
  state: {
    user: null,
  },
  mutations: {

  },
  actions: {
    getApi({ commit }, proto) {
      return new Promise((resolve, reject) => {
        Axios.get(`${process.env.VUE_APP_API + proto.url}`)
          .then((res) => {
            commit(proto.mutation, res.data);
            resolve(res.data);
          })
          .catch((err) => {
            reject(new Error(err));
          });
      });
    },
    // eslint-disable-next-line no-unused-vars
    postApi({ commit }, proto) {
      return new Promise((resolve, reject) => {
        Axios.post(`${process.env.VUE_APP_API + proto.url}`, proto.data)
          .then((res) => {
            resolve(res);
          })
          .catch((err) => {
            reject(new Error(err));
          });
      });
    },
    // eslint-disable-next-line no-unused-vars
    postsApi({ commit }, proto, bagus) {
      return new Promise((resolve, reject) => {
        Axios.post(`${process.env.VUE_APP_API + proto.url}`, proto.data, bagus.config)
          .then((res) => {
            resolve(res);
          })
          .catch((err) => {
            reject(new Error(err));
          });
      });
    },
    // eslint-disable-next-line no-unused-vars
    patchApi({ commit }, proto) {
      return new Promise((resolve, reject) => {
        Axios.patch(`${process.env.VUE_APP_API + proto.url}`, proto.data)
          .then((res) => {
            resolve(res);
          })
          .catch((err) => {
            reject(new Error(err));
          });
      });
    },
    // eslint-disable-next-line no-unused-vars
    deleteApi({ commit }, proto) {
      return new Promise((resolve, reject) => {
        Axios.delete(`${process.env.VUE_APP_API + proto.url}`, proto.data)
          .then((res) => {
            resolve(res);
          })
          .catch((err) => {
            reject(new Error(err));
          });
      });
    },
  },
  modules: {

  },
});
