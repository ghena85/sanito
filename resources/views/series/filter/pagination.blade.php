@if(!isEmptyArray($filters))
    {{ $series->setPath(route('series',['slug' => $category->slug]))->appends($filters)->links('layouts.pagination') }}
@else
    {{ $series->setPath(route('series',['slug' => $category->slug]))->links('layouts.pagination') }}
@endif