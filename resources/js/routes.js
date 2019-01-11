import Router from 'vue-router';

// tous les import de components sont fait dans le fichier components.js. Pour les utiliser, importer le fichier puis utiliser variable du fichier.nom du component
import view from "./components";

export default new Router({
    mode: "history",
    routes: [{
            path: "/",
            name: "home",
            component: view.Welcome
        }, {
            path: "/login",
            name: "login",
            component: view.Login
        }, {
            path: "/register",
            name: "register",
            component: view.Register
        }, {
            path: "/films/create",
            name: "addMovie",
            component: view.AddMovie
        }
    ]
});