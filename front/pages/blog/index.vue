<template>
  <layout-container>
      <layout-salutation
        main="Blog"
        context="Check out the latest and popular articles"
      />
      <div class="grid 2xl:grid-cols-3 gap-4 items-start">
        <div class="2xl:col-span-2">
          <custom-tabs default-tab="latest" :tabs="tabs">
            <template #action>
                <custom-button-action class="bg-tufts-blue text-white border-tufts-blue">
                  <span>Create a blog post</span>
                  <plus-icon class="h-5" />
                </custom-button-action>
            </template>
            <template #latest>
              <div class="grid md:grid-cols-2 gap-4">
                <blog-card
                  v-for="(story, index) in data.stories"
                  :key="index"
                  :primary="!index"
                  :story="story"
                />
              </div>
            </template>
          </custom-tabs>
        </div>
      
        <div class="grid md:grid-cols-2 2xl:grid-cols-1 items-start gap-2 2xl:space-y-4 2xl:mt-[90px]">
          <blog-subscription-form />
          <blog-author title="Top author" />
        </div>
      </div>
  </layout-container>
</template>
<script lang="ts" setup>
import { PlusIcon } from '@heroicons/vue/24/outline';
const { data } = await useFetch("http://localhost:8000/api/stories");
const tabs = ref([
  {
    key: 'latest',
    label: 'Latest',
  },
  {
    key: 'popular',
    label: 'Popular',
  },
  {
    key: 'bookmarked',
    label: 'Bookmarked',
  },
])
</script>
