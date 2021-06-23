<div class="div idea-and-busttins container">
        
    
    <div class="idea-container bg-white rounded-xl flex mt-4">
            <div class="flex flex-col md:flex-row flex-1 px-4 py-6">
                <div class="flex-none mx-2 md:mx-4">
                    <a href="#">
                        <img class="rounded-xl" src="{{ $idea->user->getAvatar() }}" alt="avatar" >
                    </a> 
                </div>
                <div class="w-full mx-2 md:-mx-4">
                    <h4 class="text-xl font-semibold">
                        <a href="#" class="mx-2 md:mx-4 hover:underline">{{ $idea->title }}</a>
                    </h4>
                    <div class=" mx-2 md:mx-4 text-gray-600 mt-3">
                    {{ $idea->description }}
                    </div>

                    <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">        
                            <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name  }}</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>Category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 Comments</div>
                        </div>
                        <div  x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div class="{{ $idea->getStatusClass() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name }}</div>
                            <button @click="isOpen = !isOpen" class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 focus:outline-none">
                                <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                <ul x-show.transition.origin.top.left.500ms="isOpen" @click.away="isOpen = false" class="absolute w-36 md:w-44 text-left z-50 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-88">
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">Mark as Spam</a></li>
                                    <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">Delete Post</a></li>
                                </ul>
                            </button>
                        </div>
                    </div>
                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-2xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-blod leading-none">{{ $votesCount }}</div>
                            <div class="text-xxs font-semibold leading-none @if($Isvoted) text-blue @endif text-gray-400">Vote</div>
                        </div>
                        @if ($Isvoted)
                            <button class=") bg-blue text-white  rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                            
                                    <span>Voted</span>
                            </button>      
                             @else
                            <button class="bg-gray-200  rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                                    <span>Vote</span>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->

        <div class="buttons-container flex items-center justify-between mt-6">
            <div class="flex flex-col md:flex-row items-center space-x-4 ml-6">
                <div x-data="{ isOpen: false }"  class="relative">
                    <button
                        @click=" isOpen = !isOpen"
                        type="button"
                        class="flex items-center justify-center h-11 w-32 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0 focus:outline-none"
                    >
                        Reply
                    </button>
                    <div  x-show.transition.origin.top.left.500ms="isOpen" @click.away="isOpen = false" class="absolute z-10 w-60 md:w-104 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                        <form action="#" class="space-y-4 px-4 py-6">
                            <div>
                                <textarea name="post_comment" id="post_comment" cols="30" rows="4" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Go ahead, don't be shy. Share your thoughts..."></textarea>
                            </div>

                            <div class="flex items-center space-x-3">
                                <button
                                    type="button"
                                    class="flex items-center justify-center h-11 w-1/2 text-sm bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                >
                                    Post Comment
                                </button>
                                <button
                                    type="button"
                                    class="flex items-center justify-center w-20 md:w-32 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                                >
                                    <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">Attach</span>
                                </button>
                            </div>

                        </form>
                    </div>
                </div>
                <div x-data="{ isOpen: false }"  class="relative">
                    <button
                        @click=" isOpen = !isOpen"
                        type="button"
                        class="flex items-center justify-center w-36 h-11 text-sm bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3 mt-2 md:mt-0 focus:outline-none"
                    >
                        <span>Set Status</span>
                        <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>
                    <div  x-show.transition.origin.top.left.500ms="isOpen" @click.away="isOpen = false" class="absolute z-20 w-48 md:w-76 text-left font-semibold text-sm bg-white shadow-dialog rounded-xl mt-2">
                        <form action="#" class="space-y-4 px-4 py-6">
                            <div class="space-y-2">
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-gray-600 border-none" name="status" value="1" checked>
                                        <span class="ml-2">Open</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-purple border-none" name="status" value="2">
                                        <span class="ml-2">Considering</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-yellow border-none" name="status" value="3">
                                        <span class="ml-2">In Progress</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-green border-none" name="status" value="3">
                                        <span class="ml-2">Implemented</span>
                                    </label>
                                </div>
                                <div>
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="bg-gray-200 text-red border-none" name="status" value="3">
                                        <span class="ml-2">Closed</span>
                                    </label>
                                </div>
                            </div>

                            <div>
                                <textarea name="update_comment" id="update_comments" cols="30" rows="3" class="w-full text-sm bg-gray-100 rounded-xl placeholder-gray-900 border-none px-4 py-2" placeholder="Add an update comment (optional)"></textarea>
                            </div>

                            <div class="flex items-center justify-between space-x-3">
                                <button
                                    type="button"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-gray-200 font-semibold rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                                >
                                    <svg class="text-gray-600 w-4 transform -rotate-45" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.172 7l-6.586 6.586a2 2 0 102.828 2.828l6.414-6.586a4 4 0 00-5.656-5.656l-6.415 6.585a6 6 0 108.486 8.486L20.5 13" />
                                    </svg>
                                    <span class="ml-1">Attach</span>
                                </button>
                                <button
                                    type="submit"
                                    class="flex items-center justify-center w-1/2 h-11 text-xs bg-blue text-white font-semibold rounded-xl border border-blue hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                                >
                                    <span class="ml-1">Update</span>
                                </button>
                            </div>

                            <div>
                                <label class="font-normal inline-flex items-center">
                                    <input type="checkbox" name="notify_voters" class="rounded bg-gray-200" checked="">
                                    <span class="ml-2">Notify all voters</span>
                                </label>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="hidden md:flex items-center space-x-3">
                <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                    <div class="text-xl leading-snug @if($Isvoted) text-blue @endif">{{ $votesCount }}</div>
                    <div class="text-gray-400 text-xs leading-none">Votes</div>
                </div>
                @if ($Isvoted)
                    <button
                        type="button"
                        class="w-32 h-11 text-xs bg-blue text-white  font-semibold uppercase rounded-xl border border-gray-200 hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                    > 
                   
                    <span>Voted</span>
                    @else
                    <button
                         type="button"
                         class="w-32 h-11 text-xs bg-gray-200  font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                    >   
                    <span>Vote</span>
                    
                </button>
                @endif
            </div>
        </div> <!-- end buttons-container -->
    </div><!------idea and button container----->