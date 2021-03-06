<div class="nav hidden md:flex items-center justify-between text-gray-400 text-xs">
    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
         <li><a wire:click.prevent="setStatus('All')" class="border-b-4 pb-3  hover:border-yellow @if($status === 'All') text-gray-900 border-yellow @endif" href="#"> All Ideas({{ $allstatusCount}})</a></li>
         <li><a wire:click.prevent="setStatus('Considering')" class="  transitio duration-150 ease-in border-b-4 pb-3  hover:border-yellow @if($status === 'Considering') text-gray-900 border-yellow @endif" href="#"> Considering({{ $consideringstatusCount }})</a></li>
         <li><a wire:click.prevent="setStatus('In Progress')" class="  transitio duration-150 ease-in border-b-4 pb-3  hover:border-yellow @if($status === 'In Progress') text-gray-900 border-yellow @endif" href="#"> In progress({{ $inprogressstatusCount }})</a></li>
         
    </ul>

    <ul class="flex uppercase font-semibold border-b-4 pb-3 space-x-10">
        <li><a wire:click.prevent="setStatus('Implemented')" href="#" class=" transition duration-150 ease-in border-b-4 pb-3  hover:border-yellow @if($status === 'Implemented') text-gray-900 border-yellow @endif">Implemented({{ $implementedstatusCount }})</a></li>
        <li><a wire:click.prevent="setStatus('Closed')" href="#" class=" transition duration-150 ease-in border-b-4 pb-3  hover:border-yellow @if($status === 'Closed') text-gray-900 border-yellow @endif">Closed ({{ $closedstatusCount }})</a></li>
    </ul>
</div>