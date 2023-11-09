import { defineStore } from "pinia";

import { setToken, api } from "@/composables/api";

export const authStore = defineStore("auth", {
  state: () => ({
    user: null,
    token: {},
    error: {
      message: "",
      errors: {},
    },
    loading: false,
  }),
  getters: {
    hasAuth(state) {
      return state.user && state.token;
    },
    profile(state) {
      return state.user;
    },
  },
  actions: {
    async getCookie() {
      await api.get("/sanctum/csrf-cookie");
      let token = useCookie("XSRF-TOKEN");
      this.token = token.value
      setToken(token.value);
    },
    async login(payload) {
      try {
        this.loading = true;

        const router = useRouter()

        await api.post("/api/auth/login", payload, {});

        this.fetchUser().then(router.push('/'));
        
      } catch (error) {
        console.error(error);
      } finally {
        this.loading = false;
      }
    },
    async register(payload) {},
    async fetchUser() {
      const { data } = await api.get("/api/user");
      this.user = data;
    },
    async refresh() {},
    async logout() {
      await api.post("/api/auth/logout");
      (this.user = null), (this.token = null);
    },
  },
});
