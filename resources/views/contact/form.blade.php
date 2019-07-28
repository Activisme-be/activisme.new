@extends ('layouts.frontend', ['title' => $title])

@section('content')
    @include ('_partials.jumbotron', [
        'title' => $title,
        'buttons' => true,
        'description' => 'Hebt u een vraag of opmerking? Aarzel dan niet om ons te contacteren. Doormiddel van het onderstaande formulier.'
    ])

    <div class="container pb-4" xmlns="http://www.w3.org/1999/html">
        <div class="row">
            <div class="col-8">
                 <form method="POST" action="{{ route('guest.contact.store') }}" class="card card-body shadow-sm border-0">
                     <h6 class="border-bottom border-gray pb-1 mb-3">Contact formulier</h6>

                     @csrf {{-- Form field protection --}}
                     @include ('flash::message') {{-- Flash session view partial --}}

                     <div class="form-row">
                         <div class="form-group col-md-7">
                            <label for="name" class="sr-only">Uw naam <span class="text-danger">*</span></label>
                            <input id="name" type="text" class="form-control @error('naam', 'is-invalid')" @input('naam') placeholder="Uw naam">
                            @error('naam')
                         </div>

                         <div class="form-group col-md-5">
                             <label for="telNummer" class="sr-only">Gsm nummer</label>
                             <input id="telNummer" type="text" class="form-control @error('telefoon_nummer', 'is-invalid')" @input('telefoon_nummer') placeholder="Telefoon nummer (optioneel)">
                         </div>

                         <div class="form-group col-md-12">
                             <label for="email" class="sr-only">Email adres <span class="text-danger">*</span></label>
                             <input id="email" type="email" class="form-control @error('email', 'is-invalid')" placeholder="Uw Email adres" @input('email')>
                             @error('email')
                         </div>
                     </div>

                     <hr class="mt-0">

                     <div class="form-row">
                         <div class="form-group col-12">
                             <label for="onderwerp" class="sr-only">Onderwerp <span class="text-danger">*</span></label>
                             <input id="onderwerp" type="text" class="form-control @error('onderwerp', 'is-invalid')" placeholder="Onderwerp van uw bericht" @input('onderwerp')>
                             @error('onderwerp')
                         </div>

                         <div class="form-group col-12">
                             <label for="bericht" class="sr-only">uw Bericht <span class="text-danger">*</span></label>
                             <textarea id="bericht" class="form-control @error('bericht', 'is-invalid')" rows="5" placeholder="Uw bericht" @input('bericht')>{{ old('bericht') }}</textarea>
                             @error('bericht')
                         </div>
                     </div>

                     <hr class="mt-0">

                     <div class="form-row">
                        <div class="mb-0 form-group col-12">
                            <button type="submit" class="btn btn-submit">
                                <i class="fe fe-send mr-1"></i> verzend
                            </button>

                            <button type="reset" class="btn btn-light">
                                <i class="fe text-danger fe-rotate-ccw mr-1"></i> reset
                            </button>
                        </div>
                     </div>
                 </form>
            </div>

            <div class="col-4">
                <div class="card shadow-sm">
                    <div class="card-header">
                        Contact gegevens
                    </div>

                    <div class="card-body">
                        <table class="table table-sm mb-0 table-borderless">
                            <tbody>
                                <tr>
                                    <td class="pl-0 pb-0"><i class="fe icon-contact fe-home"></i></td>
                                    <td>
                                        Zonnebeekseweg 343<br>
                                        8900 Ieper, België
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 pb-0"><i class="fe icon-contact fe-mail"></i></td>
                                    <td>
                                        <a href="mailto:contact@activisme.be" class="text-decoration-none">
                                            contact@activisme.be
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="pl-0 pb-0"><i class="fe icon-contact fe-smartphone"></i></td>
                                    <td>00/000.00.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
