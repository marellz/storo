<template>
  <div class="flex flex-col h-[100vh]">
    <header class="py-4">
      <layout-container class="flex flex-col lg:flex-row items-center">
        <nuxt-link to="/">
          <img
            src="@/assets/images/logos/logo-black.png"
            class="h-32 lg:h-64"
            alt=""
          />
        </nuxt-link>
        <ul class="flex items-center lg:ml-20 py-5 lg:py-0">
          <li v-for="(link, index) in links" :key="index" class="flex flex-col">
            <nuxt-link
              :to="link.path"
              class="px-8 lg:text-lg font-medium after:block after:w-full after:h-1 after:bg-transparent"
              :class="{ 'after:bg-pink-lavender text-tufts-blue': linkIsActive(link.path) }"
              >{{ link.label }}</nuxt-link
            >
          </li>
        </ul>
      </layout-container>
    </header>
    <main class="flex-auto">
      <slot />
    </main>
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
                    {{ link.label }}</nuxt-link>
                </li>
            </ul>
        </div>

        <p class="font-light">Made by Dave. 2023.</p>
      </layout-container>
    </footer>
  </div>
</template>
<script lang="ts" setup>
const links = ref([
  {
    path: "/author",
    label: "Author",
  },
  {
    path: "/about",
    label: "About",
  },
]);

const route = useRoute();

const linkIsActive = (path: string) => route.path === path;
</script>
