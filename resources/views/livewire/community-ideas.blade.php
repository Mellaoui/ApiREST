<div>
    <div class="filters flex flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-6">
        <div class="w-full md:w-1/3">
            <select name="category" id="category" class="w-full border-none rounded-xl px-4 py-2">
                <option value="Category One"> Category One</option>
                <option value="Category Two"> Category Two</option>
                <option value="Category Three"> Category Three</option>
                <option value="Category Four"> Category Four</option>
            </select>
        </div>

        <div class="w-full md:w-1/3">
            <select name="other-filters" id="other-filters" class="w-full border-none rounded-xl px-4 py-2">
                <option value="other-filters One"> filter One</option>
                <option value="other-filters Two"> filter Two</option>
                <option value="other-filters Three"> filter Three</option>
                <option value="other-filters Four"> filter Four</option>
            </select>
        </div>
        <div class="w-full md:w-1/3 relative">
            <input type="search" placeholder="Find and Idea" class="w-full rounded bg-white px-4 py-2 pl-8 placeholder-gray-900 border-none">
            <div class="absolute top-0 flex items-center h-full ml-2">
                <svg class="w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
            </div>
        </div>
    </div>

    <div class="ideas-container space-y-6 my-6">
    @forelse ($ideas as $idea)
        <livewire:community-main :key="$idea->id" :idea="$idea" :votesCount="$idea->votes_count"/>
    @empty
    <div class="mx-auto w-70 mt-12">
        
        <div class="text-gray-400 text-center font-bold mt-6">No ideas were found...</div>
    </div> 
    @endforelse
    </div><!----end ideas-container--->

    <div class="my-8">
        {{ $ideas->links() }}
    </div>
</div>
  