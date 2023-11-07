<template>
  <div class="space-y-5">
    <post-creation />
    <post-item v-for="i in 3" :key="i" class="" />
  </div>
</template>
<script lang="ts" setup></script>
