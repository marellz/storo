<template>
  <layout-container>
    <div class="grid grid-cols-3 gap-4">
      <div class="col-span-2 p-2">
        <div class="p-2 mb-5">
          <h1 class="text-3xl font-semibold">Good morning User</h1>
          <p class="text-lg text-slate-500 mt-1">What's new with you?</p>
        </div>
        <layout-card>
          <div class="flex justify-between">
            <h1 class="text-lg font-medium mb-3">Create a post</h1>
            <nuxt-link class="text-tufts-blue" to="#">Drafts</nuxt-link>
          </div>
          <form @submit.prevent="">
            <textarea
              class="border border-gray-100 rounded w-full p-3"
              placeholder="Write a post.."
              required
              rows="2"
            ></textarea>
            <div class="flex items-center mt-5">
              <form-image label="Image" />
              <custom-button class="space-x-3 ml-auto">
                <paper-airplane-icon class="h-5" />
                <span>Publish</span>
              </custom-button>
            </div>
          </form>
        </layout-card>

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
              <nuxt-link to="#events" class="text-tufts-blue">See more</nuxt-link>
            </div>
            <div class="mt-5">
              <event-upcoming />
            </div>
          </template>
          <template #community>
            <div class="flex justify-between">
              <h1 class="text-lg font-semibold">Suggested communities</h1>
              <nuxt-link to="#commnities" class="text-tufts-blue">See more</nuxt-link>
            </div>

            <div class="mt-5">
              <community-suggestion/>
            </div>
          </template>
          <template #follows>
            <div class="flex justify-between">
              <h1 class="text-lg font-semibold">Suggested follows</h1>
              <nuxt-link to="#follows" class="text-tufts-blue">See all</nuxt-link>
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
import { PaperAirplaneIcon } from "@heroicons/vue/24/outline";
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
