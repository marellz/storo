<template>
  <layout-container>
    <!-- <layout-salutation :main="" :context=""></layout-salutation> -->
    <div class="grid grid-cols-3 gap-10">
      <div class="space-y-10">
        <div class="relative" v-if="data.story.image">
          <img
            class="rounded-lg sticky"
            :src="data.story.image.urls.full"
            :alt="data.story.image.description"
          />
          <p class="text-slate-500 mt-2 italic">
            Photo by
            {{ data.story.image.creator.name }}
          </p>
          <p
            class="absolute bottom-0 z-10 bg-slate-00 py-1 px-3 text-sm text-white rounded-tr rounded-bl-lg"
          ></p>
        </div>

        <blog-author title="About the author" />
      </div>
      <div class="col-span-2 space-y-10">
        <layout-card class="space-y-10">
          <div>
            <h1 class="text-4xl font-semibold">
              {{ data.story.title }}
            </h1>
            <p class="text-xl text-slate-500 mt-2">
              {{ data.story.excerpt }}
            </p>
          </div>
          <div class="flex items-center space-x-5 mt-auto">
            <custom-button-action class="space-x-2">
              <heart-icon class="h-5" />
              <span>19 likes</span>
            </custom-button-action>
            <custom-button-action class="space-x-2">
              <chat-bubble-oval-left-ellipsis-icon class="h-5" />
              <span>2 comments</span>
            </custom-button-action>
            <custom-button-action class="space-x-2">
              <share-icon class="h-5" />
              <span>Share</span>
            </custom-button-action>
            <custom-button-action class="space-x-2">
              <bookmark-icon class="h-5" />
            </custom-button-action>
          </div>
          <div
            class="text-xl leading-9 space-y-3"
            v-html="data.story.content"
          ></div>
        </layout-card>
        <layout-card class="space-y-10 px-0">
          <div class="flex justify-between px-5">
            <h2 class="text-xl font-semibold">Comments</h2>

            <custom-dropdown label="Select order">
              <template #trigger>
                <span>Order</span>
                <chevron-up-down-icon class="h-5" />
              </template>

              <custom-dropdown-item>
                <FireIcon class="h-5" />
                <span>Relevant</span>
              </custom-dropdown-item>
              <custom-dropdown-item>
                <BarsArrowDownIcon class="h-5" />
                <span>Latest</span>
              </custom-dropdown-item>
              <custom-dropdown-item>
                <BarsArrowUpIcon class="h-5" />
                <span>Oldest</span>
              </custom-dropdown-item>
            </custom-dropdown>
          </div>
          <div class="space-y-5">
            <blog-comment />
          </div>
          <div>

          </div>
        </layout-card>
      </div>
    </div>
  </layout-container>
</template>

<script lang="ts" setup>
import {
  BookmarkIcon,
  HeartIcon,
  ChatBubbleOvalLeftEllipsisIcon,
  ShareIcon,
  ChevronUpDownIcon,
  BarsArrowDownIcon,
  BarsArrowUpIcon,
  FireIcon,
} from "@heroicons/vue/24/outline";

const route = useRoute();
const slug = route.params.slug;

const { data } = await useFetch(`http://localhost:8000/api/stories/${slug}`);

// const {data } = await useFetch('')
</script>
