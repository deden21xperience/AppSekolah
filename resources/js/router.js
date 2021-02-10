// import Vue from 'vue'
// import Router from 'vue-router'
import Dashboard from './components/Dashboard'
import Profile from './components/Profile'
import Materi from './components/Materi'

// Vue.use(Router)

// export default new Router({
export const routes = [
  {
    path: '/',
    component: Dashboard
  },
  {
    path: '/dashboard',
    component: Dashboard
  },
  {
    path: '/profile',
    component: Profile
  },
  {
    path: '/materi',
    component: Materi
  }
  // {
  //   path: '/jadwal',
  //   component: materi
  // }
]