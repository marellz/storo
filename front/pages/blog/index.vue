<template>
  <layout-container>
    <div>
      <!-- grid gap-4 md:grid-cols-2 lg:grid-cols-3 items-start -->
      <div class="mt-10 columns-sm gap-6">
        <div
          v-for="(story, index) in data.stories"
          :key="index"
          class="border relative rounded-lg overflow-hidden mb-6 hover:transform hover:scale-105 transition"
        >
          <nuxt-link :to="`/stories/${story.slug}`">
            <img :src="story.image.urls.regular" :alt="story.image.description" />
          </nuxt-link>
          <div class="absolute bottom-0 z-10 text-white">
            <span class="bg-black opacity-50 absolute inset-0"></span>
            <div class="relative p-5">
              <nuxt-link :to="`/stories/${story.slug}`">
                <h2 class="font-medium text-xl">
                  {{ story.title }}
                </h2>
                <p class="opacity-50 text-sm line-clamp-3 mt-2">
                  {{ story.excerpt }}
                </p>
              </nuxt-link>
              <div class="flex flex-wrap mt-2">

                <a href="#author_page" class="flex items-center space-x-2 py-2 mr-4">
                  <user-icon class="h-4" />
                  <p class="text-sm font-medium">
                    {{ story.user.name }}
                  </p>
                </a>

                <a target="_blank" :href="story.image.creator.profile_url" class="flex items-center space-x-2 py-2 border-l px-4">
                  <photo-icon class="h-4" />
                  <p class="text-sm font-medium">
                    {{ story.image.creator.name }}
                  </p>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </layout-container>
</template>
<script lang="ts" setup>
import { UserIcon, PhotoIcon } from "@heroicons/vue/24/solid";
const { data } = await useFetch("http://localhost:8000/api/stories");
</script>
