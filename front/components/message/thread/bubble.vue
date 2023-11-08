<template>
  <div
    class="p-5 m-2 bg-white shadow rounded-2xl font-light"
    :class="{
      '!bg-blue-500 text-white rounded-tl-none': mine,
      'rounded-tr-none': mine,
    }"
  >
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde, ea ab
      accusamus tempore quisquam repellat, consectetur voluptas voluptatum
      officiis nihil magnam? Corrupti doloremque possimus labore incidunt, id
      omnis repellat consectetur?
    </p>
  </div>
</template>
<script lang="ts" setup>
defineProps({
  mine: {
    type: Boolean,
  },
});
</script>
