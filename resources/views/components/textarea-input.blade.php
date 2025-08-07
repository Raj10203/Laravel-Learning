@props(['disabled' => false])

<textarea @disabled($disabled) {{ $attributes->merge([
'class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-gray-900 dark:focus:border-gray-400 focus:ring-gray-900 dark:focus:ring-gray-400 rounded shadow-md'
]) }}>

</textarea>