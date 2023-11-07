<template>
  <nuxt-link :to="link" class="block">
    <layout-card>
      <div class="space-y-3">
        <div class="flex items-center space-x-2">
          <h1 class="text-xl font-bold">A nice forum</h1>
          <arrow-top-right-on-square-icon class="h-5 text-slate-400" />
        </div>

        <div class="flex space-x-5">
          <img
            class="w-32 h-32 rounded-lg"
            src="https://images.unsplash.com/photo-1530685932526-48ec92998eaa?q=80&w=2670&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt=""
          />
          <div class="space-y-3">
            <button class="border rounded-lg py-0 px-2 text-sm text-slate-500">
              Topic
            </button>
            <p class="text-slate-700 line-clamp-2">
              Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              Necessitatibus id labore doloremque recusandae ullam, iure
              possimus inventore odio explicabo eaque quidem nesciunt et
              corporis enim itaque temporibus saepe nisi porro.
            </p>
            <div class="text-slate-500 flex items-center space-x-2">
              <chat-bubble-left-right-icon class="h-4" />
              <span>123 responses</span>
            </div>
          </div>
        </div>
      </div>
    </layout-card>
  </nuxt-link>
</template>

<script lang="ts" setup>

import { ArrowTopRightOnSquareIcon } from "@heroicons/vue/24/outline";
import { ChatBubbleLeftRightIcon } from "@heroicons/vue/24/solid";

const link = "/community/forum/id";
</script>
