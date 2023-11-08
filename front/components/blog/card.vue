<template>
  <layout-card
    :class="
      primary
        ? 'md:col-span-2 flex flex-col md:grid md:grid-cols-2 gap-4'
        : 'flex flex-col'
    "
  >
    <div class="relative">
      <nuxt-link :to="`/blog/${story.slug}`">
        <img
          class="w-full object-cover object-center rounded-lg"
          :class="{ 'h-64': !primary, 'h-full': primary }"
          :src="story.image.urls.regular"
          :alt="story.image.description"
        />
      </nuxt-link>
      <p
        class="absolute bottom-0 z-10 bg-slate-00 py-1 px-3 text-sm text-white rounded-tr rounded-bl-lg"
      >
        Photo by {{ story.image.creator.name }}
      </p>
    </div>

    <div class="flex flex-col flex-auto" :class="{ 'mt-5': !primary }">
      <nuxt-link :to="`/blog/${story.slug}`" class="flex flex-col space-y-4">
        <h4 class="font-medium text-slate-500">Topic</h4>
        <h2 class="font-medium text-3xl" :class="{ '!text-4xl': primary }">
          {{ story.title }}
        </h2>
        <p class="opacity-50 line-clamp-4 mt-2" :class="{ 'text-lg': primary }">
          {{ story.excerpt }}
        </p>
      </nuxt-link>
      <nuxt-link to="#author_page" class="flex items-center my-4">
        <user-circle-icon class="h-12 text-slate-500" />
        <div class="ml-2">
          <p class="font-medium">{{ story.user.name }}</p>
          <p class="text-slate-500 text-sm">5 minutes ago</p>
        </div>
      </nuxt-link>
      <actions-wrap class="mt-auto">
        <actions-like />
        <actions-comment />
        <actions-share />
        <actions-bookmark />
      </actions-wrap>
    </div>
  </layout-card>
</template>
<script lang="ts" setup>
import { UserCircleIcon } from "@heroicons/vue/24/solid";

defineProps({
  story: {
    type: Object,
    default: () => ({}),
  },
  primary: {
    type: Boolean,
    default: false,
  },
});
</script>
