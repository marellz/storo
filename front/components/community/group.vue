<template>
  <layout-card>
    <div class="grid xl:grid-cols-2 gap-4">
      <img
        class="rounded-lg h-full object-cover"
        src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?q=80&w=2669&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
        alt=""
      />
      <div class="flex flex-col items-start space-y-3">
        <button class="border rounded-lg py-0 px-2 text-sm text-slate-500">
          Topic
        </button>
        <h1 class="text-xl font-bold">A nice community</h1>
        <p class="line-clamp-3 text-slate-500">
          Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quibusdam
          neque, nihil quia explicabo perspiciatis consequatur illo sed nobis
          eum animi eveniet molestiae obcaecati sequi maxime amet distinctio.
          Quibusdam, nemo eaque.
        </p>

        <div class="text-slate-500 flex items-center space-x-2">
          <UserGroupIcon class="h-4" />
          <span>123 members </span>
        </div>

        <div class="space-x-2 mt-auto">
          <nuxt-link :to="link">
            <custom-button-action
              class="border space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
            >
              <arrow-top-right-on-square-icon class="h-5" />
              <span>Preview</span>
            </custom-button-action>
          </nuxt-link>
          <!-- <custom-button-action
            class="border space-x-2 rounded ml-auto hover:text-tufts-blue hover:border-tufts-blue"
          >
            <hand-raised-icon class="h-5" />
            <span>Join</span>
          </custom-button-action> -->
        </div>
      </div>
    </div>
  </layout-card>
</template>
<script lang="ts" setup>
import {
  HandRaisedIcon,
  ArrowTopRightOnSquareIcon,
} from "@heroicons/vue/24/outline";
import { UserGroupIcon } from "@heroicons/vue/24/solid";

const link = `/community/group/id`;
</script>
