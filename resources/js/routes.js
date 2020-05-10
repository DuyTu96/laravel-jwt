import AuthLayout from './components/main/AuthLayout.vue'
import Login from './components/auth/Login.vue'
import Register from './components/auth/Register.vue'

export const routes = [
	{
		path: '/',
		redirect: 'login',
		component: AuthLayout,
		children: [
			{
				path: '/login',
				name: 'login',
				component: Login
			},
			{
				path: '/register',
				name: 'register',
				component: Register
			}
		]
	},
];

export default routes;