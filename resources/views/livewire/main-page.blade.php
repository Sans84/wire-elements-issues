<div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

    <div class="max-w-7xl mx-auto p-6 lg:p-8">

        <div class="mt-16">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">

                <div wire:modal="issues.i1.first-modal" class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                    <div>
                        <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">Issue 1</h2>

                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Disappearance of a modal component when closing an intermediate modal component by software.
                        </p>
                        <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                            Open the first modal. From it, open the second. From the second, open the third. Close the third modal with an event for the second modal. The second modal, having received the event, is automatically closed with the event sent to the first modal.
                            <div class="text-sm">
                                <p><span class="text-green-700">Expected:</span> display of the first modal.</p>
                                <p><span class="text-orange-600">Result:</span> the first modal is not displayed</p>
                            </div>
                        </p>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
            <div class="text-center text-sm sm:text-left">
                &nbsp;
            </div>

            <div class="text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
                Laravelv{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
            </div>
        </div>
    </div>
</div>
