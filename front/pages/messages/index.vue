<template>
  <layout-container>
    <layout-salutation main="Messages"> </layout-salutation>
    <layout-card class="!p-0 border overflow-hidden relative">
      <div class="flex h-[75vh] overflow-hidden">
        <div class="flex-none flex flex-col w-full xl:w-1/3 absolute xl:static z-10 h-full bg-white xl:border-r transform -translate-x-full transition ease-in-out xl:transform-none" 
        :class="{'translate-x-0': selectedThread == null}">
          <message-list-search />
          <custom-scroll class="flex-auto h-full bg-slate-100 pr-0">
            <message-list-item
              v-for="i in 100"
              :key="i"
              :index="i"
              :unread="i == 2 ? 2 : 0"
              :active="selectedThread == i"
              @selected="selectThread(i)"
            />
          </custom-scroll>
        </div>

        
        <div class="flex-none flex flex-col w-full xl:w-2/3">
          <template v-if="selectedThread">
            <message-thread-banner @go-back="selectedThread = null" />
            <div
              class="flex flex-col-reverse overflow-auto bg-slate-100 px-5 flex-auto"
            >
              <div class="space-y-3 py-10">
                <message-thread-item :index="i" v-for="i in 5" :key="i" />
              </div>
            </div>
            <message-thread-compose @send="sendMessage" />
          </template>
          <message-thread-empty v-else />
        </div>


      </div>
    </layout-card>
  </layout-container>
</template>
<script lang="ts" setup>
const selectedThread = ref();
const threads = ref(12);
const route = useRoute();

onMounted(() => {
  let hash = route.hash;

  if (hash) {
    let selectedIndex = route.hash.split("-")[1];

    // todo: use threads.length
    if (threads.value < selectedIndex + 1) {
      selectedThread.value = selectedIndex;
    }
  }
});

const selectThread = (index: number) => {
  selectedThread.value = index;
};

const sendMessage = () => console.log("sending");
</script>
