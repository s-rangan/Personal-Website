<a 
    href = "{{ $href }}"
    target = "{{ $target }}" 
    {{ 
        $attributes -> class([
            'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded leading-normal border inline-block transition',
            'hover:bg-primary hover:border-primary hover:text-white' => $variant === 'outline-primary',
            'hover:bg-[#E15554] hover:border-[#E15554] hover:text-white' => $variant === 'outline-red',
            'bg-[#E15554] border-[#E15554] text-white hover:bg-[#AD4040] ' => $variant === 'red',
            'bg-slate-900 border-slate-700 text-white hover:bg-slate-800 ' => $variant === 'dark',
            'bg-primary border-primary text-white hover:bg-opacity-80' => $variant === 'primary',
        ])
    }}
>
    {{ $slot }}
</a>