<table>
    <thead>
    <tr>
        <th>Kierowca imię</th>
        <th>Kierowca nazwisko</th>
        <th>Kierowca adres</th>
        <th>Kierowca seria nr dowodu osobistego</th>
        <th>Kierowca telefon</th>
        <th>Kierowca email</th>
        <th>Kierowca nr prawo jazdy</th>
        <th>Kierowca nr polisy OC</th>
        <th>Kierowca nr polisy NW</th>
        <th>Pilot imię</th>
        <th>Pilot nazwisko</th>
        <th>Pilot adres</th>
        <th>Pilot seria nr dowodu osobistego</th>
        <th>Pilot telefon</th>
        <th>Pilot email</th>
        <th>Pilot nr prawo jazdy</th>
        <th>Pilot nr polisy OC</th>
        <th>Pilot nr polisy NW</th>
        <th>Samochód</th>
        <th>Klasa</th>
    </tr>
    </thead>
    <tbody>
    @foreach($signs as $sign)
        <tr>
            <td>{{ $sign->name }}</td>
            <td>{{ $sign->lastname }}</td>
            <td>{{ $sign->address }}</td>
            <td>{{ $sign->id_card }}</td>
            <td>{{ $sign->phone }}</td>
            <td>{{ $sign->email }}</td>
            <td>{{ $sign->driving_license }}</td>
            <td>{{ $sign->oc }}</td>
            <td>{{ $sign->nw }}</td>
            <td>{{ $sign->pilot_name }}</td>
            <td>{{ $sign->pilot_lastname }}</td>
            <td>{{ $sign->pilot_address }}</td>
            <td>{{ $sign->pilot_id_card }}</td>
            <td>{{ $sign->pilot_phone }}</td>
            <td>{{ $sign->pilot_email }}</td>
            <td>{{ $sign->pilot_driving_license }}</td>
            <td>{{ $sign->pilot_oc }}</td>
            <td>{{ $sign->pilot_nw }}</td>
            <td>{{ $sign->marka }} {{ $sign->model }},nr rej: {{ $sign->nr_rej }}, rok: {{ $sign->rok }}, {{ $sign->ccm }}ccm, Turbo: {{ $sign->turbo }}</td>
            <td>{{ $sign->klasa }}</td>
        </tr>
    @endforeach
    </tbody>
</table>