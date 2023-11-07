<template>
<div>
    <layout-container class="space-y-10">
        <h2 class="font-medium text-lg">Liked posts</h2>
        <div class="space-y-3">
            <post-item v-for="i in 3" :key="i" class="" />
        </div>
    </layout-container>
</div>
</template>
<script lang="ts" setup>
</script>