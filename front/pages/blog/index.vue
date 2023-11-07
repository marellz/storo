<template>
  <layout-container>
    <div>
      <layout-salutation
        main="Blog"
        context="Check out the latest and popular articles"
      />
      <div class="grid grid-cols-3 gap-4">
        <div class="col-span-2">
          <custom-tabs default-tab="latest" :tabs="tabs">
            <template #action>
              <li class="py-1">
                <custom-button-action class="bg-tufts-blue text-white border-tufts-blue">Create a blog post</custom-button-action>
              </li>
            </template>
            <template #latest>
              <div class="grid grid-cols-2 gap-4">
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
      
        <div class="space-y-4">
          <blog-subscription-form />
          <blog-author title="Top author" />
        </div>
      </div>
    </div>
  </layout-container>
</template>
<script lang="ts" setup>
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
