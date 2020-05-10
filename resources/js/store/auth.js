const state = {
  user: null,
  apiStatus: null,
  loginErrorMessages: null,
}

const getters = {

}

const mutations = {
  setUser(state, user) {
    state.user = user
  },
  setApiStatus(state, status) {
    state.apiStatus = status
  },
  setLoginErrorMessage(state, messages) {
    state.loginErrorMessages = messages
  }
}

const actions = {
  async login(context, data) {
    context.commit('setApiStatus', null)
    const response = await axios.post('/api/login', data)

    if (response.status == 200) {
      context.commit('setApiStatus', true)
      context.commit('setUser', response.data)
      return false
    }
    context.commit('setApiStatus', false)
    if (response.status == 422) {
      context.commit('setLoginErrorMessage', response.data.errors)
    } else {
      console.log('false')
    }
  }
}

export default {
  state,
  getters,
  mutations,
  actions
}