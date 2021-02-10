import axios from "axios"

export default {
  state: {
    welcomeMessage: 'Selamat Datang di Aplikasi SMAS',
    costumers: []
  },
  gettters: {
    welcome(state) {
      return state.welcomeMessage
    }
  },
  muttation: {},
  actions: {
    getCostumers(context) {
      axios.get('/api/members')
        .then((response) => {

        })
    }
  }
}