<template>
  <layout-container>
    <div class="space-y-10">
      <layout-salutation
        main="Community"
        context="See what's going on around you"
      />

      <div class="grid grid-cols-2 gap-10">
        <community-group v-for="i in 3" :key="i" />
      </div>
      
      <div class="grid grid-cols-2 gap-10">
        <div class="col-span-2 space-y-4">
          
          <div class="space-y-1">
            <h1 class="text-3xl font-medium">Forums</h1>
            <p class="text-slate-500">Discussions, Q & A style</p>
          </div>

          <div class="flex flex-wrap">
            <custom-button-action class="mr-3 mb-3 px-5 py-0 border-tufts-blue text-tufts-blue">All</custom-button-action>
            <custom-button-action class="mr-3 mb-3 px-5 py-0" v-for="i in 5" :key="i">Topic {{  i }}</custom-button-action>
          </div>
        </div>
        
        <community-forum v-for="i in 4" :key="i" />
        
      </div>
    </div>
  </layout-container>
</template>

<script lang="ts" setup></script>
