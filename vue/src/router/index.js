import Vue            from 'vue'
import Router         from 'vue-router'
import reg            from '@/components/reg'
import PersonalCenter from '@/components/PersonalCenter'
import login          from '@/components/login'
import Index          from '@/components/Index'
import WillDie        from '@/components/WaitPage/WillDie'
import willvue        from '@/components/WaitPage/willvue'



Vue.use(Router)

export default new Router({
  routes: [
  	{
  		path: '/',
  		redirect: '/index'
  	},
  	{
  		path: '/index',
  		component: Index
  	},
    {
     	path: '/reg',
     	name: 'reg',
     	component: reg
    },
    {
    	path: '/login',
    	name: 'login',
    	component: login
    },
    {
      path: '/PersonalCenter',
      name: 'PersonalCenter',
      component: PersonalCenter
    },
    {
      path: '/WillDie',
      name: 'WillDie',
      component: WillDie
    },
        {
      path: '/willvue',
      name: 'willvue',
      component: willvue
    }
  ]
})
