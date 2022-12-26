<button
    {{ 
        $attributes -> class([
            'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
            'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
            'hover:bg-rose-700 hover:border-rose-700 hover:text-white' => $variant === 'outline-red',
            'bg-rose-700 border-rose-700 text-white hover:bg-rose-800 ' => $variant === 'red',
            'bg-slate-900 border-slate-700 text-white hover:bg-slate-800 ' => $variant === 'dark',
            'bg-primary border-primary text-white hover:bg-opacity-80' => $variant === 'primary',
        ])
    }}
>
    {!! $slot !!}
</button>