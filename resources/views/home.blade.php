@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <br><br><br>
                <img src="https://lh3.googleusercontent.com/fife/AAWUweUD4i8PIXo-hvInayArOGE7q6NbVS728SPuAZkBaoE6Jyh04S_Ry_saT9jIaMOSUsa8aiO8ZD1kBI9ueFOZa9XNszKAp54XbcrbLH_mQJfm4ytAy1PurT9MA-cjZiNRJS3zCzJbt7tf5OSN7JSLmS9tdaZm1GNEpuIMyFenomkMT03nGH3ICMMFNW6PiHFyHAO0e7OzVkH1d36uCItGIzUnLEsTBRGdusHENcBInXDgZ4YL4xPsjoKwXssPN98jeW8eCXKCXnJPWSnYmcH5DcBOYL-ZDowEJ_gidSuOLqBclvm-uKv7YRYkGfo_YtOz1lzEnFfgjpTzPDvN4Qn2eO6jZmzbp7pV--wz3v0JkfFUh9YxU2uP76JSd9AaUGUlp1uUKRZc3nnzbDc9oKPacNIstLYWuN43bqw6KpAaDNKbl74s2Jae682hs2SFnWnGtlR3DuGBPOZJXtcfj9RhvLKRu1fpmVqGlMIweI2ZuZBru8sz-0zx4EOYhwc5UjIv32SnctCDFbEeENTmyi4hRi-wJgf2e9SnAKsdf6MEer2pAXZhMVytgmNy_-3bnKNjSricfI583dYOoIP0hQoD0pcsNBk-VT8gmMLHfl3OHZW3SXBm3njRLtMjDv6uqDe0uFNoHW2jL5zWO5ktSPN60ZH4RyHOyMFj3wSW30x5I8EQ0oHFfT_776V83I_D72VR6OtJqaJOoP7VHFviXYU48ZKfhR_3h_fLVA8uIT77-KVIRonw7SfzXFsClvtpZIrrYRNTHLzCib6QfdYYXUi6ssuA73G3EYyeFHLJhXDpyIQ3H9xdwXDE2G8uBrLmeAbl-fuXs1fr-Q-6kk-76w=w1868-h903" alt="" width="600">
                <br><br><br>
            </div>

            <div class="col-6 text-center">
                <br><br><br><br>

                <h1 style="color: black" class="text-dark display-3 ">Bienvenido</h1>

                <h2 style="color: black" class="text-dark display-3 ">{{ $user->name }}</h2>


                <br>

                <h5 class="text-dark text-center">
                    Toma las riendas de tus finanzas.
                </h5>

                <br>

                <a href="{{ route('account', $user->id) }}" class="btn btn-success"> Ir a mis movimientos </a>

            </div>
        </div>
    </div>

@endsection
