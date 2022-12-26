<div class="p-8 sm:p-9 md:p-7 xl:p-9">
    <div class="text-dark dark:text-slate-400 font-bold text-base leading-relaxed">
        <p>
            {{ $category }}
        </p>
    </div>
    <hr class="dark:border-slate-600 border-slate-600">
    
    <div class="text-base leading-relaxed">
        @foreach($skillsets as $skillset)
            <span
                class="border-teal-500 dark:bg-teal-500 text-teal-500 dark:text-white m-2 inline-block rounded border py-1 px-3 text-sm font-semibold"
            >
                {!! $skillset !!}
            </span>
        @endforeach
    </div>
</div>