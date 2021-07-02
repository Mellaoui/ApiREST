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
                    {!! $idea->description !!}
                    </div>
                    
                   
                    <div class="flex md:items-center flex-col md:flex-row justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">        
                            <div class="hidden md:block font-bold text-gray-900">{{ $idea->user->name  }}</div>
                            <div class="hidden md:block">&bull;</div>
                            <div>{{ $idea->created_at->diffForHumans() }}</div>
                            <div>&bull;</div>
                            <div>{{ $idea->category->name }}</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">{{ $idea->comments()->count() }} comments</div>
                        </div>
                        <div  x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div class="{{ $idea->getStatusClass() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">{{ $idea->status->name }}</div>
                            @auth
                            <div class="relative">
                                <button @click= " isOpen = !isOpen " class="relative bg-gray-100 hover:bg-gray-200 border rounded-full h-7 transition duration-150 ease-in py-2 px-3 focus:outline-none">
                                    <svg fill="currentColor" width="24" height="6"><path d="M2.97.061A2.969 2.969 0 000 3.031 2.968 2.968 0 002.97 6a2.97 2.97 0 100-5.94zm9.184 0a2.97 2.97 0 100 5.939 2.97 2.97 0 100-5.939zm8.877 0a2.97 2.97 0 10-.003 5.94A2.97 2.97 0 0021.03.06z" style="color: rgba(163, 163, 163, .5)"></svg>
                                </button>
                                <ul x-show.transition.origin.top.left.500ms="isOpen" @click.away="isOpen = false" class="absolute w-36 md:w-44 text-left z-10 font-semibold bg-white shadow-dialog rounded-xl py-3 ml-88">
                                        @can('update', $idea)
                                        <li> 
                                            <a
                                                @click.prevent="
                                                isOpen = false
                                                $dispatch('custom-show-edit-modal') "
                                                href="#" 
                                                class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">
                                                Edit Idea
                                            </a>
                                        </li>
                                        @endcan
                                        @can('delete', $idea)
                                        <li>
                                            <a  
                                                @click.prevent="
                                                isOpen = false
                                                $dispatch('custom-show-delete-modal') " 
                                                href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">
                                                Delete
                                            </a>
                                        </li>
                                        @endcan
                                    <li>
                                        <a
                                        @click.prevent= " 
                                        isOpen = false
                                        $dispatch('custom-show-spam-modal')
                                        " 
                                        href="#" 
                                        class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">
                                        Mark as Spam
                                        </a>
                                    </li>
                                    <li>
                                        <a
                                        @click.prevent= " 
                                        isOpen = false
                                        $dispatch('custom-show-not-spam-modal')
                                        " 
                                        href="#" 
                                        class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">
                                        Not Spam
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            @endauth
                        </div>
                    </div>
                    <div class="flex items-center md:hidden mt-4 md:mt-0">
                        <div class="bg-gray-100 text-center rounded-2xl h-10 px-4 py-2 pr-8">
                            <div class="text-sm font-blod leading-none">{{ $votesCount }}</div>
                            <div class="text-xxs font-semibold leading-none @if($Isvoted) text-blue @endif text-gray-400">Vote</div>
                        </div>
                        @if ($Isvoted)
                            <button wire:click="vote" class=" bg-blue text-white  rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                            
                                    <span>Voted</span>
                            </button>      
                             @else
                            <button wire:click="vote" class="bg-gray-200 rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                                    <span>Vote</span>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        </div> <!-- end idea-container -->

        <div class="buttons-container flex items-center justify-between mt-6">
            <div class="flex flex-col md:flex-row items-center space-x-4 ml-6">
                <livewire:add-comment :idea="$idea"/>
                
                <livewire:set-status :idea="$idea" />
                
                    
            </div>

            <div class="hidden md:flex items-center space-x-3">
                <div class="bg-white font-semibold text-center rounded-xl px-3 py-2">
                    <div class="text-xl leading-snug @if($Isvoted) text-blue @endif">{{ $votesCount }}</div>
                    <div class="text-gray-400 text-xs leading-none">Votes</div>
                </div>
                @if ($Isvoted)
                    <button
                        wire:click.prevent="vote"
                        type="button"
                        class="w-32 h-11 text-xs bg-blue text-white  font-semibold uppercase rounded-xl border border-gray-200 hover:bg-blue-hover transition duration-150 ease-in px-6 py-3"
                    > 
                   
                    <span>Voted</span>
                    @else
                    <button
                        wire:click.prevent="vote"
                         type="button"
                         class="w-32 h-11 text-xs bg-gray-200  font-semibold uppercase rounded-xl border border-gray-200 hover:border-gray-400 transition duration-150 ease-in px-6 py-3"
                    >   
                    <span>Vote</span>
                    
                </button>
                @endif
            </div>
        </div> <!-- end buttons-container -->
    </div><!------idea and button container----->