<template>
  <layout-card>
    <h1 class="text-lg font-semibold">Subscribe to our newsletter</h1>
    <div class="mt-4">
      <form @submit.prevent="">
        <form-input type="email" placeholder="Email" required />
        <custom-button block class="space-x-2">
          <envelope-icon class="h-5" />
          <span>Subscribe</span>
        </custom-button>
      </form>
    </div>
  </layout-card>
</template>
<script lang="ts" setup>
import { EnvelopeIcon } from "@heroicons/vue/24/outline";
</script>
