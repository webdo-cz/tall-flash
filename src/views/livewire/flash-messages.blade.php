<div 
    x-data='{
        alerts: @json($messages)
    }'
    @flashAdded.window="
        alerts.push({
            title: $event.detail.title,
            message: $event.detail.message,
            type: $event.detail.type,
        })
    "
    x-show="alerts.length > 0"
    class="fixed bottom-0 w-full px-8 py-3 sm:bottom-auto"
    style="z-index: 9999"
>
    <div @click.away="alerts = []" class="space-y-2 rounded-3xl sm:max-w-xl sm:mx-auto">
        <template x-for="(alert, index) in alerts" :key="index">
            <div 
                class="flex items-center px-3 py-3 shadow-sm sm:px-6 rounded-3xl"
                :class="{ 'bg-red-500': alert.type == 'error',  'bg-green-500': alert.type == 'success' }"
            >
                <div class="mr-3 sm:mr-5">
                    <div 
                        class="flex items-center justify-center w-10 h-10 rounded-full"
                        :class="{ 'text-red-100 bg-red-600': alert.type == 'error',  'text-green-100 bg-green-600': alert.type == 'success' }"
                    >
                        <svg x-show="alert.type == 'error'" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        <svg x-show="alert.type == 'success'" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                          </svg>
                    </div>
                </div>
                <div class="flex-grow text-white">
                    <p class="font-bold" x-text="alert.title"></p>
                    <p class="text-sm" x-text="alert.message"></p>
                </div>
                <div class="ml-5">
                    <div 
                        @click="delete alerts[index]" 
                        class="flex items-center justify-center rounded-full cursor-pointer w-9 h-9"
                        :class="{ 'hover:bg-red-400 text-red-50': alert.type == 'error',  'hover:bg-green-400 text-green-50': alert.type == 'success' }"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </template>
    </div>
</div>