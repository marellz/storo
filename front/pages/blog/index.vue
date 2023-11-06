<template>
  <layout-container>
    <div>
      <layout-salutation
        main="Blog"
        context="Check out the latest and popular articles"
      />
      <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2 grid grid-cols-2 gap-4">
          <blog-card
            v-for="(story, index) in data.stories"
            :key="index"
            :primary="!index"
            :story="story"
          />
        </div>
        <div class="space-y-4">
          <blog-newsletter-form />
          <blog-author title="Top author" />
        </div>
      </div>
    </div>
  </layout-container>
</template>
<script lang="ts" setup>
const { data } = await useFetch("http://localhost:8000/api/stories");
</script>
