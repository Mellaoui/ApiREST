<div>
    @if($comments->isNotEmpty())
        <div class="comments-container relative space-y-6 md:ml-24 pt-4 my-8 mt-1">
            @foreach ($comments as $comment)
                <livewire:idea-comment  :key="$comment->id"
                                        :comment="$comment" />
            @endforeach
        </div>
     @else   
        <!-- component -->
        <div class="grid place-items-center h-screen">
            <section class="grid justify-items-center">
            <h1 class="text-lg font-mono mb-4 transform -rotate-12">No Comments Yet...</h1>
            <div class="h-16 flex gap-5 overflow-hidden rounded-t-full shadow-inner">
                <div class="bg-red-500 w-2"></div>
                <div class="bg-red-500 w-2"></div>
                <div class="bg-gray-800 w-5"></div>
                <div class="bg-gray-800 w-5"></div>
                <div class="bg-red-500 w-2"></div>
                <div class="bg-red-500 w-2"></div>
            </div>
            <div class="bg-gray-100 rounded flex flex-col gap-2 p-2 shadow-md">
                <div class="flex gap-2">
                <div class="h-20 w-12 shadow-md bg-gradient-to-t from-gray-50 to-red-300 flex place-items-center overflow-hidden">
                    <div class="rounded bg-gray-900 h-4 w-4"></div>
                </div>
                <div class="h-20 w-12 shadow-md bg-gradient-to-t from-gray-50 to-red-300 flex place-items-center overflow-hidden">
                    <div class="rounded bg-gray-900 h-4 w-4"></div>
                </div>
                <div class="flex flex-col gap-3">
                    <div class="h-4 w-4 bg-gray-300 rounded-full shadow-md"></div>
                    <div class="h-4 w-4 bg-gray-300 rounded-full shadow-md"></div>
                    <div class="h-4 w-4 bg-gray-300 rounded-full shadow-md"></div>
                </div>
                </div>
                <div class="h-10 w-32 bg-gray-700 flex flex-wrap gap-2 overflow-hidden justify-center">
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                <div class="bg-gray-100 h-4 w-4"></div>
                </div>
            </div>
            <div class="h-24 w-24 bg-red-500 relative">
                <div class="absolute h-16 w-16 rounded-full bg-red-600 shadow-md top-4 left-4"></div>
                <div class="animate-ping absolute h-8 w-8 rounded-full bg-yellow-500 shadow-lg top-8 left-8"></div>
                <div class="absolute h-8 w-8 rounded-full bg-yellow-500 shadow-lg top-8 left-8"></div>
                <div class="flex gap-5">
                <div class="h-12 w-12 bg-gray-400"></div>
                <div class="h-12 w-12 bg-gray-400"></div>
                </div>
                <div class="flex gap-5">
                <div class="h-12 w-12 bg-gray-800"></div>
                <div class="h-12 w-12 bg-gray-500"></div>
                </div>
            </div>
            <div class=" relative">
                <div class="h-32 w-36 bg-gradient-to-b from-gray-500 to-gray-700 rounded-b-full z-50"></div>
                <div class="bg-gray-500 h-4"></div>
                <div class="absolute h-12 w-8 bg-red-900 top-28 left-0 z-40"></div>
                <div class="absolute h-12 w-8 bg-red-900 top-28 right-0"></div>
            </div>
            <div class="flex gap-20">
                <div class="h-10 w-8 bg-gray-900 rounded-b-full"></div>
                <div class="h-10 w-8 bg-gray-900 rounded-b-full"></div>
            </div>
            </section>
        </div>
    @endif
</div>
