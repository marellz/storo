<template>
  <!-- header -->

  <div class="py-5">
    <layout-container
      class="flex space-x-4 items-center"
    >
      <!-- trigger -->
      <custom-button-action class="lg:invisible" @click="$emit('toggle', !navActive)">
        <Bars3BottomLeftIcon class="h-5" />
      </custom-button-action>

      <nuxt-link to="/" class="lg:hidden flex-none">
        <img src="@/assets/images/logos/logo-black.png" class="h-12" alt="" />
      </nuxt-link>

      <ul class="flex items-center !ml-auto">
        <li
          v-for="(link, index) in authLinks"
          :key="index"
          class="flex flex-col"
        >
          <nuxt-link :to="link.path" class="px-3 sm:px-8 py-2 font-medium">{{
            link.label
          }}</nuxt-link>
        </li>
      </ul>
    </layout-container>
  </div>
</template>
<script lang="ts" setup>
import { Bars3BottomLeftIcon } from "@heroicons/vue/24/outline";

defineProps({
  navActive:{
    type:Boolean,
    default: false,
  }
})

const authLinks = ref([
  {
    path: "/auth/login",
    label: "Login",
  },
  {
    path: "/auth/register",
    label: "Register",
  },
]);
</script>
