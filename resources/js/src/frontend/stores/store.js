import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'

Vue.use(Vuex)

axios.defaults.baseURL = window.location.origin + '/api'

export default new Vuex.Store({
    state: {
        user: null
    },

    mutations: {
        setUserData(state, userData) {
            state.user = userData
            localStorage.setItem('user', JSON.stringify(userData))
            axios.defaults.headers.common.Authorization = `Bearer ${userData.token}`
        },

        clearUserData() {
            localStorage.removeItem('user')
            location.reload()
        }
    },

    actions: {
        login({ commit }, credentials) {
            return axios
                .post('/login', credentials)
                .then(({ data }) => {
                    commit('setUserData', data)
                   
                    let user = data.user

                   
                    if(data.status == true){

                        window.location.href = window.location.origin
                        
                    }

                    if(data.status === false){
                        
                        
                        $('#alert_message').addClass('alert alert-danger')
                        $('#alert_message').text(data.message)
                        setTimeout(()=>{

                            $('#alert_message').removeClass('alert alert-danger')
                            $('#alert_message').text("")

                        }, 3000)
                    }
                     
                      
                })
        },

        signOut({ commit }) {
            commit('clearUserData')
            window.location.href = window.location.origin
        }
    },

    getters: {
        isLogged: state => !!state.user,
        user: state => state.user,
        
    }
})
