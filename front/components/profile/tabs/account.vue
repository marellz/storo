<template>
  <layout-container>
    <custom-tabs :tabs="tabs" default-tab="settings">
      <template #settings>
        <layout-card>
          <form @submit.prevent="">
            <div class="grid md:grid-cols-2 gap-5">
              <div class="md:col-span-2">
                <div class="flex items-center space-x-4">
                  <form-image label="Change avatar image">
                    <!-- <template #photo>
                      <img
                        class="h-20 w-20 rounded-full object-cover"
                        src="https://images.unsplash.com/photo-1541532713592-79a0317b6b77?q=80&w=2576&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                        alt=""
                      />
                    </template> -->
                    <template #icon>
                      <UserCircleIcon class="h-24 opacity-30" />
                    </template>
                  </form-image>

                  <!-- if has icon -->
                  <!-- <custom-button-action
                    class="space-x-2 border-none hover:text-red-500"
                  >
                    <TrashIcon class="h-5" />
                    <span>Remove</span>
                  </custom-button-action> -->
                </div>
              </div>
              <form-input required label="Name" />
              <form-input required label="Username" help="needs to be unique" />
              <form-textarea required label="Bio" class="md:col-span-2" />
              <div class="md:col-span-2">
                <h3 class="font-medium text-slate-400">Contact information</h3>
              </div>
              <form-input required label="Email" type="email" />
              <form-input required label="Contact" />
              <form-textarea required label="Address" class="md:col-span-2" />
              <div class="md:col-span-2 flex justify-end row-st">
                <custom-button class="space-x-2">
                  <arrow-up-tray-icon class="h-5" />
                  <span> Save Information </span>
                </custom-button>
              </div>
            </div>
          </form>
        </layout-card>
      </template>
      <template #password>
        <layout-card>
          <form @submit.prevent="">
            <div class="grid md:grid-cols-2 gap-5">
              <form-input required type="password" label="Old password" />
              <div class="hidden md:block md:col-span-2"></div>
              <form-input required type="password" label="New password" />
              <form-input
                required
                type="password"
                label="Confirm new password"
              />
              <div class="md:col-span-2 flex justify-end">
                <custom-button class="space-x-2">
                  <key-icon class="h-5" />
                  <span> Set new password </span>
                </custom-button>
              </div>
            </div>
          </form>
        </layout-card>
      </template>
    </custom-tabs>
  </layout-container>
</template>
<script lang="ts" setup>
import { ArrowUpTrayIcon, KeyIcon, TrashIcon } from "@heroicons/vue/24/outline";
import { UserCircleIcon } from "@heroicons/vue/24/solid";


const tabs = [
  {
    key:'settings',
    label: 'Account settings'
  },
  {
    key:'password',
    label: 'Change password'
  },
]
</script>
