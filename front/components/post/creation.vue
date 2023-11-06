<template>
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
</template>
<script lang="ts" setup>
import { PaperAirplaneIcon } from "@heroicons/vue/24/outline";
</script>
