<template>
  <layout-container>
    <div class="grid grid-cols-3 gap-4">
      <div class="col-span-2 p-2">
        <layout-salutation
          main="Good morning User"
          context="What's new with you?"
        />

        <post-creation />

        <!-- posts -->

        <div class="space-x-5 mt-12">
          <post-item />
        </div>
      </div>
      <div class="px-5">
        <custom-tabs :tabs="tabs" default-tab="events">
          <template #events>
            <div class="flex justify-between">
              <h1 class="text-lg font-semibold">Upcoming events</h1>
              <nuxt-link to="#events" class="text-tufts-blue"
                >See more</nuxt-link
              >
            </div>
            <div class="mt-5">
              <event-upcoming />
            </div>
          </template>
          <template #community>
            <div class="flex justify-between">
              <h1 class="text-lg font-semibold">Suggested communities</h1>
              <nuxt-link to="#commnities" class="text-tufts-blue"
                >See more</nuxt-link
              >
            </div>

            <div class="mt-5">
              <community-suggestion />
            </div>
          </template>
          <template #follows>
            <div class="flex justify-between">
              <h1 class="text-lg font-semibold">Suggested follows</h1>
              <nuxt-link to="#follows" class="text-tufts-blue"
                >See all</nuxt-link
              >
            </div>
            <div class="mt-5">
              <follow-suggestion />
            </div>
          </template>
        </custom-tabs>
      </div>
    </div>
  </layout-container>
</template>

<script lang="ts" setup>

const tabs = ref([
  {
    key: "events",
    label: "Events",
  },
  {
    key: "community",
    label: "Community",
  },
  {
    key: "follows",
    label: "Follows",
  },
]);
</script>
