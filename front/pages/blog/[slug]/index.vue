<template>
  <layout-container>
    <!-- <layout-salutation :main="" :context=""></layout-salutation> -->
    <div class="grid grid-cols-1 xl:grid-cols-3 gap-10">
      
      <div class="relative" v-if="data.story.image">
        <img
          class="rounded-lg sticky"
          :src="data.story.image.urls.full"
          :alt="data.story.image.description"
        />
        <p class="text-slate-500 mt-2 italic text-sm lg:text-base">
          Photo by
          {{ data.story.image.creator.name }}
        </p>
      </div>

      <blog-author class="row-start-3 xl:row-start-2 -order-1" title="About the author" />

      <div class="xl:col-span-2 xl:row-span-2">
        <layout-card class="space-y-10">
          <div>
            <h1 class="text-4xl font-semibold">
              {{ data.story.title }}
            </h1>
            <p class="text-xl text-slate-500 mt-2">
              {{ data.story.excerpt }}
            </p>
          </div>
          <actions-wrap class="mt-auto">
            <actions-like />
            <actions-comment />
            <actions-share />
            <actions-bookmark />
          </actions-wrap>
          <div
            class="text-xl leading-9 space-y-3"
            v-html="data.story.content"
          ></div>
        </layout-card>
      </div>
      <layout-card class="xl:col-span-2 xl:col-start-2 space-y-10 px-0">
          <div class="flex justify-between px-5">
            <h2 class="text-xl font-semibold">Comments</h2>

            <filter-order />

          </div>
          <div class="space-y-5">
            <blog-comment />
          </div>
        </layout-card>
    </div>
  </layout-container>
</template>

<script lang="ts" setup>

const route = useRoute();
const slug = route.params.slug;

const { data } = await useFetch(`http://localhost:8000/api/stories/${slug}`);

// const {data } = await useFetch('')
</script>
