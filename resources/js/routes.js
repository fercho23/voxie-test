import Login from './components/Login.vue';
import Home from './components/Home.vue';
import ContactList from './components/ContactList.vue';
import CreateContact from './components/CreateContact.vue';
 
export const routes = [
    {
        name: 'home',
        path: '/',
        component: Home
    },
    {
        name: 'login',
        path: '/login',
        component: Home
    },
    {
        name: 'contacts.create',
        path: '/contacts/create',
        component: CreateContact
    },
    {
        name: 'contacts.list',
        path: '/contacts/list',
        component: ContactList
    }
];