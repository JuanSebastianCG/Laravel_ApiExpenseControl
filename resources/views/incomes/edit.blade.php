@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        {{-- Imagen de la derecha --}}
        <div class="col s4 text-center">
            <br><br><br>
            <img src="https://lh3.googleusercontent.com/fife/AAWUweXL2wki5T1bo0dU1Ltki2lle_fwNAz6JROnyExfmPnC_WhtCW6u8jHqI-KM74i0x4rvvD9c8m5bH6u2i1By5KycmUxR3d1Gjw_cVIUJACMKsp-AlDdN8hpO5S3rQn9MTWsPN9g_vjLsklc27df_ChYh1RF3Iu-_b32Ifqs0FO2lftG2YpxlXtJJN3WvuB_lWrBUbnxKM6ozIDeFqdOsy2WaYklSW57OE7zO4YLsmWpqZLwo_2pyY3Kwg3t3IYhu1zY5f2x1QhqDAEMRE8MCXIXlkHFfF5wSpDBT3364xSG5LHSXMhBEqsJN0zdpdnmW-h2Wc2G9tWfQJVzawgXmfV3oDqdZxoVPRwY89gRNr9jEpHb4xiW98oxBmQ_04kq-pQpVRhp6wR-rpzQinV27eA0tbq8x5i47RItgwUAiI5u2IkKFw9NohlOomBXv844kjYU4OUbmZvd8wUXBj9D0lqeyvSA150ayWYoJlGIziwRoi7JMs4oVnAQ2RhYjOITJy23CLPJN4v7AGGc9LqokQPenUHlPdG3wk0kbveqyw_NyIWc_pZFnT3Btqdi8fNrByYPiP8LY2oCESlToS15kK02w7VePDv3bQF-53Pag2cp7VqVOMF-GYcAyfqm_8kJRsClX_N4YfS_WUutn9i53RsAjrNklnKwghSpV0OTw9zdmLAZVeWD0IQCKI7zGW-YE_YAh6gevRaWtfb4IWYXRK-O6tFYpxbHFUiUbTcRLC2BtPHa4akotq240aKZw2vLOsKtsdE5wFVN8t_ZLwwpx3upv8la49l3HwgPKMmf4Qo3tighoUxHTf3yrdzqq6W0k2rOXYqtw4WofvNGHDA=w1555-h903" class="img-fluid rounded" alt="..." width="300px" height="200px">
        </div>

        {{-- Título --}}
        <div class="col s8">
            <br><br><br>
            <div class="row text-center">
                <h3 style="color: black" class="text-dark display-4 ">
                    Editar un ingreso.
                </h3>
            </div>

            <br>

            {{-- Form --}}
            {!! Form::model($income, ['method' => 'PUT', 'route' => ['incomes.update', $income -> id]]) !!}

            @include('expenses.subview-movements-fields')

            <center>
                <button type="submit" class="btn btn-success btn-lg">   Guardar cambios  </button>
            </center>

            {!! Form::close() !!}


        </div>

    </div>

    <br><br><br><br><br><br><br><br>
</div>
@endsection
