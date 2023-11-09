import { authStore } from "@/stores/auth";

const auth = authStore()

export default defineNuxtRouteMiddleware((to, from) => {

    let hasAuth = auth.hasAuth;
    let pathIsAuth = to.path.includes('/auth/')
    
    if(pathIsAuth && hasAuth){
        return navigateTo("/");
    }
});
