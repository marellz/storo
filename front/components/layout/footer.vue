<template>
  <footer class="py-4 bg-tufts-blue text-white">
    <layout-container class="grid grid-cols-2 lg:grid-cols-3">
      <div class="flex justify-center lg:justify-start">
        <img
          src="@/assets/images/logos/logo-color.jpeg"
          class="h-32 lg:h-64"
          alt=""
        />
      </div>
      <div class="lg:col-start-3 py-5 lg:py-10">
        <ul class="flex flex-col">
          <li v-for="(link, index) in links" :key="index">
            <nuxt-link :to="link.path" class="p-2 block">
              {{ link.label }}</nuxt-link
            >
          </li>
        </ul>
      </div>

      <p class="font-light">Made by Dave. 2023.</p>
    </layout-container>
  </footer>
</template>
<script lang="ts" setup>
defineProps({
  links: {
    type: Array,
    default: () => [],
  },
});
</script>
