@component('mail::message')
# your post was liked by {{ $liker->name }}



@component('mail::button', ['url' =>route('post',$post->id)])
view
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
