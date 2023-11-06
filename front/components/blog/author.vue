<template>
  <nuxt-link class="block" to="#author_page">
    <layout-card class="space-y-4 flex flex-col">
      <h1 class="text-lg font-semibold">{{ title }}</h1>
      <img
        class="w-full h-96 object-cover object-top rounded-lg"
        src="https://images.unsplash.com/photo-1542206395-9feb3edaa68d?q=80&w=2564&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt=""
      />
      <div class="flex flex-col">
        <div class="flex items-center space-x-2">
          <p class="text-lg">Jane Doe</p>
          <span> &ndash; </span>
          <span>50+</span>
        </div>
        <p class="text-slate-500">Joined 2009</p>
        <div class="mt-4">
          <p class="font-light">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus
            sed provident ea hic, sint, ex porro nulla minus labore deserunt,
            culpa nesciunt consequatur fugit commodi. Saepe alias dolorum
            reprehenderit fuga.
          </p>
        </div>
      </div>
    </layout-card>
  </nuxt-link>
</template>
<script lang="ts" setup>
defineProps({
  title: {
    type: String,
    default: "Author",
  },
  author: {
    type: Object,
    default: () => {
      return {};
    },
  },
});
</script>
