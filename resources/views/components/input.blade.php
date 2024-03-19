<div class="my-2">


    @props(['titulo', 'type', 'name'])

    <label for="Email">{{ $titulo }}</label>
    <input type={{ $type }} name={{$name}} class="border border-yellow-600 rounded-lg px-3 py-1">
    @error($name)
    @enderror
    @error('email')
    <p>{{$message}}</p>
    @enderror
</div>
