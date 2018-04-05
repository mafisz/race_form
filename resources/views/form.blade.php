@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card border-0">
                <div class="card-header text-center bg-dark text-white rounded-0"><h3>Forumlarz zgłoszeniowy</h3></div>

                <div class="card-body py-2">
                    @include('messages')
                    
                    <form method="POST" action="{{ route('addMember') }}" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row">
                            <div class="col-sm-6 border-right p-4">
                                <h3 class="text-center font-weight-bold">Kierowca</h3>
                                
                                <div class="form-group">
                                    <label for="name">Imię <span class="text-danger">*</span></label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control" required> 
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="lastname">Nazwisko <span class="text-danger">*</span></label>
                                    <input type="text" name="lastname" value="{{ old('lastname') }}" class="form-control" required> 
                                    @if ($errors->has('lastname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="address">Adres <span class="text-danger">*</span></label>
                                    <textarea name="address" class="form-control" rows="2" required>{{ old('address') }}</textarea>
                                    @if ($errors->has('address'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="id_card">Seria nr dowodu osobistego <span class="text-danger">*</span></label>
                                    <input type="text" name="id_card" value="{{ old('id_card') }}" class="form-control" required> 
                                    @if ($errors->has('id_card'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('id_card') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="phone">Telefon <span class="text-danger">*</span></label>
                                    <input type="text" name="phone" value="{{ old('phone') }}" class="form-control" required> 
                                    @if ($errors->has('phone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" required> 
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="driving_license">Nr prawo jazdy<span class="text-danger">*</span></label>
                                    <input type="text" name="driving_license" value="{{ old('driving_license') }}" class="form-control" required> 
                                    @if ($errors->has('driving_license'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('driving_license') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="oc">Nazwa nr polisy OC<span class="text-danger">*</span></label>
                                    <input type="text" name="oc" value="{{ old('oc') }}" class="form-control" required> 
                                    @if ($errors->has('oc'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('oc') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="nw">Nazwa nr polisy NW</label>
                                    <input type="text" name="nw" value="{{ old('nw') }}" class="form-control"> 
                                    @if ($errors->has('nw'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('nw') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                            <div class="col-sm-6 border-left p-4">
                                <h3 class="text-center font-weight-bold">Pilot</h3>

                                <div class="form-group">
                                    <label for="pilot_name">Imię</label>
                                    <input type="text" name="pilot_name" value="{{ old('pilot_name') }}" class="form-control"> 
                                    @if ($errors->has('pilot_name'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_name') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_lastname">Nazwisko</label>
                                    <input type="text" name="pilot_lastname" value="{{ old('pilot_lastname') }}" class="form-control"> 
                                    @if ($errors->has('pilot_lastname'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_lastname') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_address">Adres</label>
                                    <textarea name="pilot_address" class="form-control" rows="2">{{ old('pilot_address') }}</textarea>
                                    @if ($errors->has('pilot_address'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_address') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_id_card">Seria nr dowodu osobistego</label>
                                    <input type="text" name="pilot_id_card" value="{{ old('pilot_id_card') }}" class="form-control"> 
                                    @if ($errors->has('pilot_id_card'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_id_card') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_phone">Telefon</label>
                                    <input type="text" name="pilot_phone" value="{{ old('pilot_phone') }}" class="form-control"> 
                                    @if ($errors->has('pilot_phone'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_phone') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_email">Email</label>
                                    <input type="email" name="pilot_email" value="{{ old('pilot_email') }}" class="form-control"> 
                                    @if ($errors->has('pilot_email'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_driving_license">Nr prawo jazdy</label>
                                    <input type="text" name="pilot_driving_license" value="{{ old('pilot_driving_license') }}" class="form-control"> 
                                    @if ($errors->has('pilot_driving_license'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_driving_license') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_oc">Nazwa nr polisy OC</label>
                                    <input type="text" name="pilot_oc" value="{{ old('pilot_oc') }}" class="form-control"> 
                                    @if ($errors->has('pilot_oc'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_oc') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label for="pilot_nw">Nazwa nr polisy NW</label>
                                    <input type="text" name="pilot_nw" value="{{ old('pilot_nw') }}" class="form-control"> 
                                    @if ($errors->has('pilot_nw'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('pilot_nw') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-12 border-top p-4">
                                <h3 class="text-center font-weight-bold">Samochód</h3>
                                
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="marka">Marka <span class="text-danger">*</span></label>
                                            <input type="text" name="marka" value="{{ old('marka') }}" class="form-control" required> 
                                            @if ($errors->has('marka'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('marka') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="model">Model <span class="text-danger">*</span></label>
                                            <input type="text" name="model" value="{{ old('model') }}" class="form-control" required> 
                                            @if ($errors->has('model'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('model') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-4">
                                        <div class="form-group">
                                            <label for="model">Turbo</label>
                                            <div class="form-check">
                                              <input class="form-check-input" type="checkbox" id="turbo" value="tak">
                                              <label class="form-check-label" for="turbo">Tak</label>
                                            </div>
                                            @if ($errors->has('turbo'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('turbo') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="nr_rej">Numer rejestracyjny <span class="text-danger">*</span></label>
                                            <input type="text" name="nr_rej" value="{{ old('nr_rej') }}" class="form-control" required> 
                                            @if ($errors->has('nr_rej'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('nr_rej') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="ccm">Pojemność ccm <span class="text-danger">*</span></label>
                                            <input type="text" name="ccm" value="{{ old('ccm') }}" class="form-control" required> 
                                            @if ($errors->has('ccm'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('ccm') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="rok">Rok produkcji <span class="text-danger">*</span></label>
                                            <input type="text" name="rok" value="{{ old('rok') }}" class="form-control" required> 
                                            @if ($errors->has('rok'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('rok') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="col-sm-3">
                                        <div class="form-group">
                                            <label for="klasa">Klasa <span class="text-danger">*</span></label>
                                            <select name="klasa" class="form-control" required>
                                              <option value="K1">K1</option>
                                              <option value="K2">K2</option>
                                              <option value="K3">K3</option>
                                              <option value="K4">K4</option>
                                              <option value="K5">K5 - Fiat 126p</option>
                                              <option value="K6">K6 - Cento</option>
                                              <option value="K7">K7 - RWD OPEN</option>
                                            </select>
                                            @if ($errors->has('klasa'))
                                                <span class="invalid-feedback">
                                                    <strong>{{ $errors->first('klasa') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-8 offset-md-2 text-center p-3">
                                <h3>NUMER KONTA DO WPŁATY</h3>
                                <h3 class="font-weight-bold">ING   92 1050 1070 1000 0091 2690 2668</h3>
                                <h3>W TYTULE PRZELEWU PROSZĘ PODAĆ IMIĘ I NAZWISKO KIEROWCY</h3>

                                <div class="form-group">
                                    <label for="payment">Potwierdzenie przelewu</label>
                                    <input type="file" name="payment" class="form-control"> 
                                    @if ($errors->has('payment'))
                                        <span class="invalid-feedback">
                                            <strong>{{ $errors->first('payment') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4 offset-md-4 text-center p-3">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" name="terms" id="terms" value="1" required>
                                  <label class="form-check-label" for="terms">Akceptuję regulamin rajdu <span class="text-danger">*</span></label>
                                </div>
                                @if ($errors->has('terms'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('terms') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-md-4 offset-md-4">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Zapisz się
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection