<script setup lang="ts">
import { ref } from 'vue';

</script>

<template>
    <div class="flex h-screen w-full bg-gray-800">
        <!--Start SideBar-->
        <aside class="w-20 relative z-20 flex-shrink-0  px-2 overflow-y-auto bg-indigo-600 sm:block">
            <!-- Navigation Toggle -->
            <div class="lg:hidden py-16 text-center">
                <button type="button" class="py-2 px-3 inline-flex justify-center items-center gap-x-2 text-start bg-gray-800 border border-gray-800 text-white text-sm font-medium rounded-lg shadow-sm align-middle hover:bg-gray-950 focus:outline-none focus:bg-gray-900 dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-sidebar-mini-sidebar" aria-label="Toggle navigation" data-hs-overlay="#hs-sidebar-mini-sidebar">
                    Open
                </button>
            </div>
            <!-- End Navigation Toggle -->

            <!-- Sidebar -->
            <div id="hs-sidebar-mini-sidebar" class="hs-overlay [--auto-close:lg] lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 w-20 hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform h-full hidden fixed top-0 start-0 bottom-0 z-[60] bg-white border-e border-gray-200 dark:bg-neutral-800 dark:border-neutral-700" role="dialog" tabindex="-1" aria-label="Sidebar" >
                <div class="relative flex flex-col h-full max-h-full ">
                    <header class="p-4 flex justify-center items-center gap-x-2">

                        <!-- Logo -->

                        <!-- End Logo -->

                        <div class="lg:hidden absolute top-1 -end-3">
                            <!-- Close Button -->

                            <!-- End Close Button -->
                        </div>
                    </header>

                    <nav class="h-full overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500">
                        <div class="flex flex-col justify-center items-center gap-y-2">
                            <!-- Item list -->
                            <div class="hs-tooltip [--placement:right] inline-block">
                                <a class="hs-tooltip-toggle size-[38px] inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" href="#">
                                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" ><path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                                    <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 inline-block absolute invisible z-20 py-1.5 px-2.5 bg-gray-900 text-xs text-white rounded-lg whitespace-nowrap dark:bg-neutral-700" role="tooltip">Home</span>
                                </a>
                            </div>
                            <!-- End of item list -->
                        </div>
                    </nav>
                </div>
            </div>
        </aside>

        <!-- Page Content -->
        <div class="flex flex-col flex-1 w-full overflow-y-auto">
            <main class="relative z-0 flex-1 pb-8 px-6 bg-white">
                <slot />
            </main>
        </div>
    </div>
</template>
