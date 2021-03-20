import AdminHome from './components/admin/AdminHome.vue'

//Category Component imports here
import CategoryIndex from './components/admin/category/Index.vue'
import CreateCategory from './components/admin/category/Create.vue'

//Post Component imports here
import Example from './components/ExampleComponent'
export const routes = [

      { path: '/home', component: AdminHome },

      //category routes here
      { path: '/categories', component: CategoryIndex },
      { path: '/create-category', component: CreateCategory },

      //Posts routes here
      { path: '/posts', component: Example },
    
    ];
