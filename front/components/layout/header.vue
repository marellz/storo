<template>
  <!-- header -->

  <div class="py-5">
    <layout-container class="flex space-x-4 items-center">
      <!-- trigger -->
      <custom-button-action
        class="lg:invisible"
        @click="$emit('toggle', !navActive)"
      >
        <Bars3BottomLeftIcon class="h-5" />
      </custom-button-action>

      <nuxt-link to="/" class="lg:hidden flex-none">
        <img src="@/assets/images/logos/logo-black.png" class="h-12" alt="" />
      </nuxt-link>

      <template v-if="auth.hasAuth">
        <div class="flex items-center space-x-2 !ml-auto">
          <user-circle-icon class="h-12 text-slate-500 flex-none" />
          <div class="space-y-1">
            <p class="font-medium text-lg leading-4">{{ auth.user.name }}</p>
            <a href="#" class="text-slate-500 hover:text-blue-500 text-sm leading-3" @click.prevent="auth.logout()">Logout</a>
          </div>
        </div>
      </template>
      <template v-else>
        <ul class="flex items-center !ml-auto">
          <li v-for="(link, index) in links" :key="index" class="flex flex-col">
            <nuxt-link :to="link.path" class="px-3 sm:px-8 py-2 font-medium">{{
              link.label
            }}</nuxt-link>
          </li>
        </ul>
      </template>
    </layout-container>
  </div>
</template>
<script lang="ts" setup>
import { Bars3BottomLeftIcon } from "@heroicons/vue/24/outline";
import { UserCircleIcon  } from "@heroicons/vue/24/solid";
import { authStore } from "@/stores/auth";

defineProps({
  navActive: {
    type: Boolean,
    default: false,
  },
});

const auth = authStore();

const links = ref([
  {
    path: "/auth/login",
    label: "Login",
  },
  {
    path: "/auth/register",
    label: "Register",
  },
]);

onMounted(() => {
  console.log(auth.hasAuth);
  
})
</script>
