<div class="box-header with-border ui-sortable-handle" style="cursor: move;">
    @if ($title ?? false)
        <h4 class="box-title">{{ $title }}</h4>
    @endif
    {{ $slot }}
</div>