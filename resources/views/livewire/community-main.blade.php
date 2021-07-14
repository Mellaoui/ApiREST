
<div
x-data
@click="

    const target = $event.target.tagName.toLowerCase()

    const ignores = ['button','svg','path','a']

     if(!ignores.includes(target)){
        $event.target.closest('.idea-container').querySelector('.idea-link').click()
    }
"
class="flex transition duration-150 ease-in bg-white cursor-pointer idea-container hover:shadow-card rounded-xl">
    <div class="hidden px-5 py-8 border-r border-gray-100 md:block">
        <div class="text-center">
            <div class="font-semibold @if($Isvoted) text-blue @endif text-2xl">{{ $idea->votes_count  }}</div><!---votes_count is the added column with subquery to store voted ids--->
            <div class="text-gray-500">Votes </div>
        </div>
        <div class="mt-8">
            @if($Isvoted)
            <button wire:click="vote" type="button" class="w-20 px-4 py-3 font-bold text-white uppercase transition duration-150 ease-in border button bg-blue border-blue text-xxs hover:bg-blue-hover rounded-xl">
                Voted
            </button>
            @else
            <button wire:click="vote" type="button" class="w-20 px-4 py-3 font-bold uppercase transition duration-150 ease-in bg-gray-200 border border-gray-200 button text-xxs hover:border-gray-400 rounded-xl">
                Vote
            </button>
            @endif
        </div>
    </div>
    <div class="flex flex-col flex-1 px-2 py-6 md:flex-row">
        <div class="flex-none mx-4 md:mx-0">
            <a href="#">
                <img src={{ $idea->user->getAvatar() }}>
            </a>
        </div>

        <div class="flex flex-col justify-between w-full mx-4">
            <h4 class="mt-2 text-xl font-semibold md:mt-0">
                <a href="{{ route('showIdea',$idea) }}" class="idea-link hover:underline">{{ $idea->title }}</a>
            </h4>
            <div class="flex mt-3 text-gray-600">
                {!! $idea->description !!}
            </div>
            <img src={{ $idea->getImage()}}>
            <div class="flex flex-col justify-between mt-6 md:flex-row md:items-center">
                <div class="flex items-center space-x-2 text-xs font-semibold text-gray-400">
                    <div>{{ $idea->created_at->diffForHumans() }}</div>
                    <div>&bull;</div>
                    <div>{{ $idea->category->name }}</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">{{ $idea->comments_count }} comments</div>
                    <div>&bull;</div>
                </div>
                <div x-data="{ isOpen: false }" class="flex items-center mt-4 space-x-2 md:mt-0">
                    <div class="{{ $idea->getStatusClass() }} text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                        {{ $idea->status->name }}
                    </div>
                </div>
                <div class="flex items-center mt-4 md:hidden md:mt-0">
                    <div class="h-10 px-4 py-2 pr-8 text-center bg-gray-100 rounded-2xl">
                        <div class="text-sm font-blod leading-none @if($Isvoted) text-blue @endif">{{ $idea->votes_count }}</div>
                        <div class="font-semibold leading-none text-gray-400 text-xxs">Vote</div>
                    </div>
                    @if($Isvoted)
                    <button wire:click.prevent="vote" type="button" class="h-10 px-4 -mx-4 text-white transition duration-150 ease-in bg-blue rounded-2xl focus:outline-none">
                        Voted
                    </button>
                    @else
                    <button wire:click.prevent="vote" type="button" class="h-10 px-4 -mx-4 transition duration-150 ease-in bg-gray-200 rounded-2xl focus:outline-none">
                        Vote
                    </button>
                    @endif
                </div>
            </div>
        </div>
    </div>
 </div><!-----end idea-container----->
