<script lang="ts" setup>
import {useUserWeatherStore} from "@/stores/user";
import {computed, onMounted, ref} from "vue";

const open = ref(false)
const selectedUser = ref(null)

const weatherStore = useUserWeatherStore();

const users = computed(() => weatherStore.users)

onMounted(() => {
  weatherStore.getUsersWeather();
})

const closeModal = () => {
  open.value = false;
}

const gettingUser = (user: any) => {
  selectedUser.value = user;
  console.log(selectedUser.value)
  open.value = true;
}

</script>

<template>
  <!-- Table Section -->
  <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Card -->
    <div class="flex flex-col">
      <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
          <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden">
            <!-- Header -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200">
              <div>
                <h2 class="text-xl font-semibold text-gray-800 ">
                  List of users
                </h2>
              </div>

              <div>
                <div class="inline-flex gap-x-2">
                </div>
              </div>
            </div>
            <!-- End Header -->

            <!-- Table -->
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="pl-6 py-3 text-left">
                </th>

                <th scope="col" class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                      Name
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                      Longitude
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                      Latitude
                    </span>
                  </div>
                </th>

                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                       Weather
                    </span>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3 text-left">
                  <div class="flex items-center gap-x-2">
                    <span class="text-xs font-semibold uppercase tracking-wide text-gray-800">
                       Description
                    </span>
                  </div>
                </th>
                <th scope="col" class="px-6 py-3 text-right"></th>
              </tr>
              </thead>

              <tbody class="divide-y divide-gray-200">
              <tr v-for="user in weatherStore.users" :key="user.id">
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 py-3">
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="pl-6 lg:pl-3 xl:pl-0 pr-6 py-3">
                    <div class="flex items-center gap-x-3">
                      <img class="inline-block h-[2.375rem] w-[2.375rem] rounded-full"
                           src="https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80"
                           alt="Image Description">
                      <div class="grow">
                        <span class="block text-sm font-semibold text-gray-800">{{ user.user.name }}</span>
                        <span class="block text-sm text-gray-500">{{ user.user.email }}</span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="block text-sm font-semibold text-gray-800">{{ user.user.longitude }}</span>
                  </div>
                </td>

                <td class="h-px w-72 whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="block text-sm font-semibold text-gray-800">{{ user.user.latitude }}</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-3">
                      <span
                          class="inline-flex items-center gap-1.5 py-0.5 px-2 rounded-full text-xs font-medium"
                          :class="{
                            'bg-green-100 text-green-800': user.weatherData.current.weather[0].main === 'Rain',
                            'bg-orange-100 text-orange-800': user.weatherData.current.weather[0].main === 'Clouds',
                            'bg-blue-100 text-blue-800': user.weatherData.current.weather[0].main === 'Snow',
                            'bg-yellow-100 text-yellow-800': user.weatherData.current.weather[0].main === 'Clear'
                          }"
                      >
                        <svg class="w-2.5 h-2.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                             fill="currentColor" viewBox="0 0 16 16">
                          <path
                              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                        </svg>
                        {{ user.weatherData.current.weather[0].main }}
                      </span>
                  </div>
                </td>
                <td class="h-px w-72 whitespace-nowrap">
                  <div class="px-6 py-3">
                    <span class="block text-sm font-semibold text-gray-800"> {{
                        user.weatherData.current.weather[0].description
                      }}</span>
                  </div>
                </td>
                <td class="h-px w-px whitespace-nowrap">
                  <div class="px-6 py-1.5">
                    <a @click="gettingUser(user)" role="button"
                       class="inline-flex items-center gap-x-1.5 text-sm text-blue-600 decoration-2 hover:underline font-medium">
                      Details
                    </a>
                  </div>
                </td>
              </tr>
              </tbody>
            </table>
            <!-- End Table -->

            <!-- Footer -->
            <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200">
              <div>
                <p class="text-sm text-gray-600">
                  <span class="font-semibold text-gray-800" v-if="users">{{ users.length }}</span> results
                </p>
              </div>
            </div>
            <!-- End Footer -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Card -->
  </div>
  <!-- End Table Section -->


  <!--  modal here-->
  <div v-if="selectedUser"
       v-show="open"
       class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
        <div
            class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
          <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
            <div class="sm:items-start">
              <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                <table class="min-w-full divide-y divide-gray-200">
                  <tbody class="divide-y divide-gray-200">
                  <tr>
                    <td class="h-px w-72 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Name</span>
                      </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                      <div class="px-6 py-1.5">
                        <span class="block text-sm text-gray-500">
                          {{ selectedUser.user.name }}
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="h-px w-72 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Email</span>
                      </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                      <div class="px-6 py-1.5">
                        <span class="block text-sm text-gray-500">
                          {{ selectedUser.user.email }}
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="h-px w-72 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Latitude</span>
                      </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                      <div class="px-6 py-1.5">
                        <span class="block text-sm text-gray-500">
                          {{ selectedUser.user.latitude }}
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="h-px w-72 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Longitude</span>
                      </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                      <div class="px-6 py-1.5">
                        <span class="block text-sm text-gray-500">
                          {{ selectedUser.user.longitude }}
                        </span>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="h-px w-72 whitespace-nowrap">
                      <div class="px-6 py-3">
                        <span class="block text-sm font-semibold text-gray-800">Timezone</span>
                      </div>
                    </td>
                    <td class="h-px w-px whitespace-nowrap">
                      <div class="px-6 py-1.5">
                        <span class="block text-sm text-gray-500">{{ selectedUser.user }}</span>
                      </div>
                    </td>
                    {{ selectedUser.user }}
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
            <button @click="closeModal" type="button"
                    class="mt-3 inline-flex w-full justify-center rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 sm:mt-0 sm:w-auto">
              Close
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>