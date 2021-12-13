<div class="box-body p-10">
    <a href="{{ url('/internal/workplan/show') }}">
        <div class="bg-custom-primary rounded-lg p-10">
            @if ($title ?? false)
                <h4>{{ $title }}</h4>
            @endif
            @if ($pic ?? false)
            <p>
                <span class="mdi mdi-account"></span>
                <span>{{ $pic }}</span>
            </p>
            @endif
            @if (($date ?? false) && ($progress['all'] ?? false))
            <div class="row justify-content-between px-5">
                <span>
                    <span class="mdi mdi-alarm"></span>
                    <span>{{ $date }}</span>
                </span>
                <span>
                    <span class="mdi mdi-checkbox-blank-outline"></span>
                    <span>{{ $progress['done'] }}/{{ $progress['all'] }}</span>
                </span>
            </div>
            @endif
            {{ $slot }}
        </div>
    </a>
</div>