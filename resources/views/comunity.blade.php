<x-app-layout>
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
       <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
            <div class="hidden md:block border-r border-gray-100 px-5 py-8">
                <div class="text-center">
                    <div class="font-semibold text-2xl">12</div>
                    <div class="text-gray-500">Votes </div>
                </div>
                <div class="mt-8">
                    <button class="button w-20  font-bold bg-gray-200 border border-gray-200 text-xxs hover:border-gray-400 transition ease-in duration-150 uppercase rounded-xl px-4 py-3">
                        Vote
                    </button>
                </div>
            </div>
            <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
                <div class="flex-none mx-4 md:mx-0">
                    <a href="#">
                        <img src="https://source.unsplash.com/200x200/?face&corp=face&v=1" alt="avater" class="w-14 h-14 rounded-xl">
                    </a>
                </div>
                
                <div class="w-full flex flex-col justify-between mx-4">
                    <h4 class="text-xl font-semibold mt-2 md:mt-0">
                        <a href="#" class="hover:underline">A ransom title</a>
                    </h4>
                    <div class="flex text-gray-600 mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    </div> 
                    <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                        <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                            <div>10 hours ago</div>
                            <div>&bull;</div>
                            <div>category 1</div>
                            <div>&bull;</div>
                            <div class="text-gray-900">3 comments</div>
                            <div>&bull;</div>   
                        </div>
                        <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                            <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                                  Open  
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
                                <div class="text-sm font-blod leading-none">12</div>
                                <div class="text-xxs font-semibold leading-none text-gray-400">Vote</div>
                            </div>
                            <button class="bg-gray-200 rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                                Vote
                            </button>
                        </div>
                    </div>
                </div>
            </div>
       </div><!-----end idea-container----->
       <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
        <div class="hidden md:block border-r border-gray-100 px-5 py-8">
            <div class="text-center">
                <div class="font-semibold text-2xl">12</div>
                <div class="text-gray-500">Votes </div>
            </div>
            <div class="mt-8">
                <button class="button w-20  font-bold bg-gray-200 border border-gray-200 text-xxs hover:border-gray-400 transition ease-in duration-150 uppercase rounded-xl px-4 py-3">
                    Vote
                </button>
            </div>
        </div>
        <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
            <div class="flex-none mx-4 md:mx-0">
                <a href="#">
                    <img src="https://source.unsplash.com/200x200/?face&corp=face&v=1" alt="avater" class="w-14 h-14 rounded-xl">
                </a>
            </div>
            
            <div class="w-full flex flex-col justify-between mx-4">
                <h4 class="text-xl font-semibold mt-2 md:mt-0">
                    <a href="#" class="hover:underline">A ransom title</a>
                </h4>
                <div class="flex text-gray-600 mt-3">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                </div> 
                <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                    <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                        <div>10 hours ago</div>
                        <div>&bull;</div>
                        <div>category 1</div>
                        <div>&bull;</div>
                        <div class="text-gray-900">3 comments</div>
                        <div>&bull;</div>   
                    </div>
                    <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                        <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                              Open  
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
                            <div class="text-sm font-blod leading-none">12</div>
                            <div class="text-xxs font-semibold leading-none text-gray-400">Vote</div>
                        </div>
                        <button class="bg-gray-200 rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                            Vote
                        </button>
                    </div>
                </div>
            </div>
        </div>
   </div><!-----end idea-container----->
   <div class="idea-container hover:shadow-card transition duration-150 ease-in bg-white rounded-xl flex cursor-pointer">
    <div class="hidden md:block border-r border-gray-100 px-5 py-8">
        <div class="text-center">
            <div class="font-semibold text-2xl">12</div>
            <div class="text-gray-500">Votes </div>
        </div>
        <div class="mt-8">
            <button class="button w-20  font-bold bg-gray-200 border border-gray-200 text-xxs hover:border-gray-400 transition ease-in duration-150 uppercase rounded-xl px-4 py-3">
                Vote
            </button>
        </div>
    </div>
    <div class="flex flex-col md:flex-row flex-1 px-2 py-6">
        <div class="flex-none mx-4 md:mx-0">
            <a href="#">
                <img src="https://source.unsplash.com/200x200/?face&corp=face&v=1" alt="avater" class="w-14 h-14 rounded-xl">
            </a>
        </div>
        
        <div class="w-full flex flex-col justify-between mx-4">
            <h4 class="text-xl font-semibold mt-2 md:mt-0">
                <a href="#" class="hover:underline">A ransom title</a>
            </h4>
            <div class="flex text-gray-600 mt-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            </div> 
            <div class="flex flex-col md:flex-row md:items-center justify-between mt-6">
                <div class="flex items-center text-xs text-gray-400 font-semibold space-x-2">
                    <div>10 hours ago</div>
                    <div>&bull;</div>
                    <div>category 1</div>
                    <div>&bull;</div>
                    <div class="text-gray-900">3 comments</div>
                    <div>&bull;</div>   
                </div>
                <div x-data="{ isOpen: false }" class="flex items-center space-x-2 mt-4 md:mt-0">
                    <div class="bg-gray-200 text-xxs font-bold uppercase leading-none rounded-full text-center w-28 h-7 py-2 px-4">
                          Open  
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
                        <div class="text-sm font-blod leading-none">12</div>
                        <div class="text-xxs font-semibold leading-none text-gray-400">Vote</div>
                    </div>
                    <button class="bg-gray-200 rounded-2xl h-10 px-4 transition duration-150 ease-in focus:outline-none -mx-4">
                        Vote
                    </button>
                </div>
            </div>
        </div>
    </div>
</div><!-----end idea-container----->
   </div><!----end ideas-container--->
</x-app-layout>
