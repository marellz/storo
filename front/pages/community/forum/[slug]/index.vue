<template>
  <layout-container>
    <div class="grid xl:grid-cols-3 gap-10">
      <div>
        <img
          class="w-full object-cover rounded-lg"
          src="https://images.unsplash.com/photo-1530685932526-48ec92998eaa?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
          alt=""
        />
      </div>
      <div class="xl:col-span-2 space-y-10">
        <layout-card class="space-y-5">
          <h1 class="text-4xl font-medium">A nice forum topic</h1>
          <div class="text-slate-700 space-y-3`">
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              magni laudantium accusantium ea cupiditate maiores, voluptatibus
              earum laboriosam, non ex debitis. Nisi, praesentium pariatur ex
              itaque fugit adipisci quo a!
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam
              magni laudantium accusantium ea cupiditate maiores, voluptatibus
              earum laboriosam, non ex debitis. Nisi, praesentium pariatur ex
              itaque fugit adipisci quo a!
            </p>
          </div>

          <div class="flex flex-col md:flex-row md:items-center space-y-3 md:space-x-5 md:space-y-0 mt-auto">
            <div class="flex items-center">
              <user-circle-icon class="h-12 text-slate-500" />
              <div class="ml-2">
                <p class="font-medium">Jane Doe</p>
                <p class="text-slate-500 text-sm">5 minutes ago</p>
              </div>
            </div>
            <div class="flex flex-wrap md:space-x-2 xl:space-x-5">
              <custom-button-action class="space-x-2 mr-2 mb-2 md:m-0">
                <heart-icon class="h-5" />
                <span>19 likes</span>
              </custom-button-action>
              <custom-button-action class="space-x-2 mr-2 mb-2 md:m-0">
                <chat-bubble-oval-left-ellipsis-icon class="h-5" />
                <span>2 comments</span>
              </custom-button-action>
              <custom-button-action class="space-x-2 mr-2 mb-2 md:m-0">
                <share-icon class="h-5" />
                <span>Share</span>
              </custom-button-action>
              <custom-button-action class="space-x-2 mr-2 mb-2 md:m-0">
                <bookmark-icon class="h-5" />
              </custom-button-action>
            </div>
          </div>
        </layout-card>

        <div class="flex items-center justify-between">
          <h5 class="text-xl font-medium">Forum responses</h5>
          <filter-order label="Order responses by" />
        </div>
        
        <layout-card>
          <div class="-mx-5">
            <blog-comment />
            <blog-comment />
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

import { UserCircleIcon } from "@heroicons/vue/24/solid";
</script>
