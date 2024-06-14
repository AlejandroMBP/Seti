<section class="space-y-6">
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            Eliminar cuenta
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            Una vez que se elimine su cuenta, todos sus recursos y datos se eliminarán permanentemente. Antes de eliminar su cuenta, descargue cualquier dato o información que desee conservar.
        </p>
    </header>

    <form method="POST" action="{{route('profile.destroy', Auth::user()->id)}}" >
        {{-- @dump(Auth::user()->id) --}}
        @csrf
        @method('delete')
        <button type="submit" class="btn btn-primary btn-rounded btn-fw">
            Eliminar cuenta
        </button>
    </form>
</section>
