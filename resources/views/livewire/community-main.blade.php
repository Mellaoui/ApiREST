<div
x-data
@click="

    const target = $event.target.tagName.toLowerCase()

    const ignores = ['button','svg','path','a']

     if(!ignores.includes(target)){
        $event.target.closest('.idea-container').querySelector('.idea-link').click()
    } 
"
class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
        <div class="text-center">
            <div class="font-semibold @if($Isvoted) text-blue @endif text-2xl">{{ $idea->votes_count  }}</div><!---votes_count is the added column with subquery to store voted ids--->
            <div class="text-gray-500">Votes </div>
        </div>
        <div class="mt-8">
            @if($Isvoted)
            <button wire:click="vote" type="button" class="button w-20 font-bold text-white bg-blue border border-blue text-xxs hover:bg-blue-hover transition ease-in duration-150 uppercase rounded-xl px-4 py-3">
                Voted
            </button>
            @else
            <button wire:click="vote" type="button" class="button w-20 font-bold bg-gray-200 border border-gray-200 text-xxs hover:border-gray-400 transition ease-in duration-150 uppercase rounded-xl px-4 py-3">
                Vote
            </button>
            @endif
        </div>
    </div>
    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
        <div class="flex-none mx-4 md:mx-0">
            <a href="#">
                <img src={{ $idea->user->getAvatar() }}>
            </a>
        </div>
        
        <div class="w-full flex flex-col justify-between mx-4">
            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                <a href="{{ route('showIdea',$idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
            </h4>
            <div class="flex text-gray-600 mt-3">
                {{ $idea->description }}
            </div> 
            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                    <div>{{ $idea->created_at->diffForHumans() }}</div>
                    <div>&bull;</div>
                    <div>{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">3 comments</div>
                    <div>&bull;</div>   
                </div>
                <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                    <div class="{{ $idea->getStatusClass() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                        {{ $idea->status->name }}
                    </div>
                    <button @click=" isOpen = !isOpen" class="bg-gray-100 hover:bg-gray-200 rounded-full h-7 transition duration-150 ease-in focus:outline-none">
                        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"></path></svg>
                        <ul x-show.transition.origin.top.left.500ms="isOpen" @click.away="isOpen = false" class="absolute shadow-dialog w-36 md:w-44 text-left ml-6 font-semibold bg-white rounded-xl py-3"> 
                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">Mark as spam</a></li>
                            <li><a href="#" class="hover:bg-gray-100 block transition duration-150 ease-in px-5 py-3 text-sm md:text-lg">Delete</a></li>
                        </ul>
                    </button>
                </div>
                <div class="flex items-center md:hidden mt-4 md:mt-0">
                    <div class="bg-gray-100 text-center rounded-2xl h-10 px-4 py-2 pr-8">
                        <div class="text-sm font-blod leading-none @if($Isvoted) text-blue @endif">{{ $idea->votes_count }}</div>
                        <div class="text-xxs font-semibold leading-none text-gray-400">Vote</div>
                    </div>
                    @if($Isvoted)
                    <button wire:click.prevent="vote" type="button" class="bg-blue text-white rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                        Voted
                    </button>
                    @else
                    <button wire:click.prevent="vote" type="button" class="bg-gray-200 rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                        Vote
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
 </div><!-----end idea-container-----> 