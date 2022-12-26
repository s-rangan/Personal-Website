<div x-data = "{descriptions: {{ json_encode($descriptions) }} }" class="p-8 sm:p-9 md:p-7 xl:p-9">
    <h3 class="text-dark dark:text-slate-400 mb-4 block text-xl font-semibold sm:text-[22px] md:text-xl lg:text-[22px] xl:text-xl 2xl:text-[22px]">
        {!! $program !!}
    </h3>
    <div class="flow-root text-body-color dark:text-slate-300 text-base font-medium">
        <p class="float-left">
            {!! $name !!}
        </p>
        <p class="float-right">
            {!! $yr !!}
        </p>
    </div>
    <hr class="dark:border-slate-600 border-slate-600">
    <div class="text-body-color dark:text-slate-300  text-base leading-relaxed">
        <ul class="list-disc list-outside ml-6">
            @foreach($descriptions as $description)
                <li>{!! $description !!}</li>
            @endforeach
        </ul>
    </div>
</div>