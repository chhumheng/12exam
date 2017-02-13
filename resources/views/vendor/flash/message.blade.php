@if (Session::has('flash_notification.message'))
    @if (Session::has('flash_notification.overlay'))
        @include('flash::modal', ['modalClass' => 'flash-modal', 'title' => Session::get('flash_notification.title'), 'body' => Session::get('flash_notification.message')])
    @else
        <div class="alert alert-{{ Session::get('flash_notification.level') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

            {!! Session::get('flash_notification.message') !!}
        </div>
    @endif
@endif

{{--@if (session()->has('flash_notification.message'))--}}
    {{--@if (session()->has('flash_notification.overlay'))--}}
        {{--@include('flash::modal', [--}}
            {{--'modalClass' => 'flash-modal',--}}
            {{--'title'      => session('flash_notification.title'),--}}
            {{--'body'       => session('flash_notification.message')--}}
        {{--])--}}
    {{--@else--}}
        {{--<div class="alert--}}
                    {{--alert-{{ session('flash_notification.level') }}--}}
                    {{--{{ session()->has('flash_notification.important') ? 'alert-important' : '' }}"--}}
        {{-->--}}
            {{--@if(session()->has('flash_notification.important'))--}}
                {{--<button type="button"--}}
                        {{--class="close"--}}
                        {{--data-dismiss="alert"--}}
                        {{--aria-hidden="true"--}}
                {{-->&times;</button>--}}
            {{--@endif--}}

            {{--{!! session('flash_notification.message') !!}--}}
        {{--</div>--}}
    {{--@endif--}}
{{--@endif--}}
