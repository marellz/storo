<template>
  <!-- header -->

  <div class="pt-9">
    <layout-container class="flex justify-end flex-col lg:flex-row items-center">
      <ul class="flex items-center lg:ml-20 py-5 lg:py-0 border mb-10">
        <li
          v-for="(link, index) in authLinks"
          :key="index"
          class="flex flex-col"
        >
          <nuxt-link
            :to="link.path"
            class="px-8 lg:text-lg font-medium py-2"
            >{{ link.label }}</nuxt-link
          >
        </li>
      </ul>
    </layout-container>
  </div>
</template>
<script lang="ts" setup>
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
