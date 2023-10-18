<template>
  <layout-container>
    <div class="grid grid-cols-3 gap-10">
      <img :src="data.story.image.urls.full" :alt="data.story.image.description">
      <div class="col-span-2">
        <div class="text-xl leading-9 space-y-3" v-html="data.story.content">
        </div>
      </div>
    </div>
  </layout-container>
</template>

<script lang="ts" setup>
const route = useRoute();
const slug = route.params.slug;

const { data } = await useFetch(`http://localhost:8000/api/stories/${slug}`);

// const {data } = await useFetch('')
</script>
