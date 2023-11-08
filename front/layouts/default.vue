<template>
  <div class="flex flex-col h-[100vh]">
    <main class="flex flex-auto">
      <layout-nav :active="navActive" @close="navActive = false" />

      <div class="flex-auto overflow-auto h-full bg-slate-100 pb-16">
        <layout-header @toggle="(active) => (navActive = active)" />
        <slot />
      </div>
    </main>
  </div>
</template>
<script lang="ts" setup>
const navActive = ref(false);
</script>
